    <!--header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <div class="main">
                <div class="logo"><a class="navbar-brand text-light font-weight-bold" href="{{ route('homepage') }}">PerpusKita</a></div>
                <div class="menu_text">
                    <ul>
                        <div class="togle_">
                            <div class="menu_main">
                                <ul>
                                    @guest
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    @else
                                    <ul id="dropdown1">
                                        <li class="list-group-item">
                                            <a data-target="dropdown1" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form')
                                                          .submit();">Logout</a>
                                        </li>
                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                        <div id="myNav" class="overlay">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="overlay-content">
                                <a href="#">Home</a>
                                @guest
                                    <a href="{{ route('home') }}">Koleksi Buku</a>
                                @else
                                    <a href="{{ route('home') }}">Koleksi Buku</a>
                                @endguest
                                <a href="#">About</a>
                            </div>
                        </div>
                        <span class="navbar-toggler-icon"></span>
                        <span onclick="openNav()"><img src="{{ asset('templates/images/toogle-icon.png') }}"
                                class="toggle_menu"></span>
                        <span onclick="openNav()"><img src="{{ asset('templates/images/toogle-icon1.png') }}"
                                class="toggle_menu_1"></span>
                    </ul>
                </div>
            </div>
        </div>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="container">
                                        <h1 class="banner_taital">PerpusKita</h1>
                                        <p class="banner_text">
                                            Buku adalah jendela dunia di mana kita bisa melihat isi dunia tanpa
                                            melakukan perjalanan, hanya cukup membaca sebuah halaman.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img"><img src="{{ asset('templates/images/banner-img1.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="container">
                                        <h1 class="banner_taital">PerpusKita</h1>
                                        <p class="banner_text">
                                            Buku adalah jembatan ilmu untuk menghubungkan pengetahuan dengan kehidupan
                                            nyata.
                                            MARI MEMBACA dengan #kita!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img"><img
                                            src="{{ asset('templates/images/banner-reading1.png') }}"></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="container">
                                        <h1 class="banner_taital">PerpusKita</h1>
                                        <p class="banner_text">
                                            Buku adalah jendela dunia. <br>
                                            Mari membaca dengan #kita. <br>
                                            Temukan bukumu di PerpusKita!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img"><img
                                            src="{{ asset('templates/images/banner-reading2.png') }}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
