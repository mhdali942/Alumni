@extends('layouts.app')

@section('content')




  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row col-lg-12">
                   <img src="{{asset('assets/img/Alumni Logo.png')}}" class="rounded mx-auto d-block" class="img-fluid" alt="Responsive image" width="50%">

          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">

                 @error('name')
                    <div class="alert alert-danger" role="alert">
                         <strong>{{ $message }}</strong>
                    </div>
                     @enderror

                     @error('email')
                    <div class="alert alert-danger" role="alert">
                         <strong>{{ $message }}</strong>
                    </div>
                     @enderror

                      @error('statues')
                    <div class="alert alert-danger" role="alert">
                         <strong>{{ $message }}</strong>
                    </div>
                     @enderror

                         @error('password')
                    <div class="alert alert-danger" role="alert">
                         <strong>{{ $message }}</strong>
                    </div>
                     @enderror


                <h1 class="h4 text-gray-900 mb-4">{{ __('Register') }}</h1>
              </div>
              <form class="user"  method="POST" action="{{ route('register') }}" >

                @csrf
            
                <div class="form-group">
                  <input id="name" type="text"  class="form-control form-control-user" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus  placeholder="{{ _('Your Name')}}">

                       @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>

                 <div class="form-group">
                  <input id="email" type="email"  class="form-control form-control-user" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>

                <div class="form-group">
                 <!--  <input id="statues" type="statues"  class="form-control form-control-user" class="form-control @error('statues') is-invalid @enderror" name="statues" value="{{ old('statues') }}" required autocomplete="email" placeholder="Email Address"> -->

                     

               
                          <select class="form-control" id="statues" name="statues" value="{{ old('statues') }}" class="form-control form-control-user" class="form-control @error('statues') is-invalid @enderror">

                                         
                                        
                                          <option value="lastyear">Last Year students / خاصة بطالب السنة الأخيرة </option>
                                          <option value="alumni">Alumni / الخريجين </option>
                                         <option value="cooperative">cooperative / المتعاونين من خارج الجامعة   </option>

                                      </select>


                     @error('statues')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>


                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input  class="form-control form-control-user" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                  </div>


                  <div class="col-sm-6">
                    <input class="form-control form-control-user" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password">

                    
                  </div>
                </div>
               
                 <button type="submit" class="btn btn-primary btn-user btn-block" >
                                    {{ __('Register') }}
                 </button>

              <!--   <hr>
                <a href="login/google" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>


                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a> -->

              </form>

              <hr>
              <div class="text-center">
                                   
                    <a class="small" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                  
              </div>
              <div class="text-center">
                <a class="small" href="{{URL::to('login')}}">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
