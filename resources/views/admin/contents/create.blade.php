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
                            <h4 class="card-title">Create Content</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills mb-2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true">Movie/Series</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false">Episodes</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home2" role="tabpanel">
                                    <div class="">
                                        <form class="" action="{{route('create')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" name="title" class="form-control" value="" placeholder="Movie Title">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="url" class="form-control" value="" placeholder="Url">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="number" name="duration" class="form-control" value="" placeholder="Duration">
                                                </div>
                                                <div class="col">
                                                    <input type="number" name="year_released" class="form-control" value="" placeholder="Year Released">
                                                </div>
                                                <div class="col">
                                                    <select class="form-control" name="category_id">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <textarea class="form-control" name="description" placeholder="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <hr>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="thumbnail" id="customFile" required>
                                                <label class="custom-file-label" for="customFile">Choose Thumbnail (Cover)</label>
                                            </div>
                                            <hr>
                                            <button type="submit" class="btn btn-primary" name="button">Create</button>

                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact2" role="tabpanel">
                                  <div class="py-4">
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
                                          @foreach($content as $movie)
                                            <tr>
                                                <td>{{ $movie->title }}</td>
                                                <td>{{ $movie->category->name }}</td>
                                                <td>{{ $movie->duration }}</td>
                                                <td>{{ $movie->year_released }}</td>
                                                <td>@if($movie->category->name == 'Series')
                                                        <a class="btn btn-primary" href="{{ url('admin/add/episodes/'.$movie->id) }}">
                                                          Add Episodes
                                                        </a>
                                                </td>@endif
                                            </tr>
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

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Add Episode</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
            </div>
            <div class="modal-body">
                <form class="" action="{{route('add-episodes', $movie->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="content_id" value="">
                            <input type="text" name="title" class="form-control" value="" placeholder="Episode Title">
                        </div>
                        <div class="col">
                            <input type="text" name="url" class="form-control" value="" placeholder="Url">
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <input type="number" name="duration" class="form-control" value="" placeholder="Duration">
                        </div>
                        <div class="col">
                            <input type="number" name="episode_number" class="form-control" value="" placeholder="Episode Number">
                        </div>
                        <div class="col">
                            <input type="number" name="year_released" class="form-control" value="" placeholder="Year Released">
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                          <div class="custom-file">
                              <input type="file" name="thumbnail" class="custom-file-input" id="customFile" required>
                              <label class="custom-file-label" for="customFile">Choose Thumbnail (Cover)</label>
                          </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <textarea class="form-control" name="description" placeholder="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                   </form>
            </div>

        </div>
    </div>
</div>
