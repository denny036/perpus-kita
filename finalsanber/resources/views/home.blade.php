<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>User &mdash; Pinjam Buku</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('user/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('user/vendors/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('user/vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('user/vendors/nice-select/css/nice-select.css') }}">
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
</head>

<body class="blog_version">
    <header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item"><a class="nav-link" href="{{ route('homepage') }}">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="#">About</a></li>
							<li class="nav-item">
                                <a data-target="dropdown1" class="nav-link"  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form')
                                              .submit();">Logout</a>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                            </li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Halaman Buku</h2>
                    <div class="page_link">
                        <a href="#">Home</a>
                        <a href="#">Pinjam Buku</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area section_gap_top">

        <div class="container">
            <h2 class="text-center">Koleksi Buku Terbaru</h2>
            <div class="row">
                @foreach ($books as $book)
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{ $book->getCover() }}" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#"><h5>{{ $book->title }}</h5></a>
                                <div class="border_line"></div>
                                <p>{{ Str::limit($book->description, 100) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->

    <!--================Blog Area =================-->

    <!--================Footer Area =================-->
	<footer class="footer_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="footer_top flex-column">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/logo.png" alt="">
                            </a>
                            <h4>Follow Me</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_bottom justify-content-center">
                <p class="col-lg-8 col-sm-12 footer-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('user/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('user/js/popper.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/js/stellar.js') }}"></script>
    <script src="{{ asset('user/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('user/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('user/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('user/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('user/js/mail-script.js') }}"></script>
    <script src="{{ asset('user/js/theme.js') }}"></script>
</body>
</html>
