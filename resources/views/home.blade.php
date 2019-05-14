
<html lang="en">
        <head>
          <meta charset="utf-8">
          <title>مركز الرياض الطبي </title>
          <meta content="width=device-width, initial-scale=1.0" name="viewport">
          <meta content="" name="keywords">
          <meta content="" name="description">
          <meta name="csrf-token" content="{{ csrf_token() }}">

          <!-- Favicons -->
          <link href="img/smalllogo.png" rel="icon">
          <link href="img/smalllogo.png" rel="apple-touch-icon">
          <!-- Bootstrap CSS File -->
          <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
          <link href="css/style1.css" rel="stylesheet">
          <link href="/css/fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->  <!-- Main Stylesheet File -->
          <script src="{{ asset('js/app.js') }}" defer></script>


        </head>

        <body>
            <header id="header">

                <div class="container">

                <nav class="main-nav float-right d-none d-lg-block">
                  <ul>


                          <li class="btn-trial">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('تسجيل الخروج ') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                            </li>


                  </ul>

                </nav><!-- .main-nav -->

              </div>
            </header>




            <section id="services" class="section-bg">
              <div class="container">

                <header class="section-header">
                  <h3> لوحة التحكم</h3>
                  <p>    {{ Auth::user()->name }} <span class="caret"></span>مرحبا </p>
                </header>

                <div class="row">

                      <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                      <div class="icon" style="background: #fff0da;"><i class="fas fa-hourglass-end"></i>
                      </div>
                      <h4 class="title"><a href="{{ url('admin') }}" > نظام الحجوزات </a></h4>
                      <p class="description">
                    </p>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                          <div class="icon" style="background: #e6fdfc;"><i class="fas fa-address-book"></i></div>
                          <h4 class="title"><a href="{{ url('jobs') }}"> بوابة الوظائف </a></h4>
                          <p class="description"></p>
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                            <div class="box">
                              <div class="icon" style="background: #e1eeff;"><i class="fas fa-envelope-open-text"></i></div>

                              <h4 class="title"><a href="{{ url('send') }}"> الرسائل   </a></h4>
                              <p class="description"></p>
                            </div>
                          </div>


                </div>

              </div>
            </section>



            <br>
            <br><br><br>
          <footer id="footer" class="section-bg">


                <div class="container">
                        <div class="copyright">
                        </div>
                        <div class="credits">

                          Designed by <a href="https://api.whatsapp.com/send?phone=966531437350&text=أنا عبدالعزيز العبدلي مبرمج ومطور ويب ">AB</a>
                        </div>
                      </div>
                    </footer><!-- #footer -->

          </footer>

          <!-- #footer -->

          <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
          <!-- Uncomment below i you want to use a preloader -->
          <!-- <div id="preloader"></div> -->

          <!-- JavaScript Libraries -->
          <script src="lib/jquery/jquery.min.js"></script>


          <script src="lib/jquery/jquery-migrate.min.js"></script>
          <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="lib/easing/easing.min.js"></script>
          <script src="lib/mobile-nav/mobile-nav.js"></script>
          <script src="lib/wow/wow.min.js"></script>
          <script src="lib/waypoints/waypoints.min.js"></script>
          <script src="lib/counterup/counterup.min.js"></script>
          <script src="lib/owlcarousel/owl.carousel.min.js"></script>
          <script src="lib/isotope/isotope.pkgd.min.js"></script>
          <script src="lib/lightbox/js/lightbox.min.js"></script>
          <!-- Contact Form JavaScript File -->
          <script src="contactform/contactform.js"></script>

          <!-- Template Main Javascript File -->
          <script src="js/main.js"></script>

          <script src="{{ asset('js/app.js') }}" defer></script>

        </body>
        </html>
