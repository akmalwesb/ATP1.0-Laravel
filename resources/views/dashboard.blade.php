@extends('layouts/layoutMaster')

@section('title', 'Dashboard')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-advance.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}">
</script>
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')

<div class="row">
  <!-- Website Analytics -->
  <!-- <div class="col-lg-6 mb-4">
    <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg" id="swiper-with-pagination-cards">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
              <small>Total 28.5% Conversion Rate</small>
            </div>
            <div class="row">
              <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                <h6 class="text-white mt-0 mt-md-3 mb-3">Traffic</h6>
                <div class="row">
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">28%</p>
                        <p class="mb-0">Sessions</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">1.2k</p>
                        <p class="mb-0">Leads</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">3.1k</p>
                        <p class="mb-0">Page Views</p>
                      </li>
                      <li class="d-flex align-items-center mb-2">
                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">12%</p>
                        <p class="mb-0">Conversions</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                <img src="{{asset('assets/img/illustrations/card-website-analytics-1.png')}}" alt="Website Analytics" width="170" class="card-website-analytics-img">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
              <small>Total 28.5% Conversion Rate</small>
            </div>
            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
              <h6 class="text-white mt-0 mt-md-3 mb-3">Spending</h6>
              <div class="row">
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">12h</p>
                      <p class="mb-0">Spend</p>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">127</p>
                      <p class="mb-0">Order</p>
                    </li>
                  </ul>
                </div>
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">18</p>
                      <p class="mb-0">Order Size</p>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">2.3k</p>
                      <p class="mb-0">Items</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
              <img src="{{asset('assets/img/illustrations/card-website-analytics-2.png')}}" alt="Website Analytics" width="170" class="card-website-analytics-img">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
              <small>Total 28.5% Conversion Rate</small>
            </div>
            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
              <h6 class="text-white mt-0 mt-md-3 mb-3">Revenue Sources</h6>
              <div class="row">
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">268</p>
                      <p class="mb-0">Direct</p>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">62</p>
                      <p class="mb-0">Referral</p>
                    </li>
                  </ul>
                </div>
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">890</p>
                      <p class="mb-0">Organic</p>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">1.2k</p>
                      <p class="mb-0">Campaign</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
              <img src="{{asset('assets/img/illustrations/card-website-analytics-3.png')}}" alt="Website Analytics" width="170" class="card-website-analytics-img">
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div> -->
  <!--/ Website Analytics -->

  <!-- Statistics Card -->
  <!-- <div class="col-xl-8 col-md-6 col-12 mb-4">
    <div class="card card-statistics">
      <div class="card-header">
        <h4 class="card-title">Flight Statistics</h4>
        <div class="d-flex align-items-center">
          <p class="card-text font-small-2 mr-25 mb-0">As on Thursday , 11 May 2023 </p>
        </div>
      </div>
      <div class="card-body statistics-body">
        <div class="row">
          <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
            <div class="media">
              <div class="mr-2">
                <div class="avatar-content">
                  <img src='assets/images/icons/icons8-clock-96.png' class='position-left' alt='' width='45' height=''>
                </div>
              </div>
              <div class="media-body my-auto">
                <h4 class="font-weight-bolder mb-0"><mark>80888:30</mark></h4>
                <p class="card-text font-small-3 mb-0">Total AW139 Fleet Hours</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
            <div class="media">
              <div class="mr-2">
                <div class="avatar-content">
                  <img src='assets/images/icons/eta.png' class='position-left' alt='' width='40' height=''>
                </div>
              </div>
              <div class="media-body my-auto">
                <h4 class="font-weight-bolder mb-0"><mark>364770</mark></h4>
                <p class="card-text font-small-3 mb-0">Total AW139 Flight Number</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
            <div class="media">
              <div class="mr-2">
                <div class="avatar-content">
                  <img src='assets/images/icons/icons8-traveler-80.png' class='position-left' alt='' width='40' height=''>
                </div>
              </div>
              <div class="media-body my-auto">
                <h4 class="font-weight-bolder mb-0"><mark>603904</mark></h4>
                <p class="card-text font-small-3 mb-0">Total number of passenger</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!--/ Statistics Card -->

  <!-- Namecard -->
  <div class="col-xl-6 col-sm-6 mb-4">
    <div class="card" style='background: linear-gradient(1deg, #03006c, rgb(255 181 97 / 70%));'>
      <div class="card-header text-center">
        <div class="align-items-center">
          <img src="{{asset('assets/img/illustrations/card-website-analytics-2.png')}}" alt="Website Analytics" width="122" class="card-website-analytics-img">
        </div>
      </div>
      <div class="card-body text-center">
        <h4 class="card-title mb-1 text-white">Hello Muhammad Nur Husaini👋</h4>
        <small>Welcome to <strong> Kuala Lumpur </strong></small>
        <!-- <p class="card-text m-auto w-75">
          Welcome to <strong> Kerteh Base </strong> ! 🥳🎉
        </p> -->
      </div>
    </div>
  </div>
  <!--/ Namecard -->

  <!-- Sales Overview -->
  <div class="col-lg-3 col-sm-6 mb-4">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <small class="d-block mb-1 text-muted">Sales Overview</small>
          <p class="card-text text-success">+18.2%</p>
        </div>
        <h4 class="card-title mb-1">$42.5k</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <div class="d-flex gap-2 align-items-center mb-2">
              <span class="badge bg-label-info p-1 rounded"><i class="ti ti-shopping-cart ti-xs"></i></span>
              <p class="mb-0">Order</p>
            </div>
            <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
            <small class="text-muted">6,440</small>
          </div>
          <div class="col-4">
            <div class="divider divider-vertical">
              <div class="divider-text">
                <span class="badge-divider-bg bg-label-secondary">VS</span>
              </div>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
              <p class="mb-0">Visits</p>
              <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-link ti-xs"></i></span>
            </div>
            <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
            <small class="text-muted">12,749</small>
          </div>
        </div>
        <div class="d-flex align-items-center mt-4">
          <div class="progress w-100" style="height: 8px;">
            <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Sales Overview -->

  <!-- Revenue Generated -->
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body pb-0">
        <div class="card-icon">
          <span class="badge bg-label-success rounded-pill p-2">
            <i class='ti ti-credit-card ti-sm'></i>
          </span>
        </div>
        <h5 class="card-title mb-0 mt-2">97.5k</h5>
        <small>Revenue Generated</small>
      </div>
      <div id="revenueGenerated"></div>
    </div>
  </div>
  <!--/ Revenue Generated -->

  <!-- Earning Reports -->
  <div class="col-lg-6 mb-4">
    <div class="card h-100">
      <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
        <div class="card-title mb-0">
          <h5 class="mb-0">Flight Planned</h5>
          <small class="text-muted">Weekly Flight Planned Overview</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="earningReportsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
            <a class="dropdown-item" href="javascript:void(0);">View More</a>
            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
          </div>
        </div>
        <!-- </div> -->
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-4 d-flex flex-column align-self-end">
            <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">

              <h1 class="mb-0">{{$weekly ?? 0}}</h1>

              <!-- <div class="badge rounded bg-label-success">+4.2%</div> -->
            </div>
            <small class="text-muted">You informed of this month compared to last month</small>
          </div>
          <div class="col-12 col-md-8">
            <div id="flightReport"></div>
          </div>
        </div>
        <div class="border rounded p-3 mt-2">
          <div class="row gap-4 gap-sm-0">
            <div class="col-12 col-sm-4">
              <div class="d-flex gap-2 align-items-center">
                <div class="badge rounded bg-label-primary p-1"><i class="ti ti-currency-dollar ti-sm"></i></div>
                <h6 class="mb-0">{{$first_month_name}}</h6>
              </div>
              <h4 class="my-2 pt-1">{{$first_month ?? 0}}</h4>
              <div class="progress w-75" style="height:4px">
                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="d-flex gap-2 align-items-center">
                <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                <h6 class="mb-0">{{$second_month_name}}</h6>
              </div>
              <h4 class="my-2 pt-1">{{$second_month ?? 0}}</h4>
              <div class="progress w-75" style="height:4px">
                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="d-flex gap-2 align-items-center">
                <div class="badge rounded bg-label-danger p-1"><i class="ti ti-brand-paypal ti-sm"></i></div>
                <h6 class="mb-0">{{$third_month_name}}</h6>
              </div>
              <h4 class="my-2 pt-1">{{$third_month ?? 0}}</h4>
              <div class="progress w-75" style="height:4px">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Earning Reports -->

  <!-- Flight Statistic-->
  <div class="col-lg-6 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <div class="card-title mb-0">
          <h5 class="mb-0">Flight Statistic</h5>
          <small class="text-muted">Last on today</small>
        </div>
      </div>
      <div class="card-body">
        <div class="row gap-4 gap-sm-0">
          <div class="col-12 col-sm-4">
            <div class="media">
              <div class="mr-2">
                <div class="avatar-content">
                  <img src="assets/images/icons/icons8-clock-96.png" class="position-left" alt="" width="45" height="">
                </div>
              </div>
              <div class="media-body my-auto">
                <h4 class="font-weight-bolder mb-0"><mark>80888:30</mark></h4>
                <p class="card-text font-small-3 mb-0">Total AW139 Fleet Hours</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-4">
            <div class="media">
              <div class="mr-2">
                <div class="avatar-content">
                  <img src="assets/images/icons/icons8-clock-96.png" class="position-left" alt="" width="45" height="">
                </div>
              </div>
              <div class="media-body my-auto">
                <h4 class="font-weight-bolder mb-0"><mark>80888:30</mark></h4>
                <p class="card-text font-small-3 mb-0">Total AW139 Flight Number</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-4">
            <div class="media">
              <div class="mr-2">
                <div class="avatar-content">
                  <img src="assets/images/icons/icons8-clock-96.png" class="position-left" alt="" width="45" height="">
                </div>
              </div>
              <div class="media-body my-auto">
                <h4 class="font-weight-bolder mb-0"><mark>80888:30</mark></h4>
                <p class="card-text font-small-3 mb-0">Total number of passenger</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!--/ Flight Statistic-->

  <!-- Support Tracker -->
  <!-- <div class="col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between pb-0">
        <div class="card-title mb-0">
          <h5 class="mb-0">Support Tracker</h5>
          <small class="text-muted">Last 7 Days</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="supportTrackerMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
            <a class="dropdown-item" href="javascript:void(0);">View More</a>
            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-4 col-md-12 col-lg-4">
            <div class="mt-lg-4 mt-lg-2 mb-lg-4 mb-2 pt-1">
              <h1 class="mb-0">164</h1>
              <p class="mb-0">Total Tickets</p>
            </div>
            <ul class="p-0 m-0">
              <li class="d-flex gap-3 align-items-center mb-lg-3 pt-2 pb-1">
                <div class="badge rounded bg-label-primary p-1"><i class="ti ti-ticket ti-sm"></i></div>
                <div>
                  <h6 class="mb-0 text-nowrap">New Tickets</h6>
                  <small class="text-muted">142</small>
                </div>
              </li>
              <li class="d-flex gap-3 align-items-center mb-lg-3 pb-1">
                <div class="badge rounded bg-label-info p-1"><i class="ti ti-circle-check ti-sm"></i></div>
                <div>
                  <h6 class="mb-0 text-nowrap">Open Tickets</h6>
                  <small class="text-muted">28</small>
                </div>
              </li>
              <li class="d-flex gap-3 align-items-center pb-1">
                <div class="badge rounded bg-label-warning p-1"><i class="ti ti-clock ti-sm"></i></div>
                <div>
                  <h6 class="mb-0 text-nowrap">Response Time</h6>
                  <small class="text-muted">1 Day</small>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-12 col-sm-8 col-md-12 col-lg-8">
            <div id="supportTracker"></div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!--/ Support Tracker -->

  <!-- Sales By Country -->
  <!-- <div class="col-xl-4 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Sales by Countries</h5>
          <small class="text-muted">Monthly Sales Overview</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="salesByCountry" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex align-items-center mb-4">
            <img src="{{asset('assets/svg/flags/us.svg')}}" alt="User" class="rounded-circle me-3" width="34">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$8,567k</h6>

                </div>
                <small class="text-muted">United states</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-semibold mb-0">
                  <i class='ti ti-chevron-up'></i>
                  25.8%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <img src="{{asset('assets/svg/flags/br.svg')}}" alt="User" class="rounded-circle me-3" width="34">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$2,415k</h6>
                </div>
                <small class="text-muted">Brazil</small>
              </div>
              <div class="user-progress">
                <p class="text-danger fw-semibold mb-0">
                  <i class='ti ti-chevron-down'></i>
                  6.2%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <img src="{{asset('assets/svg/flags/in.svg')}}" alt="User" class="rounded-circle me-3" width="34">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$865k</h6>
                </div>
                <small class="text-muted">India</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-semibold">
                  <i class='ti ti-chevron-up'></i>
                  12.4%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <img src="{{asset('assets/svg/flags/au.svg')}}" alt="User" class="rounded-circle me-3" width="34">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$745k</h6>
                </div>
                <small class="text-muted">Australia</small>
              </div>
              <div class="user-progress">
                <p class="text-danger fw-semibold mb-0">
                  <i class='ti ti-chevron-down'></i>
                  11.9%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <img src="{{asset('assets/svg/flags/fr.svg')}}" alt="User" class="rounded-circle me-3" width="34">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$45</h6>
                </div>
                <small class="text-muted">France</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-semibold mb-0">
                  <i class='ti ti-chevron-up'></i>
                  16.2%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <img src="{{asset('assets/svg/flags/cn.svg')}}" alt="User" class="rounded-circle me-3" width="34">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$12k</h6>
                </div>
                <small class="text-muted">China</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-semibold mb-0">
                  <i class='ti ti-chevron-up'></i>
                  14.8%
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div> -->
  <!--/ Sales By Country -->

  <!-- Total Earning -->
  <div class="col-12 col-xl-4 mb-4 col-md-6">
    <div class="card">
      <div class="card-header d-flex justify-content-between pb-1">
        <h5 class="mb-0 card-title">Total Earning</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="totalEarning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarning">
            <a class="dropdown-item" href="javascript:void(0);">View More</a>
            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex align-items-center">
          <h1 class="mb-0 me-2">87%</h1>
          <i class="ti ti-chevron-up text-success me-1"></i>
          <p class="text-success mb-0">25.8%</p>
        </div>
        <div id="totalEarningChart"></div>
        <div class="d-flex align-items-start my-4">
          <div class="badge rounded bg-label-primary p-2 me-3 rounded"><i class="ti ti-currency-dollar ti-sm"></i></div>
          <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
            <div class="me-2">
              <h6 class="mb-0">Total Sales</h6>
              <small class="text-muted">Refund</small>
            </div>
            <p class="mb-0 text-success">+$98</p>
          </div>
        </div>
        <div class="d-flex align-items-start">
          <div class="badge rounded bg-label-secondary p-2 me-3 rounded"><i class="ti ti-brand-paypal ti-sm"></i></div>
          <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
            <div class="me-2">
              <h6 class="mb-0">Total Revenue</h6>
              <small class="text-muted">Client Payment</small>
            </div>
            <p class="mb-0 text-success">+$126</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Earning -->

  <!-- Monthly Campaign State -->
  <!-- <div class="col-xl-4 col-md-6 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-0">Monthly Campaign State</h5>
          <small class="text-muted">8.52k Social Visiters</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="MonthlyCampaign" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="MonthlyCampaign">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-success rounded p-2"><i class="ti ti-mail ti-sm"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-3">Emails</h6>
              <div class="d-flex">
                <p class="mb-0 fw-semibold">12,346</p>
                <p class="ms-3 text-success mb-0">0.3%</p>
              </div>
            </div>
          </li>
          <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-info rounded p-2"><i class="ti ti-link ti-sm"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-3">Opened</h6>
              <div class="d-flex">
                <p class="mb-0 fw-semibold">8,734</p>
                <p class="ms-3 text-success mb-0">2.1%</p>
              </div>
            </div>
          </li>
          <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-warning rounded p-2"><i class="ti ti-click ti-sm"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-3">Clicked</h6>
              <div class="d-flex">
                <p class="mb-0 fw-semibold">967</p>
                <p class="ms-3 text-success mb-0">1.4%</p>
              </div>
            </div>
          </li>
          <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-primary rounded p-2"><i class="ti ti-users ti-sm"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-3">Subscribe</h6>
              <div class="d-flex">
                <p class="mb-0 fw-semibold">345</p>
                <p class="ms-3 text-success mb-0">8.5k</p>
              </div>
            </div>
          </li>
          <li class="mb-4 pb-1 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-alert-triangle ti-sm text-body"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-3">Complaints</h6>
              <div class="d-flex">
                <p class="mb-0 fw-semibold">10</p>
                <p class="ms-3 text-success mb-0">1.5%</p>
              </div>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="badge bg-label-danger rounded p-2"><i class="ti ti-ban ti-sm"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-3">Unsubscribe</h6>
              <div class="d-flex">
                <p class="mb-0 fw-semibold">86</p>
                <p class="ms-3 text-success mb-0">0.8%</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div> -->
  <!--/ Monthly Campaign State -->

  <!-- Source Visit -->
  <!-- <div class="col-xl-4 col-md-6 order-1 order-lg-1 mb-4">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-0">Source Visits</h5>
          <small class="text-muted">38.4k Visitors</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="sourceVisits" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sourceVisits">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mb-0">
          <li class="mb-3 pb-1">
            <div class="d-flex align-items-start">
              <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-shadow ti-sm"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Direct Source</h6>
                  <small class="text-muted">Direct link click</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">1.2k</p>
                  <div class="ms-3 badge bg-label-success">+4.2%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="mb-3 pb-1">
            <div class="d-flex align-items-start">
              <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-globe ti-sm"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Social Network</h6>
                  <small class="text-muted">Social Channels</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">31.5k</p>
                  <div class="ms-3 badge bg-label-success">+8.2%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="mb-3 pb-1">
            <div class="d-flex align-items-start">
              <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-mail ti-sm"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Email Newsletter</h6>
                  <small class="text-muted">Mail Campaigns</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">893</p>
                  <div class="ms-3 badge bg-label-success">+2.4%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="mb-3 pb-1">
            <div class="d-flex align-items-start">
              <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-external-link ti-sm"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Referrals</h6>
                  <small class="text-muted">Impact Radius Visits</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">342</p>
                  <div class="ms-3 badge bg-label-danger">-0.4%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="mb-3 pb-1">
            <div class="d-flex align-items-start">
              <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-discount-2 ti-sm"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">ADVT</h6>
                  <small class="text-muted">Google ADVT</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">2.15k</p>
                  <div class="ms-3 badge bg-label-success">+9.1%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="mb-2">
            <div class="d-flex align-items-start">
              <div class="badge bg-label-secondary p-2 me-3 rounded"><i class="ti ti-star ti-sm"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Other</h6>
                  <small class="text-muted">Many Sources</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">12.5k</p>
                  <div class="ms-3 badge bg-label-success">+6.2%</div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div> -->
  <!--/ Source Visit -->

  <!-- Projects table -->
  <!-- <div class="col-12 col-xl-8 col-sm-12 order-1 order-lg-2 mb-4">
    <div class="card">
      <div class="card-datatable table-responsive">
        <table class="datatables-projects table border-top">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>Name</th>
              <th>Leader</th>
              <th>Team</th>
              <th class="w-px-200">Status</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div> -->
  <!--/ Projects table -->

  <!-- Test -->
  <div class="col-12 col-xl-8 col-sm-12 order-1 order-lg-2 mb-4">
    <div class="card" style="background-color: transparent; box-shadow: none;">

      <!-- Aircraft Flying Hours for Revenue & Non Revenue Flights -->
      <div class="card mb-1">
        <div class="card-header">
          <div class="card-body">
            <!-- <div class="col-12 col-md-8">
            <div id="weeklyEarningReports"></div>
          </div> -->
          </div>
        </div>
      </div>
      <!-- Aircraft Flying Hours for Revenue & Non Revenue Flights -->

      <!-- AIRCRAFT FLYING HOURS FOR REVENUE FLIGHTS-->
      <div class="card mb-1">
        <div class="card-header">
          <div class="card-body">
            <!-- <div class="col-12 col-md-8">
            <div id="weeklyEarningReports"></div>
          </div> -->
          </div>
        </div>
      </div>
      <!-- AIRCRAFT FLYING HOURS FOR REVENUE FLIGHTS-->

      <!--FLYING HOURS BY COMPANY-->
      <div class="card mb-1">
        <div class="card-header">
          <div class="card-body">
            <!-- <div class="col-12 col-md-8">
            <div id="weeklyEarningReports"></div>
          </div> -->
          </div>
        </div>
      </div>
      <!--FLYING HOURS BY COMPANY-->

      <!-- AIRCRAFT UTILISATION-->
      <div class="card mb-1">
        <div class="card-header">
          <div class="card-body">
            <!-- <div class="col-12 col-md-8">
            <div id="weeklyEarningReports"></div>
          </div> -->
          </div>
        </div>
      </div>
      <!-- AIRCRAFT UTILISATION-->

      <!-- AIRCRAFT AVAILABILITY-->
      <div class="card mb-1">
        <div class="card-header">
          <div class="card-body">
            <!-- <div class="col-12 col-md-8">
            <div id="weeklyEarningReports"></div>
          </div> -->
          </div>
        </div>
      </div>
      <!-- AIRCRAFT AVAILABILITY-->

      <!-- AVERAGE FUEL CONSUMPTION-->
      <div class="card mb-1">
        <div class="card-header">
          <div class="card-body">
            <!-- <div class="col-12 col-md-8">
            <div id="weeklyEarningReports"></div>
          </div> -->
          </div>
        </div>
      </div>
      <!-- AVERAGE FUEL CONSUMPTION-->
    </div>
  </div>
