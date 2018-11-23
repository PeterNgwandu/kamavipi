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
            <form class="navbar-form navbar-left">
                <div class="row">
                    <div style="margin-top:3%" class="col col-md-10">
                      <div class="inner-addon right-addon">
                          <i class="glyphicon glyphicon-search"></i>
                          <input type="text" name="search" class="form-control" placeholder="Search Here" value="">
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
                </li>
                <li class="dropdown">
                    <a href="#">Pages</a>
                    <ul class="dropdown-menu">
                        <li><a href="movie-list.html">Movies</a></li>
                        <li><a href="movie-detail.html">Movie Detail</a></li>
                        <li><a href="tv-show.html">TV Show</a></li>
                        <li><a href="celebrities.html">Celebrities</a></li>
                        <li><a href="celebrity-detail.html">Celebrity Details</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="news-detail.html">News Details</a></li>
                    </ul>
                </li> -->
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
            </ul>
        </div>
    </div>
</nav>
<!-- Main Header End -->
