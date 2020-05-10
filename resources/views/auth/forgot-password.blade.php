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
                    <h1 class="dt-login__title">Login</h1>
                    <!-- /login title -->

                    <p class="f-16">Sign in and explore in-built apps of Drift.</p>
                </div>


                <!-- Brand logo -->
                <div class="dt-login__logo">
                    <a class="dt-brand__logo-link" href="index-2.html">
                        <img class="dt-brand__logo-img" src="assets/images/logo-white.png" alt="Drift">
                    </a>
                </div>
                <!-- /brand logo -->

            </div>
            <!-- /login background section -->

            <!-- Login Content Section -->
            <div class="dt-login__content">

                <!-- Login Content Inner -->
                <div class="dt-login__content-inner">

                    <!-- Form -->
                    <form action="" method="post">
                        @csrf
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="sr-only" for="phone">Phone</label>
                            <input type="number" class="form-control" aria-describedby="phone" placeholder="Enter phone">
                        </div>
                        <!-- /form group -->

                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                        </div>
                        <!-- /form group -->

                        <!-- Form Group -->
                        <div class="dt-checkbox d-block mb-6">
                            <input type="checkbox" id="checkbox">
                            <label class="dt-checkbox-content" for="checkbox-1">
                                Keep me login on this device
                            </label>
                        </div>
                        <!-- /form group -->

                        <!-- Form Group -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary text-uppercase">Login</button>
                            <span class="d-inline-block ml-4">Or
  <a class="d-inline-block font-weight-500 ml-3" href="/auth/register">Create New Account</a>
</span>
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
