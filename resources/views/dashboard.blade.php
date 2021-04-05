@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendors/@coreui/chartjs/css/coreui-chartjs.css') }}">
@endpush

@section('content')
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-primary">
            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                <div>
                    <div class="text-value-lg">9.823</div>
                    <div>Members online</div>
                </div>
                <div class="btn-group">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="c-icon">
                            <use xlink:href="/icons/sprites/free.svg#cil-settings"></use>
                        </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height: 70px">
                <canvas class="chart" id="card-chart1" height="70"></canvas>
            </div>
        </div>
    </div>
    <!-- /.col-->
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-info">
            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                <div>
                    <div class="text-value-lg">9.823</div>
                    <div>Members online</div>
                </div>
                <div class="btn-group">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="c-icon">
                            <use xlink:href="/icons/sprites/free.svg#cil-settings"></use>
                        </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height: 70px">
                <canvas class="chart" id="card-chart2" height="70"></canvas>
            </div>
        </div>
    </div>
    <!-- /.col-->
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-warning">
            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                <div>
                    <div class="text-value-lg">9.823</div>
                    <div>Members online</div>
                </div>
                <div class="btn-group">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="c-icon">
                            <use xlink:href="/icons/sprites/free.svg#cil-settings"></use>
                        </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="c-chart-wrapper mt-3" style="height: 70px">
                <canvas class="chart" id="card-chart3" height="70"></canvas>
            </div>
        </div>
    </div>
    <!-- /.col-->
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-danger">
            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                <div>
                    <div class="text-value-lg">9.823</div>
                    <div>Members online</div>
                </div>
                <div class="btn-group">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="c-icon">
                            <use xlink:href="/icons/sprites/free.svg#cil-settings"></use>
                        </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height: 70px">
                <canvas class="chart" id="card-chart4" height="70"></canvas>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- /.row-->
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h4 class="card-title mb-0">Traffic</h4>
                <div class="small text-muted">September 2019</div>
            </div>
            <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                <div class="btn-group btn-group-toggle mx-3" data-toggle="buttons">
                    <label class="btn btn-outline-secondary">
                        <input id="option1" type="radio" name="options" autocomplete="off" />
                        Day
                    </label>
                    <label class="btn btn-outline-secondary active">
                        <input id="option2" type="radio" name="options" autocomplete="off" checked="" />
                        Month
                    </label>
                    <label class="btn btn-outline-secondary">
                        <input id="option3" type="radio" name="options" autocomplete="off" />
                        Year
                    </label>
                </div>
                <button class="btn btn-primary" type="button">
                    <svg class="c-icon">
                        <use xlink:href="/icons/sprites/free.svg#cil-cloud-download"></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="c-chart-wrapper" style="height: 300px; margin-top: 40px">
            <canvas class="chart" id="main-chart" height="300"></canvas>
        </div>
    </div>
    <div class="card-footer">
        <div class="row text-center">
            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                <div class="text-muted">Visits</div>
                <strong>29.703 Users (40%)</strong>
                <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                <div class="text-muted">Unique</div>
                <strong>24.093 Users (20%)</strong>
                <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                <div class="text-muted">Pageviews</div>
                <strong>78.706 Views (60%)</strong>
                <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                <div class="text-muted">New Users</div>
                <strong>22.123 Users (80%)</strong>
                <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                <div class="text-muted">Bounce Rate</div>
                <strong>40.15%</strong>
                <div class="progress progress-xs mt-2">
                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.card-->
