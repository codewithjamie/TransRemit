@section('page_title', "Agents")
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
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            </div>
            @endif
            <!-- Card Header -->
            <div class="dt-card__header mb-0">

                <!-- Card Heading -->
                <div class="">
                    <h3 class="dt-card__title">Agents</h3>
                </div>
                <!-- /card heading -->

                <div class="dt-card__tools">
                    <!-- List -->
                    <ul class="dt-list dt-list-sm dt-list-cm-0">
                        <!-- List Item -->
                        <li class="dt-list__item">
                            <a href="/dashboard/add-agent" class="btn btn-primary btn-xs">Add New</a>
                        </li>
                        <!-- /list item -->

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
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Status</th>
                                <th scope="col">Timestamp</th>
                                <th scope="col-8">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($agents) && $agents->count())
                            @foreach ($agents as $agent)
                            <tr>
                                <td>{{$agent->id }}</td>
                                <td class="text-dark">{{$agent->name }}</td>
                                <td>{{$agent->email }}</td>
                                <td>{{$agent->phone }}</td>
                                <td>{{$agent->status }}</td>
                                <td>{{$agent->updated_at->format('D.M') }}</td>
                                <td>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-cm-0">
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="btn btn-outline-info btn-icon btn-xs" href="/dashboard/edit-agent/{{ $agent->id }}">
                                                <i class="icon icon-eye"></i>
                                            </a>
                                            <a class="btn btn-outline-danger btn-icon btn-xs" href="javascript:;" data-toggle="modal" data-target="#delete-modal{{ $agent->id }}">
                                                <i class="icon icon-trash "></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete-modal{{ $agent->id }}" tabindex="-1" role="dialog" aria-labelledby="model-6" aria-hidden="true">
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
                                                      <form id="delete" action="/delete-agent/{{ $agent->id }}" method="POST">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button type="submit" class="btn btn-outline-danger btn-xs btn-icon" data-id="{{ $agent->id }}" class="text-danger">
                                                              <i class="icon icon-trash"></i>
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
                                    <!-- /list -->
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
        {{ $agents->links() }}

    </div>
    <!-- /grid item -->

</div>


@endsection
