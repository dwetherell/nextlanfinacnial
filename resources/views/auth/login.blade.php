@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Login')
@endsection

@section('body')
    <body>
    @endsection

    @section('content')
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary-subtle">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome Back!</h5>
                                            <p>Sign in to continue to Skote.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ asset('images/profile-img.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="auth-logo text-center">
                                    <a href="{{ url('/') }}" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{ asset('images/logo-light.svg') }}" alt="" height="34">
                                    </span>
                                        </div>
                                    </a>
                                </div>

                                {{-- Session Status --}}
                                @if (session('status'))
                                    <div class="alert alert-success text-center mt-2 mb-4">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="p-2">
                                    <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email"
                                                   name="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   id="email"
                                                   placeholder="Enter email"
                                                   value="{{ old('email') }}"
                                                   required autofocus>
                                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password"
                                                       name="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       placeholder="Enter password"
                                                       aria-label="Password"
                                                       required>
                                                <button class="btn btn-light" type="button" id="password-addon">
                                                    <i class="mdi mdi-eye-outline"></i>
                                                </button>
                                            </div>
                                            @error('password')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                            <label class="form-check-label" for="remember">Remember me</label>
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <a href="{{ route('password.request') }}" class="text-muted">
                                                <i class="mdi mdi-lock me-1"></i> Forgot your password?
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <p>Don't have an account?
                                <a href="{{ route('register') }}" class="fw-medium text-primary">Signup now</a>
                            </p>
                            <p>© <script>document.write(new Date().getFullYear())</script> NextLane Financial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
