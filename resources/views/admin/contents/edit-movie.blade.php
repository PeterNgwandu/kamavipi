@extends('admin.main')

@section('content')
  <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
      <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <div class="card-title">Edit Movie</div>
                          </div>
                          <div class="card-body">

                            <form class="" action="{{url('/movie/edit/'.$movie->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Movie Title">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="url" class="form-control" value="{{old('url')}}" placeholder="Url">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <input type="number" name="duration" class="form-control" value="{{old('duration')}}" placeholder="Duration">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="year_released" class="form-control" value="{{old('year_released')}}" placeholder="Year Released">
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
                                    <textarea class="form-control" name="description" value="{{old('description')}}" placeholder="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <hr>

                                <button type="submit" class="btn btn-primary" name="button">Update</button>

                            </form>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