<div class="row">
    <div class="col-sm-6 col-lg-4">
        <div class="card">
            <div class="card-header bg-facebook content-center">
                <svg class="c-icon c-icon-3xl text-white my-4">
                    <use xlink:href="/icons/sprites/brand.svg#cib-facebook-f"></use>
                </svg>
            </div>
            <div class="card-body row text-center">
                <div class="col">
                    <div class="text-value-xl">89k</div>
                    <div class="text-uppercase text-muted small">
                        friends
                    </div>
                </div>
                <div class="c-vr"></div>
                <div class="col">
                    <div class="text-value-xl">459</div>
                    <div class="text-uppercase text-muted small">feeds</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-->
    <div class="col-sm-6 col-lg-4">
        <div class="card">
            <div class="card-header bg-twitter content-center">
                <svg class="c-icon c-icon-3xl text-white my-4">
                    <use xlink:href="/icons/sprites/brand.svg#cib-twitter"></use>
                </svg>
            </div>
            <div class="card-body row text-center">
                <div class="col">
                    <div class="text-value-xl">973k</div>
                    <div class="text-uppercase text-muted small">
                        followers
                    </div>
                </div>
                <div class="c-vr"></div>
                <div class="col">
                    <div class="text-value-xl">1.792</div>
                    <div class="text-uppercase text-muted small">
                        tweets
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-->
    <div class="col-sm-6 col-lg-4">
        <div class="card">
            <div class="card-header bg-linkedin content-center">
                <svg class="c-icon c-icon-3xl text-white my-4">
                    <use xlink:href="/icons/sprites/brand.svg#cib-linkedin"></use>
                </svg>
            </div>
            <div class="card-body row text-center">
                <div class="col">
                    <div class="text-value-xl">500+</div>
                    <div class="text-uppercase text-muted small">
                        contacts
                    </div>
                </div>
                <div class="c-vr"></div>
                <div class="col">
                    <div class="text-value-xl">292</div>
                    <div class="text-uppercase text-muted small">feeds</div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- /.row-->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Traffic & Sales</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="c-callout c-callout-info">
                                    <small class="text-muted">New Clients</small>
                                    <div class="text-value-lg">9,123</div>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-6">
                                <div class="c-callout c-callout-danger">
                                    <small class="text-muted">Recuring Clients</small>
                                    <div class="text-value-lg">22,643</div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                        <!-- /.row-->
                        <hr class="mt-0" />
                        <div class="progress-group mb-4">
                            <div class="progress-group-prepend">
                                <span class="progress-group-text">Monday</span>
                            </div>
                            <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-group mb-4">
                            <div class="progress-group-prepend">
                                <span class="progress-group-text">Tuesday</span>
                            </div>
                            <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-group mb-4">
                            <div class="progress-group-prepend">
                                <span class="progress-group-text">Wednesday</span>
                            </div>
                            <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-group mb-4">
                            <div class="progress-group-prepend">
                                <span class="progress-group-text">Thursday</span>
                            </div>
                            <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-group mb-4">
                            <div class="progress-group-prepend">
                                <span class="progress-group-text">Friday</span>
                            </div>
                            <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-group mb-4">
                            <div class="progress-group-prepend">
                                <span class="progress-group-text">Saturday</span>
                            </div>
                            <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-group mb-4">
                            <div class="progress-group-prepend">
                                <span class="progress-group-text">Sunday</span>
                            </div>
                            <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="c-callout c-callout-warning">
                                    <small class="text-muted">Pageviews</small>
                                    <div class="text-value-lg">78,623</div>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-6">
                                <div class="c-callout c-callout-success">
                                    <small class="text-muted">Organic</small>
                                    <div class="text-value-lg">49,123</div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                        <!-- /.row-->
                        <hr class="mt-0" />
                        <div class="progress-group">
                            <div class="progress-group-header">
                                <svg class="c-icon progress-group-icon">
                                    <use xlink:href="/icons/sprites/free.svg#cil-user"></use>
                                </svg>
                                <div>Male</div>
                                <div class="mfs-auto font-weight-bold">43%</div>
                            </div>
                            <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-group mb-5">
                            <div class="progress-group-header">
                                <svg class="c-icon progress-group-icon">
                                    <use xlink:href="/icons/sprites/free.svg#cil-user-female"></use>
                                </svg>
                                <div>Female</div>
                                <div class="mfs-auto font-weight-bold">37%</div>
                            </div>
                            <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-group">
                            <div class="progress-group-header align-items-end">
                                <svg class="c-icon progress-group-icon">
                                    <use xlink:href="/icons/sprites/brand.svg#cib-google"></use>
                                </svg>
                                <div>Organic Search</div>
                                <div class="mfs-auto font-weight-bold mfe-2">
                                    191.235
                                </div>
                                <div class="text-muted small">(56%)</div>
                            </div>
                            <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-group">
                            <div class="progress-group-header align-items-end">
                                <svg class="c-icon progress-group-icon">
                                    <use xlink:href="/icons/sprites/brand.svg#cib-facebook-f"></use>
                                </svg>
                                <div>Facebook</div>
                                <div class="mfs-auto font-weight-bold mfe-2">
                                    51.223
                                </div>
                                <div class="text-muted small">(15%)</div>
                            </div>
                            <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-group">
                            <div class="progress-group-header align-items-end">
                                <svg class="c-icon progress-group-icon">
                                    <use xlink:href="/icons/sprites/brand.svg#cib-twitter"></use>
                                </svg>
                                <div>Twitter</div>
                                <div class="mfs-auto font-weight-bold mfe-2">
                                    37.564
                                </div>
                                <div class="text-muted small">(11%)</div>
                            </div>
                            <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-group">
                            <div class="progress-group-header align-items-end">
                                <svg class="c-icon progress-group-icon">
                                    <use xlink:href="/icons/sprites/brand.svg#cib-linkedin"></use>
                                </svg>
                                <div>LinkedIn</div>
                                <div class="mfs-auto font-weight-bold mfe-2">
                                    27.319
                                </div>
                                <div class="text-muted small">(8%)</div>
                            </div>
                            <div class="progress-group-bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row--><br />
                <table class="table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center">
                                <svg class="c-icon">
                                    <use xlink:href="/icons/sprites/free.svg#cil-people"></use>
                                </svg>
                            </th>
                            <th>User</th>
                            <th class="text-center">Country</th>
                            <th>Usage</th>
                            <th class="text-center">Payment Method</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <div class="c-avatar">
                                    <img class="c-avatar-img" src="https://images.unsplash.com/flagged/photo-1556151994-b611e5ab3675?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="user@email.com" /><span class="c-avatar-status bg-success"></span>
                                </div>
                            </td>
                            <td>
                                <div>Yiorgos Avraamu</div>
                                <div class="small text-muted">
                                    <span>New</span> | Registered: Jan 1, 2015
                                </div>
                            </td>
                            <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                    <use xlink:href="/icons/sprites/flag.svg#cif-us"></use>
                                </svg>
                            </td>
                            <td>
                                <div class="clearfix">
                                    <div class="float-left">
                                        <strong>50%</strong>
                                    </div>
                                    <div class="float-right">
                                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                    <use xlink:href="/icons/sprites/brand.svg#cib-cc-mastercard"></use>
                                </svg>
                            </td>
                            <td>
                                <div class="small text-muted">Last login</div>
                                <strong>10 sec ago</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <div class="c-avatar">
                                    <img class="c-avatar-img" src="https://images.unsplash.com/flagged/photo-1556151994-b611e5ab3675?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="user@email.com" /><span class="c-avatar-status bg-danger"></span>
                                </div>
                            </td>
                            <td>
                                <div>Avram Tarasios</div>
                                <div class="small text-muted">
                                    <span>Recurring</span> | Registered: Jan 1, 2015
                                </div>
                            </td>
                            <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                    <use xlink:href="/icons/sprites/flag.svg#cif-br"></use>
                                </svg>
                            </td>
                            <td>
                                <div class="clearfix">
                                    <div class="float-left">
                                        <strong>10%</strong>
                                    </div>
                                    <div class="float-right">
                                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                    <use xlink:href="/icons/sprites/brand.svg#cib-cc-visa"></use>
                                </svg>
                            </td>
                            <td>
                                <div class="small text-muted">Last login</div>
                                <strong>5 minutes ago</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <div class="c-avatar">
                                    <img class="c-avatar-img" src="https://images.unsplash.com/flagged/photo-1556151994-b611e5ab3675?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="user@email.com" /><span class="c-avatar-status bg-warning"></span>
                                </div>
                            </td>
                            <td>
                                <div>Quintin Ed</div>
                                <div class="small text-muted">
                                    <span>New</span> | Registered: Jan 1, 2015
                                </div>
                            </td>
                            <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                    <use xlink:href="/icons/sprites/flag.svg#cif-in"></use>
                                </svg>
                            </td>
                            <td>
                                <div class="clearfix">
                                    <div class="float-left">
                                        <strong>74%</strong>
                                    </div>
                                    <div class="float-right">
                                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                    <use xlink:href="/icons/sprites/brand.svg#cib-cc-stripe"></use>
                                </svg>
                            </td>
                            <td>
                                <div class="small text-muted">Last login</div>
                                <strong>1 hour ago</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <div class="c-avatar">
                                    <img class="c-avatar-img" src="https://images.unsplash.com/flagged/photo-1556151994-b611e5ab3675?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="user@email.com" /><span class="c-avatar-status bg-secondary"></span>
                                </div>
                            </td>
                            <td>
                                <div>Enéas Kwadwo</div>
                                <div class="small text-muted">
                                    <span>New</span> | Registered: Jan 1, 2015
                                </div>
                            </td>
                            <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                    <use xlink:href="/icons/sprites/flag.svg#cif-fr"></use>
                                </svg>
                            </td>
                            <td>
                                <div class="clearfix">
                                    <div class="float-left">
                                        <strong>98%</strong>
                                    </div>
                                    <div class="float-right">
                                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                    <use xlink:href="/icons/sprites/brand.svg#cib-cc-paypal"></use>
                                </svg>
                            </td>
                            <td>
                                <div class="small text-muted">Last login</div>
                                <strong>Last month</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <div class="c-avatar">
                                    <img class="c-avatar-img" src="https://images.unsplash.com/flagged/photo-1556151994-b611e5ab3675?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="user@email.com" /><span class="c-avatar-status bg-success"></span>
                                </div>
                            </td>
                            <td>
                                <div>Agapetus Tadeáš</div>
                                <div class="small text-muted">
                                    <span>New</span> | Registered: Jan 1, 2015
                                </div>
                            </td>
                            <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                    <use xlink:href="/icons/sprites/flag.svg#cif-es"></use>
                                </svg>
                            </td>
                            <td>
                                <div class="clearfix">
                                    <div class="float-left">
                                        <strong>22%</strong>
                                    </div>
                                    <div class="float-right">
                                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                    <use xlink:href="/icons/sprites/brand.svg#cib-cc-apple-pay"></use>
                                </svg>
                            </td>
                            <td>
                                <div class="small text-muted">Last login</div>
                                <strong>Last week</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <div class="c-avatar">
                                    <img class="c-avatar-img" src="https://images.unsplash.com/flagged/photo-1556151994-b611e5ab3675?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="user@email.com" /><span class="c-avatar-status bg-danger"></span>
                                </div>
                            </td>
                            <td>
                                <div>Friderik Dávid</div>
                                <div class="small text-muted">
                                    <span>New</span> | Registered: Jan 1, 2015
                                </div>
                            </td>
                            <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                    <use xlink:href="/icons/sprites/flag.svg#cif-pl"></use>
                                </svg>
                            </td>
                            <td>
                                <div class="clearfix">
                                    <div class="float-left">
                                        <strong>43%</strong>
                                    </div>
                                    <div class="float-right">
                                        <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td class="text-center">
                                <svg class="c-icon c-icon-xl">
                                    <use xlink:href="/icons/sprites/brand.svg#cib-cc-amex"></use>
                                </svg>
                            </td>
                            <td>
                                <div class="small text-muted">Last login</div>
                                <strong>Yesterday</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- /.row-->
