@extends('Layout.Auth.app')
@section('content')
<section>
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 col-md-12 d-none d-lg-block">
          <img class="img-fluid" src="{{asset('landing-and-user/images/login-img.png')}}" alt="">
        </div>
        <div class="col-lg-6 col-md-12 mt-6 mt-lg-0">
          <div class="login-form white-bg p-5 rounded box-shadow">
            <form action="{{Route('Login')}}" method="post">
                @csrf
              <div class="form-group">
                <label>Email*</label>
                <input type="email" name="email" class="form-control" >
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label>Password*</label>
                <input type="password" name="password" class="form-control" >
                <div class="help-block with-errors"></div>
              </div>
              <button type="submit" class="themeht-btn">Login</button>
            </form>
            <span class="mb-0 mt-4 text-capitalize text-black d-inline-block">Belum punya akun ? <a class="text-decoration-underline" href="{{route('Auth-register')}}">
                <i>register!</i>
              </a>
            </span>
           
            <div class="social-icons mt-4 clearfix">
              <ul>
                <li>
                  <a href="{{Route('redirect.google')}}">
                    <i class="bi bi-google"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
