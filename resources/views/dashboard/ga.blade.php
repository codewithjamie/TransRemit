@section('page_title', "GA Dashboard")
@extends('layouts.admin-menu')
@section('content')

<!-- Grid -->
<div class="row">
    <!-- Grid Item -->
    <div class="col-xl-6 col-sm-6 col-12">

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
    <div class="col-xl-6 col-sm-6 col-12">

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

</div>
<!-- /grid -->

<!-- Grid -->
<div class="row">

    <!-- Grid Item -->
    <div class="col-xl-8 col-md-6 order-xl-1">

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




</div>
<!-- /grid -->
@endsection
