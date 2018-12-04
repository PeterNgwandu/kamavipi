@extends('admin.main')

@section('content')
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
        <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Manage Categories and Tags</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card">
                                            <div class="card-header bg-success">
                                                <h5 class="card-title text-white">Add Categories</h5>
                                            </div>
                                            <div class="card-body">
                                                <form class="" action="{{route('category')}}" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" name="name" class="form-control" value="" placeholder="Enter Category">
                                                        </div>
                                                        <button type="submit" class="btn btn-success" name="button">Add Category</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                      @if($flash = session('message'))
                                          <div class="alert alert-success" id="flash-category" style="position:absolute;z-index:10;bottom:20px;right:20px;">
                                              {{ $flash }}
                                          </div>
                                      @endif
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-lg-12">
                                      <div class="card">
                                          <div class="card-header bg-success">
                                              <h5 class="card-title text-white">Manage Categories</h5>

                                          </div>
                                          <div class="card-body">
                                            <div class="table-responsive">
                                              <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                  <tr>
                                                      <th>Category Id</th>
                                                      <th>Category Name</th>
                                                      <th>Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach ($categories as $category)
                                                      <tr>
                                                          <td>{{ $category->id }}</td>
                                                          <td>{{ $category->name }}</td>
                                                          <td>
                                                            <a href="{{url('admin/category/id='.$category->id)}}" class="btn btn-primary">Update</a>
                                                            <a href="category/{{$category->id}}" class="btn btn-danger">Delete</a>
                                                          </td>
                                                      </tr>
                                                  @endforeach


                                                </tbody>
                                              <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Start date</th>
                                                </tr>
                                              </tfoot>
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
    </div>
@endsection
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function() {
       $('#flash-category').delay(500).fadeIn('normal', function() {
          $(this).delay(2500).fadeOut();
       });
    });
</script>
