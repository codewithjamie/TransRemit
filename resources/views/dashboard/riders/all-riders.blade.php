@section('page_title', "All Riders")
@extends('layouts.admin-menu')
@section('content')


<!-- Grid -->
<div class="row">
    <!-- Grid Item -->
    <div class="col-12 order-xl-12">

        <!-- Card -->
        <div class="dt-card">
            @if (Session::has('info'))
            <div class="col-md-12">
                <div class="alert alert-success">{{ Session::get('info') }}</div>
            </div>
            @endif
            <!-- Card Header -->
            <div class="dt-card__header mb-0">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Riders</h3>
                </div>
                <!-- /card heading -->

                @if (Auth::user()->userid == "0")
                @elseif (Auth::user()->userid == "1")
                <div class="dt-card__tools">
                    <!-- List -->
                    <ul class="dt-list dt-list-sm dt-list-cm-0">
                        <!-- List Item -->
                        <li class="dt-list__item">
                            <a href="/dashboard/add-rider" class="btn btn-primary btn-xs">Add New</a>
                        </li>
                        <!-- /list item -->

                    </ul>
                    <!-- /list -->

                </div>
                @else
                @endif
            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body pb-3">
                <!-- Tables -->
                <div class="table-responsive">
                    <table class="table mb-0 table-fluid">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Addres</th>
                                <th scope="col">iD Type</th>
                                <th scope="col">iD Number</th>
                                <th scope="col">Keke No.</th>
                                <th scope="col">Timestamp</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($riders) && $riders->count())
                            @foreach ($riders as $key => $rider)
                            <tr>
                                <td>{{$rider->id }}</td>
                                <td class="text-dark">{{$rider->name }}</td>
                                <td>{{$rider->phone }}</td>
                                <td>{{$rider->nationality }}, {{$rider->state }}, {{$rider->city }}</td>
                                <td  class="text-dark">{{$rider->id_type }}</td>
                                <td  class="text-dark">{{$rider->id_number }}</td>
                                <td>{{$rider->keke_number }}</td>
                                <td>{{$rider->updated_at }}</td>
                                <td>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-cm-0">
                                        @if (Auth::user()->userid == "0")
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="btn btn-outline-info btn-icon btn-xs" href="/dashboard/view-rider/{{ $rider->id }}">
                                                <i class="icon icon-eye"></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->
                                        @elseif (Auth::user()->userid == "1")
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="btn btn-outline-info btn-icon btn-xs" href="/dashboard/edit-rider/{{ $rider->id }}">
                                                <i class="icon icon-eye"></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <form id="delete" action="/delete-rider/{{ $rider->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-xs btn-icon" data-id="{{ $rider->id }}" class="text-danger">
                                                    <i class="icon icon-trash"></i>
                                                </button>
                                            </form>
                                        </li>
                                        <!-- /list item -->
                                        @else
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="btn btn-outline-info btn-icon btn-xs" href="/dashboard/view-rider/{{ $rider->id }}">
                                                <i class="icon icon-eye"></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->
                                        @endif
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
        {{ $riders->links() }}

    </div>
    <!-- /grid item -->

</div>

@endsection
