@extends('admin.main')

@section('content')
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
        <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Content</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills mb-2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true">Movie</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false">Series</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false">Episodes</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home2" role="tabpanel">
                                    <div class="">
                                        <form class="" action="index.html" method="post">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" name="" class="form-control" value="" placeholder="Movie Title">
                                                </div>
                                                <div class="col">
                                                    <input type="number" name="" class="form-control" value="" placeholder="Year Released">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="number" name="" class="form-control" value="" placeholder="Duration">
                                                </div>
                                                <div class="col">
                                                    <select class="form-control" name="" placeholder="Category">
                                                        <option value="">Action</option>
                                                        <option value="">Horor</option>
                                                        <option value="">Adventures</option>
                                                        <option value="">Fiction</option>
                                                        <option value="">Story</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" name="" class="form-control" value="" placeholder="Url">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="" class="form-control" multiple value="" placeholder="Tags">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <hr>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" required>
                                                <label class="custom-file-label" for="customFile">Choose Thumbnail (Cover)</label>
                                            </div>
                                            <hr>
                                            <button type="submit" class="btn btn-primary" name="button">Create</button>

                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile2" role="tabpanel">
                                    <div class="">
                                        <form class="" action="index.html" method="post">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" name="" class="form-control" value="" placeholder="Series Title">
                                                </div>
                                                <div class="col">
                                                    <input type="number" name="" class="form-control" value="" placeholder="Year Released">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="number" name="" class="form-control" value="" placeholder="Duration">
                                                </div>
                                                <div class="col">
                                                    <select class="form-control" name="" placeholder="Category">
                                                        <option value="">Action</option>
                                                        <option value="">Horor</option>
                                                        <option value="">Adventures</option>
                                                        <option value="">Fiction</option>
                                                        <option value="">Story</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" name="" class="form-control" value="" placeholder="Url" disabled>
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="" class="form-control" value="" placeholder="Tags">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="number" name="" class="form-control" value="" placeholder="Season Number">
                                                </div>
                                                <div class="col">
                                                  <div class="custom-file">
                                                      <input type="file" class="custom-file-input" id="customFile" required>
                                                      <label class="custom-file-label" for="customFile">Choose Thumbnail (Cover)</label>
                                                  </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
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
                                              <th>Tags</th>
                                              <th>Current Episodes</th>
                                              <th>Year Released</th>
                                              <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                              <td>Tiger Nixon</td>
                                              <td>System Architect</td>
                                              <td>Edinburgh</td>
                                              <td>61</td>
                                              <td>2011/04/25</td>
                                              <td> <a href="{{route('episodes')}}" class="btn btn-primary">Add Episode</a> </td>
                                          </tr>
                                          <tr>
                                              <td>Garrett Winters</td>
                                              <td>Accountant</td>
                                              <td>Tokyo</td>
                                              <td>63</td>
                                              <td>2011/07/25</td>
                                              <td> <a href="{{route('episodes')}}" class="btn btn-primary">Add Episode</a> </td>
                                          </tr>
                                          <tr>
                                              <td>Ashton Cox</td>
                                              <td>Junior Technical Author</td>
                                              <td>San Francisco</td>
                                              <td>66</td>
                                              <td>2009/01/12</td>
                                              <td> <a href="{{route('episodes')}}" class="btn btn-primary">Add Episode</a> </td>
                                          </tr>
                                          <tr>
                                              <td>Cedric Kelly</td>
                                              <td>Senior Javascript Developer</td>
                                              <td>Edinburgh</td>
                                              <td>22</td>
                                              <td>2012/03/29</td>
                                              <td> <a href="{{route('episodes')}}" class="btn btn-primary">Add Episode</a> </td>
                                          </tr>
                                          <tr>
                                              <td>Airi Satou</td>
                                              <td>Accountant</td>
                                              <td>Tokyo</td>
                                              <td>33</td>
                                              <td>2008/11/28</td>
                                              <td> <a href="{{route('episodes')}}" class="btn btn-primary">Add Episode</a> </td>
                                          </tr>
                                          <tr>
                                              <td>Brielle Williamson</td>
                                              <td>Integration Specialist</td>
                                              <td>New York</td>
                                              <td>61</td>
                                              <td>2012/12/02</td>
                                              <td> <a href="{{route('episodes')}}" class="btn btn-primary">Add Episode</a> </td>
                                          </tr>
                                          <tr>
                                              <td>Herrod Chandler</td>
                                              <td>Sales Assistant</td>
                                              <td>San Francisco</td>
                                              <td>59</td>
                                              <td>2012/08/06</td>
                                              <td> <a href="{{route('episodes')}}" class="btn btn-primary">Add Episode</a> </td>
                                          </tr>
                                          <tr>
                                              <td>Rhona Davidson</td>
                                              <td>Integration Specialist</td>
                                              <td>Tokyo</td>
                                              <td>55</td>
                                              <td>2010/10/14</td>
                                              <td> <a href="{{route('episodes')}}" class="btn btn-primary">Add Episode</a> </td>
                                          </tr>
                                          <tr>
                                              <td>Colleen Hurst</td>
                                              <td>Javascript Developer</td>
                                              <td>San Francisco</td>
                                              <td>39</td>
                                              <td>2009/09/15</td>
                                              <td> <a href="{{route('episodes')}}" class="btn btn-primary">Add Episode</a> </td>
                                          </tr>
                                          <tr>
                                              <td>Sonya Frost</td>
                                              <td>Software Engineer</td>
                                              <td>Edinburgh</td>
                                              <td>23</td>
                                              <td>2008/12/13</td>
                                              <td> <a href="{{route('episodes')}}" class="btn btn-primary">Add Episode</a> </td>
                                          </tr>
                                          <tr>
                                              <td>Jena Gaines</td>
                                              <td>Office Manager</td>
                                              <td>London</td>
                                              <td>30</td>
                                              <td>2008/12/19</td>
                                              <td> <a href="{{route('episodes')}}" class="btn btn-primary">Add Episode</a> </td>
                                          </tr>
                                          <tr>
                                              <td>Quinn Flynn</td>
                                              <td>Support Lead</td>
                                              <td>Edinburgh</td>
                                              <td>22</td>
                                              <td>2013/03/03</td>
                                              <td> <a href="{{route('episodes')}}" class="btn btn-primary">Add Episode</a> </td>
                                          </tr>

                                        </tbody>
                                      <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
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
@endsection

<script type="text/javascript">
  $("input").val();
  $("input").tagsinput('items');
</script>
