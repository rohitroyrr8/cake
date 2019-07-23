@extends('layouts.auth')

@section('content')
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">{{ __('Login') }}</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('login') }}" autocomplete="false">
                     @csrf
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                      @error('email')
                            <span class="invalid-feedback" role="alert" style="color: #d10d0d; font-size: 14px;padding: inherit;margin: 12px;">{{ $message }}
                            </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password" name="password" required autocomplete="current-password">

                      @error('password')
                            <span class="invalid-feedback" role="alert" style="color: #d10d0d; font-size: 14px;padding: inherit;margin: 12px;">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-user">
                        {{ __('Login') }}
                    </button>
                    <hr>
                    
                  </form>
                  <hr>
                  @if (Route::has('password.request'))
                     <a class="small" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                     </a>
                  @endif

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>  

@endsection
