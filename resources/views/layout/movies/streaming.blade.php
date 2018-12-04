@extends('layout.main')

@section('content')
  <div class="main-wrap">
    <div class="section section-padding video-single-section">
            <div class="container">
                <div class="video-single">

                    <div class="row" style="margin-top:30px;">
                        <h5 class="text-white" style="font-weight:bold;">Kamavipi Season One Episodes</h6>
                        <div class="owl-carousel video-carousel tvshow-carousel" id="tvshow-carousel">
                          @foreach($episodes as $episode)
                            <div class="video-item">
                                <div class="thumb-wrap">
                                    <img src="{{asset('uploads/images/'.$episode->thumbnail)}}" alt="{{ $episode->title }}">
                                    <span class="rating">9.2</span>
                                    <div class="thumb-hover">
                                        <a class="play-video play" href="https://vimeo.com/301355611">Play</a>
                                        <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">{{ $episode->title }}</p>
                                        <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ $episode->year_released }}</p>
                                    </div>
                                </div>

                                <h6 class="text-white" style="font-weight:bold;">Episode {{ $episode->episode_number }} : {{ $episode->title }}</h6>
                            </div>
                          @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
  </div>
@endsection
