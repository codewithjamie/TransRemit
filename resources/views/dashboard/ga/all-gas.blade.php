@section('page_title', "Govt Agency")
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
                    <h3 class="dt-card__title">Government Agency</h3>
                </div>
                <!-- /card heading -->

                <div class="dt-card__tools">
                    <!-- List -->
                    <ul class="dt-list dt-list-sm dt-list-cm-0">
                        <!-- List Item -->
                        <li class="dt-list__item">
                            <a href="/add-ga" class="btn btn-primary" data-toggle="modal" data-target="#add-modal">Add New</a>
                        </li>
                        <!-- /list item -->

                        <!-- Modal -->
                        <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="model-6" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">

                                <!-- Modal Content -->
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h3 class="modal-title text-center" id="model-6">Add</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <!-- /modal header -->

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <form action="/store-ga" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-2 col-2 col-sm-12"></div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="name"> Name </label>
                                                        <input type="text" autocomplete="off" required name="name" class="form-control" placeholder="Enter name">
                                                    </div>
                                                </div>
                                                <div class="col-2 col-md-2 col-sm-12"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-2 col-sm-12"></div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="name"> Username </label>
                                                        <input type="text" autocomplete="off" required name="username" class="form-control" placeholder="Enter username">
                                                    </div>
                                                </div>
                                                <div class="col-2 col-md-2 col-sm-12"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-2 col-sm-12"></div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="name"> Phone </label>
                                                        <input type="text" autocomplete="off" required name="phone" class="form-control" placeholder="Enter phone">
                                                    </div>
                                                </div>
                                                <div class="col-2 col-md-2 col-sm-12"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-2 col-sm-12"></div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="name"> Email </label>
                                                        <input type="email" autocomplete="off" required name="email" class="form-control" placeholder="Enter email">
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
                                                            <option>-- select status --</option>
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
                                    <!-- /modal body -->

                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                    </div>
                                    <!-- /modal footer -->

                                </div>
                                <!-- /modal content -->

                            </div>
                        </div>
                        <!-- /modal -->
                    </ul>
                    <!-- /list -->

                </div>
            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class=" pb-3" style="margin-top: 5%">

                <!-- Tables -->
                <!-- Tables -->
                <div class="table-responsive">

                    <table id="data-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">Time</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($gas) && $gas->count())
                            @foreach ($gas as $key => $ga)
                            <tr>
                                <td>{{ $ga->id }}</td>
                                <td class="text-dark">{{ ucfirst($ga->name) }}</td>
                                <td class="text-dark">{{ $ga->username }}</td>
                                <td class="text-dark">{{ $ga->email }}</td>
                                <td class="text-dark">{{ $ga->phone }}</td>
                                <td>{{ ucfirst($ga->status) }}</td>
                                <td>{{$ga->updated_at->format("D:M") }}</td>
                                <td>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-cm-0">
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                          <a class="btn btn-outline-info btn-icon btn-xs" href="/dashboard/edit-ga/{{ $ga->id }}">
                                              <i class="icon icon-eye"></i>
                                          </a>
                                            <a class="btn btn-outline-danger btn-icon btn-xs" href="javascript:;" data-toggle="modal" data-target="#delete-modal{{ $ga->id }}">
                                                <i class="icon icon-trash "></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete-modal{{ $ga->id }}" tabindex="-1" role="dialog" aria-labelledby="model-6" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">

                                                <!-- Modal Content -->
                                                <div class="modal-content">
                                                    <!-- Modal Body -->
                                                    <div class="modal-body">
                                                        <h1 class="text-center">Are you sure about deleting this branch?</h1>
                                                    </div>
                                                    <!-- /modal body -->

                                                    <!-- Modal Footer -->
                                                    <div class="modal-footer">
                                                      <form id="delete" action="/delete-ga/{{ $ga->id }}" method="POST">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button type="submit" class="btn btn-outline-success btn-icon btn-sm" data-id="{{ $ga->id }}" class="text-danger">
                                                              DELETE
                                                          </button>
                                                      </form>
                                                        <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Close</button>
                                                    </div>
                                                    <!-- /modal footer -->

                                                </div>
                                                <!-- /modal content -->

                                            </div>
                                        </div>
                                        <!-- /modal -->
                                    </ul>
                                </td>

                            </tr>

                            @endforeach

                            @else
                            <tr>

                                <td colspan="10">There are no data.</td>

                            </tr>
                            @endif
                        </tbody>

                    </table>
                </div>
                <!-- /table -->
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->
        {{ $gas->links() }}

    </div>
    <!-- /grid item -->


</div>

@endsection
