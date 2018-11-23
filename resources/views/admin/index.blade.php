@extends('admin.main')

@section('content')
  <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
      <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable">
          <div class="container">
            <div class="row">
                  <div class="col-lg-12">
                      <div class="card card-earnings">
                          <div class="card-header bg-faded">
                              <div class="row align-items-center">
                                  <div class="col-lg-2">
                                      <h4 class="card-title">Earnings</h4>
                                  </div>
                                  <div class="col-lg-10">
                                      <form class="form-inline float-right">
                                          <div class="form-group mr-3">
                                              <label class="control-label mr-1">From:</label>
                                              <input type="text" class="datepicker form-control" value="10/24/2017">
                                          </div>
                                          <div class="form-group mb-0">
                                              <label class="control-label mr-1">To: </label>
                                              <input type="text" class="datepicker form-control" value="10/25/2017">
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>

                          <div class="card-group">
                              <div class="card card-body bg-light mb-0">
                                  <div class="media align-items-center">
                                      <div class="media-body">
                                          <p class="card-text text-muted mb-1">Earned today</p>
                                          <h1 class="mb-0 font-weight-normal">&dollar;6,120</h1>
                                      </div>
                                      <div class="badge badge-success--filled">+52%</div>
                                  </div>
                              </div>
                              <div class="card card-body bg-light mb-0">
                                  <div class="media align-items-center">
                                      <div class="media-body">
                                          <p class="card-text text-muted mb-1">Earned this week</p>
                                          <h1 class="mb-0 font-weight-normal">&dollar;14,276</h1>
                                      </div>
                                      <div class="badge badge-primary--filled">+16%</div>
                                  </div>
                              </div>
                              <div class="card card-body bg-light mb-0">
                                  <div class="media align-items-center">
                                      <div class="media-body">
                                          <p class="card-text text-muted mb-1">Earned this month</p>
                                          <h1 class="mb-0 font-weight-normal">&dollar;39,882</h1>
                                      </div>
                                      <div class="badge badge-warning--filled">+5%</div>
                                  </div>
                              </div>
                          </div>
                          <div class="p-2 bg-primary">
                              <div id="morris-area-chart" style="height: 250px;"></div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
@endsection
