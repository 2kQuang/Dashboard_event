﻿@extends('admin.layouts.master')
@section('admin_content')
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                    <div class="chart sparkline" id="spark1"></div>
                    <div class="data-info">
                        <div class="desc">New Users</div>
                        <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span
                                class="number" data-toggle="counter" data-end="113">0</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                    <div class="chart sparkline" id="spark2"></div>
                    <div class="data-info">
                        <div class="desc">Monthly Sales</div>
                        <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span
                                class="number" data-toggle="counter" data-end="80" data-suffix="%">0</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                    <div class="chart sparkline" id="spark3"></div>
                    <div class="data-info">
                        <div class="desc">Impressions</div>
                        <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span
                                class="number" data-toggle="counter" data-end="532">0</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                    <div class="chart sparkline" id="spark4"></div>
                    <div class="data-info">
                        <div class="desc">Downloads</div>
                        <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span
                                class="number" data-toggle="counter" data-end="113">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="widget widget-fullwidth be-loading">
                    <div class="widget-head">
                        <div class="tools">
                            <div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span
                                        class="icon mdi mdi-more-vert d-inline-block d-md-none"></span></a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Week</a><a
                                        class="dropdown-item" href="#">Month</a><a class="dropdown-item"
                                        href="#">Year</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Today</a>
                                </div>
                            </div><span class="icon mdi mdi-chevron-down"></span><span
                                class="icon toggle-loading mdi mdi-refresh-sync"></span><span
                                class="icon mdi mdi-close"></span>
                        </div>
                        <div class="button-toolbar d-none d-md-block">
                            <div class="btn-group">
                                <button class="btn btn-secondary" type="button">Week</button>
                                <button class="btn btn-secondary active" type="button">Month</button>
                                <button class="btn btn-secondary" type="button">Year</button>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-secondary" type="button">Today</button>
                            </div>
                        </div><span class="title">Recent Movement</span>
                    </div>
                    <div class="widget-chart-container">
                        <div class="widget-chart-info">
                            <ul class="chart-legend-horizontal">
                                <li><span data-color="main-chart-color1"></span> Purchases</li>
                                <li><span data-color="main-chart-color2"></span> Plans</li>
                                <li><span data-color="main-chart-color3"></span> Services</li>
                            </ul>
                        </div>
                        <div class="widget-counter-group widget-counter-group-right">
                            <div class="counter counter-big">
                                <div class="value">25%</div>
                                <div class="desc">Purchase</div>
                            </div>
                            <div class="counter counter-big">
                                <div class="value">5%</div>
                                <div class="desc">Plans</div>
                            </div>
                            <div class="counter counter-big">
                                <div class="value">5%</div>
                                <div class="desc">Services</div>
                            </div>
                        </div>
                        <div id="main-chart" style="height: 260px;"></div>
                    </div>
                    <div class="be-spinner">
                        <svg width="40px" height="40px" viewbox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                            <circle class="circle" fill="none" stroke-width="4" stroke-linecap="round"
                                cx="33" cy="33" r="30"></circle>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card card-table">
                    <div class="card-header">
                        <div class="tools dropdown"> <span class="icon mdi mdi-download"></span><a
                                class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span
                                    class="icon mdi mdi-more-vert"></span></a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item"
                                    href="#">Action</a><a class="dropdown-item" href="#">Another
                                    action</a><a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated
                                    link</a>
                            </div>
                        </div>
                        <div class="title">Purchases</div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th style="width:40%;">Product</th>
                                    <th class="number">Price</th>
                                    <th style="width:20%;">Date</th>
                                    <th style="width:20%;">State</th>
                                    <th class="actions" style="width:5%;"></th>
                                </tr>
                            </thead>
                            <tbody class="no-border-x">
                                <tr>
                                    <td>Sony Xperia M4</td>
                                    <td class="number">$149</td>
                                    <td>Aug 23, 2018</td>
                                    <td class="text-success">Completed</td>
                                    <td class="actions"><a class="icon" href="#"><i
                                                class="mdi mdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Apple iPhone 6</td>
                                    <td class="number">$535</td>
                                    <td>Aug 20, 2018</td>
                                    <td class="text-success">Completed</td>
                                    <td class="actions"><a class="icon" href="#"><i
                                                class="mdi mdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Samsung Galaxy S7</td>
                                    <td class="number">$583</td>
                                    <td>Aug 18, 2018</td>
                                    <td class="text-warning">Pending</td>
                                    <td class="actions"><a class="icon" href="#"><i
                                                class="mdi mdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>HTC One M9</td>
                                    <td class="number">$350</td>
                                    <td>Aug 15, 2018</td>
                                    <td class="text-warning">Pending</td>
                                    <td class="actions"><a class="icon" href="#"><i
                                                class="mdi mdi-plus-circle-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Sony Xperia Z5</td>
                                    <td class="number">$495</td>
                                    <td>Aug 13, 2018</td>
                                    <td class="text-danger">Cancelled</td>
                                    <td class="actions"><a class="icon" href="#"><i
                                                class="mdi mdi-plus-circle-o"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card card-table">
                    <div class="card-header">
                        <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a class="dropdown-toggle"
                                href="#" role="button" data-toggle="dropdown"><span
                                    class="icon mdi mdi-more-vert"></span></a>
                            <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item"
                                    href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a
                                    class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated
                                    link</a>
                            </div>
                        </div>
                        <div class="title">Latest Commits</div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width:37%;">User</th>
                                    <th style="width:36%;">Commit</th>
                                    <th>Date</th>
                                    <th class="actions"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="user-avatar"> <img src="assets\img\avatar6.png" alt="Avatar">Penelope
                                        Thornton</td>
                                    <td>Topbar dropdown style</td>
                                    <td>Aug 16, 2018</td>
                                    <td class="actions"><a class="icon" href="#"><i
                                                class="mdi mdi-github-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="user-avatar"> <img src="assets\img\avatar4.png" alt="Avatar">Benji
                                        Harper</td>
                                    <td>Left sidebar adjusments</td>
                                    <td>Jul 15, 2018</td>
                                    <td class="actions"><a class="icon" href="#"><i
                                                class="mdi mdi-github-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="user-avatar"> <img src="assets\img\avatar5.png" alt="Avatar">Justine
                                        Myranda</td>
                                    <td>Main structure markup</td>
                                    <td>Jul 28, 2018</td>
                                    <td class="actions"><a class="icon" href="#"><i
                                                class="mdi mdi-github-alt"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="user-avatar"> <img src="assets\img\avatar3.png" alt="Avatar">Sherwood
                                        Clifford</td>
                                    <td>Initial commit</td>
                                    <td>Jun 30, 2018</td>
                                    <td class="actions"><a class="icon" href="#"><i
                                                class="mdi mdi-github-alt"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header card-header-divider pb-3">Current Progress</div>
                    <div class="card-body pt-5">
                        <div class="row user-progress user-progress-small">
                            <div class="col-lg-5"><span class="title">Bootstrap Admin</span></div>
                            <div class="col-lg-7">
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 40%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row user-progress user-progress-small">
                            <div class="col-lg-5"><span class="title">Custom Work</span></div>
                            <div class="col-lg-7">
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 65%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row user-progress user-progress-small">
                            <div class="col-lg-5"><span class="title">Clients Module</span></div>
                            <div class="col-lg-7">
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 30%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row user-progress user-progress-small">
                            <div class="col-lg-5"><span class="title">Email Templates</span></div>
                            <div class="col-lg-7">
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row user-progress user-progress-small">
                            <div class="col-lg-5"><span class="title">Plans Module</span></div>
                            <div class="col-lg-7">
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="widget be-loading">
                    <div class="widget-head">
                        <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span
                                class="icon mdi mdi-refresh-sync toggle-loading"></span><span
                                class="icon mdi mdi-close"></span></div>
                        <div class="title">Top Sales</div>
                    </div>
                    <div class="widget-chart-container">
                        <div id="top-sales" style="height: 178px;"></div>
                        <div class="chart-pie-counter">36</div>
                    </div>
                    <div class="chart-legend">
                        <table>
                            <tr>
                                <td class="chart-legend-color"><span data-color="top-sales-color1"></span>
                                </td>
                                <td>Premium Purchases</td>
                                <td class="chart-legend-value">125</td>
                            </tr>
                            <tr>
                                <td class="chart-legend-color"><span data-color="top-sales-color2"></span>
                                </td>
                                <td>Standard Plans</td>
                                <td class="chart-legend-value">1569</td>
                            </tr>
                            <tr>
                                <td class="chart-legend-color"><span data-color="top-sales-color3"></span>
                                </td>
                                <td>Services</td>
                                <td class="chart-legend-value">824</td>
                            </tr>
                        </table>
                    </div>
                    <div class="be-spinner">
                        <svg width="40px" height="40px" viewbox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                            <circle class="circle" fill="none" stroke-width="4" stroke-linecap="round"
                                cx="33" cy="33" r="30"></circle>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="widget widget-calendar">
                    <div id="calendar-widget"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">Latest Activity</div>
                    <div class="card-body">
                        <ul class="user-timeline user-timeline-compact">
                            <li class="latest">
                                <div class="user-timeline-date">Just Now</div>
                                <div class="user-timeline-title">Create New Page</div>
                                <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros
                                    non, tristique.</div>
                            </li>
                            <li>
                                <div class="user-timeline-date">Today - 15:35</div>
                                <div class="user-timeline-title">Back Up Theme</div>
                                <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros
                                    non, tristique.</div>
                            </li>
                            <li>
                                <div class="user-timeline-date">Yesterday - 10:41</div>
                                <div class="user-timeline-title">Changes In The Structure</div>
                                <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros
                                    non, tristique. </div>
                            </li>
                            <li>
                                <div class="user-timeline-date">Yesterday - 3:02</div>
                                <div class="user-timeline-title">Fix the Sidebar</div>
                                <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros
                                    non, tristique.</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="widget be-loading">
                    <div class="widget-head">
                        <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span
                                class="icon mdi mdi-refresh-sync toggle-loading"></span><span
                                class="icon mdi mdi-close"></span></div>
                        <div class="title">Conversions</div>
                    </div>
                    <div class="widget-chart-container">
                        <div class="widget-chart-info mb-4">
                            <div class="indicator indicator-positive float-right"><span
                                    class="icon mdi mdi-chevron-up"></span><span class="number">15%</span>
                            </div>
                            <div class="counter counter-inline">
                                <div class="value">156k</div>
                                <div class="desc">Impressions</div>
                            </div>
                        </div>
                        <div id="map-widget" style="height: 265px;"></div>
                    </div>
                    <div class="be-spinner">
                        <svg width="40px" height="40px" viewbox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                            <circle class="circle" fill="none" stroke-width="4" stroke-linecap="round"
                                cx="33" cy="33" r="30"></circle>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
