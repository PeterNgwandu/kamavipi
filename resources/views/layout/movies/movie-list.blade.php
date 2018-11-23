@extends('layout.main')

@section('content')

<!-- Page Header -->
<div class="page-header">
  <div class="page-header-overlay">
      <div class="container">
          <h2 class="page-title">Latest Movies</h2>
      </div>
  </div>
</div>
<!-- Page Header End -->

<div class="main-wrap">
        <div class="section section-padding video-list-section">
            <div class="container">
                <div class="video-list">
                    <div class="video-item">
                        <div class="video-thumb">
                            <img src="{{url('images/movies/1.png')}}" alt="Movie thumb">
                        </div>
                        <div class="video-details">
                            <h3 class="video-title"><a href="/movie/movie-detail">Wonder Women</a></h3>
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
                        <div class="watch-now-wrap">
                            <a class="btn-watch-now" href="/movie/movie-detail">Watch Now</a>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-thumb">
                            <img src="{{url('images/movies/2.png')}}" alt="Movie thumb">
                        </div>
                        <div class="video-details">
                            <h3 class="video-title"><a href="/movie/movie-detail">Captain Underpants</a></h3>
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
                        <div class="watch-now-wrap">
                            <a class="btn-watch-now" href="/movie/movie-detail">Watch Now</a>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-thumb">
                            <img src="{{url('images/movies/3.png')}}" alt="Movie thumb">
                        </div>
                        <div class="video-details">
                            <h3 class="video-title"><a href="/movie/movie-detail">City Truck</a></h3>
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
                        <div class="watch-now-wrap">
                            <a class="btn-watch-now" href="/movie/movie-detail">Watch Now</a>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-thumb">
                            <img src="{{url('images/movies/4.png')}}" alt="Movie thumb">
                        </div>
                        <div class="video-details">
                            <h3 class="video-title"><a href="/movie/movie-detail">Dark Night - 2</a></h3>
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
                        <div class="watch-now-wrap">
                            <a class="btn-watch-now" href="/movie/movie-detail">Watch Now</a>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-thumb">
                            <img src="{{url('images/movies/5.png')}}" alt="Movie thumb">
                        </div>
                        <div class="video-details">
                            <h3 class="video-title"><a href="/movie/movie-detail">Devine Girl</a></h3>
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
                        <div class="watch-now-wrap">
                            <a class="btn-watch-now" href="/movie/movie-detail">Watch Now</a>
                        </div>
                    </div>
                    <div class="video-item">
                        <div class="video-thumb">
                            <img src="{{url('images/movies/6.png')}}" alt="Movie thumb">
                        </div>
                        <div class="video-details">
                            <h3 class="video-title"><a href="/movie/movie-detail">National Heroes</a></h3>
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
                        <div class="watch-now-wrap">
                            <a class="btn-watch-now" href="/movie/movie-detail">Watch Now</a>
                        </div>
                    </div>

                    <!-- Video Pagination -->
                    <nav class="navigation pagination" role="navigation">
                        <div class="nav-links">
                            <span class="current-page">Page 2 of 14</span>
                            <a class="prev page-numbers" href="#"><i class="fa fa-caret-left"></i></a>
                            <a class="page-numbers" href="#">1</a>
                            <span class="page-numbers current">2</span>
                            <a class="page-numbers" href="#">3</a>
                            <a class="page-numbers" href="#">4</a>
                            <a class="next page-numbers" href="#"><i class="fa fa-caret-right"></i></a>
                        </div>
                    </nav>
                    <!-- Video Pagination End -->
                </div>
            </div>
        </div>
    </div>


@endsection
