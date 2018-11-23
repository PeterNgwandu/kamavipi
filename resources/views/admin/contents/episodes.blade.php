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
                              <form class="" action="index.html" method="post">
                                  <div class="row">
                                      <div class="col">
                                          <input type="text" name="" class="form-control" value="" placeholder="Episode Title">
                                      </div>
                                      <div class="col">
                                          <select class="form-control" name="">
                                              <option selected="selected" value="">2018</option>
                                              <option value="">2017</option>
                                              <option value="">2016</option>
                                              <option value="">2015</option>
                                              <option value="">2014</option>
                                              <option value="">2013</option>
                                              <option value="">2012</option>
                                              <option value="">2011</option>
                                              <option value="">2010</option>
                                              <option value="">2009</option>
                                          </select>
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col">
                                          <input type="number" name="" class="form-control" value="" placeholder="Episode Number">
                                      </div>
                                      <div class="col">
                                          <input type="number" name="" class="form-control" value="" placeholder="Duration">
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col">
                                          <input type="text" name="" class="form-control" value="" placeholder="Url">
                                      </div>
                                      <div class="col">
                                          <input type="text" name="" class="form-control" value="" placeholder="Tags">
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="form-group">
                                      <textarea class="form-control" placeholder="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Choose Thumbnail (Cover)</label>
                                        </div>
                                      </div>
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
