<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="loginForm/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="loginForm/css/style.css">

</head>
@extends('layouts.app')
@section('content')

<div class="main">
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="loginForm/images/image1.JPEG" alt="sing up image"></figure>
                    <a href="{{ route ('registration') }}" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Log In</h2>
                    <form method="POST" action="{{route('success')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div>
                                @error('email')
                                <h6 class="text-danger">{{$message}}</h6>
                                @enderror
                            </div>
                            <label for="email"></label>
                            <h6 class="mb-0 text-sm">Email Address</h6>
                            <input type="email" name="email" id="email" placeholder="Enter a Valid Email Address"/>
                        </div>
                        <div class="form-group">
                            <div>
                                @error('password')
                                <h6 class="text-danger">{{$message}}</h6>
                                @enderror
                            </div>
                            <label for="your_pass"></label>
                            <h6 class="mb-0 text-sm">Enter Password</h6>
                            <input type="password" name="your_pass" id="your_pass" placeholder="Your Password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

</html>