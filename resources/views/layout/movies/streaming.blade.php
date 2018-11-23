@extends('layout.main')

@section('content')
  <div class="main-wrap">
    <div class="section section-padding video-single-section">
            <div class="container">
                <div class="video-single">
                    <!-- <div class="row">
                        <div class="col col-md-10 col-md-offset-2">
                            <h6 class="text-white" style="font-weight:bold;">Episode 1 : The War Began</h6>
                            <div class="thumb-wrap single-thumb">
                                <img src="{{url('images/movies/movie-single.png')}}" alt="Dark Night - 2">
                                <div class="thumb-hover">
                                    <a class="play-video" href="https://vimeo.com/301355611"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row" style="margin-top:30px;">
                        <h5 class="text-white" style="font-weight:bold;">Kamavipi Season One Episodes</h6>
                        <div class="owl-carousel video-carousel tvshow-carousel" id="tvshow-carousel">
                            <div class="video-item">
                                <div class="thumb-wrap">
                                    <img src="{{url('images/movies/three.png')}}" alt="Movie Thumb">
                                    <span class="rating">9.2</span>
                                    <div class="thumb-hover">
                                        <a class="play-video play" href="https://vimeo.com/301355611">Play</a>
                                        <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Wonder Women</p>
                                        <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                                    </div>
                                </div>
                                <!-- <div class="video-details">
                                    <h4 class="video-title"><a href="movie-detail.html">Wonder Women</a></h4>
                                    <p class="video-release-on">22 Jun 2017 &nbsp;
                                      <span><a href="" class="text-info">Details</a></span>
                                    </p>
                                </div> -->
                                <h6 class="text-white" style="font-weight:bold;">Episode 2 : The War Began</h6>
                            </div>
                            <div class="video-item">
                                <div class="thumb-wrap">
                                  <img src="{{url('images/movies/four.png')}}" alt="Movie Thumb">
                                    <span class="rating">9.2</span>
                                    <div class="thumb-hover">
                                        <a class="play-video play" href="https://vimeo.com/301350869">Play</a>
                                        <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Wonder Women</p>
                                        <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                                    </div>
                                </div>
                                <!-- <div class="video-details">
                                    <h4 class="video-title"><a href="movie-detail.html">Captain America</a></h4>
                                    <p class="video-release-on">22 Jun 2017 &nbsp;
                                      <span><a href="" class="text-info">Details</a></span>
                                    </p>
                                </div> -->
                                <h6 class="text-white" style="font-weight:bold;">Episode 3 : The War Began</h6>
                            </div>
                            <div class="video-item">
                                <div class="thumb-wrap">
                                  <img src="{{url('images/movies/two.png')}}" alt="Movie Thumb">
                                    <span class="rating">9.2</span>
                                    <div class="thumb-hover">
                                        <a class="play-video play" href="https://vimeo.com/301350869">Play</a>
                                        <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Wonder Women</p>
                                        <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                                    </div>
                                </div>
                                <!-- <div class="video-details">
                                    <h4 class="video-title"><a href="movie-detail.html">The City Truck</a></h4>
                                    <p class="video-release-on">22 Jun 2017 &nbsp;
                                      <span><a href="" class="text-info">Details</a></span>
                                    </p>
                                </div> -->
                                <h6 class="text-white" style="font-weight:bold;">Episode 4 : The War Began</h6>
                            </div>
                            <div class="video-item">
                                <div class="thumb-wrap">
                                  <img src="{{url('images/movies/one.png')}}" alt="Movie Thumb">
                                    <span class="rating">9.2</span>
                                    <div class="thumb-hover">
                                        <a class="play-video play" href="https://vimeo.com/301355611">Play</a>
                                        <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Wonder Women</p>
                                        <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                                    </div>
                                </div>
                                <!-- <div class="video-details">
                                    <h4 class="video-title"><a href="movie-detail.html">Dark Night 2</a></h4>
                                    <p class="video-release-on">22 Jun 2017 &nbsp;
                                      <span><a href="" class="text-info">Details</a></span>
                                    </p>
                                </div> -->
                                <h6 class="text-white" style="font-weight:bold;">Episode 5 : The War Began</h6>
                            </div>
                            <div class="video-item">
                                <div class="thumb-wrap">
                                  <img src="{{url('images/movies/five.png')}}" alt="Movie Thumb">
                                    <span class="rating">9.2</span>
                                    <div class="thumb-hover">
                                        <a class="play-video play" href="https://vimeo.com/301355611">Play</a>
                                        <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Wonder Women</p>
                                        <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                                    </div>
                                </div>
                                <!-- <div class="video-details">
                                    <h4 class="video-title"><a href="movie-detail.html">Wonder Women</a></h4>
                                    <p class="video-release-on">22 Jun 2017 &nbsp;
                                      <span><a href="" class="text-info">Details</a></span>
                                    </p>
                                </div> -->
                                <h6 class="text-white" style="font-weight:bold;">Episode 6 : The War Began</h6>
                            </div>
                            <div class="video-item">
                                <div class="thumb-wrap">
                                  <img src="{{url('images/movies/two.png')}}" alt="Movie Thumb">
                                    <span class="rating">9.2</span>
                                    <div class="thumb-hover">
                                        <a class="play-video play" href="https://vimeo.com/301355611">Play</a>
                                        <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Wonder Women</p>
                                        <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                                    </div>
                                </div>
                                <!-- <div class="video-details">
                                    <h4 class="video-title"><a href="movie-detail.html">Captain America</a></h4>
                                    <p class="video-release-on">22 Jun 2017 &nbsp;
                                      <span><a href="" class="text-info">Details</a></span>
                                    </p>
                                 </div> -->
                            </div>
                            <div class="video-item">
                                <div class="thumb-wrap">
                                  <img src="{{url('images/movies/one.png')}}" alt="Movie Thumb">
                                    <span class="rating">9.2</span>
                                    <div class="thumb-hover">
                                        <a class="play-video play" href="https://vimeo.com/301355611">Play</a>
                                        <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Wonder Women</p>
                                        <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                                    </div>
                                </div>
                                <!-- <div class="video-details">
                                    <h4 class="video-title"><a href="movie-detail.html">The City Truck</a></h4>
                                    <p class="video-release-on">22 Jun 2017 &nbsp;
                                      <span><a href="" class="text-info">Details</a></span>
                                    </p>
                                </div> -->
                            </div>
                            <div class="video-item">
                                <div class="thumb-wrap">
                                  <img src="{{url('images/movies/five.png')}}" alt="Movie Thumb">
                                    <span class="rating">9.2</span>
                                    <div class="thumb-hover">
                                        <a class="play-video play" href="https://vimeo.com/301355611">Play</a>
                                        <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Wonder Women</p>
                                        <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                                    </div>
                                </div>
                                <!-- <div class="video-details">
                                    <h4 class="video-title"><a href="movie-detail.html">Dark Night 2</a></h4>
                                    <p class="video-release-on">22 Jun 2017 &nbsp;
                                      <span><a href="" class="text-info">Details</a></span>
                                    </p>
                                </div> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
  </div>
@endsection
