@extends('admin.main')

@section('content')
  <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
      <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <div class="card-title">Add Episode</div>
                          </div>
                          <div class="card-body">

                              <form class="" action="{{route('add-episodes')}}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <div class="row">
                                      <div class="col">
                                          <input type="hidden" name="content_id" value="{{ $content->id }}">
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
                                  <div class="form-group">
                                      <textarea class="form-control" name="description" placeholder="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                  <hr>

                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="thumbnail" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Choose Thumbnail (Cover)</label>
                                  </div>
                                  <hr>
                                  <button type="submit" class="btn btn-primary" name="button">Add</button>
                              </form>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
