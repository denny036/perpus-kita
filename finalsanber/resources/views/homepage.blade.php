<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>PerpusKita</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ secure_asset('templates/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ secure_asset('templates/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ secure_asset('templates/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ secure_asset('templates/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ secure_asset('templates/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="{{ secure_asset('templates/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ secure_asset('templates/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
               <div class="main">
                  <div class="logo"><a class="navbar-brand text-light font-weight-bold" href="#">PerpusKita</a></div>
                  <div class="menu_text">
                     <ul>
                        <div class="togle_">
                           <div class="menu_main">
                              <ul>
                                 <li><a href="#">Login</a></li>
                                 <li><a href="#">Register</a></li>
                              </ul>
                           </div>
                        </div>
                        <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="#">Home</a>
                              <a href="#">About</a>
                              <a href="#">Doctors</a>
                              <a href="#">News</a>
                           </div>
                        </div>
                        <span class="navbar-toggler-icon"></span>
                        <span onclick="openNav()"><img src="{{ secure_asset('templates/images/toogle-icon.png') }}" class="toggle_menu"></span>
                        <span onclick="openNav()"><img src="{{ secure_asset('templates/images/toogle-icon1.png') }}" class="toggle_menu_1"></span>
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
                                Buku adalah jendela dunia di mana kita bisa melihat isi dunia tanpa melakukan perjalanan, hanya cukup membaca sebuah halaman.
                              </p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_img"><img src="{{ secure_asset('templates/images/banner-img1.png') }}"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="container">
                              <h1 class="banner_taital">PerpusKita</h1>
                              <p class="banner_text">
                                Buku adalah jembatan ilmu untuk menghubungkan pengetahuan dengan kehidupan nyata.
                                MARI MEMBACA dengan #kita!
                            </p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_img"><img src="{{ secure_asset('templates/images/banner-reading1.png') }}"></div>
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
                           <div class="banner_img"><img src="{{ secure_asset('templates/images/banner-reading2.png') }}"></div>
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
      <!-- protect section start -->
      <div class="protect_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="protect_taital">PerpusKita</h1>
                  <p class="protect_text">
                      Aplikasi yang dibuat untuk memenuhi final-project Sanbercode
                      Laravel Development. <br>Sistem Informasi Perpustakaan &mdash; PerpusKita.
                  </p>
               </div>
            </div>
            <div class="protect_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="hands_text"><a href="#">Sistem Informasi<br>Perpustakaan</a></h1>
                     <h1 class="hands_text_2"><a href="#">Developed by <br>Kelompok 24</a></h1>
                     <h1 class="hands_text"><a href="#">Final Project<br>Sanbercode</a></h1>
                  </div>
                  <div class="col-md-6">
                     <div class="image_2"><img src="{{ secure_asset('templates/images/img-launch.png') }}"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- protect section end -->


      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">

                  <div class="carousel-item active">
                     <h1 class="news_taital">New Book</h1>
                     <p class="news_text">Mari membaca dengan #kita!</p>
                     <div class="news_section_2 layout_padding">
                        <div class="box_main">
                           <div class="image_1"><img src="{{ asset('templates/images/banner-reading1.png') }}"></div>
                           <h2 class="design_text">Coronavirus is Very dangerous</h2>
                           <p class="lorem_text">A</p>
                           <div class="read_btn"><a href="#">Read More</a></div>
                        </div>
                     </div>
                  </div>

               </div>

            </div>
            </div>
         </div>
      </div>
      <!-- news section end -->
      <!-- update section start -->
      <div class="update_section">
         <div class="container">
            <h1 class="update_taital">Get Every Update.... </h1>
            <form action="">
               <div class="form-group">
                   <textarea class="update_mail" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
               </div>
               <div class="subscribe_bt"><a href="#">Subscribe Now</a></div>
            </form>
         </div>
      </div>
      <!-- update section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Resources</h2>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="#">Media</a></li>
                           <li><a href="#">Travel Advice</a></li>
                           <li><a href="#">Protection</a></li>
                           <li><a href="#">Care</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">About</h2>
                     <p class="footer_text">
                        Aplikasi yang dibuat untuk memenuhi final-project Sanbercode
                        Laravel Development
                        &mdash; Kelompok 24
                    </p>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Contact Us</h2>
                     <div class="location_text">
                        <ul>
                           <li>
                              <a href="https://goo.gl/maps/VSdvGFQjbSVUC58F8"><i class="fa fa-map-marker" aria-hidden="true"></i>
                              <span class="padding_15">Indonesia</span></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                              <span class="padding_15">+628 (xxx-xxx)</span></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
                              <span class="padding_15">perpuskita@gmail.com</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">countrys</h2>
                     <div class="map_image"><img src="{{ asset('templates/images/map-bg.png') }}"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://html.design"> Free  html Templates</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('templates/js/jquery.min.js') }}"></script>
      <script src="{{ asset('templates/js/popper.min.js') }}"></script>
      <script src="{{ asset('templates/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('templates/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('templates/js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('templates/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('templates/js/custom.js') }}"></script>
      <!-- javascript -->
      <script src="{{ asset('templates/js/owl.carousel.js') }}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });

         $(".zoom").hover(function(){

         $(this).addClass('transition');
         }, function(){

         $(this).removeClass('transition');
         });
         });
      </script>
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script>
   </body>
</html>
