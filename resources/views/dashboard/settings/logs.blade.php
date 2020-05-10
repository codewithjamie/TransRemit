@section('page_title', "Activity  Logs")
@extends('layouts.admin-menu')
@section('content')

<!-- Grid -->
<div class="row">
    <!-- Grid Item -->
    <div class="col-12 order-xl-12">

        <!-- Card -->
        <div class="dt-card">
            <!-- Card Header -->
            <div class="dt-card__header mb-0">

                <!-- Card Heading -->
                <div class="">
                    <h3 class="dt-card__title">Activity Logs</h3>
                </div>
                <!-- /card heading -->
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
                                <th scope="col">Phone</th>
                                <th scope="col">IP</th>
                                <th scope="col">Last Login</th>
                            </tr>
                        </thead>
                        <tbody>
                          @if(!empty($temp_historical_logs) && $temp_historical_logs->count())
                          @foreach ($temp_historical_logs as $key => $temp_historical_log)
                            <tr>
                                <td>{{$temp_historical_log->id }}</td>
                                <td class="text-dark">{{ ucfirst($temp_historical_log->name) }}</td>
                                <td>{{ $temp_historical_log->phone }}</td>
                                <td>{{ $temp_historical_log->userip }}</td>
                                <td>{{ $temp_historical_log->last_login }}</td>
                            </tr>

                            @endforeach

                            @else
                            <tr>

                                <td colspan="10">There are no log details.</td>

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
        {{ $temp_historical_logs->links() }}

    </div>
    <!-- /grid item -->


</div>

@endsection