</div>
<!--/ Test -->
</div>

@endsection

<script>
  window.onload = function() {
    let cardColor, headingColor, labelColor, shadeColor, grayColor;
    if (isDarkStyle) {
      cardColor = config.colors_dark.cardColor;
      labelColor = config.colors_dark.textMuted;
      headingColor = config.colors_dark.headingColor;
      shadeColor = 'dark';
      grayColor = '#5E6692'; // gray color is for stacked bar chart
    } else {
      cardColor = config.colors.cardColor;
      labelColor = config.colors.textMuted;
      headingColor = config.colors.headingColor;
      shadeColor = '';
      grayColor = '#817D8D';
    }

    const flightReportEl = document.querySelector('#flightReport'),
      flightReportConfig = {
        chart: {
          height: 202,
          parentHeightOffset: 0,
          type: 'bar',
          toolbar: {
            show: false
          }
        },
        plotOptions: {
          bar: {
            barHeight: '60%',
            columnWidth: '38%',
            startingShape: 'rounded',
            endingShape: 'rounded',
            borderRadius: 4,
            distributed: true
          }
        },
        grid: {
          show: false,
          padding: {
            top: -30,
            bottom: 0,
            left: -10,
            right: -10
          }
        },
        colors: [
          config.colors_label.primary,
          config.colors_label.primary,
          config.colors_label.primary,
          config.colors_label.primary,
          config.colors.primary,
          config.colors_label.primary,
          config.colors_label.primary
        ],
        dataLabels: {
          enabled: true
        },
        series: [{
          data: {!!json_encode($data->pluck('total')) !!} //fetch data from MySQL
        }],
        legend: {
          show: false
        },
        xaxis: {
          categories: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          labels: {
            style: {
              colors: labelColor,
              fontSize: '13px',
              fontFamily: 'Public Sans'
            }
          }
        },
        yaxis: {
          labels: {
            show: false
          }
        },
        tooltip: {
          enabled: false
        },
        responsive: [{
          breakpoint: 1025,
          options: {
            chart: {
              height: 199
            }
          }
        }]
      };
    if (typeof flightReportEl !== undefined && flightReportEl !== null) {
      const flightReport = new ApexCharts(flightReportEl, flightReportConfig);
      flightReport.render();
    }
  }
</script>