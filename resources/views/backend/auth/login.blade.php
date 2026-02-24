@extends('backend.layouts.app')

@section('title', 'Login | Niscpr Lab')

@section('content')
<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center form-bg-image">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">

                    <div class="text-center mb-4">
                        <h1 class="mb-3 h3">Welcome back</h1>
                        <p class="mb-0">Sign in with your credentials</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- Email --}}
                        <div class="form-group mb-4">
                            <label for="email">Your Email</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope text-gray-600"></i>
                                </span>
                                <input
                                    name="email"
                                    type="email"
                                    class="form-control"
                                    placeholder="example@company.com"
                                    value="{{ old('email') }}"
                                    required
                                    autofocus>
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="form-group mb-4">
                            <label for="password">Your Password</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-lock text-gray-600"></i>
                                </span>
                                <input
                                    name="password"
                                    type="password"
                                    class="form-control"
                                    placeholder="Password"
                                    required>
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Remember --}}
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    Remember me
                                </label>
                            </div>

                            <a href="{{ route('login') }}" class="small text-right">
                                Lost password?
                            </a>
                        </div>

                        {{-- Submit --}}
                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800">
                                Sign in
                            </button>
                        </div>
                    </form>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">
                            Not registered?
                            <a href="{{ route('login') }}" class="fw-bold">Create account</a>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
