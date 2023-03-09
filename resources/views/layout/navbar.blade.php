<!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a
                    href="mailto:contact@example.com">diskominfo@madiunkab.go.id</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>(0351) 462927</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://twitter.com/pemkab_madiun" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/kabupatenmadiun" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/pemkabmadiun/?hl=id" class="instagram"><i
                    class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/c/pemkabmadiun" class="youtube"><i class="bi bi-youtube"></i></i></a>
        </div>
    </div>
</section>
<div>
    <marquee direction="left" scrollamount="5" style='color:blue; font-weight:bold;'>Selamat Datang di Kabupaten Madiun
    </marquee>
</div>
<!-- End Top Bar -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="assets/img/favicon.png" alt="" width="47">
            <h1>KABUPATEN MADIUN</h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#"><span>Profil</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li>
                            <a href="{{ route('about') }}">Visi Misi</a>
                        </li>
                        <li>
                            <a href="/tugas">Tugas dan Fungsi</a>
                        </li>
                        <li>
                            <a href="/uker">Unit Kerja</a>
                        </li>
                        <li>
                            <a href="/peraturan">Peraturan SPBE</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('kebijakan.dashboard') }}">Kebijakan SPBE</a>
                </li>
                <li>
                    <a href="{{ route('tata-kelola') }}">Tata Kelola SPBE</a>
                </li>
                <li>
                    <a href="/manajemen">Manajemen SPBE</a>
                </li>
                {{-- <li class="dropdown">
			<a href="#"><span>Layanan</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
			<ul>
				<li>
					<a href="/administrasi">Administrasi</a>
				</li>
				<li>
					<a href="/public">Public</a>
				</li>
				<li class="dropdown">
					<a href="#"><span>Tata Kelola SPBE</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>
						<li>
							<a href="#">Kelembagaan</a>
						</li>
						<li>
							<a href="#">Strategi dan Perencanaan</a>
						</li>
						<li>
							<a href="#">Teknologi Informasi dan Komunikasi</a>
						</li>
					</ul>
				</li>
			</ul>
		</li> --}}
                <li>
                    <a href="/berita">Berita</a>
                </li>
                {{-- <li class="dropdown">
			<a href="#"><span>Drop Down</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
			<ul>
				<li>
					<a href="#">Drop Down 1</a>
				</li>
				<li class="dropdown">
					<a href="#"><span>Deep Drop Down</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>
						<li>
							<a href="#">Deep Drop Down 1</a>
						</li>
						<li>
							<a href="#">Deep Drop Down 2</a>
						</li>
						<li>
							<a href="#">Deep Drop Down 3</a>
						</li>
						<li>
							<a href="#">Deep Drop Down 4</a>
						</li>
						<li>
							<a href="#">Deep Drop Down 5</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Drop Down 2</a>
				</li>
				<li>
					<a href="#">Drop Down 3</a>
				</li>
				<li>
					<a href="#">Drop Down 4</a>
				</li>
			</ul>
		</li> --}}
            </ul>
        </nav>
        <!-- .navbar -->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>
<!-- End Header -->
