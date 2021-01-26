

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

              


                 <div class="card" style="text-align: center;">
                <div class="card-header">{{ __('Verify Your Email Address') }} / تحقق من عنوان بريدك الإلكتروني  </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }} /  تم إرسال رابط تحقق جديد إلى عنوان بريدك الإلكتروني.
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }} <br>قبل المتابعة ، يرجى التحقق من بريدك الإلكتروني للحصول على رابط التحقق.<br>
                    {{ __('If you did not receive the email') }} / إذا لم تتلق البريد الإلكتروني
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}"><br>
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }} / فانقر هنا لطلب آخر</button>.
                    </form>
                </div>
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