@endsection

@push('scripts')
<script src="{{ asset('vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js') }}"></script>
<script src="{{ asset('vendors/@coreui/utils/js/coreui-utils.js') }}"></script>

<script>
    Chart.defaults.global.pointHitDetectionRadius = 1;
    Chart.defaults.global.tooltips.enabled = false;
    Chart.defaults.global.tooltips.mode = 'index';
    Chart.defaults.global.tooltips.position = 'nearest';
    Chart.defaults.global.tooltips.custom = coreui.ChartJS.customTooltips;
    Chart.defaults.global.defaultFontColor = '#646470';
    Chart.defaults.global.responsiveAnimationDuration = 1;
    document.body.addEventListener('classtoggle', function(event) {
        if (event.detail.className === 'c-dark-theme') {
            if (document.body.classList.contains('c-dark-theme')) {
                cardChart1.data.datasets[0].pointBackgroundColor = coreui.Utils.getStyle('--primary-dark-theme');
                cardChart2.data.datasets[0].pointBackgroundColor = coreui.Utils.getStyle('--info-dark-theme');
                Chart.defaults.global.defaultFontColor = '#fff';
            } else {
                cardChart1.data.datasets[0].pointBackgroundColor = coreui.Utils.getStyle('--primary');
                cardChart2.data.datasets[0].pointBackgroundColor = coreui.Utils.getStyle('--info');
                Chart.defaults.global.defaultFontColor = '#646470';
            }
            cardChart1.update();
            cardChart2.update();
            mainChart.update();
        }
    });
    var cardChart1 = new Chart(document.getElementById('card-chart1'), {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'transparent',
                borderColor: 'rgba(255,255,255,.55)',
                pointBackgroundColor: coreui.Utils.getStyle('--primary'),
                data: [65, 59, 84, 84, 51, 55, 40]
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                }],
                yAxes: [{
                    display: false,
                    ticks: {
                        display: false,
                        min: 35,
                        max: 89
                    }
                }]
            },
            elements: {
                line: {
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });
    var cardChart2 = new Chart(document.getElementById('card-chart2'), {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'transparent',
                borderColor: 'rgba(255,255,255,.55)',
                pointBackgroundColor: coreui.Utils.getStyle('--info'),
                data: [1, 18, 9, 17, 34, 22, 11]
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                }],
                yAxes: [{
                    display: false,
                    ticks: {
                        display: false,
                        min: -4,
                        max: 39
                    }
                }]
            },
            elements: {
                line: {
                    tension: 0.00001,
                    borderWidth: 1
                },
                point: {
                    radius: 4,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });
    var cardChart3 = new Chart(document.getElementById('card-chart3'), {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgba(255,255,255,.2)',
                borderColor: 'rgba(255,255,255,.55)',
                data: [78, 81, 80, 45, 34, 12, 40]
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }]
            },
            elements: {
                line: {
                    borderWidth: 2
                },
                point: {
                    radius: 0,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    });
    var cardChart4 = new Chart(document.getElementById('card-chart4'), {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'January', 'February', 'March', 'April'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgba(255,255,255,.2)',
                borderColor: 'rgba(255,255,255,.55)',
                data: [78, 81, 80, 45, 34, 12, 40, 85, 65, 23, 12, 98, 34, 84, 67, 82],
                barPercentage: 0.6
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }]
            }
        }
    });
    var mainChart = new Chart(document.getElementById('main-chart'), {
        type: 'line',
        data: {
            labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: coreui.Utils.hexToRgba(coreui.Utils.getStyle('--info'), 10),
                borderColor: coreui.Utils.getStyle('--info'),
                pointHoverBackgroundColor: '#fff',
                borderWidth: 2,
                data: [165, 180, 70, 69, 77, 57, 125, 165, 172, 91, 173, 138, 155, 89, 50, 161, 65, 163, 160, 103, 114, 185, 125, 196, 183, 64, 137, 95, 112, 175]
            }, {
                label: 'My Second dataset',
                backgroundColor: 'transparent',
                borderColor: coreui.Utils.getStyle('--success'),
                pointHoverBackgroundColor: '#fff',
                borderWidth: 2,
                data: [92, 97, 80, 100, 86, 97, 83, 98, 87, 98, 93, 83, 87, 98, 96, 84, 91, 97, 88, 86, 94, 86, 95, 91, 98, 91, 92, 80, 83, 82]
            }, {
                label: 'My Third dataset',
                backgroundColor: 'transparent',
                borderColor: coreui.Utils.getStyle('--danger'),
                pointHoverBackgroundColor: '#fff',
                borderWidth: 1,
                borderDash: [8, 5],
                data: [65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65]
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        drawOnChartArea: false
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        maxTicksLimit: 5,
                        stepSize: Math.ceil(250 / 5),
                        max: 250
                    }
                }]
            },
            elements: {
                point: {
                    radius: 0,
                    hitRadius: 10,
                    hoverRadius: 4,
                    hoverBorderWidth: 3
                }
            }
        }
    });
</script>
@endpush