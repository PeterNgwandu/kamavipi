<!-- Top Header -->
@if(!Auth::check())
<header class="topbar text-white" id="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-8">
                <p class="topbar-intro">Enjoy your favourite movie, TV show &amp; video in a single subscription at $60</p>
            </div>
            <div class="col-lg-6 col-sm-4">
                <div class="topbar-right-btns">

                        <a class="btn " style="background-color:#111111; color:#ffffff" href="/login">Log In</a>
                        <a class="btn " style="background-color:#111111; color:#ffffff" href="/register">Register</a>

                </div>
            </div>
        </div>
    </div>
</header>
@endif
<!-- Top Header End -->
