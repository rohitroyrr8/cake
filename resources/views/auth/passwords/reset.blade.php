@extends('layouts.auth')

@section('content')
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">ResetPassword?</h1>
                  </div>
                   
                  <form class="user" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="{{ $email ?? old('email') }}" >
                        @error('email')
                            <span class="invalid-feedback" role="alert" style="color: #d10d0d; font-size: 14px;padding: inherit;margin: 12px;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="New Password" name="password" required autocomplete="new-password">
                      @error('password')
                        <span class="invalid-feedback" role="alert" style="color: #d10d0d; font-size: 14px;padding: inherit;margin: 12px;">
                                <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                         <input id="password-confirm" type="password" class="form-control form-control-user" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                  </form>
                  <hr>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
@endsection
