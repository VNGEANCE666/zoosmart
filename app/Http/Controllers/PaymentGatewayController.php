<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\Pengunjung;
use App\Models\Product;
use App\Models\Tiket;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Midtrans\Config;
use Midtrans\Snap;

class PaymentGatewayController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function checkout(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'nama_pengunjung' => 'required|string',
            'tiket_id' => 'required|int'
        ]);

        
        $tiket = Tiket::find($validatedData['tiket_id']);
        if ($tiket->is_used == true) {
            return;
        }

        $pengunjung = new Pengunjung();
        $pengunjung->email = $validatedData['email'];
        $pengunjung->nama_pengunjung = $validatedData['nama_pengunjung'];
        $pengunjung->save();

        $order_id = 'order-' . time();

        $pembelian = new Pembelian();
        $pembelian->order_id = $order_id;
        $pembelian->id_tiket = $tiket->id;
        $pembelian->id_pengunjung = $pengunjung->id;
        $pembelian->tanggal_pembelian = now();
        $pembelian->status_transaksi = 'pending';
        $pembelian->save();

        $params = [
            'transaction_details' => [
                'order_id' => $order_id,
                'gross_amount' => $tiket->harga,
            ],
        ];

        try {
            $transaction = Snap::createTransaction($params);
            return redirect()->away($transaction->redirect_url);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Checkout failed', 'error' => $e->getMessage()], 500);
        }

        return response()->json(['message' => 'Checkout successful']);
    }

    public function notification_url(Request $request)
    {
        $pembelian = Pembelian::where('order_id', $request->order_id)->first();
        $pembelian->status = $request->transaction_status;
        $pembelian->save();

        return response()->json($pembelian);
    }
}
