@section('page_title', "Dashboard")
@extends('layouts.admin-menu')
@section('content')

<!-- Grid -->
<div class="row">

    <!-- Grid Item -->
    <div class="col-xl-3 col-sm-6 col-12">

        <!-- Card -->
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body px-5 py-4">
                <h6 class="text-body text-uppercase mb-2">Unions</h6>
                <div class="d-flex align-items-baseline mb-4">
                    <span class="display-4 font-weight-500 text-dark mr-2"> <?php
                            $count = App\union::all()->count();

                            echo $count;
                        ?></span>
                </div>

                <div class="dt-indicator-item__info mb-2" data-fill="62" data-max="100">
                    <!-- <div class="dt-indicator-item__bar">
                        <div class="dt-indicator-item__fill fill-pointer bg-primary"></div>
                    </div> -->
                </div>
            </div>
            <!-- /bard body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-3 col-sm-6 col-12">

        <!-- Card -->
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body px-5 py-4">
                <h6 class="text-body text-uppercase mb-2">Agents</h6>
                <div class="d-flex align-items-baseline mb-4">
                    <span class="display-4 font-weight-500 text-dark mr-2">
                    <?php
                            $count = App\agent::all()->count();

                            echo $count;
                        ?>
                    </span>
                </div>

                <div class="dt-indicator-item__info mb-2" data-fill="48" data-max="100">
                    <!-- <div class="dt-indicator-item__bar">
                        <div class="dt-indicator-item__fill fill-pointer bg-warning"></div>
                    </div> -->
                </div>
            </div>
            <!-- /bard body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-3 col-sm-6 col-12">

        <!-- Card -->
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body px-5 py-4">
                <h6 class="text-body text-uppercase mb-2">Riders</h6>
                <div class="d-flex align-items-baseline mb-4">
                    <span class="display-4 font-weight-500 text-dark mr-2">
                        <?php
                            $count = App\system_book_rider::all()->count();

                            echo $count;
                        ?>
                    </span>
                </div>

                <div class="dt-indicator-item__info mb-2" data-fill="85" data-max="100">
                    <!-- <div class="dt-indicator-item__bar">
                        <div class="dt-indicator-item__fill fill-pointer bg-success"></div>
                    </div> -->
                </div>
            </div>
            <!-- /bard body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-3 col-sm-6 col-12">

        <!-- Card -->
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body px-5 py-4">
                <h6 class="text-body text-uppercase mb-2">Branches</h6>
                <div class="d-flex align-items-baseline mb-4">
                    <span class="display-4 font-weight-500 text-dark mr-2"> <?php
                            $count = App\branch::all()->count();

                            echo $count;
                        ?></span>
                </div>

                <div class="dt-indicator-item__info mb-2" data-fill="90" data-max="100">
                    <!-- <div class="dt-indicator-item__bar">
                        <div class="dt-indicator-item__fill fill-pointer bg-secondary"></div>
                    </div> -->
                </div>
            </div>
            <!-- /bard body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

</div>
<!-- /grid -->

<!-- Grid -->
<div class="row">

    <!-- Grid Item -->
    <div class="col-xl-4 col-md-6 order-xl-1">

        <!-- Card -->
        <div class="dt-card bg-primary text-white">

            <!-- Card Header -->
            <div class="dt-card__header pt-6 px-6 mb-4">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title text-white">Riders</h3>
                </div>
                <!-- /card heading -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body px-6">
                <!-- Grid -->
                <div class="row no-gutters">
                    <!-- Grid Item -->
                    <div class="col-6 pr-2 border-right">
                        <div class="display-1 font-weight-500 mb-3">
                            <span class="d-inline-block f-14">Our Most Esteemed Users</span>
                        </div>

                    </div>
                    <!-- /grid item -->
                    <!-- Grid Item -->
                    <div class="col-6 text-center">
                        <p>Riders</p>
                        <div class="mb-3">
                            <a href="/dashboard/all-riders" class="btn btn-default btn-xs text-uppercase">View All RideRs</a>
                        </div>
                        <!-- <a href="/agents" class="text-white">View Existing Agents</a> -->
                    </div>
                    <!-- /grid item -->
                </div>
                <!-- /grid -->
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->
    <!-- Grid Item -->
    <div class="col-xl-7 col-md-6 order-xl-1">

        <!-- Card -->
        <div class="dt-card bg-info text-white">

            <!-- Card Header -->
            <div class="dt-card__header pt-6 px-6 mb-4">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title text-white">Agents</h3>
                </div>
                <!-- /card heading -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body px-6">
                <!-- Grid -->
                <div class="row no-gutters">
                    <!-- Grid Item -->
                    <div class="col-6 pr-2 border-right">
                        <div class="display-1 font-weight-500 mb-3">
                            <span class="d-inline-block f-14">Our Most Valued Team Support</span>
                        </div>

                        <ul class="pl-4 mb-0 dt-list-square">
                            <li>Ensure Information on agent are accurate</li>
                            <!-- <li>Ensure </li> -->
                        </ul>
                    </div>
                    <!-- /grid item -->
                    <!-- Grid Item -->
                    <div class="col-6 text-center">
                        <p>Register New Agent</p>
                        <div class="mb-3">
                            <a href="/dashboard/add-agent" class="btn btn-default btn-xs text-uppercase">Register Agent</a>
                        </div>
                        <a href="/dashboard/agents" class="text-white">View Existing Agents</a>
                    </div>
                    <!-- /grid item -->
                </div>
                <!-- /grid -->
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-12 order-xl-3">

        <!-- Card -->
        <div class="dt-card">

            <!-- Card Header -->
            <div class="dt-card__header bg-primary pb-7 mb-0 rounded-top">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <div class="d-flex align-items-center mb-3">
                        <i class="icon icon-invoice-new icon-fw icon-2x text-white mr-2"></i>
                        <h3 class="dt-card__title text-white">Riders</h3>
                    </div>
                    <p class="f-16 text-white mb-0">Riders list</p>
                </div>
                <!-- /card heading -->

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
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Branch</th>
                                <th scope="col">Union</th>
                                <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <?php
                            $riders = App\system_book_rider::paginate(5);
                        ?>
                        <tbody>
                        @if(!empty($riders) && $riders->count())
                            @foreach($riders as $rider)
                            <tr>
                                <td>{{$rider->id}}</td>
                                <td>{{$rider->name}}</td>
                                <td>{{$rider->phone}}</td>
                                <td>{{$rider->email}}</td>
                                <td>{{$rider->branch}}</td>
                                <td>{{$rider->union}}</td>
                                <td>{{$rider->address}}</td>
                            </tr>
                            @endforeach

                            @else
                            <tr>

                                <td style="float: center">There are no data.</td>

                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /table -->
                {{ $riders->links() }}
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->



</div>
<!-- /grid -->




@endsection
