@extends('layouts.app')

@section('styles')
<!-- <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" /> -->
<style>
</style>
@endsection

@section('title', 'Carousel')

@section('content')
<div class='content mx-5'>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="owl-carousel owl-theme">
                    <picture>
                        <source class="owl-lazy" media="(min-width: 650px)" data-srcset="https://placehold.it/350x250&text=3-large">
                        <source class="owl-lazy" media="(min-width: 350px)" data-srcset="https://placehold.it/350x250&text=3-medium">
                        <img class="owl-lazy" data-src="https://placehold.it/350x250&text=3-fallback" alt="">
                    </picture>
                    <div> Your Content 1</div>
                    <div> Your Content 2</div>
                    <div> Your Content 3</div>
                    <div> Your Content 4</div>
                    <div> Your Content 5</div>
                    <div> Your Content 6</div>
                    <div> Your Content 7</div>
                    <img class="owl-lazy" data-src="http://via.placeholder.com/350x150" data-src-retina="http://via.placeholder.com/350x150" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script> -->
<script>
    var owl = $('.owl-carousel');

    $(document).ready(function() {
        owl.owlCarousel({
            center: true,
            items:4,
            loop:false,
            center:true,
            margin:10,
            // URLhashListener:true,
            // autoplayHoverPause:true,
            lazyLoad: true,
            // startPosition: 'URLHash',
            //Setup responsive
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:false
                }
            },
            nav:true
        });
    });

    // owl.carousel Mousewheel
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY>0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
</script>
@endsection