@extends('layout.main')
@section('title', 'Landing Page')
@section('content')
<section id="caraousel">
    <div class="caraousel">
        <div id="carouselExampleDark0" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark0" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark0" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark0" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ asset('asset\halaman-sekolah.jpg') }}" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('asset\ruang-kelas.jpg') }}" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="{{ asset('asset\depan-kelas.jpg') }}" class="d-block w-100" alt="...">

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark0"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark0"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<section id="psb">
    <div class="container p-5">
        <h1 class="text-uppercase text-center">informasi penerimaan siswa baru</h1>
        <div class="row mt-5">
            <div class=" col-md-3  mt-2  ">
                <a href="">
                    <div class="card card-psb">
                        <div class="card-body">
                            <h5 class="text-uppercase text-primary text-center ">daftar</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" col-md-3  mt-2  ">
                <a href="">
                    <div class="card card-psb">
                        <div class="card-body">
                            <h5 class="text-uppercase text-primary text-center ">brosur</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" col-md-3  mt-2  ">
                <a href="">
                    <div class="card card-psb">
                        <div class="card-body">
                            <h5 class="text-uppercase text-primary text-center ">informasi</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" col-md-3  mt-2  ">
                <a href="">
                    <div class="card card-psb">
                        <div class="card-body">
                            <h5 class="text-uppercase text-primary text-center ">akreditasi</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                <a href="">
                    <div class="card card-wa">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3 mt-4">
                                    <i class="fa-brands fa-whatsapp fs-1"></i>
                                </div>
                                <div class="col-9">
                                    <h5 class="text-uppercase text-primary text-center ">whatsapp center</h5>
                                    <p>penerimaan siswa baru</p>
                                    <p>087666123666</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="berita">
    <div class="container p-5">
        <h1 class="text-uppercase text-center">berita</h1>
        <div id="carouselExampleDark1" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item mb-5 active" data-bs-interval="10000">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\pemebelakan.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\kbm.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\upacara.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mb-5" data-bs-interval="2000">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\pemebelakan.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\kbm.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\upacara.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\pemebelakan.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\kbm.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\upacara.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark1"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark1"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<section id="galery">
    <div class="container p-5">
        <h1 class="text-uppercase text-center">our galery</h1>
        <div id="carouselExampleDark2" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item mb-5 active" data-bs-interval="10000">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\tkj.jpg') }}" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\lab-komputer.jpg') }}" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\labotaorium.jpg') }}" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mb-5" data-bs-interval="2000">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\tkj.jpg') }}" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\lab-komputer.jpg') }}" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\labotaorium.jpg') }}" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\tkj.jpg') }}" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\lab-komputer.jpg') }}" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('asset\labotaorium.jpg') }}" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark2"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark2"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<section id="pengumuman-agenda">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-6">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                pengumuman
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until
                                the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                beasiswa
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                                karir
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapsefour">
                                karir
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingfour">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables.
                                It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Agenda</h1>
                        <hr>
                        <h5 class="text-primary">20-20-2020</h5>
                        <p>penerimaan raport </p>
                        <hr>
                        <h5 class="text-primary">20-20-2020</h5>
                        <p>penerimaan raport </p>
                        <hr>
                        <h5 class="text-primary">20-20-2020</h5>
                        <p>penerimaan raport </p>
                        <hr>
                        <h5 class="text-primary">20-20-2020</h5>
                        <p>penerimaan raport </p>
                        <hr>
                        <h5 class="text-primary">20-20-2020</h5>
                        <p>penerimaan raport </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="profil-maps">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-uppercase text-center">video profil smkn 1</h2>

                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/UDJQEKKbcG4" title="YouTube video"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="text-uppercase text-center">lokasi SMKN 1</h2>
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="520" height="300" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=11&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://putlocker-is.org">putlocker</a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 100%;
                                width: 100%;
                            }
                        </style><a href="https://www.embedgooglemap.net">google embedded</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 100%;
                                width: 100%;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="footer">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('asset\logo.png') }}" width="150">
            </div>
            <div class="col-md-3">
                <h5 class="text-uppercase text-primary">smkn 1</h5>
                <p class="text-primary">KantorrPusat, Perumahan Dhaya Pesona,
                    Jl. Jombang Raya No.2, Jombang, Ciputat,
                    South Tangerang City, Banten 15414</p>
                <a href=""><i class="fa-brands fa-facebook fa-xl"></i></a>
                <a href=""><i class="fa-brands fa-instagram fa-xl"></i></a>
                <a href=""><i class="fa-brands fa-twitter fa-xl"></i></a>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>
                        <h5 class="text-primary">informasi sekolah</h5>
                    </li>
                    <li><a href="">Tentang Kami</a></li>
                    <li><a href="">Struktur kepengurusan</a></li>
                    <li><a href="">Laporan</a> </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>
                        <h5 class="text-primary">Berita & Info</h5>
                    </li>
                    <li><a href="">Berita</a> </li>
                    <li><a href="">Informasi Siswa Baru</a> </li>
                    <li><a href="">Edukasi</a> </li>
                    <li><a href="">Jurusan</a> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection