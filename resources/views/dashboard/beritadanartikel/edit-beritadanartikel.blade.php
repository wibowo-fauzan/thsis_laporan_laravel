<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit - Berita & Artikel</title>
    @include('linkbootstrap.css')
</head>

<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('storage/' . $beritaAtikel->image) }}" width="500px" class="img-fluid" alt="Berita & Artikel Image">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="path-link-beranda mt-5">
            <a href="/dashboard/beritadanartikel" class="text-decoration-none">Dashbord Data Berita & Artikel ></a>
            <a class="text-decoration-none text-dark">Edit - Data Berita & Artikel</a>
        </div>
        <div class="d-flex">
            <hr class="wdth-pndk-pls">
            <hr class="wdth-pndk-wrna">
        </div>
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card-body">
                <h1>Create Berita & Artikel</h1>
                <div class="p-2">
                    <form action="{{ route('beritadanartikel.update', ['beritaAtikel' => $beritaAtikel->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Berita & Artikel</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $beritaAtikel->title }}"
                                required>
                            <div id="title" class="form-text">Isi Dengan Judul Berita & Artikel Depok</div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Berita & Artikel</label>
                            <textarea class="form-control" id="description"
                                name="description">{{ $beritaAtikel->description }}</textarea>
                            <div id="description" class="form-text">Isi Dengan Deskripsi Berita & Artikel Depok</div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Berita & Artikel</label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*"
                                aria-describedby="image">
                            <div id="image" class="form-text">Isi Dengan Image/Gambar Berita & Artikel Depok</div>

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Riwayat Gambar
                            </button>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date Berita & Artikel</label>
                            <input type="date" name="date" id="date" class="form-control" value="{{ $beritaAtikel->date }}"
                                accept="date/*" aria-describedby="date">
                            <div id="date" class="form-text">Isi Dengan Date Update Berita & Artikel Depok</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('linkbootstrap.js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
