@section('page_title', "Register")
@extends('layouts.app')
@section('content')
<!-- Root -->
<div class="dt-root">
<div class="dt-root__inner">

    <!-- Login Container -->
    <div class="dt-login--container">
        <!-- Login Content -->
        <div class="dt-login__content-wrapper">
            <!-- Login Background Section -->
            <div class="dt-login__bg-section">

                <div class="dt-login__bg-content">
                    <!-- Login Title -->
                    <h1 class="dt-login__title">Register</h1>
                    <!-- /login title -->
                </div>

            </div>
            <!-- /login background section -->

            <!-- Login Content Section -->
                 <div class="dt-login__content">

                     <!-- Login Content Inner -->
                     <div class="dt-login__content-inner">

                       <!-- Form -->
                      <form method="POST" action="{{ url('register-admin') }}">
                          {{ csrf_field() }}
                          <!-- Form Group -->
                          <div class="form-group">
                              <label class="sr-only" for="user-name">Name</label>
                              <input type="text" class="form-control" value="{{ old('name') }}" autocapitalize="on" autocomplete="off" autofocus id="user-name" name="name" aria-describedby="user-name" placeholder="User Name">

                              @if ($errors->has('name'))
                              <span class="error" style="color: red">{{ $errors->first('name') }}</span>
                              @endif
                          </div>
                          <!-- /form group -->

                          <!-- Form Group -->
                          <div class="form-group">
                              <label class="sr-only" for="email-1">Phone Number</label>
                              <input type="tel" class="form-control" id="email-1" value="{{ old('phone') }}" name="phone" autocapitalize="on" autocomplete="off" aria-describedby="email-1" placeholder="Enter Phone">
                              @if ($errors->has('phone'))
                              <span class="error" style="color: red">{{ $errors->first('phone') }}</span>
                              @endif
                          </div>
                          <!-- /form group -->

                          <!-- Form Group -->
                          <div class="form-group">
                              <label class="sr-only" for="password-1">Password</label>
                              <input type="password" class="form-control" value="{{ old('password') }}" id="password-1" autocapitalize="on" autocomplete="off" name="password" placeholder="Password">
                              @if ($errors->has('password'))
                              <span class="error" style="color: red">{{ $errors->first('password') }}</span>
                              @endif
                          </div>
                          <!-- /form group -->

                          <!-- Form Group -->
                          <div class="form-group">
                              <label class="sr-only" for="password-1">{{ __('Confirm Password') }}</label>
                              <input id="password-confirm" type="password" class="form-control" value="{{ old('password_confirmation') }}" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                          </div>
                          <!-- /form group -->

                          <!-- Form Group -->
                          <div class="dt-checkbox d-block mb-6">
                              <input type="checkbox" id="checkbox-1" name="checkbox" required value="{{ old('checkbox') }}">
                              <label class="dt-checkbox-content" for="checkbox-1"> by signing up, I accept
                                  <a href="javascript:void(0)">Term &amp; Condition</a>
                              </label>
                              @if ($errors->has('checkbox'))
                              <span class="error" style="color: red">{{ $errors->first('checkbox') }}</span>
                              @endif
                          </div>
                          <!-- /form group -->
                          <input type="hidden" id="userIP" name="userIP">
                          <input type="hidden" value="1" name="userid">

                          <!-- Form Group -->
                          <div class="form-group">
                              <button type="submit" class="btn btn-primary text-uppercase">Sign up</button>
                              <span class="d-inline-block ml-4">Or
                                  <a class="d-inline-block font-weight-500 ml-3" href="{{ route('login') }}">Login</a>
                              </span>
                          </div>
                          <!-- /form group -->
                      </form>
                      <!-- /form -->


                     </div>
                     <!-- /login content inner -->

                 </div>
                 <!-- /login content section -->

        </div>
        <!-- /login content -->

    </div>
    <!-- /login container -->

</div>
</div>
<!-- /root -->

@endsection
