@extends('layouts.app')

@section('styles')
<style>
</style>
@endsection

@section('title', 'Profile')

@section('content')
<div class="content mx-5">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Edit Profile</h4>
                <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body">
                <form>
                <div class="row">
                    <div class="col-md-5">
                    <div class="form-group">
                        <label class="bmd-label-floating">Company (disabled)</label>
                        <input type="text" class="form-control" disabled>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                        <label class="bmd-label-floating">Username</label>
                        <input type="text" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Email address</label>
                            <input type="email" class="form-control">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user-md"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="With Font Awesome Icons">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">mail</i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="With Font Awesome Icons">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Fist Name</label>
                        <input type="text" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Last Name</label>
                        <input type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Adress</label>
                        <input type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">City</label>
                        <input type="text" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">Country</label>
                        <input type="text" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label class="bmd-label-floating">Postal Code</label>
                        <input type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label>About Me</label>
                        <div class="form-group">
                        <label class="bmd-label-floating">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, provident molestiae. Alias praesentium fugit facere rem! Dignissimos molestiae rem, maiores consequuntur enim ipsum placeat aperiam! Harum ipsa numquam provident saepe?
                        <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                <div class="clearfix"></div>
                </form>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-profile">
            <div class="card-avatar">
                <a href="#">
                <img class="img" src="https://placeimg.com/480/480/people" />
                </a>
            </div>
            <div class="card-body">
                <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                <h4 class="card-title">Alec Thompson</h4>
                <p class="card-description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum blanditiis maiores ratione quos ullam mollitia iure, tempore amet nam cupiditate nisi cum non sit rerum earum corrupti similique voluptas? Laborum?
                </p>
                <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
            </div>
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