<!-- Movie Section -->
<div class="section section-padding movie-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-6">
                <div class="section-header">
                    <h2 class="section-title section-color">Latest Movies {{ now()->year }}</h2>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <!-- <a class="all-link section-color" href="movie.html">See All Movies</a> -->
            </div>
        </div>

        <div class="row">
            <div class="owl-carousel video-carousel" id="video-carousel">
                <div class="video-item">
                    <div class="thumb-wrap">
                        <img src="images/movies/five.png" alt="Movie Thumb">
                        <span class="rating">9.2</span>
                        <div class="thumb-hover">
                            <!-- <a class="play-video play" href="{{url('/movie/stream')}}">Play</a> -->
                            <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Wonder Women</p>
                            <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                            <div style="margin-top:60px" class="text-center">
                                <a href="{{url('/movie/stream')}}" style="color:#ffffff;" id="next" class="mybtn mybtn-purple continue text-white">Play</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="video-details">
                        <h4 class="video-title"><a href="movie-detail.html">Wonder Women</a></h4>
                        <p class="video-release-on">{{ now()->year }}</p>
                    </div> -->
                </div>
                <div class="video-item">
                    <div class="thumb-wrap">
                        <img src="images/movies/one.png" alt="Movie Thumb">
                        <span class="rating">9.2</span>
                        <div class="thumb-hover">
                            <a class="play-video play" href="https://vimeo.com/301350869">Play</a>
                            <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Captain America</p>
                            <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                        </div>
                    </div>
                    <!-- <div class="video-details">
                        <h4 class="video-title"><a href="movie-detail.html">Captain America</a></h4>
                        <p class="video-release-on">{{ now()->year }}</p>
                    </div> -->
                </div>
                <div class="video-item">
                    <div class="thumb-wrap">
                        <img src="images/movies/two.png" alt="Movie Thumb">
                        <span class="rating">9.2</span>
                        <div class="thumb-hover">
                            <a class="play-video play" href="https://vimeo.com/301355611">Play</a>
                            <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">The City Truck</p>
                            <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                        </div>
                    </div>
                    <!-- <div class="video-details">
                        <h4 class="video-title"><a href="movie-detail.html">The City Truck</a></h4>
                        <p class="video-release-on">{{ now()->year }}</p>
                    </div> -->
                </div>
                <div class="video-item">
                    <div class="thumb-wrap">
                        <img src="images/movies/three.png" alt="Movie Thumb">
                        <span class="rating">9.2</span>
                        <div class="thumb-hover">
                            <a class="play-video play" href="https://vimeo.com/301355611">Play</a>
                            <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Dark Night</p>
                            <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                        </div>
                    </div>
                    <!-- <div class="video-details">
                        <h4 class="video-title"><a href="movie-detail.html">Dark Night 2</a></h4>
                        <p class="video-release-on">{{ now()->year }}</p>
                    </div> -->
                </div>
                <div class="video-item">
                    <div class="thumb-wrap">
                        <img src="images/movies/four.png" alt="Movie Thumb">
                        <span class="rating">9.2</span>
                        <div class="thumb-hover">
                            <a class="play-video play" href="https://www.youtube.com/watch?v=5cY5PHE4x_g">Play</a>
                            <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Wonder Women</p>
                            <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                        </div>
                    </div>
                    <!-- <div class="video-details">
                        <h4 class="video-title"><a href="movie-detail.html">Wonder Women</a></h4>
                        <p class="video-release-on">{{ now()->year }}</p>
                    </div> -->
                </div>
                <div class="video-item">
                    <div class="thumb-wrap">
                        <img src="images/movies/five.png" alt="Movie Thumb">
                        <span class="rating">9.2</span>
                        <div class="thumb-hover">
                            <a class="play-video play" href="https://www.youtube.com/watch?v=5cY5PHE4x_g">Play</a>
                            <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Wonder Women</p>
                            <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                        </div>
                    </div>
                    <!-- <div class="video-details">
                        <h4 class="video-title"><a href="movie-detail.html">Captain America</a></h4>
                        <p class="video-release-on">{{ now()->year }}</p>
                    </div> -->
                </div>
                <div class="video-item">
                    <div class="thumb-wrap">
                        <img src="images/movies/one.png" alt="Movie Thumb">
                        <span class="rating">9.2</span>
                        <div class="thumb-hover">
                            <a class="play-video play" href="https://www.youtube.com/watch?v=5cY5PHE4x_g">Play</a>
                            <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Wonder Women</p>
                            <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                        </div>
                    </div>
                    <!-- <div class="video-details">
                        <h4 class="video-title"><a href="movie-detail.html">The City Truck</a></h4>
                        <p class="video-release-on">{{ now()->year }}</p>
                    </div> -->
                </div>
                <div class="video-item">
                    <div class="thumb-wrap">
                        <img src="images/movies/two.png" alt="Movie Thumb">
                        <span class="rating">9.2</span>
                        <div class="thumb-hover">
                            <a class="play-video play" href="https://www.youtube.com/watch?v=5cY5PHE4x_g">Play</a>
                            <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">Wonder Women</p>
                            <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                        </div>
                    </div>
                    <!-- <div class="video-details">
                        <h4 class="video-title"><a href="movie-detail.html">Dark Night 2</a></h4>
                        <p class="video-release-on">{{ now()->year }}</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Movie Section End -->
