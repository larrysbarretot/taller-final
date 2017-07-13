@extends('layouts.master')
@push('styles')
<style>
  .video-modal {
    position: relative;
    top: 20%;
  }
</style>
@endpush
@section('content')
  @include('main.carousel')
  @include('main.modal')
@stop
@push('scripts')
<script>
  $(document).ready(function(){
    $('#myModal').modal('show');
  });
</script>
@endpush