@extends('layouts.app')
@section('content')
  <div class="single-action container">
    <div class="row">
      <div class="col-xs-12 col-md-8 col-lg-9"">
      @include('partials/actions/single')
      </div>
      <aside class="col-xs-12 col-md-4 col-lg-3">
        @include('partials/action-form')
      </aside>
    </div>
  </div>
@endsection
