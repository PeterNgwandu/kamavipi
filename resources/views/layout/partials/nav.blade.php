<!-- Main Header -->
<nav class="navbar navbar-default" style="min-height:40px !important;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="{{url('images/template/logo_white.png')}}" alt="Site Logo">
                <!-- <h3 style="margin-top:10%" class="brand-name">KAMAVIPI</h3> -->
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav-collapse">
            <form class="navbar-form navbar-right" style="margin-right:-70px;">
                <div class="row">
                    <div style="margin-top:3%" class="col col-md-10">
                      <div class="inner-addon right-addon">
                          <i class="glyphicon glyphicon-search"></i>
                          <input type="text" name="search" id="search" class="form-control" placeholder="Search Here" value="">
                      </div>
                    </div>
                </div>

            </form>
            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="/movies/new-movies">New Movies</a></li>
                <li class="dropdown">
                    <a href="movie-list.html">Movies</a>
                    <ul class="dropdown-menu">
                        <li><a href="/movies/movie-list">Action</a></li>
                        <li><a href="/movies/movie-list">Stories</a></li>
                        <li><a href="/movies/movie-list">Horrors</a></li>
                        <li><a href="/movies/movie-list">Science Fictions</a></li>
                        <li><a href="/movies/movie-list">Musical</a></li>
                        <li><a href="/movies/movie-list">Wars</a></li>
                    </ul>
                </li> -->
                <li style="font-weight: bold;">
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li style="font-weight: bold;">
                    <a href="#">Movies</a>
                </li>
                <li style="font-weight: bold;">
                    <a href="#">Series</a>
                </li>
                <li style="font-weight: bold;">
                    <a href="#">Music</a>
                </li>
                @if(Auth::check())
                  <li style="font-weight: bold;"><a href="news.html">SUGGESTED <span style="background-color:#4A235A;margin-top:-5px;" class="badge">3</span> </a></li>
                  <li>
                    <!-- Split button -->

                      <div class="btn-group">

                        <button type="" class="btn ">{{ Auth::user()->fname }}</button>
                        <button type="" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="/logout">Logout</a></li>
                          <li><a href="#">Another action</a></li>
                        </ul>
                      </div>

                  </li>
                @endif

                <!-- <li style="font-weight: bold;"><a href="news.html">Upcomming <span style="background-color:#C70039;margin-top:-5px;" class="badge">3</span> </a></li> -->

                <li class="dropdown" style="font-weight: bold;">
                    <a href="news.html">Comming Soon <span style="background-color:#C70039;margin-top:-5px;" class="badge">3</span> </a>
                    <ul class="dropdown-menu notify-drop">
                      <div class="notify-drop-title">
                      	<div class="row">
                      		<div class="col-md-6 col-sm-6 col-xs-6">Comming Soon</div>
                      		<div class="col-md-6 col-sm-6 col-xs-6 text-right"><a href="" class="rIcon allRead" data-tooltip="tooltip" data-placement="bottom" title="tümü okundu."><i class="fa fa-dot-circle-o"></i></a></div>
                      	</div>
                      </div>
                      <!-- end notify title -->
                      <!-- notify content -->
                      <div class="drop-content">
                        @foreach($content as $movie)
                      	<li>
                      		<div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img img-responsive"><img style="height:50px;width:50px;" src="{{asset('uploads/images/'.$movie->thumbnail)}}" alt=""></div></div>
                      		<div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">{{$movie->title}}</a><a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a><br>
                      		<p class="time">Year Released {{$movie->created_at->format('m-d-y')}}</p>
                      		</div>
                      	</li>
                        @endforeach
                      </div>

                    </ul>
                </li>

                <li>
            </ul>
        </div>
    </div>
</nav>
<!-- Main Header End -->
<script>
    $(function () {
  $('[data-tooltip="tooltip"]').tooltip()
	});
</script>
