@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Register</h2>
                </div>

                <div class="card-body">
                    <form method="POST" id="register" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                @if (Route::has('login'))
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Already have an account?') }}
                                </a>
                            @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- 
        <!-- validation link -->
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
       <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
       <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
       <script>
    
        $.validator.addMethod("containsUppercase", function(value) {
      return /[A-Z]/.test(value);
    }, "Your password must contain at least one uppercase letter.");
    
    $.validator.addMethod("containsLowercase", function(value) {
      return /[a-z]/.test(value);
    }, "Your password must contain at least one lowercase letter.");
    
    $.validator.addMethod("containsNumber", function(value) {
      return /\d/.test(value);
    }, "Your password must contain at least one number.");
    
    $.validator.addMethod("containsSpecialChar", function(value) {
      return /[!@#$%^&*]/.test(value);
    }, "Your password must contain at least one special character.");
    
    $.validator.addMethod("minLength", function(value) {
      return value.length >= 8;
    }, "Your password must be at least 8 characters long.");
    
    
      $('#register').validate({
        rules: {
          name: {
            required: true
          },
          email: {
            required: true,
            email: true
          },
          password: {
            required: true,
          containsUppercase: true,
          containsLowercase: true,
          containsNumber: true,
          containsSpecialChar: true,
          minLength: true
          },
          password_confirmation: {
          required: true,
          equalTo: "#password"
        }
        },
        messages: {
         name: {
            required: 'Please enter your name'
          },
         email: {
            required: 'Please enter your email',
            email: 'Please enter a valid email address'
          },
          password: {
            required: "Please enter a password.",
            containsUppercase: ' password must contain at least one uppercase letter',
            containsLowercase: ' password must contain at least one lowercase letter',
            containsNumber: 'password must contain at least one number',
            containsSpecialChar: 'password must contain at least one special character',
            minlength: "Your password must be at least 8 characters long."
          },
          password_confirmation: {
               required: "Please enter your password again",
               equalTo: "Paswword doesn't match"
          },
        },
      });
    </script> --}}