@php
    $data = Auth::user();
@endphp
<!-- main header -->
<header class="main-header">
    <div class="header-top">
        <div class="top-inner clearfix">
            <div class="left-column pull-left">
                <ul class="info clearfix">
                    <li><i class="far fa-map-marker-alt"></i>Javalli Tudoor Thirthahalli Shimoga Karnataka</li>
                    <li><i class="far fa-phone"></i><a href="tel:9481187122">+91 9481187122</a></li>
                </ul>
            </div>
            <div class="right-column pull-right">
                <ul class="social-links clearfix">
                    <li><a href="https://www.facebook.com/abhi.bs.102/" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/abhibs97/" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/abhiram-b-s-502171208/" target="_blank"><i
                                class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/abhibs" target="_blank"><i class="fab fa-github"></i></a></li>
                    <li><a href="https://twitter.com/AbhiBS5" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="https://www.youtube.com/@abhiramjavalli5113" target="_blank"><i
                                class="fab fa-youtube"></i></a></li>
                    <li><a href="https://www.whatsapp.com/channel/0029VaAnCcBC6ZvjFzMucd0Q" target="_blank"><i
                                class="fab fa-whatsapp"></i></a></li>
                    <li><a href="mailto:abhirambs97@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a></li>
                </ul>

            </div>
        </div>
    </div>

    <!-- header-lower -->
    <div class="header-lower">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <!-- <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure> -->
                    <a href="{{ route('home') }}">
                        <h2>Task Project</h2>
                    </a>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->

                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">

                                {{-- @auth

                                    <li><a href="{{ route('user-profile') }}"><span>{{ $data->name }}</span></a></li>
                                @else
                                    <li><a href="{{ route('user-register') }}"><span>Register</span></a>
                                    </li>
                                    <li><a href="{{ route('user-login') }}"><span>Login</span></a></li>
                                @endauth --}}

                                @auth

                                    <li><a href="{{ route('user-profile') }}"><span>{{ $data->firstname }}</span></a></li>
                                @else
                                    <li><a href="{{ route('user-register') }}"><span>Register</span></a>
                                    </li>
                                    <li><a href="{{ route('user-login') }}"><span>Login</span></a></li>
                                @endauth

                            </ul>

                        </div>
                    </nav>
                </div>


            </div>
        </div>
    </div>


</header>
<!-- main-header end -->
