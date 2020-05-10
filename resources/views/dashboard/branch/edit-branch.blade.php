@section('page_title', "Edit Branch")
@extends('layouts.admin-menu')
@section('content')

<!-- Grid -->
<div class="row">
    <!-- Grid Item -->
    <div class="col-12 order-xl-12">

        <!-- Card -->
        <div class="dt-card">
            @if (Session::has('message'))
            <div class="col-md-12">
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            </div>
            @endif
            <!-- Card Header -->
            <div class="dt-card__header mb-0">

                <!-- Card Heading -->
                <div class="">
                    <h3 class="dt-card__title">Branch</h3>
                </div>
                <!-- /card heading -->

                <div class="dt-card__tools">
                    <!-- List -->
                    <ul class="dt-list dt-list-sm dt-list-cm-0">
                        <!-- List Item -->
                        <li class="dt-list__item">
                            <a href="/dashboard/branches" class="btn btn-primary"> <i class="icon icon-arrow-left"></i> Back</a>
                        </li>
                        <!-- /list item -->

                    </ul>
                    <!-- /list -->

                </div>
            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class=" pb-3" style="margin-top: 5%">
                <form action="/update-branch/{{$branches->id}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-2 col-2 col-sm-12"></div>
                        <div class="col-8 col-md-8 col-sm-12">
                            <div class="form-group">
                                <label for="name"> Name </label>
                                <input type="text" autocomplete="off" required name="name" class="form-control" placeholder="Enter name" value="{{ $branches->name}}">
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
                                    <option>{{ ucfirst($branches->status) }}</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2 col-md-2 col-sm-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-2 col-sm-12"></div>
                        <div class="col-8 col-md-8 col-sm-12">
                            <button class="btn btn-block btn-info" type="submit">Update</button>
                        </div>
                        <div class="col-2 col-md-2 col-sm-12"></div>
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
