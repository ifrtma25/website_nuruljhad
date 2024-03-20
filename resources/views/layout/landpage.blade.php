<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pesantren Darul Istiqamah | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('includes.landpage.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        @include('includes.landpage.navbar')

        @yield('header')

        @yield('content')

    </div>

    <footer class="site-footer bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-7">
                            <h2 class="footer-heading mb-4">About Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem modi, quaerat laborum id
                                fugit blanditiis
                                ratione delectus assumenda.</p>

                        </div>
                        <div class="col-md-4 ml-auto">
                            <h2 class="footer-heading mb-4">Features</h2>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 ml-auto">

                    <div class="mb-5">
                        <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
                        <form action="#" method="post" class="footer-suscribe-form">
                            <div class="input-group mb-3">
                                <input type="text"
                                    class="form-control rounded-0 border-secondary text-white bg-transparent"
                                    placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary text-white" type="button"
                                        id="button-addon2">Subscribe</button>
                                </div>
                            </div>
                    </div>


                    <h2 class="footer-heading mb-4">Follow Us</h2>
                    <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </form>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="pt-5">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy; 2024 Development by <a href="https://www.instagram.com/__ifrtma/"
                                target="_blank">__ifrtma</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    </div>

    <script src="{{ asset('assets/landpage/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/landpage/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/landpage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/landpage/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/landpage/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/landpage/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/landpage/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/landpage/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/landpage/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/landpage/js/aos.js') }}"></script>

    <script src="{{ asset('assets/landpage/js/main.js') }}"></script>

</body>

</html>
