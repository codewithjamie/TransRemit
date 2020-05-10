@section('page_title', "New Agent")
@extends('layouts.admin-menu')
@section('content')

<!-- Grid -->
<div class="row">
    <!-- Grid Item -->
    <div class="col-12 order-xl-12">

        <h3 class="dt-card__title pb-2">New Agent</h3>
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

                <form action="/dashboard/store-agent" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-1 col-1 col-sm-12"></div>
                        <div class="col-5 col-md-5 col-sm-12">
                            <div class="form-group">
                                <label for="name"> Name </label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name">
                            </div>
                        </div>
                        <div class="col-5 col-md-5 col-sm-12">
                            <div class="form-group">
                                <label for="username"> Userame </label>
                                <input type="text" name="username" class="form-control" placeholder="Enter username">
                            </div>
                        </div>
                        <div class="col-md-1 col-1 col-sm-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-1 col-sm-12"></div>
                        <div class="col-5 col-md-5 col-sm-12">
                            <div class="form-group">
                                <label for="email"> Email </label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-5 col-md-5 col-sm-12">
                            <div class="form-group">
                                <label for="phone"> Phone </label>
                                <input type="tel" name="phone" class="form-control" placeholder="Enter phone">
                            </div>
                        </div>
                        <div class="col-md-1 col-1 col-sm-12"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-1 col-1 col-sm-12"></div>
                      <div class="col-5 col-md-5 col-sm-12">
                          <div class="form-group">
                              <label for="phone"> Branch </label>
                              <select class="form-control" id="simple-select" name="branch">
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
                          </div>
                      </div>
                      <div class="col-5 col-md-5 col-sm-12">
                          <div class="form-group">
                              <label for="address"> Address </label>
                              <textarea name="address" class="form-control" placeholder="Enter address"></textarea>
                          </div>
                      </div>
                      <div class="col-md-1 col-1 col-sm-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-1 col-sm-12"></div>
                        <div class="col-8 col-md-8 col-sm-12">
                            <div class="custom-file">
                                <label for="">Image</label>
                                <input type="file" id="file-field" name="image">
                            </div>
                        </div>
                        <div class="col-1 col-md-1 col-sm-12"></div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-md-1 col-1 col-sm-12"></div>
                        <div class="col-1 col-md-10 col-sm-12">
                            <div class="form-group">
                                <label for="phone"> Status </label>
                                <select class="form-control" id="simple-select" name="status">
                                    <option>-- select status --</option>
                                    <option value="active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-1 col-md-1 col-sm-12"></div>
                    </div>

                    <div class="row">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <button class="btn btn-info btn-block" type="submit">Save</button>
                        </div>
                        <div class="col-xl-2"></div>
                    </div>
                </form>
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

</div>

@endsection
