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
        <section class="home_banner_area">
            <div class="container box_1620">
                <div class="banner_inner d-flex align-items-center">
                    <div class="banner_content">
                        <div class="media">
                            <div class="d-flex">
                                <img src="{{asset('templete/img/personal.png')}}" alt="">
                            </div>
                            <div class="media-body">
                                <div class="personal_text">
                                    <h6>Hello Everybody, i am</h6>
                                    <h3>Idzaa Piliawan Pribadi</h3>
                                    <h4>Mahasiswa at Universitas Stikubank Semarang</h4>
                                    <p>“There are two ways to write error-free programs; only the third one works.” </p>
                                    <ul class="list basic_info">
                                        <li><a href="#"><i class="lnr lnr-users"></i> 19.01.53.0137</a></li>
                                        <li><a href="#"><i class="lnr lnr-calendar-full"></i> 06 Juni, 1999</a></li>
                                        <li><a href="#"><i class="lnr lnr-phone-handset"></i> 081 228 341 866</a></li>
                                        <li><a href="#"><i class="lnr lnr-envelope"></i> idzaapiliawan123@gmail.com</a></li>
                                        <li><a href="#"><i class="lnr lnr-home"></i>Kembangarum, Semarang Barat</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
       
        <!--================My Tabs Area =================-->
        <section class="mytabs_area p_120">
            <div class="container">
                <div class="tabs_inner">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Experiences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Education</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <ul class="list">
                                <li>
                                    <span></span>
                                    <div class="media">
                                        <div class="d-flex">
                                            <p>June 2017 to present</p>
                                        </div>
                                        <div class="media-body">
                                            <h4>Assitant</h4>
                                            <p>Junior Assistant<br/>CV Napoclean Indonesia</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span></span>
                                    <div class="media">
                                        <div class="d-flex">
                                            <p>June 2018 to present</p>
                                        </div>
                                        <div class="media-body">
                                            <h4>Advertisment</h4>
                                            <p>Head of Advertising<br />CV Napoclean Indonesia</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <ul class="list">
                                <li>
                                    <span></span>
                                    <div class="media">
                                        <div class="d-flex">
                                            <p>June 2015 to present</p>
                                        </div>
                                        <div class="media-body">
                                            <h4>Student</h4>
                                            <p>Rekayasa Perangkat Lunak<br />SMK Negeri 8 Semarang</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span></span>
                                    <div class="media">
                                        <div class="d-flex">
                                            <p>June 2019 to present</p>
                                        </div>
                                        <div class="media-body">
                                            <h4>Student</h4>
                                            <p>Teknik Informatika (S1)<br />Universitas Stikubank Semarang</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
             
        </section>
        <!--================End My Tabs Area =================-->
        
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