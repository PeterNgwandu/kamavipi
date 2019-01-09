@extends('admin.main')

@section('content')
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
        <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable">
            <div class="container">
                @if($flash = session('message'))
                    <div class="alert alert-success" id="flash" style="position:absolute;z-index:10;bottom:20px;right:20px;">
                        {{ $flash }}
                    </div>
                @endif

                @if($flash = session('message'))
                    <div class="alert alert-success" id="flash-episode" style="position:absolute;z-index:10;bottom:20px;right:20px;">
                        {{ $flash }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Manage Movies</h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                              <thead>
                                <tr>
                                    <th>Series Title</th>
                                    <th>Category</th>
                                    <th>Duration (In Hours)</th>
                                    <th>Year Released</th>
                                    <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($movie as $movie)
                                  @if($movie->category_id == 1)
                                  <tr>
                                      <td>{{ $movie->title }}</td>
                                      <td>{{ $movie->category->name }}</td>
                                      <td>{{ $movie->duration }}</td>
                                      <td>{{ $movie->year_released }}</td>
                                      <td>@if($movie->category->name == 'Movie')
                                              <a class="btn btn-danger" href="{{ url('/movie/delete/'.$movie->id) }}">
                                                Delete
                                              </a>
                                              <a class="btn btn-success" href="{{ url('/movie/edit/'.$movie->id) }}">
                                                Edit
                                              </a>
                                      </td>@endif
                                  </tr>
                                  @endif
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function() {
       $('#flash').delay(500).fadeIn('normal', function() {
          $(this).delay(2500).fadeOut();
       });
    });
</script>

<script type="text/javascript">
    $(function() {
       $('#flash-episode').delay(500).fadeIn('normal', function() {
          $(this).delay(2500).fadeOut();
       });
    });
</script>
