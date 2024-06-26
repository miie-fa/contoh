@extends('admin.layout.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="mb-4 col-12 col-xl-8 mb-xl-0">
                    <h3 class="font-weight-bold">@if(Auth::check())Welcome {{ Auth::user()->name }}!@else Please log in to see your name.@endif</h3>
                    <h6 class="mb-0 font-weight-normal">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="bg-white btn btn-sm btn-light dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                <div class="mt-auto card-people">
                    <img src="{{ asset('images/dashboard/people.svg') }}" alt="people">
                    <div class="weather-info">
                    <div class="d-flex">
                        <div>
                        <h2 class="mb-0 font-weight-normal"><i class="mr-2 icon-sun"></i>31<sup>C</sup></h2>
                        </div>
                        <div class="ml-2">
                        <h4 class="location font-weight-normal">Bangalore</h4>
                        <h6 class="font-weight-normal">India</h6>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                <div class="mb-4 col-md-6 stretch-card transparent">
                    <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">Today’s Bookings</p>
                        <p class="mb-2 fs-30">4006</p>
                        <p>10.00% (30 days)</p>
                    </div>
                    </div>
                </div>
                <div class="mb-4 col-md-6 stretch-card transparent">
                    <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Total Bookings</p>
                        <p class="mb-2 fs-30">61344</p>
                        <p>22.00% (30 days)</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="mb-4 col-md-6 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4">Number of Meetings</p>
                        <p class="mb-2 fs-30">34040</p>
                        <p>2.00% (30 days)</p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                    <div class="card-body">
                        <p class="mb-4">Number of Clients</p>
                        <p class="mb-2 fs-30">47033</p>
                        <p>0.22% (30 days)</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <p class="card-title">Order Details</p>
                    <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                    <div class="flex-wrap mb-5 d-flex">
                    <div class="mt-3 mr-5">
                        <p class="text-muted">Order value</p>
                        <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>
                    </div>
                    <div class="mt-3 mr-5">
                        <p class="text-muted">Orders</p>
                        <h3 class="text-primary fs-30 font-weight-medium">14k</h3>
                    </div>
                    <div class="mt-3 mr-5">
                        <p class="text-muted">Users</p>
                        <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>
                    </div>
                    <div class="mt-3">
                        <p class="text-muted">Downloads</p>
                        <h3 class="text-primary fs-30 font-weight-medium">34040</h3>
                    </div>
                    </div>
                    <canvas id="order-chart"></canvas>
                </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                    <p class="card-title">Sales Report</p>
                    <a href="#" class="text-info">View all</a>
                    </div>
                    <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                    <div id="sales-legend" class="mt-4 mb-2 chartjs-legend"></div>
                    <canvas id="sales-chart"></canvas>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                <div class="card-body">
                    <div id="detailedReports" class="pt-2 carousel slide detailed-report-carousel position-static" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <div class="mt-3 ml-xl-4">
                            <p class="card-title">Detailed Reports</p>
                                <h1 class="text-primary">$34040</h1>
                                <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                                <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                            </div>
                            </div>
                            <div class="col-md-12 col-xl-9">
                            <div class="row">
                                <div class="col-md-6 border-right">
                                <div class="mt-3 mb-3 table-responsive mb-md-0">
                                    <table class="table table-borderless report-table">
                                    <tr>
                                        <td class="text-muted">Illinois</td>
                                        <td class="px-0 w-100">
                                        <div class="mx-4 progress progress-md">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                        <td><h5 class="mb-0 font-weight-bold">713</h5></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Washington</td>
                                        <td class="px-0 w-100">
                                        <div class="mx-4 progress progress-md">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                        <td><h5 class="mb-0 font-weight-bold">583</h5></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Mississippi</td>
                                        <td class="px-0 w-100">
                                        <div class="mx-4 progress progress-md">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                        <td><h5 class="mb-0 font-weight-bold">924</h5></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">California</td>
                                        <td class="px-0 w-100">
                                        <div class="mx-4 progress progress-md">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                        <td><h5 class="mb-0 font-weight-bold">664</h5></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Maryland</td>
                                        <td class="px-0 w-100">
                                        <div class="mx-4 progress progress-md">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                        <td><h5 class="mb-0 font-weight-bold">560</h5></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Alaska</td>
                                        <td class="px-0 w-100">
                                        <div class="mx-4 progress progress-md">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                        <td><h5 class="mb-0 font-weight-bold">793</h5></td>
                                    </tr>
                                    </table>
                                </div>
                                </div>
                                <div class="mt-3 col-md-6">
                                <canvas id="north-america-chart"></canvas>
                                <div id="north-america-legend"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <div class="mt-3 ml-xl-4">
                            <p class="card-title">Detailed Reports</p>
                                <h1 class="text-primary">$34040</h1>
                                <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                                <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                            </div>
                            </div>
                            <div class="col-md-12 col-xl-9">
                            <div class="row">
                                <div class="col-md-6 border-right">
                                <div class="mt-3 mb-3 table-responsive mb-md-0">
                                    <table class="table table-borderless report-table">
                                    <tr>
                                        <td class="text-muted">Illinois</td>
                                        <td class="px-0 w-100">
                                        <div class="mx-4 progress progress-md">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                        <td><h5 class="mb-0 font-weight-bold">713</h5></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Washington</td>
                                        <td class="px-0 w-100">
                                        <div class="mx-4 progress progress-md">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                        <td><h5 class="mb-0 font-weight-bold">583</h5></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Mississippi</td>
                                        <td class="px-0 w-100">
                                        <div class="mx-4 progress progress-md">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                        <td><h5 class="mb-0 font-weight-bold">924</h5></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">California</td>
                                        <td class="px-0 w-100">
                                        <div class="mx-4 progress progress-md">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                        <td><h5 class="mb-0 font-weight-bold">664</h5></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Maryland</td>
                                        <td class="px-0 w-100">
                                        <div class="mx-4 progress progress-md">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                        <td><h5 class="mb-0 font-weight-bold">560</h5></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">Alaska</td>
                                        <td class="px-0 w-100">
                                        <div class="mx-4 progress progress-md">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                        <td><h5 class="mb-0 font-weight-bold">793</h5></td>
                                    </tr>
                                    </table>
                                </div>
                                </div>
                                <div class="mt-3 col-md-6">
                                <canvas id="south-america-chart"></canvas>
                                <div id="south-america-legend"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <p class="mb-0 card-title">Top Products</p>
                    <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Search Engine Marketing</td>
                            <td class="font-weight-bold">$362</td>
                            <td>21 Sep 2018</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                        </tr>
                        <tr>
                            <td>Search Engine Optimization</td>
                            <td class="font-weight-bold">$116</td>
                            <td>13 Jun 2018</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                        </tr>
                        <tr>
                            <td>Display Advertising</td>
                            <td class="font-weight-bold">$551</td>
                            <td>28 Sep 2018</td>
                            <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                            <td>Pay Per Click Advertising</td>
                            <td class="font-weight-bold">$523</td>
                            <td>30 Jun 2018</td>
                            <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                            <td>E-Mail Marketing</td>
                            <td class="font-weight-bold">$781</td>
                            <td>01 Nov 2018</td>
                            <td class="font-weight-medium"><div class="badge badge-danger">Cancelled</div></td>
                        </tr>
                        <tr>
                            <td>Referral Marketing</td>
                            <td class="font-weight-bold">$283</td>
                            <td>20 Mar 2018</td>
                            <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                        </tr>
                        <tr>
                            <td>Social media marketing</td>
                            <td class="font-weight-bold">$897</td>
                            <td>26 Oct 2018</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">To Do Lists</h4>
                        <div class="pt-2 list-wrapper">
                            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                <li>
                                    <div class="form-check form-check-flat">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Meeting with Urban Team
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check form-check-flat">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Duplicate a project for new customer
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check form-check-flat">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Project meeting with CEO
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check form-check-flat">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Follow up of team zilla
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check form-check-flat">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Level up for Antony
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-2 mb-0 add-items d-flex">
                            <input type="text" class="form-control todo-list-input"  placeholder="Add new task">
                            <button class="bg-transparent add btn btn-icon text-primary todo-list-add-btn"><i class="icon-circle-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card">
                <div class="card-body">
                    <p class="mb-0 card-title">Projects</p>
                    <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th class="pb-2 pl-0 border-bottom">Places</th>
                            <th class="pb-2 border-bottom">Orders</th>
                            <th class="pb-2 border-bottom">Users</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="pl-0">Kentucky</td>
                            <td><p class="mb-0"><span class="mr-2 font-weight-bold">65</span>(2.15%)</p></td>
                            <td class="text-muted">65</td>
                        </tr>
                        <tr>
                            <td class="pl-0">Ohio</td>
                            <td><p class="mb-0"><span class="mr-2 font-weight-bold">54</span>(3.25%)</p></td>
                            <td class="text-muted">51</td>
                        </tr>
                        <tr>
                            <td class="pl-0">Nevada</td>
                            <td><p class="mb-0"><span class="mr-2 font-weight-bold">22</span>(2.22%)</p></td>
                            <td class="text-muted">32</td>
                        </tr>
                        <tr>
                            <td class="pl-0">North Carolina</td>
                            <td><p class="mb-0"><span class="mr-2 font-weight-bold">46</span>(3.27%)</p></td>
                            <td class="text-muted">15</td>
                        </tr>
                        <tr>
                            <td class="pl-0">Montana</td>
                            <td><p class="mb-0"><span class="mr-2 font-weight-bold">17</span>(1.25%)</p></td>
                            <td class="text-muted">25</td>
                        </tr>
                        <tr>
                            <td class="pl-0">Nevada</td>
                            <td><p class="mb-0"><span class="mr-2 font-weight-bold">52</span>(3.11%)</p></td>
                            <td class="text-muted">71</td>
                        </tr>
                        <tr>
                            <td class="pb-0 pl-0">Louisiana</td>
                            <td class="pb-0"><p class="mb-0"><span class="mr-2 font-weight-bold">25</span>(1.32%)</p></td>
                            <td class="pb-0">14</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <p class="card-title">Charts</p>
                        <div class="charts-data">
                        <div class="mt-3">
                            <p class="mb-0">Data 1</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-4 progress progress-md flex-grow-1">
                                <div class="progress-bar bg-inf0" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0">5k</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="mb-0">Data 2</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-4 progress progress-md flex-grow-1">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0">1k</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="mb-0">Data 3</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-4 progress progress-md flex-grow-1">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0">992</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="mb-0">Data 4</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-4 progress progress-md flex-grow-1">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mb-0">687</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
                    <div class="card data-icon-card-primary">
                    <div class="card-body">
                        <p class="text-white card-title">Number of Meetings</p>
                        <div class="row">
                        <div class="text-white col-8">
                            <h3>34040</h3>
                            <p class="mb-0 text-white font-weight-500">The total number of sessions within the date range.It is calculated as the sum . </p>
                        </div>
                        <div class="col-4 background-icon">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card">
                <div class="card-body">
                    <p class="card-title">Notifications</p>
                    <ul class="icon-data-list">
                    <li>
                        <div class="d-flex">
                        <img src="{{ asset('images/faces/face1.jpg') }}" alt="user">
                        <div>
                            <p class="mb-1 text-info">Isabella Becker</p>
                            <p class="mb-0">Sales dashboard have been created</p>
                            <small>9:30 am</small>
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                        <img src="{{ asset('images/faces/face2.jpg') }}" alt="user">
                        <div>
                            <p class="mb-1 text-info">Adam Warren</p>
                            <p class="mb-0">You have done a great job #TW111</p>
                            <small>10:30 am</small>
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                        <img src="{{ asset('images/faces/face3.jpg') }}" alt="user">
                        <div>
                        <p class="mb-1 text-info">Leonard Thornton</p>
                        <p class="mb-0">Sales dashboard have been created</p>
                        <small>11:30 am</small>
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                        <img src="{{ asset('images/faces/face4.jpg') }}" alt="user">
                        <div>
                            <p class="mb-1 text-info">George Morrison</p>
                            <p class="mb-0">Sales dashboard have been created</p>
                            <small>8:50 am</small>
                        </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                        <img src="{{ asset('images/faces/face5.jpg') }}" alt="user">
                        <div>
                        <p class="mb-1 text-info">Ryan Cortez</p>
                        <p class="mb-0">Herbs are fun and easy to grow.</p>
                        <small>9:00 am</small>
                        </div>
                        </div>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Advanced Table</p>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="datatables" class="display expandable-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Quote#</th>
                                            <th>Product</th>
                                            <th>Business type</th>
                                            <th>Policy holder</th>
                                            <th>Premium</th>
                                            <th>Status</th>
                                            <th>Updated at</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>Search Engine Marketing</td>
                                        <td class="font-weight-bold">$362</td>
                                        <td>21 Sep 2018</td>
                                        <td>21 Sep 2018</td>
                                        <td>21 Sep 2018</td>
                                        <td>21 Sep 2018</td>
                                        <td>21 Sep 2018</td>
                                        <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js-custom')
    <script>
        $(document).ready(function() {
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
                }
            });

            var table = $('#datatable').DataTable();

            // Edit record
            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');
                var data = table.row($tr).data();
                alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
            });

            // Delete a record
            table.on('click', '.remove', function(e) {
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
            });

            //Like record
            table.on('click', '.like', function() {
                alert('You clicked on Like button');
            });
        });
    </script>
@endpush
