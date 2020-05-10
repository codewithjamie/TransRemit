@section('page_title', "Edit Govt Agent")
@extends('layouts.admin-menu')
@section('content')

<!-- Grid -->
<div class="row">
    <!-- Grid Item -->
    <div class="col-12 order-xl-12">

        <h3 class="dt-card__title pb-2">Update Government Agent</h3>
        <!-- Card -->
        <div class="dt-card">

            <!-- Card Header -->
            <div class="dt-card__header mb-0">

                <!-- Card Heading -->
                <div class="">
                </div>
                <!-- /card heading -->
            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card_body pb-3" style="margin-top: 2%">
              <form action="/update-ga/{{$gas->id}}" method="post">
                  @csrf
                  @method('PATCH')
                  <div class="row">
                      <div class="col-md-2 col-2 col-sm-12"></div>
                      <div class="col-8 col-md-8 col-sm-12">
                          <div class="form-group">
                              <label for="name"> Name </label>
                              <input type="text" autocomplete="off" required name="name" class="form-control" placeholder="Enter name" value="{{ $gas->name }}">
                          </div>
                      </div>
                      <div class="col-2 col-md-2 col-sm-12"></div>
                  </div>
                  <div class="row">
                      <div class="col-md-2 col-2 col-sm-12"></div>
                      <div class="col-8 col-md-8 col-sm-12">
                          <div class="form-group">
                              <label for="name"> Username </label>
                              <input type="text" autocomplete="off" required name="username" class="form-control" placeholder="Enter username" value="{{ $gas->username }}">
                          </div>
                      </div>
                      <div class="col-2 col-md-2 col-sm-12"></div>
                  </div>
                  <div class="row">
                      <div class="col-md-2 col-2 col-sm-12"></div>
                      <div class="col-8 col-md-8 col-sm-12">
                          <div class="form-group">
                              <label for="name"> Phone </label>
                              <input type="text" autocomplete="off" required name="phone" class="form-control" placeholder="Enter phone" value="{{ $gas->phone }}">
                          </div>
                      </div>
                      <div class="col-2 col-md-2 col-sm-12"></div>
                  </div>
                  <div class="row">
                      <div class="col-md-2 col-2 col-sm-12"></div>
                      <div class="col-8 col-md-8 col-sm-12">
                          <div class="form-group">
                              <label for="name"> Email </label>
                              <input type="email" autocomplete="off" required name="email" class="form-control" placeholder="Enter email" value="{{ $gas->email }}">
                          </div>
                      </div>
                      <div class="col-2 col-md-2 col-sm-12"></div>
                  </div>
                  <div class="row">
                      <div class="col-md-2 col-2 col-sm-12"></div>
                      <div class="col-8 col-md-8 col-sm-12">
                          <div class="form-group">
                              <label for="phone"> Status </label>
                              <select class="form-control" id="simple-select" name="status">
                                  <option>{{ $gas->status }}</option>
                                  <option value="active">Active</option>
                                  <option value="inactive">Inactive</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-2 col-md-2 col-sm-12"></div>
                  </div>

                  <button class="btn btn-xs btn-block btn-info" type="submit">Save</button>
              </form>
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

</div>

@endsection
