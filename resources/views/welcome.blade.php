@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/half-slider.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/Footer-white.css') }}" rel="stylesheet" />
@endsection

@section('content')
<!-- <div class="container-fluid">
</div> -->

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('{{ asset('images/banner.jpg') }}')">
                <div class="carousel-caption ">
                    <h3 style="">{{ __('Admin Dashboard') }}</h3>
                    <!-- <h5>Admin Dashboard</h5> -->
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{ asset('images/1.jpeg') }}')">
                <div class="carousel-caption">
                    <h3>What do we do?</h3>
                    <p>We provide professional services for you.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{ asset('images/4.jpeg') }}')">
                <div class="carousel-caption">
                    <h3>Why use us?</h3>
                    <p>Our product are secure and efficient.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">{{ __('Previous') }}</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">{{ __('Next') }}</span>
        </a>
    </div>
</header>

<!-- Page Content -->
<section class="py-5">
    <div class="container">
        <span>
            <img src="http://via.placeholder.com/230x180" style="width: 230px; display: block; margin: 0 auto;" /></span>
        <br/>
        <h3 style="text-align: center; font-weight: bold;">{{ __('Admin Dashboard') }}</h3>
        <hr style="margin-top: 5px; margin-bottom: 5px;" />
    </div>
</section>

<footer id="myFooter">
    <div class="container">
        <ul>
            <li><a href="http://soalan-lazim">{{ __('FAQ') }}</a></li>
            <li><a href="http://dasar-privasi">{{ __('Privacy Policy') }}</a></li>
            <li><a href="http://terma-syarat">{{ __('Terms of service') }}</a></li>
        </ul>
        <p class="footer-copyright">© {{ date("Y") }} {{ __('Copyright') }} {{ config('app.name', 'Laravel') }}</p>
    </div>
    <div class="footer-social">
        <a href="https://www.facebook.com" class="social-icons"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com" class="social-icons"><i class="fab fa-twitter"></i></a>
    </div>
</footer>
@endsection