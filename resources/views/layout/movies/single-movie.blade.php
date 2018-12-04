@extends('layout.main')

@section('content')

    <div class="main-wrap">
        <div class="section section-padding video-single-section">
           <div class="container">
             <div class="video-single">
                   <div class="row">
                       <div class="col-xs-12">
                           <div class="content-wrap">
                               <div class="video-thumb">
                                   <img src="{{asset('uploads/images/'.$movie->thumbnail)}}" width="250" height="400" alt="Movie thumb">
                               </div>
                               <div class="video-details xs-top-40">
                                 <div class="single-section">
                                     <h3 class="video-title">{{ $movie->title }}</h3>
                                     <p class="video-release-date"><label>Year Released : </label> &nbsp;{{ $movie->year_released }}</p>
                                     <div class="video-attributes">
                                         <p class="cast"><label>Actors : </label> Tata Tong, Megan, Carri Dummy Crud</p>
                                         <p class="duration"><label>Time : &nbsp; </label>{{ $movie->duration }} hrs</p>
                                         <p class="genre"><label>Genres : &nbsp; </label>{{ $movie->category->name }}</p>
                                         <p class="country"><label>Country : </label> USA</p>
                                         <p class="language"><label>Language : </label> English</p>
                                     </div>

                                     <a href="{{ $movie->url }}" style="margin-top:10px" class="play-video"><i class="fa fa-play"></i></a>
                                 </div>
                                 <div class="single-section video-entry">
                                     <h3 class="single-section-title" style="margin-top:-20px">Movie Story</h3>
                                     <div class="section-content">
                                         <p>{{ $movie->description }}</p>
                                     </div>
                                 </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </div>

        <div class="section section-padding tvshow-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-xs-6">
                        <div class="section-header">
                            <h2 class="section-title section-color">Related Movies {{ now()->year }}</h2>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <!-- <a class="all-link" href="#">See All Shows</a> -->
                    </div>
                </div>

                <div class="row">
                    <div class="owl-carousel video-carousel tvshow-carousel" id="tvshow-carousel">
                        @foreach($related_movies as $related)
                          @if($related->category->name == 'Movie')
                            <div class="video-item">
                                <div class="thumb-wrap">
                                    <img src="{{asset('uploads/images/'.$related->thumbnail)}}" alt="{{ $related->title }}">
                                    <span class="rating">9.2</span>
                                    <div class="thumb-hover">
                                        <!-- <a class="play-video" href="{{ $movie->url }}"><i class="fa fa-play"></i></a> -->
                                        <p style="margin-top:80px;font-weight:bold;color:#ffffff" class="text-center video-title">{{ $related->title }}</p>
                                        <p style="margin-top:-10px;font-weight:bold;color:#ffffff" class="text-center">{{ now()->year }}</p>
                                        <div style="margin-top:60px" class="text-center">
                                            <a href="{{url('movie/stream/single-movie/'.$related->id)}}" style="color:#ffffff;" id="next" class="mybtn mybtn-purple continue text-white">Play</a>
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


    </div>

@endsection
