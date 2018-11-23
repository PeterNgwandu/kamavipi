@extends('layout.main')

@section('content')
  @include('layout/partials.slider')
  <div class="main-wrap">
    @include('layout/partials.flash-message')
    @include('layout/partials.latest-movies')
    @include('layout/partials.upcoming-movies')
    @include('layout/partials.top-rated-movies')
  </div>

@endsection
