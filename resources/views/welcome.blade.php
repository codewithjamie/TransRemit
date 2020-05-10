@section('page_title', "Login")
@extends('layouts.app')
@section('content')


<!-- Root -->
<div class="dt-root">
<div class="dt-root__inner">
  @if (Session::has('message'))
       <div class="alert alert-success alert-dismissable">
            <a href="javascript:;" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('message') }}
        </div>
   @endif
    <!-- Login Container -->
    <div class="dt-login--container">

        <!-- Login Content -->
        <div class="dt-login__content-wrapper">

            <!-- Login Background Section -->
            <div class="dt-login__bg-section">

                <div class="dt-login__bg-content">
                    <!-- Login Title -->
                    <h1 class="dt-login__title">Login</h1>
                    <!-- /login title -->
                </div>

            </div>
            <!-- /login background section -->

            <!-- Login Content Section -->
            <div class="dt-login__content">

                <!-- Login Content Inner -->
                <div class="dt-login__content-inner">

                    <!-- Form -->
                    <!-- Form -->
                        <form method="POST" action="/login">
                            {{ csrf_field() }}
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
                            <div class="dt-checkbox d-block mb-6">
                                <input type="checkbox" id="checkbox-1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="dt-checkbox-content" for="checkbox-1">
                                    Keep me login on this device
                                </label>
                            </div>
                            <!-- /form group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary text-uppercase">Login</button>
                            </div>
                            <!-- /form group -->
                        </form>
                        <!-- /form -->

                </div>
                <!-- /login content inner -->

                <!-- Login Content Footer -->
                <!-- <div class="dt-login__content-footer">
                    <a href="/auth/forgot-password">Can’t access your account?</a>
                </div> -->
                <!-- /login content footer -->

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
