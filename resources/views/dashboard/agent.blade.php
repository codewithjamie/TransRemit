@section('page_title', "Agent Dashboard")
@extends('layouts.admin-menu')
@section('content')

<!-- Grid -->
<div class="row">

  <!-- Grid Item -->
  <div class="col-xl-2 col-md-6 order-xl-1"></div>
  <!-- /grid item -->
  <!-- Grid Item -->
  <div class="col-xl-7 col-md-6 order-xl-1">

      <!-- Card -->
      <div class="dt-card bg-info text-white">

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
                          <span class="d-inline-block f-14">Our Most Valued Users</span>
                      </div>

                      <ul class="pl-4 mb-0 dt-list-square">
                          <li>Ensure Information on riders are accurate</li>
                          <!-- <li>Ensure </li> -->
                      </ul>
                  </div>
                  <!-- /grid item -->
                  <!-- Grid Item -->
                  <div class="col-6 text-center">
                      <p>Register New Rider</p>
                      <div class="mb-3">
                          <a href="/dashboard/add-rider" class="btn btn-default btn-xs text-uppercase">Register Rider</a>
                      </div>
                      <a href="/dashboard/all-riders" class="text-white">View existing riders</a>
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
  <div class="col-xl-2 col-md-6 order-xl-1"></div>
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
                              <th scope="col">Email</th>
                              <th scope="col">Address</th>
                              <th scope="col">Keke Number</th>
                              <th scope="col">Action</th>
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
                              <td>{{$rider->email}}</td>
                              <td>{{$rider->address}}</td>
                              <td>{{$rider->keke_number}}</td>
                              <td>
                                  <!-- List -->
                                  <ul class="dt-list dt-list-cm-0">
                                      <!-- List Item -->
                                      <li class="dt-list__item">
                                          <a class="btn btn-outline-info btn-icon btn-xs" href="/edit-rider/{{ $rider->id }}">
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
