@section('page_title', "Dashboard")
@extends('layouts.app')
@section('content')

    @if (Auth::user()->userid == "0")
      <script type="text/javascript">
         window.location = "{{ url('dashboard/admin') }}";//here double curly bracket
     </script>
    @elseif (Auth::user()->userid == "1")
      <script type="text/javascript">
         window.location = "{{ url('dashboard/agent') }}";//here double curly bracket
     </script>
    @elseif (Auth::user()->userid == "2")
      <script type="text/javascript">
         window.location = "{{ url('dashboard/ga') }}";//here double curly bracket
     </script>
    @endif


@endsection
