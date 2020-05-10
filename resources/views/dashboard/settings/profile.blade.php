@section('page_title', "Profile")
@extends('layouts.admin-menu')
@section('content')


<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content">
        <!-- Grid Item -->
        <div class="col-xl-12 col-lg-12 order-xl-1">
          @if (Session::has('message'))
               <div class="alert alert-success alert-dismissable">
                    <a href="javascript:;" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session::get('message') }}
                </div>
           @endif
            <!-- Card -->
            <div class="card">

                <!-- Card Header -->
                <div class="card-header card-nav bg-transparent border-bottom d-sm-flex justify-content-sm-between">
                    <ul class="card-header-links nav nav-underline" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-pane1" role="tab" aria-controls="tab-pane1" aria-selected="true">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-pane2" role="tab" aria-controls="tab-pane2" aria-selected="true">Update Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-pane3" role="tab" aria-controls="tab-pane2" aria-selected="true">Update Password</a>
                        </li>
                    </ul>

                </div>
                <!-- /card header -->

                <!-- Card Body -->
                <div class="card-body pb-2">

                    <!-- Tab Content-->
                    <div class="tab-content mt-5">

                        <!-- Tab panel -->
                        <div id="tab-pane1" class="tab-pane active">

                            <!-- List -->
                            <ul class="dt-list dt-list-col-6">

                                <!-- List Item -->
                                <li class="dt-list__item">
                                    <!-- Media -->
                                    <div class="media">

                                        <i class="icon icon-user icon-4x mr-5 align-self-center text-yellow"></i>

                                        <!-- Media Body -->
                                        <div class="media-body">
                                            <span class="d-block text-light-gray f-12 mb-1">Name</span>
                                            <p class="h5 mb-0">{{ Auth::user()->name }}</p>
                                        </div>
                                        <!-- /media body -->

                                    </div>
                                    <!-- /media -->
                                </li>
                                <!-- /list item -->
                                <br />
                                <!-- List Item -->
                                <!-- /list item -->
                                <br />
                                <!-- List Item -->
                                <li class="dt-list__item">
                                    <!-- Media -->
                                    <div class="media">

                                        <i class="icon icon-phone icon-4x mr-5 align-self-center text-yellow"></i>

                                        <!-- Media Body -->
                                        <div class="media-body">
                                            <span class="d-block text-light-gray f-12 mb-1">Phone</span>
                                            <p class="h5 mb-0">{{ Auth::user()->phone }}</p>
                                        </div>
                                        <!-- /media body -->

                                    </div>
                                    <!-- /media -->
                                </li>
                                <!-- /list item -->
                                <br />
                                <!-- List Item -->
                                <li class="dt-list__item">
                                    <!-- Media -->
                                    <div class="media">

                                        <i class="icon icon-mail icon-4x mr-5 align-self-center text-yellow"></i>

                                        <!-- Media Body -->
                                        <div class="media-body">
                                            <span class="d-block text-light-gray f-12 mb-1">EMail</span>
                                            <p class="h5 mb-0">{{Auth::user()->email}}</p>
                                        </div>
                                        <!-- /media body -->

                                    </div>
                                    <!-- /media -->
                                </li>
                                <!-- /list item -->
                                <!-- List Item -->
                                <li class="dt-list__item">
                                    <div class="media">
                                        <!-- Media Body -->
                                        <div class="media-body">
                                            <img src="assets/images/user-avatar/steve-smith.jpg" alt="" srcset="" class="img-thumbnail">
                                        </div>
                                        <!-- /media body -->
                                        <!-- Avatar -->
                                </li>
                                <!-- /list item -->
                                <br />
                            </ul>
                            <!-- /list -->

                        </div>
                        <!-- /tab panel -->

                        <!-- Tab panel -->
                        <div id="tab-pane2" class="tab-pane">

                            <form action="/update-user" method="post">
                                @csrf
                                @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                                @endforeach
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="sr-only" for="user-name">Name</label>
                                    <input type="text" class="form-control" value="{{ old('name') ?? Auth::user()->name }}" autocapitalize="on" autocomplete="off" autofocus id="user-name" name="name" aria-describedby="user-name" placeholder="User Name">

                                    @if ($errors->has('name'))
                                    <span class="error" style="color: red">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <!-- /form group -->
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="sr-only" for="user-name">Email</label>
                                    <input type="text" class="form-control" value="{{ old('email') ?? Auth::user()->email }}" autocapitalize="on" autocomplete="off" autofocus id="user-name" name="email" aria-describedby="user-name" placeholder="EMail">

                                    @if ($errors->has('email'))
                                    <span class="error" style="color: red">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <!-- /form group -->

                                <!-- Form Group -->
                                <div class="form-group">
                                    <label class="sr-only" for="email-1">Phone Number</label>
                                    <input type="tel" class="form-control" id="email-1" value="{{ old('phone') ?? Auth::user()->phone }}" name="phone" autocapitalize="on" autocomplete="off" aria-describedby="email-1" placeholder="Enter Phone">
                                    @if ($errors->has('phone'))
                                    <span class="error" style="color: red">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <!-- /form group -->

                                <button class="btn btn-info" type="submit">Update Info</button>
                            </form>

                        </div>
                        <!-- /tab panel -->
                        <!-- Tab panel -->
                        <div id="tab-pane3" class="tab-pane">

                            <form action="{{ route('change.password') }}" method="post">
                                @csrf
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissable">
                                     <a href="javascript:;" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                     {{ $error }}
                                 </div>
                                @endforeach
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>

                                    <div class="col-md-6">
                                        <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                                    </div>
                                </div>

                                <button class="btn btn-info btn-block" type="submit">Update</button>


                            </form>

                        </div>
                        <!-- /tab panel -->

                    </div>
                    <!-- /tab content-->

                </div>
                <!-- /card body -->

            </div>
            <!-- /card -->
        </div>
    </div>
</div>
  @endsection
