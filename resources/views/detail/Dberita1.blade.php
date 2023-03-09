@extends('master')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Detail Berita</h2>
                            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas
                                consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione
                                sint. Sit quaerat ipsum dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Detail Berita</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="blog-details">

                            <div class="post-img">
                                <img src="{{ url('/storage/layanan') }}/{{ $berita->gambar }}" alt=""
                                    class="img-fluid">
                            </div>

                            <h2 class="title">{{ $berita->judul }}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-details.html">{{ $berita->penulis }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-details.html"><time
                                                datetime="2020-01-01">{{ $berita->date }}</time></a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                {!! $berita->isi !!}

                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Business</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article><!-- End blog post -->

                        <div class="post-author d-flex align-items-center">
                            <img src="{{ asset('assets/img/blog/blog-author.jpg') }}" class="rounded-circle flex-shrink-0"
                                alt="">
                            <div>
                                <h4>{{ $berita->penulis }}</h4>
                                <div class="social-links">
                                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                                </div>

                            </div>
                        </div><!-- End post author -->
                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">
                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Recent Posts</h3>

                                <div class="mt-3">

                                    @foreach ($recent as $item)
                                        <div class="post-item mt-3">
                                            <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                            <div>
                                                <h4><a href="blog-details.html">{{ $item->judul }}</a></h4>
                                                <time datetime="2020-01-01">{{ $item->date }}</time>
                                            </div>
                                        </div><!-- End recent post item-->
                                    @endforeach

                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div><!-- End Blog Sidebar -->

                    </div>
                </div>

            </div>
        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->
@endsection
