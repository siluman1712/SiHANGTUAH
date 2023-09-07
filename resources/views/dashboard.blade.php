@extends('layouts.main')
@section('content')
@include('partial.judul')
            <div class="container">
                
                <div class="row upside-summary">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card mb-3 border-0 rounded-0 gradient-success">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <h2 class="f-light">6523</h2>
                                        <p class="mb-0">Tickets Completed</p>
                                    </div>
                                    <span class="icon fa fa-check-circle"></span>
                                </div>
                                <div class="progress progress-sm rounded-0 light mt-3">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card mb-3 border-0 rounded-0 gradient-danger">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <h2 class="f-light">25456</h2>
                                        <p class="mb-0">Tickets Critical</p>
                                    </div>
                                    <span class="icon fa fa-exclamation-circle"></span>
                                </div>
                                <div class="progress progress-sm rounded-0 light mt-3">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card mb-3 border-0 rounded-0 gradient-warning">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <h2 class="f-light">1234</h2>
                                        <p class="mb-0">Tickets In-progress</p>
                                    </div>
                                    <span class="icon fa fa-info-circle"></span>
                                </div>
                                <div class="progress progress-sm rounded-0 light mt-3">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card mb-3 border-0 rounded-0 gradient-primary">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <h2 class="f-light">485</h2>
                                        <p class="mb-0">Tickets Un-assinged</p>
                                    </div>
                                    <span class="icon fa fa-plus-circle"></span>
                                </div>
                                <div class="progress progress-sm rounded-0 light mt-3">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card mb-3 border-0 rounded-0 bg-success">
                            <span class="icon-background fa fa-cubes"></span>
                            <div class="card-body">
                                <div class="media mb-2">
                                    <div class="media-body">
                                        <h4>$785155</h4>
                                        <p class="text-uppercase">Total Profit</p>
                                    </div>
                                    <span class="icon fa fa-cubes"></span>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <small>Progress</small>
                                    </div>
                                    <div class="col">
                                        <span class="dynamicsparkline2">Loading..</span>
                                    </div>
                                </div>
                                <div class="progress progress-sm rounded-0 bottom light">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card mb-3 border-0 rounded-0 bg-danger">
                            <span class="icon-background fa fa-users"></span>
                            <div class="card-body">
                                <div class="media mb-2">
                                    <div class="media-body">
                                        <h4>385155</h4>
                                        <p class="text-uppercase">Active Users</p>
                                    </div>
                                    <span class="icon fa fa-users"></span>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <small>Progress</small>
                                    </div>
                                    <div class="col">
                                        <span class="dynamicsparkline2">Loading..</span>
                                    </div>
                                </div>
                                <div class="progress progress-sm rounded-0 bottom light">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card mb-3 border-0 rounded-0 bg-warning">
                            <span class="icon-background fa fa-cart-arrow-down"></span>
                            <div class="card-body">
                                <div class="media mb-2">
                                    <div class="media-body">
                                        <h4>12345</h4>
                                        <p class="text-uppercase">New Orders</p>
                                    </div>
                                    <span class="icon fa fa-cart-arrow-down"></span>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <small>Progress</small>
                                    </div>
                                    <div class="col">
                                        <span class="dynamicsparkline2">Loading..</span>
                                    </div>
                                </div>
                                <div class="progress progress-sm rounded-0 bottom light">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card mb-3 border-0 rounded-0 bg-primary">
                            <span class="icon-background fa fa-comments"></span>
                            <div class="card-body">
                                <div class="media mb-2">
                                    <div class="media-body">
                                        <h4>48</h4>
                                        <p class="text-uppercase">New Feedback</p>
                                    </div>
                                    <span class="icon fa fa-comments"></span>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <small>Progress</small>
                                    </div>
                                    <div class="col">
                                        <span class="dynamicsparkline2">Loading..</span>
                                    </div>
                                </div>
                                <div class="progress progress-sm rounded-0 bottom light">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="f-light text-center py-4 mb-3">Total Number of tickets: This year <b>256015</b>, This month <b>46523</b></h4>
                
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
                        <div class="card rounded-0 border-0 h-100">
                            <div class="card-header">
                                <h4 class="card-title">Tickets from Companies</h4>
                            </div>
                            <div class="card-body text-center">
                                <h2 class="f-light">332541</h2>
                                <p class="text-secondary mb-3">Partner Companies</p>
                                <canvas id="donutchart-area" class="text-primary mb-3"></canvas>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-6 col-lg-8 col-xl-9 mb-3">
                        <div class="card rounded-0 border-0">
                            <div class="card-header">
                                <h4 class="card-title d-inline-block">Top Performance</h4> <button class="btn btn-success btn-sm float-right">View all</button>
                            </div>
                            <div class="card-body p-0">
                                <table class="table mb-0 footable">
                                    <thead class="d-none">
                                        <tr>
                                            <th>Comapny Name</th>
                                            <th data-breakpoints="xs">Tickets</th>
                                            <th data-breakpoints="xs sm">Comment</th>
                                            <th data-breakpoints="xs sm">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="figure avatar60 rounded-circle align-self-start bg-purple text-white border-0">E</div>
                                                    <div class="media-body">
                                                        <h5 class="time-title p-0">Eagle</h5>
                                                        New Jersey, UK
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="time-title p-0">32655</h5>
                                                <p>Tickets</p>
                                            </td>
                                            <td>Doing fentastic work every day</td>
                                            <td>
                                                <span class="rounded-3 btn btn-outline-primary btn-sm">Take up</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="figure avatar60 rounded-circle align-self-start bg-primary text-white border-0">M</div>
                                                    <div class="media-body">
                                                        <h5 class="time-title p-0">MarsXspace</h5>
                                                        New Jersey, UK
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="time-title p-0">32655</h5>
                                                <p>Tickets</p>
                                            </td>
                                            <td>Doing fentastic work every day</td>
                                            <td>
                                                <span class="rounded-3 btn btn-outline-warning btn-sm">Average</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="figure avatar60 rounded-circle align-self-start bg-warning text-white border-0">C</div>
                                                    <div class="media-body">
                                                        <h5 class="time-title p-0">Chinmayaar</h5>
                                                        New Jersey, UK
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="time-title p-0">32655</h5>
                                                <p>Tickets</p>
                                            </td>
                                            <td>Doing fentastic work every day</td>
                                            <td>
                                                <span class="rounded-3 btn btn-outline-danger btn-sm">Critical</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="figure avatar60 rounded-circle align-self-start bg-danger text-white border-0">F</div>
                                                    <div class="media-body">
                                                        <h5 class="time-title p-0">Foogle</h5>
                                                        New Jersey, UK
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="time-title p-0">32655</h5>
                                                <p>Tickets</p>
                                            </td>
                                            <td>Doing fentastic work every day</td>
                                            <td>
                                                <span class="rounded-3 btn btn-outline-success btn-sm">Closed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="figure avatar60 rounded-circle align-self-start bg-success text-white border-0">O</div>
                                                    <div class="media-body">
                                                        <h5 class="time-title p-0">OpenFiled</h5>
                                                        New Jersey, UK
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="time-title p-0">32655</h5>
                                                <p>Tickets</p>
                                            </td>
                                            <td>Doing fentastic work every day</td>
                                            <td>
                                                <span class="rounded-3 btn btn-outline-success btn-sm">Closed</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-8">
                                        <h5 class="card-title">Card Title goes here</h5>
                                    </div>
                                    <div class="col text-right">
                                        <button class="btn btn-success">+ Add</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                <p class="mb-0 text-secondary f-sm">Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various
                                    business domains like Manufacturing, inventory, IT, administration etc. for admin panel, system development, web
                                    applications, even website can be created. This template also considered social pages, ecommerce pages and many
                                    more. </p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary"> Footer Button</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-8">
                                        <h5 class="card-title">Card Title goes here</h5>
                                    </div>
                                    <div class="col text-right">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-secondary dropdown-toggle float-right icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button">
                                                All
                                                <i class="fa fa-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body  ">
                                <p class="mb-0 f-sm text-secondary">Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various
                                    business domains like Manufacturing, inventory, IT, administration etc. for admin panel, system development, web
                                    applications, even website can be created. This template also considered social pages, ecommerce pages and many
                                    more. </p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary"> Footer Button</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title">Find more</h5>
                                    </div>
                                    <div class="col text-right">
                                        <div class="form-group text-left mb-0">
                                            <div class="input-group mb-0">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body  ">
                                <p class="mb-0 f-sm text-secondary">Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various
                                    business domains like Manufacturing, inventory, IT, administration etc. for admin panel, system development, web
                                    applications, even website can be created. This template also considered social pages, ecommerce pages and many
                                    more. </p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary"> Footer Button</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body p-0">
                                <div class="row m-0">
                                    <div class="p-3 bg-warning">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="f-light">25</h4>
                                                <p>Mar</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-3 pt-3">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="f-light">College Meetup</h4>
                                                <p>
                                                    <i class="fa fa-map-marker"></i> New york, USA | 1256 Attendees</p>
                                                Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various business
                                                domains like Manufacturing, inventory, IT, administration etc.
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="card-footer text-right col border-0">
                                                <img src="assets/img/logo_full_black.png" alt="" class="float-left">
                                                <button type="button" class="btn btn-link text-dark">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body p-0">
                                <div class="row m-0">
                                    <div class="p-3 gradient-success">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="f-light">25</h4>
                                                <p>Mar</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-3 pt-3">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="f-light">College Meetup</h4>
                                                <p>
                                                    <i class="fa fa-map-marker"></i> New york, USA | 1256 Attendees</p>
                                                Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various business
                                                domains like Manufacturing, inventory, IT, administration etc.
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="card-footer text-right col border-0">
                                                <img src="assets/img/logo_full_black.png" alt="" class="float-left">
                                                <button type="button" class="btn btn-link text-dark">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body p-0">
                                <div class="row m-0">
                                    <div class="p-3 gradient-danger">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="f-light">25</h4>
                                                <p>Mar</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-3 pt-3">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="f-light">College Meetup</h4>
                                                <p>
                                                    <i class="fa fa-map-marker"></i> New york, USA | 1256 Attendees</p>
                                                Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various business
                                                domains like Manufacturing, inventory, IT, administration etc.
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="card-footer text-right col border-0">
                                                <img src="assets/img/logo_full_black.png" alt="" class="float-left">
                                                <button type="button" class="btn btn-link text-dark">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body p-0 bg-warning">
                                <div class="row m-0">
                                    <div class="p-3 ">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="f-light">25</h4>
                                                <p>Mar</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-3 pt-3">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="f-light">College Meetup</h4>
                                                <p>
                                                    <i class="fa fa-map-marker"></i> New york, USA | 1256 Attendees</p>
                                                Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various business
                                                domains like Manufacturing, inventory, IT, administration etc.
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="card-footer text-right col border-0">
                                                <img src="assets/img/logo_full_black1.png" alt="" class="float-left">
                                                <button type="button" class="btn btn-link text-dark">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body p-0">
                                <div class="row m-0">
                                    <div class="p-3 gradient-success">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="f-light">25</h4>
                                                <p>Mar</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-3 pt-3 gradient-success">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="f-light">College Meetup</h4>
                                                <p>
                                                    <i class="fa fa-map-marker"></i> New york, USA | 1256 Attendees</p>
                                                Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various business
                                                domains like Manufacturing, inventory, IT, administration etc.
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="card-footer text-right col border-0">
                                                <img src="assets/img/logo_full_black1.png" alt="" class="float-left">
                                                <button type="button" class="btn btn-link text-dark">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body p-0">
                                <div class="row m-0">
                                    <div class="p-3 gradient-danger">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="f-light">25</h4>
                                                <p>Mar</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-3 pt-3 gradient-danger">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="f-light">College Meetup</h4>
                                                <p>
                                                    <i class="fa fa-map-marker"></i> New york, USA | 1256 Attendees</p>
                                                Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various business
                                                domains like Manufacturing, inventory, IT, administration etc.
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="card-footer text-right col border-0">
                                                <img src="assets/img/logo_full_black1.png" alt="" class="float-left">
                                                <button type="button" class="btn btn-link text-dark">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body p-3">
                                <div class="media">
                                    <div class="icon">
                                        <i class="fa fa-file-pdf-o "></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0">Document.pdf</p>
                                        <small>21.6 MB</small>
                                    </div>
                                    <button class="btn btn-outline-primary">
                                        <i class="fa fa-cloud-download"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body p-3">
                                <div class="media">
                                    <div class="icon">
                                        <i class="fa fa-file-word-o "></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0">Document.docx</p>
                                        <small>21.6 MB</small>
                                    </div>
                                    <button class="btn btn-outline-primary">
                                        <i class="fa fa-cloud-download"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body p-3">
                                <div class="media">
                                    <div class="icon">
                                        <i class="fa fa-file-excel-o "></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0">Document.xls</p>
                                        <small>21.6 MB</small>
                                    </div>
                                    <button class="btn btn-outline-primary">
                                        <i class="fa fa-cloud-download"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body p-3">
                                <div class="media">
                                    <div class="icon">
                                        <i class="fa fa-file-audio-o "></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0">songs.mp3</p>
                                        <small>21.6 MB</small>
                                    </div>
                                    <button class="btn btn-outline-primary">
                                        <i class="fa fa-cloud-download"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body text-center p-5">
                                <i class="fa fa-file-pdf-o fa-4x mb-3 text-danger"></i>
                                <p class="mb-0">Document.pdf</p>
                                <small>21.6 MB</small>
                                <br>
                                <br>
                                <button class="btn btn-outline-primary">
                                    <i class="fa fa-cloud-download"></i> Download</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body text-center p-5">
                                <i class="fa fa-file-word-o fa-4x mb-3 text-primary"></i>
                                <p class="mb-0">Document.docx</p>
                                <small>21.6 MB</small>
                                <br>
                                <br>
                                <button class="btn btn-outline-primary">
                                    <i class="fa fa-cloud-download"></i> Download</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body text-center p-5">
                                <i class="fa fa-file-excel-o fa-4x mb-3 text-secondary"></i>
                                <p class="mb-0">Document.xls</p>
                                <small>21.6 MB</small>
                                <br>
                                <br>
                                <button class="btn btn-outline-primary">
                                    <i class="fa fa-cloud-download"></i> Download</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body text-center p-5">
                                <i class="fa fa-file-audio-o fa-4x mb-3 text-warning"></i>
                                <p class="mb-0">songs.mp3</p>
                                <small>21.6 MB</small>
                                <br>
                                <br>
                                <button class="btn btn-outline-primary">
                                    <i class="fa fa-cloud-download"></i> Download</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title">Login</h5>
                                    </div>
                                    <div class="col text-right">
                                        <div class="dropdown">
                                            <button class="btn btn-link btn-sm text-secondary rounded-0 dropdown-toggle float-right icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-exclamation-circle text-secondary"></i> Report</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-cog text-secondary"></i> Settings</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-trash text-secondary"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center pr-5 pl-5">
                                <figure class="avatar120 rounded-circle mt-0">
                                    <img src="assets/img/user5.png" alt="user image">
                                </figure>
                                <h5 class="my-4 f-light">Maxi Johnsons</h5>
                                <div class="form-group text-left float-label">
                                    <input type="password" class="form-control">
                                    <label>Enter your password</label>
                                    <button class="overlay btn btn-sm btn-link text-success">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary btn-block col">Login</button>
                                    <br>
                                    <a href="">Not you? Sign in as different user</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title">Login</h5>
                                    </div>
                                    <div class="col text-right">
                                        <div class="dropdown">
                                            <button class="btn btn-link btn-sm text-secondary rounded-0 dropdown-toggle float-right icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-exclamation-circle text-secondary"></i> Report</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-cog text-secondary"></i> Settings</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-trash text-secondary"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pr-5 pl-5">
                                <a class=" text-center d-block" href="#">
                                    <img src="assets/img/logo_full.png" alt="" class="mw-100">
                                </a>
                                <br>
                                <div class="form-group text-left float-label">
                                    <input type="email" class="form-control">
                                    <label>Email address</label>
                                </div>
                                <div class="form-group text-left float-label">
                                    <input type="password" class="form-control">
                                    <label>Enter your password</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"> Remember Me</label>
                                </div>
                                <br>
                                <div>
                                    <button class="btn btn-primary btn-block col">Login</button>
                                    <br>
                                </div>
                                <div class="text-left">
                                    <a href="" class="">Forgot Password?</a>
                                    <a href="" class="float-right">Sign up Now!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title">Signup</h5>
                                    </div>
                                    <div class="col text-right">
                                        <div class="dropdown">
                                            <button class="btn btn-link btn-sm text-secondary rounded-0 dropdown-toggle float-right icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-exclamation-circle text-secondary"></i> Report</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-cog text-secondary"></i> Settings</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-trash text-secondary"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pr-5 pl-5">
                                <div class="form-group text-left float-label">
                                    <input type="text" class="form-control active" value="Admin Dashboard">
                                    <label>Your name</label>
                                </div>
                                <div class="form-group text-left float-label">
                                    <input type="email" class="form-control active" value="infoatmaxartkiller.in">
                                    <label>Email address</label>
                                </div>
                                <div class="form-group text-left float-label">
                                    <input type="password" class="form-control">
                                    <label>Enter your password</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2"> I agree with
                                        <a href="">Terms and Conditions</a>
                                    </label>
                                </div>
                                <br>
                                <div class="text-center">
                                    <button class="btn btn-primary btn-block col">Sign up</button>
                                    <br>
                                    <a href="">Already have account? Sign in here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="card border-0 rounded-0 mb-3">
                            <div class="card-header">
                                <h5 class="card-title  pull-left">Map world
                                    <small>jVectormap</small>
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="worldmap light" id="mapasiawrap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-0 rounded-0 mb-3">
                            <div class="card-header">
                                <h5 class="card-title  pull-left">Map world
                                    <small>jVectormap </small>
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="worldmap" id="mapwrap2"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body">
                                <p class="text-secondary">Trending</p>
                                <h5 class="my-3">New version of Admin dashboard has been released last friday</h5>
                                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elitut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem
                                    ipsum dolor sit amet.
                                    <a href="">Read more</a>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3 bg-primary">
                            <div class="card-body text-white">
                                <p class="">Trending</p>
                                <h3 class="my-3  f-light">New version of Admin dashboard has been released last friday</h3>
                                <p class="mb-4 mt-3">20 Jan 2018 | Posted by
                                    <a href="">Admin</a>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body text-center bg-dark text-white">
                                <figure class="background">
                                    <img src="assets/img/news2.png" alt="user image">
                                </figure>
                                <div>
                                    <h4 class="my-1  f-light">New version of Admin dashboard has been released last friday</h4>
                                    <p class="my-2">20 Jan 2018 | Posted by
                                        <a href="">Admin</a>
                                    </p>
                                    <a href=" " class="btn btn-outline-light my-3">Read more</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-header overlay ">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="media media-sm text-white">
                                            <figure class="avatar30 rounded-circle">
                                                <img src="assets/img/user1.png" alt="user image">
                                            </figure>
                                            <div class="media-body text-left">
                                                <h4 class="mb-0 text-white">Maxartkiller</h4>
                                                Author:
                                                <a href="#">Admin</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <div class="dropdown">
                                            <button class="btn btn-link btn-sm text-white rounded-0 dropdown-toggle float-right icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-exclamation-circle text-secondary"></i> Report</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-cog text-secondary"></i> Settings</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-trash text-secondary"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="user-full-large">
                                <figure class="">
                                    <img src="assets/img/news1.png" alt="user image">
                                </figure>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-primary btn-float top z3 text-white">
                                    <i class="fa fa-share-alt"></i>
                                </button>
                                <h5 class="my-3">New version of Admin dashboard has been released last friday</h5>
                                <p class="text-secondary">Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various
                                    business domains like Manufacturing, inventory, IT, administration etc.
                                    <a href="">Read more</a>
                                </p>

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <div class="media media-sm">
                                            <div class="text-left mr-2">
                                                <figure class="avatar30 rounded-circle">
                                                    <img src="assets/img/user1.png" alt="user image">
                                                </figure>
                                                <figure class="avatar30 rounded-circle">
                                                    <img src="assets/img/user2.png" alt="user image">
                                                </figure>
                                                <figure class="avatar30 rounded-circle">
                                                    <img src="assets/img/user3.png" alt="user image">
                                                </figure>
                                            </div>
                                            <div class="media-body text-left">
                                                <h4 class="mb-0">210</h4>
                                                <a href="#" class="text-primary">Likes</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="media media-sm">
                                            <div class="media-body text-right">
                                                <h4 class="mb-0">263</h4>
                                                <a href="#" class="text-primary">Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3 bg-success">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title text-white">Latest News</h5>
                                    </div>
                                    <div class="col text-right">
                                        <div class="dropdown">
                                            <button class="btn btn-link btn-sm rounded-0 dropdown-toggle float-right icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-exclamation-circle text-secondary"></i> Report</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-cog text-secondary"></i> Settings</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-trash text-secondary"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-white text-center">
                                <h3 class="my-3  f-light">New version of Admin dashboard has been released last friday</h3>
                                <p class="mb-4 mt-3">20 Jan 2018 | Posted by
                                    <a href="">Admin</a>
                                </p>
                                <p>Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various
                                    business domains like Manufacturing, inventory, IT, administration etc. for admin panel, system development, web
                                    applications, even website can be created. This template also considered social pages, ecommerce pages and many
                                    more.
                                    <a href=" ">Read more</a>
                                </p>
                                <div class="circle-profile circle-profile-sm mb-0 text-center">
                                    <div class="line">
                                        <hr>
                                    </div>
                                    <figure class="avatar60 rounded-circle">
                                        <img src="assets/img/user4.png" alt="user image" class="">
                                    </figure>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <div class="media media-sm">
                                            <div class="media-body text-left">
                                                <a href="#">
                                                    <h4 class="mb-0">Maxartkiller</h4>
                                                    Author
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="media media-sm">
                                            <div class="media-body text-right">
                                                <h4 class="mb-0">265</h4>
                                                <a href="#">Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title">Latest News</h5>
                                    </div>
                                    <div class="col text-right">
                                        <div class="dropdown">
                                            <button class="btn btn-link btn-sm rounded-0 dropdown-toggle float-right icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-exclamation-circle text-secondary"></i> Report</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-cog text-secondary"></i> Settings</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-trash text-secondary"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center bg-danger text-white">
                                <figure class="background">
                                    <img src="assets/img/news2.png" alt="user image">
                                </figure>
                                <div>
                                    <h3 class="my-3  f-light">New version of Admin dashboard has been released last friday</h3>
                                    <p class="my-4">20 Jan 2018 | Posted by
                                        <a href="">Admin</a>
                                    </p>
                                    <p>Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various
                                        business domains like Manufacturing, inventory, IT, administration etc. for admin panel, system development, web
                                        applications, even website can be created. This template also considered social pages, ecommerce pages and many
                                        more. </p>
                                    <a href=" " class="btn btn-outline-light my-3">Read more</a>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <div class="media media-sm">
                                            <div class="text-left mr-2">
                                                <figure class="avatar30 rounded-circle">
                                                    <img src="assets/img/user1.png" alt="user image">
                                                </figure>
                                                <figure class="avatar30 rounded-circle">
                                                    <img src="assets/img/user2.png" alt="user image">
                                                </figure>
                                                <figure class="avatar30 rounded-circle">
                                                    <img src="assets/img/user3.png" alt="user image">
                                                </figure>
                                            </div>
                                            <div class="media-body text-left">
                                                <h4 class="mb-0">210</h4>
                                                <a href="#" class="text-primary">Likes</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="media media-sm">
                                            <div class="media-body text-right">
                                                <h4 class="mb-0">265</h4>
                                                <a href="#" class="text-primary">Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row no-gutters  mb-3">
                    <div class="col-12 col-md-8">
                        <figure class="full-screen-background">
                            <img src="assets/img/testimonial2.jpg" alt="">
                        </figure>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card rounded-0 border-0 text-center pricing">
                            <div class="card-body">
                                <i class="icon fa fa-building fa-3x bg-warning rounded-circle text-white mt-4"></i>
                                <h4 class="f-light text-secondary mt-3">Company</h4>
                                <h2 class="f-light">$10000
                                    <small class="text-secondary">/mo</small>
                                </h2>
                                <p>Unlimited Users</p>
                                <hr>
                                <p class="mb-0">
                                    Unlimited access per day
                                    <br> Unlimited Contact list
                                    <br> 100 transactopns per day
                                </p>
                            </div>
                            <div class="card-footer text-center border-0">
                                <button class="btn btn-primary">Buy Now!</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card text-center rounded-0 border-0 mb-3">
                            <div class="w-100 ">
                                <figure class="">
                                    <img src="assets/img/product.png" alt="user image">
                                </figure>
                            </div>
                            <div class="card-body p-2">
                                <h5 class="my-2 f-light">Apple Watch Series 1 - 42 mm Space Grey Aluminium Case...</h5>
                                <p class="text-success my-1">Exchange up to 5000</p>
                                <h3>₹18,900
                                    <small class="text-secondary">
                                        <s>₹23,900</s>
                                        <span class="text-success">20% off</span>
                                    </small>
                                </h3>
                                <p class="text-secondary mt-3">Keep a track of the number of steps you take and the calories you burn, set your workout goals, monitor your heart
                                    rate and stress...
                                    <a href="">Read more</a>
                                </p>

                            </div>
                            <div class="row m-0">
                                <button class="btn btn-secondary rounded-0 btn-lg col-6">Wishlist</button>
                                <button class="btn btn-primary rounded-0 btn-lg col-6">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card text-center rounded-0 border-0 mb-3">
                            <div class="w-100 ">
                                <div class="offer bg-success text-white">On Offer</div>
                                <figure class="">
                                    <img src="assets/img/product.png" alt="user image">
                                </figure>
                            </div>
                            <div class="card-body p-2">
                                <h5 class="my-2 f-light">Apple Watch Series 1 - 42 mm Space Grey Aluminium Case...</h5>
                                <p class="text-success my-1">Special Price</p>
                                <h3>₹18,900
                                    <small class="text-secondary">
                                        <s>₹23,900</s>
                                        <span class="text-success">20% off</span>
                                    </small>
                                </h3>
                                <p class="text-secondary mt-3">Keep a track of the number of steps you take and the calories you burn, set your workout goals, monitor your heart
                                    rate and stress...
                                    <a href="">Read more</a>
                                </p>

                            </div>
                            <div class="row m-0">
                                <button class="btn btn-danger rounded-0 btn-lg col-6">
                                    <i class="fa fa-heart"></i> Wishlist</button>
                                <button class="btn btn-success rounded-0 btn-lg col-6">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card text-center rounded-0 border-0 mb-3">
                            <div class="w-100 ">
                                <div class="offer bg-success text-white">On Offer</div>
                                <figure class="">
                                    <img src="assets/img/product.png" alt="user image">
                                </figure>
                            </div>
                            <div class="card-body p-2 bg-primary">
                                <h5 class="my-2 f-light">Apple Watch Series 1 - 42 mm Space Grey Aluminium Case...</h5>
                                <p class=" my-1">Special Price</p>
                                <h3>₹18,900</h3>
                                <p class="text-secondary mt-3">Keep a track of the number of steps you take and the calories you burn, set your workout goals, monitor your heart
                                    rate and stress...
                                    <a href="">Read more</a>
                                </p>

                            </div>
                            <div class="row m-0">
                                <button class="btn btn-danger rounded-0 btn-lg col-6">
                                    <i class="fa fa-heart"></i> Wishlist</button>
                                <button class="btn btn-warning text-white rounded-0 btn-lg col-6">
                                    <i class="fa fa-star"></i> Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body userlist_large">
                                <div class="media">
                                    <br>
                                    <figure class="avatar120 rounded-circle mt-3">
                                        <img src="assets/img/user3.png" alt="user image" class="">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="mt-0">Maxi Johnsons</h4>
                                        <p>
                                            <i class="fa fa-building-o"></i> VP, Maxartkiller Co. Ltd., India</p>
                                        <h5 class="text-warning mb-3">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </h5>
                                        <div class="mb-0 lead">Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in
                                            various business domains like Manufacturing, inventory, IT, administration etc.</div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-body userlist_large">
                                <h4 class="text-center f-light">#1 Design Quality
                                    <br>Admin Dashboard template</h4>
                                <div class="media">
                                    <br>
                                    <div class="mb-0 lead">Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various
                                        business domains like Manufacturing, inventory, IT, administration etc.</div>
                                    <br>
                                    <h5 class="text-warning my-1 w-100">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </h5>
                                    <div class="circle-profile circle-profile-sm mb-0">
                                        <div class="line">
                                            <hr>
                                        </div>
                                        <figure class="avatar60 rounded-circle mt-3">
                                            <img src="assets/img/user4.png" alt="user image" class="">
                                        </figure>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="mt-0">John Doe</h4>
                                        <p class="mb-0">
                                            <i class="fa fa-building-o"></i> VP, Maxartkiller Co. Ltd., India</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-header bg-secondary">
                                <h4 class="text-center f-light text-white my-3">#1 Design Quality
                                    <br>Admin Dashboard template</h4>
                            </div>
                            <div class="card-body text-center">
                                <div class=" mt-1 lead">Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various
                                    business domains like Manufacturing, inventory, IT, administration etc.</div>
                                <br>
                                <h5 class="text-warning my-1 w-100">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </h5>
                            </div>
                            <div class="card-footer">
                                <div class="media">
                                    <figure class="avatar60 rounded-circle">
                                        <img src="assets/img/user5.png" alt="user image" class="">
                                    </figure>
                                    <div class="media-body">
                                        <h5 class="mb-1">Ayushi Johnson</h5>
                                        <i class="fa fa-building-o"></i> New Jersey, UK
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row ">
                    <div class="col-12 col-md-6 col-lg-4 storyline left mb-3">
                        <div class="story-block  no-arrow">
                            <span class="timeline-bubble bg-success"></span>
                            <div class="card border-0 rounded-0 mb-3 bg-none">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="f-light">3 January 2018</h4>
                                            <p>Ananta Theaters</p>
                                            Great show will be begin at in the show. Allcharacters are so funny and entertainers Must visit and watch it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="story-block  no-arrow">
                            <span class="timeline-bubble bg-danger"></span>
                            <div class="card border-0 rounded-0 mb-3 bg-none">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="f-light">3 January 2018</h4>
                                            <p>Ananta Theaters</p>
                                            Great show will be begin at in the show. Allcharacters are so funny and entertainers Must visit and watch it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="story-block no-arrow">
                            <span class="timeline-bubble bg-warning"></span>
                            <div class="card border-0 rounded-0 mb-3  bg-none ">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="f-light">3 January 2018</h4>
                                            <p>Ananta Theaters</p>
                                            Great show will be begin at in the show. Allcharacters are so funny and entertainers Must visit and watch it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="story-block no-arrow">
                            <span class="timeline-bubble bg-success"></span>
                            <div class="card border-0 rounded-0 mb-3 bg-none">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="f-light">3 January 2018</h4>
                                            <p>Ananta Theaters</p>
                                            Great show will be begin at in the show. Allcharacters are so funny and entertainers Must visit and watch it.
                                            <br>
                                            <br>
                                            <a href="#" class="btn btn-outline-dark">Visit Gallery</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 storyline left mb-3">
                        <div class="story-block ">
                            <span class="timeline-bubble bg-success"></span>
                            <div class="card border-0 rounded-0 mb-3 ">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="f-light">3 January 2018</h4>
                                            <p>Ananta Theaters</p>
                                            Great show will be begin at in the show. Allcharacters are so funny and entertainers Must visit and watch it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="story-block ">
                            <span class="timeline-bubble bg-danger"></span>
                            <div class="card border-0 rounded-0 mb-3">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="f-light">3 January 2018</h4>
                                            <p>Ananta Theaters</p>
                                            Great show will be begin at in the show. Allcharacters are so funny and entertainers Must visit and watch it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="story-block">
                            <span class="timeline-bubble bg-warning"></span>
                            <div class="card border-0 rounded-0 mb-3  gradient-warning ">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="f-light">3 January 2018</h4>
                                            <p>Ananta Theaters</p>
                                            Great show will be begin at in the show. Allcharacters are so funny and entertainers Must visit and watch it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="story-block">
                            <span class="timeline-bubble bg-success"></span>
                            <div class="card border-0 rounded-0 mb-3 bg-success">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="f-light">3 January 2018</h4>
                                            <p>Ananta Theaters</p>
                                            Great show will be begin at in the show. Allcharacters are so funny and entertainers Must visit and watch it.
                                            <br>
                                            <br>
                                            <a href="#" class="btn btn-outline-light">Visit Gallery</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 storyline left mb-3">
                        <div class="story-block  border-success right">
                            <span class="timeline-bubble bg-success"></span>
                            <div class="card border-0 rounded-0 mb-3 ">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="f-light">3 January 2018</h4>
                                            <p>Ananta Theaters</p>
                                            Great show will be begin at in the show. Allcharacters are so funny and entertainers Must visit and watch it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="story-block  border-danger right">
                            <span class="timeline-bubble bg-danger"></span>
                            <div class="card border-0 rounded-0 mb-3">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="f-light">3 January 2018</h4>
                                            <p>Ananta Theaters</p>
                                            Great show will be begin at in the show. Allcharacters are so funny and entertainers Must visit and watch it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="story-block border-primary right">
                            <span class="timeline-bubble bg-primary"></span>
                            <div class="card border-0 rounded-0 mb-3 ">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="f-light">3 January 2018</h4>
                                            <p>Ananta Theaters</p>
                                            Great show will be begin at in the show. Allcharacters are so funny and entertainers Must visit and watch it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="story-block border-warning right">
                            <span class="timeline-bubble bg-warning"></span>
                            <div class="card border-0 rounded-0 mb-3 ">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="f-light">3 January 2018</h4>
                                            <p>Ananta Theaters</p>
                                            Great show will be begin at in the show. Allcharacters are so funny and entertainers Must visit and watch it.
                                            <br>
                                            <br>
                                            <a href="#" class="btn btn-outline-light">Visit Gallery</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title">Profile Card</h5>
                                    </div>
                                    <div class="col text-right">
                                        <div class="dropdown">
                                            <button class="btn btn-link btn-sm text-secondary rounded-0 dropdown-toggle float-right icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-exclamation-circle text-secondary"></i> Report</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-cog text-secondary"></i> Settings</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-trash text-secondary"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body  userlist_large">
                                <div class="media">
                                    <figure class="avatar120 rounded-circle mt-3">
                                        <img src="assets/img/user3.png" alt="user image" class="">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="mt-0">Maxi Johnsons</h4>
                                        <p>New Jersey, UK</p>
                                        <div class="text-center col-10 d-flex ml-auto mr-auto mt-4">
                                            <button class="btn btn-primary col">Follow</button>
                                            <button class="btn btn-outline-secondary col ml-2">Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="media media-sm">
                                            <i class="align-self-start text-secondary icon fa fa-users"></i>
                                            <div class="media-body">
                                                <h5>10k</h5>
                                                <a href="#">Following</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="media media-sm">
                                            <i class="align-self-start text-secondary icon fa fa-thumbs-up"></i>
                                            <div class="media-body">
                                                <h5>10k</h5>
                                                <a href="#">Likes</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="media media-sm">
                                            <i class="align-self-start text-secondary icon fa fa-map-marker"></i>
                                            <div class="media-body">
                                                <h5>Banglore</h5>
                                                <a href="#">India</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-8">
                                        <h5 class="card-title">Top Candidate
                                            <small class="text-secondary">(9th Place)</small>
                                        </h5>
                                    </div>
                                    <div class="col text-right">
                                        <div class="dropdown">
                                            <button class="btn btn-link btn-sm text-secondary rounded-0 dropdown-toggle float-right icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-exclamation-circle text-secondary"></i> Report</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-cog text-secondary"></i> Settings</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-trash text-secondary"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body  userlist_large">
                                <div class="media">
                                    <div class="icon-center">
                                        <i class="fa fa-clipboard"></i>
                                    </div>
                                    <div class="icon-center right">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <figure class="avatar120 rounded-circle mt-3">
                                        <img src="assets/img/user1.png" alt="user image" class="">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="mt-0">Maxartkiller</h4>
                                        <p>UX Designer</p>
                                        <div class="row media column mt-4">
                                            <div class="col text-left">
                                                <h5>Level 7
                                                    <small class="text-secondary">1024 points</small>
                                                </h5>
                                            </div>
                                            <div class="col-3 align-self-center text-right">70%</div>
                                        </div>
                                        <div class="progress progress-sm rounded-0 mt-3">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <div class="media media-sm">
                                            <i class="align-self-start text-secondary icon fa fa-search"></i>
                                            <div class="media-body">
                                                <h5>10%</h5>
                                                <a href="#">Appearance Rate</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <span class="dynamicsparkline3"><canvas width="112" height="30" style="display: inline-block; width: 112px; height: 30px; vertical-align: top;"></canvas></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3 bg-dark">
                            <figure class="background">
                                <img src="assets/img/user1.png" alt="user image" class="">
                            </figure>
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-8">
                                        <h5 class="card-title">Top Candidate
                                            <small class="text-secondary">(9th Place)</small>
                                        </h5>
                                    </div>
                                    <div class="col text-right">
                                        <div class="dropdown">
                                            <button class="btn btn-link btn-sm text-secondary rounded-0 dropdown-toggle float-right icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-exclamation-circle text-secondary"></i> Report</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-cog text-secondary"></i> Settings</a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-trash text-secondary"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body  userlist_large">
                                <div class="media">
                                    <figure class="avatar120 rounded-circle mt-3">
                                        <img src="assets/img/user1.png" alt="user image" class="">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="mt-0">Maxartkiller</h4>
                                        <p class="text-secondary">UX Designer</p>
                                        <div class="text-center col-10 d-flex ml-auto mr-auto mt-4">
                                            <button class="btn btn-primary col">Follow</button>
                                            <button class="btn btn-outline-secondary col ml-2">Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <div class="media media-sm">
                                            <i class="align-self-start icon fa fa-search"></i>
                                            <div class="media-body">
                                                <h5>10%</h5>
                                                <a href="#">Appearance Rate</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <span class="dynamicsparkline3"><canvas width="112" height="30" style="display: inline-block; width: 112px; height: 30px; vertical-align: top;"></canvas></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h5 class="sub-title">Top Employees <button class="btn btn-success btn-sm float-right">View all</button></h5>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-3  mb-3">
                        <div class="card rounded-0 border-0 h-100">
                            <div class="card-header">
                                 <h5 class="card-title">#1 Ticket Taker</h5>
                            </div>
                            <div class="card-body  userlist_large text-center">
                                <div class="media">
                                    <figure class="avatar150 rounded-circle mt-3 border">
                                        <img src="assets/img/user1.png" alt="user image">
                                    </figure>
                                    <div class="media-body">
                                        <h4 class="mt-0">Maxi Johnsons<br><span class="rounded-3 mt-2 btn btn-danger btn-xs">Administrator</span></h4>
                                        <p class="mb-2">New Jersey, UK</p>                                  
                                    </div>
                                </div>                              
                                <p class="text-primary mb-1">+91 000 000 0000</p>                                
                                <p class="text-primary mb-1">infoatmaxartkiller.in</p>                                
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <div class="media media-sm">
                                            <div class="media-body text-center">
                                                <h4 class="mb-0">263564</h4>
                                                <a href="#" class="text-success">Completed</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media media-sm">
                                            <div class="media-body text-center">
                                                <h4 class="mb-0">2635</h4>
                                                <a href="#" class="text-warning">In-Progress</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media media-sm">
                                            <div class="media-body text-center">
                                                <h4 class="mb-0">254</h4>
                                                <a href="#" class="text-primary">Assinged</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-9">
                        <div class="card border-0 rounded-0 mb-3">
                            <div class="card-body">
                                <div class="media">
                                    <figure class="avatar60 rounded-circle align-self-start">
                                        <img src="assets/img/user2.png" alt="Generic placeholder image">
                                    </figure>
                                    <div class="media-body">
                                        <h5 class="time-title p-0">John Smith <span class="rounded-3 ml-2 btn btn-danger btn-xs">Administrator</span></h5>
                                        New Jersey, UK
                                    </div>
                                    <button class="btn btn-primary btn-sm mt-3 d-none d-sm-block"><i class="fa fa-comments"></i> Chat</button>
                                </div>
                            </div>
                            <div class="card-footer text-secondary border-top">
                                Email: <span class="text-primary">johnsmithtest@demourl.test</span> <span class="text-muted">|</span> Phone: <span class="text-primary">+1 000 000 0000</span>
                            </div>                    
                        </div>
                        <div class="card border-0 rounded-0 mb-3">
                            <div class="card-body">
                                <div class="media">
                                    <figure class="avatar60 rounded-circle align-self-start">
                                        <img src="assets/img/user3.png" alt="Generic placeholder image">
                                    </figure>
                                    <div class="media-body">
                                        <h5 class="time-title p-0">Anjana Shth<span class="rounded-3 ml-2 btn btn-warning text-white btn-xs">Superviser</span></h5>
                                        New Jersey, UK
                                    </div>
                                    <button class="btn btn-primary btn-sm mt-3 d-none d-sm-block"><i class="fa fa-comments"></i> Chat</button>
                                </div>
                            </div>                    
                            <div class="card-footer text-secondary border-top">
                                Email: <span class="text-primary">anjanaseth@demourl.test</span> <span class="text-muted">|</span> Phone: <span class="text-primary">+1 000 000 0000</span>
                            </div> 
                        </div>
                        <div class="card border-0 rounded-0 mb-3">
                            <div class="card-body">
                                <div class="media">
                                    <figure class="avatar60 rounded-circle align-self-start">
                                        <img src="assets/img/user4.png" alt="Generic placeholder image">
                                    </figure>
                                    <div class="media-body">
                                        <h5 class="time-title p-0">Akash Vaidya <span class="rounded-3 ml-2 btn btn-primary btn-xs">Repsonder</span></h5>
                                        Delhi, IN
                                    </div>
                                    <button class="btn btn-primary btn-sm mt-3 d-none d-sm-block"><i class="fa fa-comments"></i> Chat</button>
                                </div>
                            </div>
                            <div class="card-footer text-secondary border-top">
                                Email: <span class="text-primary">akashvaidya@demourl.test</span> <span class="text-muted">|</span> Phone: <span class="text-primary">+1 000 000 0000</span>
                            </div> 
                        </div>
                    
                    </div>
                </div>
               
            </div>
@endsection
