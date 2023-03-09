@extends('master')
@section('content')
    <!-- ======= Carousel ======= -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="assets/img/pemkab.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="assets/img/pemkab2.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- ======= End Carousel ======= -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Selamat Datang Di <span>Kabupaten Madiun</span></h2>
                    <p>
                        SPBE merupakan singkatan dari Sistem Pemerintahan Berbasis Elektronik, Sistem Pemerintahan Berbasis
                        Elektronik (SPBE) adalah penyelenggaraan pemerintahan yang memanfaatkan teknologi informasi dan
                        komunikasi untuk memberikan layanan kepada Pengguna SPBE. Hal ini seperti yang tertuang pada
                        Peraturan Presiden No. 95 Tahun 2018 tentang Sistem Pemerintahan Berbasis Elektronik. SPBE ditujukan
                        untuk untuk mewujudkan tata kelola pemerintahan yang bersih, efektif, transparan, dan akuntabel
                        serta pelayanan publik yang berkualitas dan terpercaya. Tata kelola dan manajemen sistem
                        pemerintahan berbasis elektronik secara nasional juga diperlukan untuk meningkatkan keterpaduan dan
                        efisiensi sistem pemerintahan berbasis elektronik.
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started">Mulai</a>
                        <a href="https://youtu.be/6RiArqhWLDw"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Tonton Video</span></a>
                    </div>
                </div>
                {{--
		<div class="col-lg-6 order-1 order-lg-2">
			<img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
		</div>
		 --}}
            </div>
        </div>
        <br>
    </section>
    {{-- LAYANAN --}}
    <section id="services" class="services sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Layanan</h2>
                <h4>Administrasi</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, ea, dignissimos est mollitia
                    perspiciatis fugit consequatur obcaecati ducimus debitis quisquam aut ad, ex consequuntur accusamus
                    voluptatum quod amet nulla laborum?
                </p>
            </div>
            <div class="mt-4">
                <div class="container">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        @foreach ($layanan as $item)
                            @if ($item->type == 'Administrasi')
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo-{{ $item->id }}"><button
                                            class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo-{{ $item->id }}" aria-expanded="false"
                                            aria-controls="flush-collapseTwo-{{ $item->id }}">{{ $item->layanan }}</button>
                                    </h2>


                                    <div id="flush-collapseTwo-{{ $item->id }}" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo-{{ $item->id }}"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            @foreach ($item->link as $item2)
                                                <a href="{{ $item2->link }}" target="_blank"><button type="button"
                                                        class="btn btn-light"><i
                                                            class="fa fa-globe">{{ $item2->name }}</i></button></a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        {{-- <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                    aria-expanded="false" aria-controls="flush-collapseTwo">Perencanaan dan
                                    penganggaran</button></h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <a href="https://madiunkab.sipd.kemendagri.go.id/daerah" target="_blank"><button
                                            type="button" class="btn btn-light"><i class="fa fa-globe"> Sistem Informasi
                                                Pemerintah Daerah</i></button></a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree"><button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree">E-Office</button></h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <a href="https://srikandi.arsip.go.id/" target="_blank"><button type="button"
                                            class="btn btn-light"><i class="fa fa-globe"> Srikandi</i></button></a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">Pengadaan Barang dan Jasa</button></h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <a href="https://lpse.madiunkab.go.id/eproc4" target="_blank"><button type="button"
                                            class="btn btn-light"><i class="fa fa-globe"> LPSE</i></button></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <br>
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Layanan</h2>
                    <h4>Public</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, ea, dignissimos est mollitia
                        perspiciatis fugit consequatur obcaecati ducimus debitis quisquam aut ad, ex consequuntur accusamus
                        voluptatum quod amet nulla laborum?
                    </p>
                </div>
                <div class="mt-4">
                    <div class="container">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            @foreach ($layanan as $item)
                                @if ($item->type == 'Public')
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo-{{ $item->id }}"><button
                                                class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseTwo-{{ $item->id }}"
                                                aria-expanded="false"
                                                aria-controls="flush-collapseTwo-{{ $item->id }}">{{ $item->layanan }}</button>
                                        </h2>


                                        <div id="flush-collapseTwo-{{ $item->id }}" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingTwo-{{ $item->id }}"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                @foreach ($item->link as $item2)
                                                    <a href="{{ $item2->link }}" target="_blank"><button type="button"
                                                            class="btn btn-light"><i
                                                                class="fa fa-globe">{{ $item2->name }}</i></button></a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- END LAYANAN --}}
    <br>
    <!-- End Hero Section -->
    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>Sambutan</h3>
                        <img src="assets/img/pemkab.png" class="img-fluid rounded-4 mb-4" alt="">
                        <p>
                            Puji syukur kita panjatkan kehadirat Allah SWT yang telah melimpahkan rahmat dan hidayahnya,
                            sehingga Pemerintah Kabupaten Madiun bisa mewujudkan portal / website SPBE Kabupaten Madiun.
                            Launching portal ini sekaligus menandai Kick Off Akselerasi Implementasi SPBE (Sistem
                            Pemerintahan Berbasis Elektronik) Kabupaten Madiun. SPBE di era sekarang ini bukan sesuatu
                            pilihan tetapi merupakan keharusan yang dilakukan Pemerintahan. Apalagi dalam tatanan normal
                            baru / New Normal, ASN seeperti disampaikan MENPANRB harus dapat menerapkan flexible working
                            arrangement atau sistem kerja fleksibel. Fleksibilitas ini memungkinkan ASN bisa melaksanakan
                            tugas di kantor maupun di rumah dan sistem kerja tersebut memerlukan dukungan TIK yang memadai
                            agar roda pemerintahan dan pelayanan publik tetap berjalan dengan baik. Selain hal tersebut di
                            masa pandemi Covid 19 pemanfaatan TIK terus meningkat sebagai upaya mengurangi pertemuan dan
                            kerumunan, sehingga memaksa kita untuk mau tidak mau harus menyesuaikan dengan kondisi dimana
                            kultur atau budaya penggunaan digital /TIK.
                        </p>
                        <p>
                            Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo
                            officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut
                            repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis
                            beatae neque deleniti repellendus.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <h3>SISTEM PEMERINTAH BERBASIS ELEKTRONIK - SPBE</h3>
                            <p class="fst-italic">
                                Dasar penyusunan SPBE dengan memperhatikan komparasi peraturan PermenPanRB Nomor 5 Tahun
                                2018 dengan PermenPanRB Nomor 59 Tahun 2020
                            </p>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                occaecat cupidatat non proident
                            </p>
                            <div align="center">
                                <img src="assets/img/pakbup.jpeg" class="img-fluid rounded-4" alt=""
                                    width="300px">
                                {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <a href="https://www.lapor.go.id/" target="_blank"><img src="assets/img/clients/lapor.jpeg"
                                    class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://lpse.madiunkab.go.id/eproc4" target="_blank"><img
                                    src="assets/img/clients/lpse.jpeg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://lpplpuroboyofmcaruban.blogspot.com/" target="_blank"><img
                                    src="assets/img/clients/LOGO-1-GIF.gif" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.kominfo.go.id/" target="_blank"><img
                                    src="assets/img/clients/client-9.png" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Progres Perkembangan SPBE</h2>
                    <h4>Perkembangan terkini</h4>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <img src="assets/img/progresspbe2019.png" alt="" width="330">
                            <br>
                            <br>
                            {{--
					<div class="icon">
						<i class="bi bi-bounding-box-circles"></i>
					</div>
					 --}}
                            <h3>Indeks SPBE Pemerintah Kabupten Madiun 2019</h3>
                            <p>
                                Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit
                                provident adipisci neque.
                            </p>
                            <a href="detailProgres" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <img src="assets/img/spbe2020.png" alt="" width="330">
                            <br>
                            <br>
                            {{--
					<div class="icon">
						<i class="bi bi-bounding-box-circles"></i>
					</div>
					 --}}
                            <h3>Indeks SPBE Pemerintah Kabupten Madiun 2020</h3>
                            <p>
                                Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed
                                animi at autem alias eius labore.
                            </p>
                            <a href="/detailProgres2" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-bounding-box-circles"></i>
                            </div>
                            <h3>Indeks SPBE Pemerintah Kabupten Madiun 2022</h3>
                            <p>
                                Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                                Corrupti recusandae ducimus enim.
                            </p>
                            <a href="#" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- End Pricing Section -->
        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="content px-xl-5">
                            <h3>Informasi SPBE <strong>Tahapan Evaluasi SPBE</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <span class="num">1.</span>
                                        Persiapan </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Penyusunan, Perencanaan, Pembentukan Tim Asesor, Sosialisasi, dan Pedoman pemantauan
                                        dan evaluasi SPBE.
                                    </div>
                                </div>
                            </div>
                            <!-- # Faq item-->
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <span class="num">2.</span>
                                        Pelaksanaan </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Penilaian mandiri, Penilaian dokumen, Penilaian interviu, dan Penilaian visitasi
                                        (jika diperlukan).
                                    </div>
                                </div>
                            </div>
                            <!-- # Faq item-->
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <span class="num">3.</span>
                                        Pelaporan </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Indeks SPBE, Indeks Domain, Indeks Aspek, Nilai Indikator, dan Rekomendasi
                                        perbaikan.
                                    </div>
                                </div>
                            </div>
                            <!-- # Faq item-->
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <span class="num">4.</span>
                                        Indeks SPBE Pemerintah Kabupaten Madiun </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        2019 = 3.01 (Baik), 2021 = 2.48 (Cukup), 2022 = 3.31 (Baik)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    @endsection
