<!-- TV Show Section -->
<div class="section section-padding tvshow-section" style="margin-top:-50px !important;">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-6">
                <div class="section-header">
                    <h4 class="section-title section-color">Movies {{ now()->year }}</h4>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6">
                <!-- <a class="all-link" href="#">See All Shows</a> -->
            </div>
        </div>

        <div class="row">
            <div class="owl-carousel video-carousel tvshow-carousel" id="tvshow-carousel">
                @foreach($content as $movie)
                  @if($movie->category->name == 'Movie')
                    <div class="video-item">
                        <div class="thumb-wrap">
                            <img src="{{asset('uploads/images/'.$movie->thumbnail)}}" alt="{{ $movie->title }}">
                            <span class="rating">9.2</span>
                            <div class="thumb-hover">
                                <!-- <a class="play-video" href="{{ $movie->url }}"><i class="fa fa-play"></i></a> -->
                                <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">{{ $movie->title }}</p>
                                <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                                <div style="margin-top:60px" class="text-center">
                                    <a href="{{url('movie/stream/single-movie/'.$movie->id)}}" style="color:#ffffff;" id="next" class="mybtn mybtn-purple continue text-white">Play</a>
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
<!-- TV Show Section End -->
