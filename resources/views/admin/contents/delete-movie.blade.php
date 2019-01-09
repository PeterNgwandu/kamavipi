@extends('admin.main')

@section('content')
  <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
      <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <div class="card-title">Delete Movie</div>
                          </div>
                          <div class="card-body">
                            <div class="alert alert-success" role="alert" style="padding: 20px; margin-top: 20px">
                                {{$movie->title}} deleted successfully...
                            </div>

                            <div>
                                <a href="{{ url('/admin/content/create') }}" class="btn btn-outline-primary"> Go back home </a>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
