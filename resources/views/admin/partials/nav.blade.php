<nav class="navbar navbar-expand-md navbar-dark bg-primary-dark d-print-none">
      <div class="container">
          <a class="navbar-brand" href="{{route('/admin')}}">
              <img src="{{url('images/template/logo_white.png')}}" alt="Kamavipi Logo">
          </a>
          <button class="navbar-toggler navbar-toggler-right d-md-none d-lg-none" type="button" data-toggle="sidebar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="mainNavbar">
              <ul class="navbar-nav align-items-center flex-auto">
                  <li class="nav-item dropdown">
                      <a href="{{url('/admin')}}" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Contents</a>
                      <div class="dropdown-menu">
                          <a href="{{route('content.create')}}" class="dropdown-item dropdown-item-action">Create Contents</a>
                          <a href="{{url('/admin/contets/summary')}}" class="dropdown-item dropdown-item-action ">View Content Summary</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('cat-tag') }}" class="nav-link" aria-expanded="false">Manage Categories</a>
                  </li>
                  <!--<li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Layouts</a>
                      <div class="dropdown-menu">
                          <a href="index.html" class="dropdown-item dropdown-item-action">Default Layout (fluid)</a>
                          <a href="index-drawer-light.html" class="dropdown-item dropdown-item-action">Sidebar - Light Color</a>
                          <a href="index-navbar-primary.html" class="dropdown-item dropdown-item-action">Navbar - Primary</a>
                          <a href="index-drawer-right.html" class="dropdown-item dropdown-item-action">Layout Sidebar Right</a>
                          <a href="index-fixed.html" class="dropdown-item dropdown-item-action ">Fixed Layout</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">UI</a>
                      <div class="dropdown-menu">
                          <a href="ui-buttons.html" class="dropdown-item">Buttons</a>
                          <a href="ui-colors.html" class="dropdown-item">Colors</a>
                          <a href="ui-grid.html" class="dropdown-item">Grid</a>
                          <a href="ui-typography.html" class="dropdown-item">Typography</a>
                          <a href="ui-drag-drop.html" class="dropdown-item">Drag &amp; Drop</a>
                          <a href="ui-tables.html" class="dropdown-item">Tables</a>
                          <a href="ui-notifications.html" class="dropdown-item">Notifications</a>
                          <a href="ui-loaders.html" class="dropdown-item">Loaders</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Pages</a>
                      <div class="dropdown-menu">
                          <a href="tickets.html" class="dropdown-item">Tickets</a>
                          <a href="blog-post.html" class="dropdown-item">Blog Post</a>
                          <a href="profile.html" class="dropdown-item">Profile</a>
                          <a href="account.html" class="dropdown-item">Account</a>
                          <a href="lessons.html" class="dropdown-item">Lessons</a>
                          <a href="lessons_second.html" class="dropdown-item">Lessons 2</a>
                          <a href="learning.html" class="dropdown-item">Learning</a>
                          <a href="activity-timeline.html" class="dropdown-item">Activity Timeline</a>
                          <a href="error.html" class="dropdown-item">Error Page</a>
                          <a href="cart.html" class="dropdown-item">Shopping cart</a>
                          <a href="checkout.html" class="dropdown-item">Checkout</a>
                          <a href="invoice.html" class="dropdown-item">Invoice</a>
                          <a href="pricing.html" class="dropdown-item">Pricing</a>
                          <a href="signup.html" class="dropdown-item">Sign Up</a>
                          <a href="login.html" class="dropdown-item">Login</a>
                          <a href="forgot-password.html" class="dropdown-item">Forgot Password</a>
                      </div>
                  </li> -->
                  <!-- <li class="nav-item nav-link flex-auto">
                      <div class="form-group m-0">
                          <div class="input-group input-group--inline">
                              <div class="input-group-addon">
                                  <i class="material-icons">search</i>
                              </div>
                              <input type="text" class="form-control" name="search">
                          </div>
                      </div>
                  </li> -->
              </ul>
              <ul class="navbar-nav">

                  <li class="nav-item dropdown notifications align-self-center">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <i class="material-icons align-middle">notifications_active</i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <div class="dropdown-header d-flex align-items-center">
                              <span>Notifications</span>
                              <a href="#" class="ml-auto">
                                  <i class="material-icons align-middle md-18">close</i>
                              </a>
                          </div>
                          <div class="dropdown-item flex-column align-items-start">
                              <div class="w-100"><a href="#">themefy</a> received a new quote</div>
                              <div class="w-100 text-muted">4 secs ago</div>
                          </div>
                          <div class="dropdown-item flex-column align-items-start">
                              <div class="w-100"><a href="#">karen</a> received a new quote</div>
                              <div class="w-100 text-muted">25 mins ago</div>
                          </div>
                          <div class="dropdown-item flex-column align-items-start">
                              <div class="w-100"><a href="#">jim</a> received a new quote</div>
                              <div class="w-100 text-muted">7 hrs ago</div>
                          </div>
                          <div class="dropdown-item flex-column text-right">
                              <a href="#">View All <i class="material-icons md-18 align-middle">arrow_forward</i></a>
                          </div>
                      </div>
                  </li>
                  <li class="nav-item dropdown ml-2">
                      <a href="#" class="nav-link dropdown-toggle dropdown-clear-caret" data-toggle="dropdown" aria-expanded="false">
                          <span class="d-none d-lg-inline-block">My Dashboard</span> <img src="{{url('assets/admin/assets/images/avatars/andrew-robles-300868.jpg')}}" class="img-fluid rounded-circle ml-1" width="35" alt="">
                      </a>

                      <div class="dropdown-menu dropdown-menu-right">
                          <a href="account.html" class="dropdown-item dropdown-item-action"><i class="material-icons md-18 align-middle mr-1">lock</i> <span class="align-middle">Account</span></a>
                          <a href="profile.html" class="dropdown-item dropdown-item-action"><i class="material-icons md-18 align-middle mr-1">account_circle</i> <span class="align-middle">Profile</span></a>
                          <a href="#" class="dropdown-item dropdown-item-action"><i class="material-icons md-18 align-middle mr-1">settings</i> <span class="align-middle">Settings</span></a>
                          <a href="login.html" class="dropdown-item dropdown-item-action"><i class="material-icons md-18 align-middle mr-1">exit_to_app</i> <span class="align-middle">Logout</span></a>
                      </div>
                  </li>
              </ul>
        </div>
    </div>
</nav>
