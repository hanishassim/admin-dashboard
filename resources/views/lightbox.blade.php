@extends('layouts.app')

@section('styles')
<style>
</style>
@endsection

@section('title', 'Lightbox')

@section('content')
<div class='content mx-5'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 pb-3">
                <a href="https://farm9.staticflickr.com/8642/16455005578_0fdfc6c3da_b.jpg" data-lity data-lity-desc="Photo of a flower" class="btn btn-danger">Image</a>
                <a href="#inline" data-lity class="btn btn-warning">Inline</a>
                <a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity class="btn btn-default">iFrame Youtube</a>
                <a href="//vimeo.com/1084537" data-lity class="btn btn-info">iFrame Vimeo</a>
                <a href="//maps.google.com/maps?q=1600+Amphitheatre+Parkway,+Mountain+View,+CA" data-lity class="btn btn-success">Google Maps</a>

                <div id="inline" style="background:#fff" class="lity-hide">
                    Inline content
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
</script>
@endsection