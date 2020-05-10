@section('page_title', "New Rider")
@extends('layouts.admin-menu')
@section('content')

<style type="text/css">
    #results {
        float: right;
        margin: 20px;
        padding: 20px;
    }
</style>

<!-- Site Content Wrapper -->
<div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content">
        <!-- Grid Item -->
        <div class="col-xl-12 col-12 col-md-12 col-lg-12 col-sm-12 order-xl-1">
            @if (Session::has('message'))
            <div class="col-md-12">
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            </div>
            @endif
            <!-- Card -->
            <div class="card">

                <!-- Card Header -->
                <div class="card-header card-nav bg-transparent border-bottom d-sm-flex justify-content-sm-between">
                    <ul class="card-header-links nav nav-underline" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-pane1" role="tab" aria-controls="tab-pane1" aria-selected="true">Basic Information</a>
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

                            <form action="/dashboard/store-rider" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-sm-12">
                                        <label for="">Image Preview</label>
                                        <div class="dt-avatar-wrapper flex-column">
                                            <div id="results" class="card-img-top @error('title') is-invalid @enderror">Your captured image will appear here...</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-12">
                                        <label for="">Qrcode Preview</label>
                                        <div class="dt-avatar-wrapper flex-column">
                                            <!-- Image -->Your Qrcode image will appear here...
                                            <img class="card-img-top pb-4 @error('title') is-invalid @enderror" id="qrious" width="250" height="250" name="qrious">
                                            <!-- /image -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> Name <i class="text-danger">*</i></label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" autocomplete="off" placeholder="rider's name" name="name" id="name" value="{{ old('') }}">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> Phone <i class="text-danger">*</i></label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" autocomplete="off" placeholder="rider's phone" name="phone" id="phone" value="{{ old('phone') }}">
                                            @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> EMail (optional)</label>
                                            <input type="text" class="form-control" autocomplete="off" placeholder="rider's email" name="email" id="email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12 ">
                                        <div class="form-group">
                                            <label for="name"> Gender <i class="text-danger">*</i></label>
                                            <select class="form-control @error('gender') is-invalid @enderror" id="simple-select" name="gender" id="gender">
                                                <option>-- select gender --</option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </select>
                                            @error('gender')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="">Select Country</label>
                                            <select id="country" name="nationality" class="form-control" >
                                                <option value="" selected disabled>Select</option>
                                                <?php
                                                $countries = App\Country::all();
                                                ?>
                                                @foreach($countries as $key => $country)
                                                <option value="{{ $country->id }}"> {{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="title">Select State:</label>
                                            <select name="state" id="state" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="title">Select City:</label>
                                            <select name="city" id="city" class="form-control" >
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> ID Type <i class="text-danger">*</i></label>
                                            <select class="form-control @error('id_type') is-invalid @enderror" id="simple-select" name="id_type" id="id_type" value="{{ old('id_type') }}">
                                                <option>-- select id type --</option>
                                                <option value="PAS">Passport </option>
                                                <option value="NAS">National ID </option>
                                                <option value="VOS">Voter's ID </option>
                                                <option value="DIVs">Driver's ID </option>
                                                <option value="NycD">Nysc ID </option>
                                            </select>
                                            @error('id_type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> ID Number <i class="text-danger">*</i></label>
                                            <input type="text" class="form-control @error('id_number') is-invalid @enderror" value="{{ old('id_number') }}" autocomplete="off" placeholder="rider's id number" name="id_number" id="id_number">
                                            @error('id_number')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> Keke Number <i class="text-danger">*</i></label>
                                            <input type="text" class="form-control @error('keke_number') is-invalid @enderror" value="{{ old('keke_number') }}" autocomplete="off" placeholder="keke's number" name="keke_number" id="keke_number">
                                            @error('keke_number')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> Branch <i class="text-danger">*</i></label>
                                            <select class="form-control @error('branch') is-invalid @enderror" id="simple-select" name="branch" id="branch">
                                                <option>-- select branch --</option>
                                                <?php
                                                $branches = App\Branch::all();

                                                foreach ($branches as $branch) {
                                                ?>
                                                    <option value="{{ $branch->name }}">{{ $branch->name }}</option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            @error('branch')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> Union <i class="text-danger">*</i></label>
                                            <select class="form-control @error('union') is-invalid @enderror" id="simple-select" name="union" id="union">
                                                <option>-- select union --</option>
                                                <?php
                                                $unions = App\Union::all();

                                                foreach ($unions as $union) {
                                                ?>
                                                    <option value="{{ $union->name }}">{{ $union->name }}</option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            @error('union')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> Address <i class="text-danger">*</i></label>
                                            <textarea class="form-control @error('address') is-invalid @enderror" autocomplete="off" name="address" id="address" autocomplete="off" placeholder="rider's address">{{ old('address') }}</textarea>
                                            @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-8">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#captureImage-modal">Capture Image</button>
                                        <button class="btn btn-info btn-xx" type="submit">Create rider</button>
                                        <button type="button" class="btn btn-primary" id="generateQr-modal">Generate QrCode</button>
                                    </div>
                                    <div class="col-xl-2"></div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="captureImage-modal" tabindex="-1" role="dialog" aria-labelledby="model-6" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">

                                        <!-- Modal Content -->
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="model-6">Capture Image</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- /modal header -->

                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                <div id="my_camera"></div>

                                                <!-- First, include the Webcam.js JavaScript Library -->
                                                <script type="text/javascript" src="/assets/js/webcam.js"></script>

                                                <!-- Configure a few settings and attach camera -->
                                                <script language="JavaScript">
                                                    Webcam.set({
                                                        width: 320,
                                                        height: 240,
                                                        image_format: 'jpeg',
                                                        jpeg_quality: 90
                                                    });
                                                    Webcam.attach('#my_camera');
                                                </script>

                                                <!-- A button for taking snaps -->
                                                <form>
                                                    <div id="pre_take_buttons">
                                                        <input type=button value="Take Snapshot" onClick="preview_snapshot()" class="btn btn-xs btn-info" style="margin-top: 2%">
                                                    </div>
                                                    <div id="post_take_buttons" style="display:none">
                                                        <input type=button value="&lt; Take Another" onClick="cancel_preview()" class="btn btn-warning btn-xs" style="margin-top: 2%">
                                                        <input type=button value="Save Photo &gt;" class="btn btn-xs btn-success" onClick="save_photo()" style="font-weight:bold;margin-top: 2%">
                                                    </div>
                                                </form>

                                                <!-- Code to handle taking the snapshot and displaying it locally -->
                                                <script language="JavaScript">
                                                    function preview_snapshot() {
                                                        // freeze camera so user can preview pic
                                                        Webcam.freeze();

                                                        // swap button sets
                                                        document.getElementById('pre_take_buttons').style.display = 'none';
                                                        document.getElementById('post_take_buttons').style.display = '';
                                                    }

                                                    function cancel_preview() {
                                                        // cancel preview freeze and return to live camera feed
                                                        Webcam.unfreeze();

                                                        // swap buttons back
                                                        document.getElementById('pre_take_buttons').style.display = '';
                                                        document.getElementById('post_take_buttons').style.display = 'none';
                                                    }

                                                    function save_photo() {
                                                        // actually snap photo (from preview freeze) and display it
                                                        Webcam.snap(function(data_uri) {
                                                            // display results in page
                                                            document.getElementById('results').innerHTML =
                                                                '<img class="card-img-top pb-4 " width="250"  height="250" name="image" src="' + data_uri + '"/>';

                                                            // swap buttons back
                                                            document.getElementById('pre_take_buttons').style.display = '';
                                                            document.getElementById('post_take_buttons').style.display = 'none';
                                                        });
                                                    }
                                                </script>

                                            </div>
                                            <!-- /modal body -->

                                            <!-- Modal Footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close
                                                </button>
                                            </div>
                                            <!-- /modal footer -->

                                        </div>
                                        <!-- /modal content -->


                                    </div>
                                    <!-- /modal -->
                                </div>
                            </form>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        $('#country').change(function() {
            var countryID = $(this).val();
            console.log(countryID)
            if (countryID) {
                $.ajax({
                    type: "GET",
                    url: "{{url('get-state-list')}}?country_id=" + countryID,
                    success: function(res) {
                        if (res) {
                            $("#state").empty();
                            $("#state").append('<option>--Select State--</option>');
                            $.each(res, function(key, value) {
                                $("#state").append('<option value="' + key + ", " + value + '">' + value + '</option>');
                            });

                        } else {
                            $("#state").empty();
                        }
                    }
                });
            } else {
                $("#state").empty();
                $("#city").empty();
            }
        });
        $('#state').on('change', function() {
            var stateID = $(this).val();
            if (stateID) {
                $.ajax({
                    type: "GET",
                    url: "{{url('get-city-list')}}?state_id=" + stateID,
                    success: function(res) {
                        if (res) {
                            $("#city").empty();
                            $.each(res, function(key, value) {
                                $("#city").append('<option value="' + key + ", " + value + '">' + value + '</option>');
                            });

                        } else {
                            $("#city").empty();
                        }
                    }
                });
            } else {
                $("#city").empty();
            }

        });
        $('#city').on('change', function() {
            var cityID = $(this).val();
            if (cityID) {
                $.ajax({
                    type: "GET",
                    url: "{{url('get-lga-list')}}?city_id=" + cityID,
                    success: function(res) {
                        if (res) {
                            $("#city").empty();
                            $.each(res, function(key, value) {
                                $("#city").append('<option value="' + key + ", " + value +'">' + value + '</option>');
                            });

                        } else {
                            $("#lga").empty();
                        }
                    }
                });
            } else {
                $("#lga").empty();
            }

        });
    </script>
@endsection
