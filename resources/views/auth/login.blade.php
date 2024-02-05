@extends('app.layout')

@section('title','Login |')

@section('main')
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
        <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
                <h2 class="mb-0">Login</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
    </div>
</div>

<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Login</span>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control form-control-lg">
                            @error('email')
                                <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control form-control-lg">
                            @error('password')
                                <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection