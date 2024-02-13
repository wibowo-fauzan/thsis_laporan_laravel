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
            <a class="text-decoration-none text-dark">Berita</a>
        </div>

        <div class="blog mt-5">
            <div class="row">
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="image-container shadow p-3 mb-5 bg-body rounded p-2" style="width: 100%; position: relative; overflow: hidden;">
                                <img class="rounded hover-image" style="object-fit: cover; aspect-ratio: 1/1; width: 100%;" src="https://pa1.aminoapps.com/8050/79fe45e46066e36de38cdb3aabbef55fd69db737r1-425-498_hq.gif" alt="" />
                                <div class="overlay">
                                    <button class="btn btn-primary text-white">Click me</button>
                                </div>
                                <p class="mt-3"> <b>Jhon Due | 20-08-2022</b> <br /> Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit Soluta accusantium praesentium ducimus
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="image-container shadow p-3 mb-5 bg-body rounded p-2"
                                style="width: 100%; position: relative; overflow: hidden;">
                                <img class="rounded hover-image" style="object-fit: cover; aspect-ratio: 1/1; width: 100%;"
                                    src="https://pa1.aminoapps.com/8050/79fe45e46066e36de38cdb3aabbef55fd69db737r1-425-498_hq.gif"
                                    alt="" />
                                <div class="overlay">
                                    <button class="btn btn-primary text-white">Click me</button>
                                </div>
                                <p class="mt-3"> <b>Jhon Due | 20-08-2022</b> <br /> Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit Soluta accusantium praesentium ducimus
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="image-container shadow p-3 mb-5 bg-body rounded p-2"
                                style="width: 100%; position: relative; overflow: hidden;">
                                <img class="rounded hover-image" style="object-fit: cover; aspect-ratio: 1/1; width: 100%;"
                                    src="https://pa1.aminoapps.com/8050/79fe45e46066e36de38cdb3aabbef55fd69db737r1-425-498_hq.gif"
                                    alt="" />
                                <div class="overlay">
                                    <button class="btn btn-primary text-white">Click me</button>
                                </div>
                                <p class="mt-3"> <b>Jhon Due | 20-08-2022</b> <br /> Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit Soluta accusantium praesentium ducimus
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="image-container shadow p-3 mb-5 bg-body rounded p-2"
                                style="width: 100%; position: relative; overflow: hidden;">
                                <img class="rounded hover-image" style="object-fit: cover; aspect-ratio: 1/1; width: 100%;"
                                    src="https://pa1.aminoapps.com/8050/79fe45e46066e36de38cdb3aabbef55fd69db737r1-425-498_hq.gif"
                                    alt="" />
                                <div class="overlay">
                                    <button class="btn btn-primary text-white">Click me</button>
                                </div>
                                <p class="mt-3"> <b>Jhon Due | 20-08-2022</b> <br /> Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit Soluta accusantium praesentium ducimus
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 p-3 rounded" style="background-color: wheat; height: 100%;">
                    <center>
                        <div class="card mb-3" style="max-width: 380px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://www.braywickcourtschool.co.uk/wp-content/uploads/2019/02/41026708-example-white-stamp-text-on-red-backgroud.jpg"
                                        class="img-fluid rounded-start hover-image" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-start">Card title</h5>
                                        <p class="card-text text-start">This is a wider...</p>
                                        <p class="card-text text-start"><small class="text-muted">Last updated 3 mins
                                                ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

    @include('sleacing.footer')


    @include('linkbootstrap.js')
</body>

</html>
