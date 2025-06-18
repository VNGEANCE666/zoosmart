@extends('layouts.main_layout')

@section('title', 'Animal & Zones')

@section('content')
<div class="hero animal-hero">
    <div class="hero-content">
        <h1>Animal & Zones</h1>
        <p>
            Discover various animals from around the world in our carefully designed habitat zones: African Savanna,
            Tropical Rainforest, Reptile House, and more!
        </p>
        <a href="{{ route('pengunjung.checkout-page') }}" class="get-ticket">Get Ticket</a>
    </div>
</div>

<div class="hewan-list" style="padding: 60px 100px; background-color: #f9f9f9;">
    <h2 style="font-size: 28px; color: #2E7D32; text-align: center; margin-bottom: 40px;">Meet Our Animals</h2>

    @if(count($hewans) > 0)
        <div class="hewan-grid" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
            @foreach ($hewans as $hewan)
                <div class="hewan-card" onclick="openModal(
                    '{{ $hewan->nama_hewan }}',
                    '{{ env('FILE_URL') . $hewan->gambar_hewan }}',
                    '{{ $hewan->spesies }}',
                    '{{ $hewan->habitat }}'
                )"
                style="cursor: pointer; width: 260px; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1); transition: transform 0.2s;">
                    <img src="{{ env('FILE_URL') . $hewan->gambar_hewan }}" alt="{{ $hewan->nama_hewan }}"
                        style="width: 100%; height: 180px; object-fit: cover;">
                    <div class="hewan-info" style="padding: 15px;">
                        <h3 style="color: #00695C; margin-bottom: 8px;">{{ $hewan->nama_hewan }}</h3>
                        <p style="margin: 4px 0;"><strong>Spesies:</strong> {{ $hewan->spesies }}</p>
                        <p style="margin: 4px 0;"><strong>Habitat:</strong> {{ $hewan->habitat }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="no-animals" style="text-align: center; color: #999; margin-top: 40px;">No animals found.</p>
    @endif
</div>

<!-- Modal -->
<div id="animalModal" class="modal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.7);">
    <div class="modal-content" style="background-color: #fff; margin: 60px auto; padding: 20px; border-radius: 10px; width: 80%; max-width: 500px; position: relative;">
        <span class="close" onclick="closeModal()" style="position: absolute; top: 15px; right: 20px; font-size: 28px; font-weight: bold; cursor: pointer;">&times;</span>
        <img id="modalImage" src="" alt="" style="width:100%; border-radius: 8px;">
        <h2 id="modalTitle" style="margin-top: 15px; color: #2E7D32;"></h2>
        <p><strong>Spesies:</strong> <span id="modalSpesies"></span></p>
        <p><strong>Habitat:</strong> <span id="modalHabitat"></span></p>
    </div>
</div>
@endsection

@section('scripts')
<script>
function openModal(title, image, spesies, habitat) {
    document.getElementById('modalTitle').innerText = title;
    document.getElementById('modalImage').src = image;
    document.getElementById('modalSpesies').innerText = spesies;
    document.getElementById('modalHabitat').innerText = habitat;
    document.getElementById('animalModal').style.display = "block";
}

function closeModal() {
    document.getElementById('animalModal').style.display = "none";
}

window.onclick = function(event) {
    var modal = document.getElementById('animalModal');
    if (event.target == modal) {
        closeModal();
    }
}
</script>
@endsection
