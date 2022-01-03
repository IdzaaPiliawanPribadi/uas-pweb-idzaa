<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('templete/img/favicon.png')}}" type="image/png">
        <title>AllProg</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('templete/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('templete/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('templete/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('templete/vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('templete/vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{asset('templete/vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('templete/templete/vendors/animate-css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('templete/templete/templete/vendors/popup/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('templete/vendors/flaticon/flaticon.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('templete/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('templete/css/responsive.css')}}">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container box_1620">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('templete/img/logo.png')}}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('me')}}">About Me</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('unisbank')}}">About Unisbank</a></li> 
                            </ul>
                        </div> 
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
         <!--================Home Banner Area =================-->
        <section class="home_banner_area blog_banner">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="blog_b_text text-center">
                        <h2>Welcome<br /> to My Website</h2>
                        <p>“There are two ways to write error-free programs; only the third one works.” </p>
                        <a class="white_bg_btn" href="{{url('me')}}">About Me</a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
            <div class="container">
                <div class="row footer_inner">
                    <div class="col-lg-5 col-sm-6">
                        <aside class="f_widget ab_widget">
                            <div class="f_title">
                                <h3>About Me</h3>
                            </div>
                            <p>“There are two ways to write error-free programs; only the third one works.”</p>
                        </aside>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <aside class="f_widget news_widget">
                            <div class="f_title">
                                <h3>Newsletter</h3>
                            </div>
                            <p>Stay updated with our latest trends</p>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>      
                                    </div>              
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('templete/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('templete/js/popper.js')}}"></script>
        <script src="{{asset('templete/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('templete/js/stellar.js')}}"></script>
        <script src="{{asset('templete/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('templete/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('templete/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('templete/vendors/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('templete/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('templete/vendors/popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('templete/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('templete/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('templete/vendors/counter-up/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('templete/js/mail-script.js')}}"></script>
        <script src="{{asset('templete/js/theme.js')}}"></script>
    </body>
</html>