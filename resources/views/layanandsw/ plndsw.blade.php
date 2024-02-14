<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layanan Pln DSW</title>
    @include('linkbootstrap.css')
</head>

<body>
    @include('sleacing.nav')
    <div class="container mb-5">
        <div class="path-link-beranda mt-5">
            <a href="/" class="text-decoration-none">Beranda ></a>
            <a href="/Layanan" class="text-decoration-none">Layanan DSW ></a>
            <a class="text-decoration-none text-dark">Layanan PLN DSW</a>
        </div>
        <div class="d-flex">
            <hr class="wdth-pndk-pls">
            <hr class="wdth-pndk-wrna">
        </div>
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide mt-5 container mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/05/05/Untitled-2151717102.jpg"
                    class="d-block rounded" style=" object-fit: contain; background-repeat: no-repeat; width: 100%; height: 400px; border-radius: 20px;" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="https://www.transformasi.org/images/kota_depok.jpg" class="d-block rounded" style=" object-fit: contain; background-repeat: no-repeat; width: 100%; height: 400px; border-radius: 20px;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://asset.kompas.com/crops/_NRrco8g6CTluqwWLyguXb4SRhg=/98x0:944x564/750x500/data/photo/2021/12/02/61a8d64decf69.jpg"
                class="d-block rounded" style=" object-fit: contain; background-repeat: no-repeat; width: 100%; height: 400px; border-radius: 20px;" alt="...">
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="mt-5">
            <h1 class="fw-bold fs-3">Layanan PLN di Wilayah Depok</h1>
            <ul class="mt-4">
                <li><p>Selamat datang di layanan PLN (Perusahaan Listrik Negara) di wilayah Depok, tempat di mana kebutuhan energi listrik Anda menjadi prioritas kami. PLN Depok bertujuan untuk memberikan pelayanan terbaik kepada masyarakat dengan menyediakan berbagai layanan yang mencakup pemasangan listrik, perbaikan gangguan, dan layanan pelanggan yang responsif.</p></li>
                <div class="row mt-5 mb-5">
                    <div class="col-xl-4">
                        <div class="shadow p-3 mb-5 bg-body rounded p-2" style="height: 250px;">
                            <h1 class="fs-5">1. Pemasangan Listrik:</h1>
                            <ul>
                                <li>
                                    <p>Anda dapat mengandalkan PLN Depok untuk kebutuhan pemasangan listrik di tempat tinggal, bisnis, atau proyek Anda. Tim profesional kami siap membantu Anda dalam proses pemasangan listrik dengan cepat dan efisien.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="shadow p-3 mb-5 bg-body rounded p-2" style="height: 250px;">
                            <h1 class="fs-5">2. Perbaikan Gangguan:</h1>
                            <ul>
                                <li>
                                    <p>Kami memahami bahwa gangguan listrik dapat terjadi tanpa pemberitahuan. PLN Depok memiliki tim teknisi yang siap bertindak cepat untuk memperbaiki gangguan listrik dan memastikan pasokan listrik kembali normal dalam waktu sesingkat mungkin.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="shadow p-3 mb-5 bg-body rounded p-2" style="height: 250px;">
                            <h1 class="fs-5">3. Layanan Pelanggan:</h1>
                            <ul>
                                <li>
                                    <p>Customer satisfaction adalah prioritas kami. Tim layanan pelanggan PLN Depok tersedia untuk membantu Anda dengan pertanyaan, keluhan, atau bantuan terkait layanan listrik. Hubungi kami melalui saluran komunikasi yang disediakan, dan kami dengan senang hati membantu Anda.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h1>Keunggulan Layanan PLN Depok:</h1>
                    <li class="mt-4">
                        <p>Teknologi Modern: Kami menggunakan teknologi terkini untuk memastikan kehandalan dan efisiensi layanan.</p>
                    </li>
                    <li>
                        <p>Responsif: Kami siap merespons setiap permintaan dengan cepat dan memberikan solusi yang tepat.</p>
                    </li>
                    <li>
                        <p>Keamanan: Keamanan pasokan listrik adalah prioritas kami untuk memastikan kenyamanan dan produktivitas pengguna listrik.</p>
                    </li>
                    <p>Dengan PLN Depok, Anda dapat yakin mendapatkan layanan listrik yang handal dan terpercaya. Hubungi kami untuk informasi lebih lanjut atau kunjungi kantor layanan kami di wilayah Depok.</p>
                </div>
                <p class="fw-bold">Contact Me :</p>
                <button class="btn btn-danger" onclick="PLNWEBSITE()"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 14 14"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M.5 3.494h13M12.5.5h-11a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-11a1 1 0 0 0-1-1"/></svg></button>
                <button class="btn btn-primary" onclick="PLNDEPOKINSTAGRAM()" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M12.001 9a3 3 0 1 0 0 6a3 3 0 0 0 0-6m0-2a5 5 0 1 1 0 10a5 5 0 0 1 0-10m6.5-.25a1.25 1.25 0 0 1-2.5 0a1.25 1.25 0 0 1 2.5 0M12.001 4c-2.474 0-2.878.007-4.029.058c-.784.037-1.31.142-1.798.332a2.886 2.886 0 0 0-1.08.703a2.89 2.89 0 0 0-.704 1.08c-.19.49-.295 1.015-.331 1.798C4.007 9.075 4 9.461 4 12c0 2.475.007 2.878.058 4.029c.037.783.142 1.31.331 1.797c.17.435.37.748.702 1.08c.337.336.65.537 1.08.703c.494.191 1.02.297 1.8.333C9.075 19.994 9.461 20 12 20c2.475 0 2.878-.007 4.029-.058c.782-.037 1.308-.142 1.797-.331a2.91 2.91 0 0 0 1.08-.703c.337-.336.538-.649.704-1.08c.19-.492.296-1.018.332-1.8c.052-1.103.058-1.49.058-4.028c0-2.474-.007-2.878-.058-4.029c-.037-.782-.143-1.31-.332-1.798a2.912 2.912 0 0 0-.703-1.08a2.884 2.884 0 0 0-1.08-.704c-.49-.19-1.016-.295-1.798-.331C14.926 4.006 14.54 4 12 4m0-2c2.717 0 3.056.01 4.123.06c1.064.05 1.79.217 2.427.465c.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428c.047 1.066.06 1.405.06 4.122c0 2.717-.01 3.056-.06 4.122c-.05 1.065-.218 1.79-.465 2.428a4.884 4.884 0 0 1-1.153 1.772a4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.427.465c-1.067.047-1.406.06-4.123.06c-2.717 0-3.056-.01-4.123-.06c-1.064-.05-1.789-.218-2.427-.465a4.89 4.89 0 0 1-1.772-1.153a4.905 4.905 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.012 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122c.05-1.065.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.637-.248 1.362-.415 2.427-.465C8.945 2.013 9.284 2 12.001 2"/></svg></button>
            </ul>
        </div>
    </div>
    @include('sleacing.footer')
    @include('linkbootstrap.js')
</body>

</html>
