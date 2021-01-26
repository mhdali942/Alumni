@extends('layouts.app')

@section('content')
<div class="container" >

    <!-- Outer Row -->

    <div class="row justify-content-center">

      <div class="col-xl-8 col-lg-12 col-md-8">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <img src="{{asset('assets/img/Alumni Logo.png')}}" class="rounded mx-auto d-block" class="img-fluid" alt="Responsive image" width="50%">

              
              <div class="col-lg-12">

                <div class="p-5">
                  <div class="text-center">
                     @error('email')
                    <div class="alert alert-danger" role="alert">
                         <strong>{{ $message }}</strong>
                    </div>
                     @enderror

                         @error('password')
                    <div class="alert alert-danger" role="alert">
                         <strong>{{ $message }}</strong>
                    </div>
                     @enderror


                    <h1 class="h4 text-gray-900 mb-4">{{ __('Login') }}</h1>
                  </div>
                 

                  <form method="POST" class="user"   action="{{ route('login') }}">
                     @csrf
                    
                    <div class="form-group">
                      <input id="email" type="email" class="form-control form-control-user" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Enter Email Address...">

                                  
                                      <span class="invalid-feedback" role="alert">
                                         
                                      </span>
                                     

                    </div>

                                      


                    <div class="form-group">
                      <input id="password" type="password"  class="form-control form-control-user"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Password">


                      </div>

                    

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Login') }}
                      </button>
                    <hr>


<!-- 
                    <a href="/login/google" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>


                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->


                  </form>
                  <hr>

                  <div class="text-center">
                       @if (Route::has('password.request'))
                    <a class="small" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                     @endif
                  </div>


                  <div class="text-center">
                    <h4><a class="small" href="{{URL::to('register')}}">Create an Account!</a></h4>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
@endsection

