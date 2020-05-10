@section('page_title', "View Rider")
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

                            <form>
                                <div class="row">
                                    <div class="col-xl-6 col-sm-12 pb-4">
                                        <label for="">Image Preview</label>
                                        <div class="dt-avatar-wrapper flex-column">
                                        <img class="card-img-top pb-4 " src="/storage/{{$riders->image}}" id="qrious" width="250" height="250" name="qrious">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-12">
                                        <label for="">Qrcode Preview</label>
                                        <div class="dt-avatar-wrapper flex-column">
                                            <!-- Image -->
                                            <img class="card-img-top pb-4 @error('title') is-invalid @enderror" src="/storage/{{$riders->qr_code}}" id="qrious" width="250" height="250" name="qrious">
                                            <!-- /image -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> Name <i class="text-danger">*</i></label>
                                            <input type="text" disabled class="form-control @error('name') is-invalid @enderror" autocomplete="off" placeholder="rider's name" name="name" id="name" value="{{ $riders->name }}">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> Phone <i class="text-danger">*</i></label>
                                            <input type="text" disabled class="form-control @error('phone') is-invalid @enderror" autocomplete="off" placeholder="rider's phone" name="phone" id="phone" value="{{ $riders->phone }}">
                                            @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> EMail (optional)</label>
                                            <input type="text" disabled class="form-control" autocomplete="off" placeholder="rider's email" name="email" id="email" value="{{ $riders->email }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12 ">
                                        <div class="form-group">
                                            <label for="name"> Gender <i class="text-danger">*</i></label>
                                            <select disabled class="form-control @error('gender') is-invalid @enderror" id="simple-select" name="gender" id="gender">
                                                <option>{{ $riders->gender }}</option>
                                            </select>
                                            @error('gender')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="">Select Country</label>
                                            <select id="country" disabled name="nationality" class="form-control" value="{{ $riders->country }}" >
                                                <option>{{$riders->country}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="title">Select State:</label>
                                            <select name="state" disabled id="state" class="form-control" value="{{ $riders->state }}">
                                              <option value="">{{ $riders->state }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="title">Select City:</label>
                                            <select name="city" disabled id="city" class="form-control" value="">
                                              <option value="">{{ $riders->city }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> ID Type <i class="text-danger">*</i></label>
                                            <select class="form-control @error('id_type') is-invalid @enderror" disabled id="simple-select" name="id_type" id="id_type" value="{{ old('id_type') }}">
                                                <option>{{ $riders->id_type }}</option>
                                            </select>
                                            @error('id_type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> ID Number <i class="text-danger">*</i></label>
                                            <input type="text" class="form-control @error('id_number') is-invalid @enderror" disabled value="{{ $riders->id_number }}" autocomplete="off" placeholder="rider's id number" name="id_number" id="id_number">
                                            @error('id_number')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> Keke Number <i class="text-danger">*</i></label>
                                            <input type="text" class="form-control @error('keke_number') is-invalid @enderror" disabled value="{{ $riders->keke_number }}" autocomplete="off" placeholder="keke's number" name="keke_number" id="keke_number">
                                            @error('keke_number')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> Branch <i class="text-danger">*</i></label>
                                            <select class="form-control @error('branch') is-invalid @enderror" id="simple-select" disabled name="branch" id="branch">
                                                <option>{{ $riders->branch }}</option>
                                            </select>
                                            @error('branch')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> Union <i class="text-danger">*</i></label>
                                            <select disabled class="form-control @error('union') is-invalid @enderror" id="simple-select" name="union" id="union">
                                                <option>-- {{ $riders->union }} --</option>
                                            </select>
                                            @error('union')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="name"> Address <i class="text-danger">*</i></label>
                                            <textarea disabled class="form-control @error('address') is-invalid @enderror" autocomplete="off" name="address" id="address" autocomplete="off" placeholder="rider's address">{{ $riders->address }}</textarea>
                                            @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-8">
                                      <a href="/dashboard/all-riders" class="btn btn-block btn-info"> <i class="icon icon-arrow-left"></i> Back </a>
                                    </div>
                                    <div class="col-xl-2"></div>
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
    <script src="/assets/js/qrious.js"></script>
    <script>
        $(function() {

            var genAlpha = Math.random().toString(36).slice(2);
            var twoToneButton = document.querySelector('#generateQr-modal');

            twoToneButton.addEventListener("click", function() {
                twoToneButton.innerHTML = "Generating Qrcode...";

                setTimeout(
                    function() {
                        twoToneButton.innerHTML = "Generate Qrcode";
                        var qr = new QRious({
                            element: document.getElementById('qrious'),
                            value: genAlpha,
                            background: 'white', // background color
                            foreground: 'black', // foreground color
                            backgroundAlpha: 1,
                            foregroundAlpha: 1,
                            level: 'L', // Error correction level of the QR code (L, M, Q, H)
                            mime: 'image/png', // MIME type used to render the image for the QR code
                            size: 300, // Size of the QR code in pixels.
                            padding: null // padding in pixels
                        })
                    }, 6000);
            }, false);


        });
    </script>

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
