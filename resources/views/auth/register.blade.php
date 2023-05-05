@extends('layouts/blankLayout')

@section('title', 'Register')

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

            <!-- Register Form -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-4 mt-2">
                        <a class="app-brand-logo gap-2">
                            <img src="/assets/img/icons/brands/atp.png" alt="ATP" height="100">
                        </a>
                    </div>
                    <!-- /Logo -->
                    <x-slot name="logo">
                        <x-jet-authentication-card-logo />
                    </x-slot>

                    <x-jet-validation-errors class="mb-4" />

                    <form id="formAuthentication" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <x-jet-label for="name" class="form-label" value="{{ __('Name') }}" />
                            <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <div class="mb-3">
                            <x-jet-label for="email" class="form-label" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                        </div>

                        <div class="mb-3 form-password-toggle">
                            <x-jet-label class="form-label" for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        </div>

                        <div class="mb-3 form-password-toggle">
                            <x-jet-label class="form-label" for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms" />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                        @endif

                        <div class="flex items-center justify-end mt-4">
                            <button class="btn btn-primary d-grid w-100">
                                {{ __('Register') }}
                            </button>
                        </div>

                        <br>
                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Sign In instead') }}
                            </a>
                        </p>
                    </form>
                </div>
            </div>
            <!-- /Register Form -->
        </div>
    </div>
</div>
@endsection