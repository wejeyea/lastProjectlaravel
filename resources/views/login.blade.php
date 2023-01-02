@extends('default')

@section('title', 'Login')

@section('content')
<div class="container h-100 mt-5">
    <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9 ">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <h1 class="fs-4 card-title fw-bold mb-4 text-center">Login</h1>
                    @auth
                        Hi, {{Auth::user()->name}}
                        @if (Session::get('mysession'))
                            <div>
                                Your email is {{Session::get('mysession')['email']}}
                            </div>
                        @endif

                        @if (Auth::user()->role == 'admin'){
                            <div>
                                <a href="/admin">Admin Page</a>
                            </div>
                        }
                        @elseif (Auth::user()->role == 'user')
                            <div>
                                <a href="/user">User Page</a>
                            </div>

                        @endif

                        @else
                        <form action="/login" method="POST" class="needs-validation" novalidate="" autocomplete="off">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail</label>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Enter Your Email" value="{{Cookie::get('mycookie') !== null ? Cookie::get('mycookie') : ""}}" required autofocus>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">Password</label>
                                    <input id="password" type="password" class="form-control" placeholder="Enter Your Password" name="password" required>
                                </div>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>

                            </div>

                            <div class="d-flex align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input" checked={{Cookie::get('mycookie') != null}}>
                                    <label for="remember" class="form-check-label">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <input type="submit" class="btn btn-outline-dark ms-auto" value="Login">
                            </div>
                            <p class="text-center text-muted mt-3">Don't have an account? <a href="/register"
                                class="fw-bold text-body"><u>Register here</u></a></p>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
        {{-- @auth
            @if (Auth::user()->role == 'admin')
                ........
            @endif

            @else
            <form action="/login" method="post">
                @csrf
                <input type="email" name="email" id="email" placeholder="email" value="{{Cookie::get('mycookie') !== null ? Cookie::get('mycookie') : ""}}">
                <input type="password" name="password" id="password" placeholder="password">
                <input type="checkbox" name="remember" id="remember" checked={{Cookie::get('mycookie') != null}}>Remember Me
                <input type="submit" value="Login">
            </form>
        @endauth --}}
@endsection
