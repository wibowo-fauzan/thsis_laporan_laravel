<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita & Artikel</title>
    @include('linkbootstrap.css')
</head>

<body>
    @include('sleacing.nav')

    <div class="container">
        <center>
            <div class="gairs-herizontal d-flex col-3 mt-5">
                <hr style="width: 100%; border: 2px solid black;">
                <hr style="width: 100%; border: 2px solid blue;">
                <hr style="width: 100%; border: 2px solid black;">
            </div>
            <h1 class="fw-bold">Berita DSW</h1>
        </center>
        <div class="path-link-beranda mt-5">
            <a href="/" class="text-decoration-none">Beranda ></a>
            <a class="text-decoration-none text-dark">Berita DSW</a>
        </div>

        <div class="blog mt-5">
            <div class="row mt-5">
                @foreach ($beritaArtikels as $beritaAtikel)
                    <div class="col-xl-4">
                        <div class="shadow p-3 mb-5 bg-body rounded p-2">
                            <a href="/berita/detail/{{ $beritaAtikel->id }}" class="image-link">
                                <img src="{{ asset('storage/' . $beritaAtikel->image) }}" alt="Logo" style="object-fit: cover; width: 100%; aspect-ratio: 1/1" class="hover-image agenda-image" data-id="{{ $beritaAtikel->id }}">
                            </a>
                            <p class="mt-4" style="width: 100%;"> <b>{{ $beritaAtikel->title }} || {{ $beritaAtikel->date }}</b> <br /></p>
                            <p>{{ Str::limit($beritaAtikel->description, 40) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('sleacing.footer')


    @include('linkbootstrap.js')
</body>

</html>
