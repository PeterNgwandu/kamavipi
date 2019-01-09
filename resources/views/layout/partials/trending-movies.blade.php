<!-- Movie Section -->
<div class="section section-padding movie-section" style="margin-top:-50px !important;">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-6">
                <div class="section-header">
                    <h4 class="section-title section-color">Trending Movies {{ now()->year }}</h4>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <!-- <a class="all-link section-color" href="movie.html">See All Movies</a> -->
            </div>
        </div>

        <div class="row">
            <div class="owl-carousel video-carousel" id="video-carousel">
                @foreach ($content as $movie)
                  @if($movie->category->name == 'Series')
                    <div class="video-item">
                        <div class="thumb-wrap">
                            <img src="{{asset('uploads/images/'.$movie->thumbnail)}}" alt="Movie Thumb">
                            <span class="rating">9.2</span>
                            <div class="thumb-hover">
                                <!-- <a class="play-video play" href="{{url('/movie/stream')}}">Play</a> -->
                                <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">{{$movie->title}}</p>
                                <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                                <div style="margin-top:60px" class="text-center">
                                    <a href="{{url('/movie/stream/'.$movie->id)}}" style="color:#ffffff;" id="next" class="mybtn mybtn-purple continue text-white">Play</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Movie Section End -->
