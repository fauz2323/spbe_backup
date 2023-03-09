@extends('master')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Berita</h2>
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
                        <li>Berita</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 posts-list">

                    @foreach ($berita as $item)
                        <div class="col-xl-4 col-md-6">
                            <article>
                                <div class="post-img">
                                    <img src="assets/img/berita1.jpeg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Public</p>

                                <h2 class="title">
                                    <a href="{{ route('detail.berita', $item->slug) }}">{{ $item->judul }}</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/blog-author.jpg" alt=""
                                        class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author-list">{{ $item->penulis }}</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">{{ $item->date }}</time>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach

                    <!-- End post list item -->

                </div><!-- End blog posts list -->

                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div><!-- End blog pagination -->

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->
@endsection
