@extends('layout.main')

@section('content')

  <div class="main-wrap">
    <!-- Page Header -->
    <div class="page-header single-video-header">
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title">Dark Night - 2</h2>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="section section-padding video-single-section">
        <div class="container">
            <div class="video-single">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="thumb-wrap single-thumb">
                            <img src="{{url('images/movies/movie-single.png')}}" alt="Dark Night - 2">
                            <div class="thumb-hover">
                                <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="content-wrap">
                            <div class="video-thumb">
                                <img src="{{url('images/movies/4.png')}}" alt="Movie thumb">
                            </div>
                            <div class="video-details xs-top-40">
                                <div class="single-section">
                                    <h3 class="video-title">Darl Night - 2</h3>
                                    <p class="video-release-date">July 4, 2017</p>
                                    <div class="ratings-wrap">
                                        <span class="rating">10</span>
                                        <div class="expanded-rating">
                                            <div class="star-rating">
                                                <span class="star on"></span>
                                                <span class="star on"></span>
                                                <span class="star on"></span>
                                                <span class="star on"></span>
                                                <span class="star on"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                            </div>
                                            <div class="user-voted">
                                                <i class="fa fa-user"></i> 150 Votes
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-attributes">
                                        <p class="cast"><label>Actors:</label> Tata Tong, Megan, Carri Dummy Crud</p>
                                        <p class="duration"><label>Time:</label> 156 Minutes</p>
                                        <p class="genre"><label>Genres:</label> Action, Drama</p>
                                        <p class="country"><label>Country: </label> USA</p>
                                        <p class="language"><label>Language: </label> English</p>
                                    </div>
                                    <div class="share-on">
                                        <label>Share: </label>
                                        <div class="share-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-section video-entry">
                                    <h3 class="single-section-title">Movie Story</h3>
                                    <div class="section-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has.</p>
                                    </div>
                                </div>
                                <div class="single-section video-entry">
                                    <h3 class="single-section-title">Video &amp; Photo</h3>
                                    <div class="section-content">
                                        <div id="single-gallery-1" class="owl-carousel single-gallery-slider">
                                            <img class="img-responsive" src="{{url('images/slider/single-1.png')}}" alt="Single Slider Image">
                                            <img class="img-responsive" src="{{url('images/slider/single-2.png')}}" alt="Single Slider Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Movies -->
    <div class="section section-padding top-padding-normal movie-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="section-header">
                        <h2 class="section-title">Latest Movies</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="owl-carousel video-carousel" id="video-carousel">
                    <div class="video-item">
                        <div class="thumb-wrap">
                            <img src="{{url('images/movies/1.png')}}" alt="Movie Thumb">
                            <span class="rating">9.2</span>
                            <div class="thumb-hover">
                                <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-details">
                            <h4 class="video-title"><a href="movie-detail.html">Wonder Women</a></h4>
                            <p class="video-release-on">22 Jun 2017</p>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="thumb-wrap">
                            <img src="{{url('images/movies/2.png')}}" alt="Movie Thumb">
                            <span class="rating">9.2</span>
                            <div class="thumb-hover">
                                <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-details">
                            <h4 class="video-title"><a href="movie-detail.html">Captain America</a></h4>
                            <p class="video-release-on">22 Jun 2017</p>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="thumb-wrap">
                            <img src="{{url('images/movies/3.png')}}" alt="Movie Thumb">
                            <span class="rating">9.2</span>
                            <div class="thumb-hover">
                                <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-details">
                            <h4 class="video-title"><a href="movie-detail.html">The City Truck</a></h4>
                            <p class="video-release-on">22 Jun 2017</p>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="thumb-wrap">
                            <img src="{{url('images/movies/4.png')}}" alt="Movie Thumb">
                            <span class="rating">9.2</span>
                            <div class="thumb-hover">
                                <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-details">
                            <h4 class="video-title"><a href="movie-detail.html">Dark Night 2</a></h4>
                            <p class="video-release-on">22 Jun 2017</p>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="thumb-wrap">
                            <img src="{{url('images/movies/1.png')}}" alt="Movie Thumb">
                            <span class="rating">9.2</span>
                            <div class="thumb-hover">
                                <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-details">
                            <h4 class="video-title"><a href="movie-detail.html">Wonder Women</a></h4>
                            <p class="video-release-on">22 Jun 2017</p>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="thumb-wrap">
                            <img src="{{url('images/movies/2.png')}}" alt="Movie Thumb">
                            <span class="rating">9.2</span>
                            <div class="thumb-hover">
                                <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-details">
                            <h4 class="video-title"><a href="movie-detail.html">Captain America</a></h4>
                            <p class="video-release-on">22 Jun 2017</p>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="thumb-wrap">
                            <img src="{{url('images/movies/3.png')}}" alt="Movie Thumb">
                            <span class="rating">9.2</span>
                            <div class="thumb-hover">
                                <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-details">
                            <h4 class="video-title"><a href="movie-detail.html">The City Truck</a></h4>
                            <p class="video-release-on">22 Jun 2017</p>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="thumb-wrap">
                            <img src="{{url('images/movies/4.png')}}" alt="Movie Thumb">
                            <span class="rating">9.2</span>
                            <div class="thumb-hover">
                                <a class="play-video" href="https://www.youtube.com/watch?v=5cY5PHE4x_g"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-details">
                            <h4 class="video-title"><a href="movie-detail.html">Dark Night 2</a></h4>
                            <p class="video-release-on">22 Jun 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest Movies End -->

  </div>

@endsection
