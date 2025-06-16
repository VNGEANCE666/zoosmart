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

<div class="hewan-list">
    <h2>Meet Our Animals</h2>

    @if(count($hewans) > 0)
        <div class="hewan-grid">
            @foreach ($hewans as $hewan)
                <div class="hewan-card" onclick="openModal(
                    '{{ $hewan->nama_hewan }}',
                    '{{ env('FILE_URL') . $hewan->gambar_hewan }}',
                    '{{ $hewan->spesies }}',
                    '{{ $hewan->habitat }}'
                )">
                    <img src="{{ env('FILE_URL') . $hewan->gambar_hewan }}" alt="{{ $hewan->nama_hewan }}">
                    <div class="hewan-info">
                        <h3>{{ $hewan->nama_hewan }}</h3>
                        <p><strong>Spesies:</strong> {{ $hewan->spesies }}</p>
                        <p><strong>Habitat:</strong> {{ $hewan->habitat }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="no-animals">No animals found.</p>
    @endif
</div>

<!-- Modal -->
<div id="animalModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <img id="modalImage" src="" alt="" style="width:100%; border-radius: 8px;">
        <h2 id="modalTitle" style="margin-top: 15px;"></h2>
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
