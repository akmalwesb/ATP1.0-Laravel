@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('vendor-style')
<!-- Vendor -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-auth.js')}}"></script>
@endsection

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Login jetstream -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-4 mt-2">
                        <a class="app-brand-link gap-2">
                        <img src="images/atp.png" alt="ATP" height="20">
                        </a>
                    </div>
                    <!-- /Logo -->
                    <form id="formAuthentication" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <x-jet-label for="email" class="form-label" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <x-jet-label class="form-label" for="password" value="{{ __('Password') }}" />
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    <small>Forgot Password</small>
                                </a>
                                @endif
                            </div>
                            <div><x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                            </div>

                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me">
                                <label for="remember_me" class="form-check-label">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100">
                                {{ __('Sign in') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Login jetstream -->
        </div>
    </div>
</div>
@endsection