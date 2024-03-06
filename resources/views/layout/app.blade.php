<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Ikramnurjihad | @yield('title')</title>

    @include('includes.css')
    <!-- bootstrap core css -->

</head>

<body>
    <div class="hero_area">
        @include('includes.navbar')
        @yield('topic')
    </div>

    <!-- special section -->

    @yield('content')

    <!-- info section -->
    <section class="info_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info_menu">
                        <h5>
                            QUICK LINKS
                        </h5>
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html"> About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="event.html"> Events </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_course">
                        <h5>
                            Ikramnur Jihad
                        </h5>
                        <p>
                            There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by
                            injected humou.
                        </p>
                    </div>
                </div>

                <div class="col-md-5 offset-md-1">
                    <div class="info_news">
                        <h5>
                            CONTACT
                        </h5>
                        <div class="info_contact">
                            <a href="">
                                Jl. Yusuf Bauty NO. 27
                            </a>
                            <a href="">
                                ikramnur.jihad@gmail.com
                            </a>
                            <a href="">
                                Call : +62 852-3245-2351
                            </a>
                        </div>
                        <form action="">
                            <input type="text" placeholder="Enter Your email" />
                            <button>
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end info section -->

    <!-- footer section -->
    <footer class="container-fluid footer_section">
        <p>
            &copy; 2021 All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
        </p>

    </footer>


    <footer class="container-fluid footer_section">

        <p>
            Distributed By
            <a href="https://themewagon.com/">Themewagon</a>
        </p>

    </footer>

    <!-- footer section -->

    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>

</body>

</html>