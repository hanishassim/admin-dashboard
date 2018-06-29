@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/chartist-plugin-tooltip.css') }}" type="text/css" rel="stylesheet" />
@endsection

@section('title', 'Dashboard')

@section('content')
<div class="content mx-5">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
        <div class="card card-nav-tabs">
            <div class="card-header card-header-danger">
                .title, for when you want some bolder titles with a different font family.
            </div>
            <div class="card-body">
                <h1 class="title">`h1. Bootstrap heading</h1>
                <h2 class="title">h2. Bootstrap heading</h2>
                <h3 class="title">h3. Bootstrap heading</h3>
                <h4 class="title">h4. Bootstrap heading</h4>
                <h5 class="title">h5. Bootstrap heading</h5>
                <h6 class="title">`h6. Bootstrap heading</h6>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3>
                    Fancy display heading
                    <small class="text-muted">With faded secondary text</small>
                </h3>
            </div>
        </div>
        </div>
        <div class="col-12">
        <div class="card card-nav-tabs">
            <div class="card-header card-header-danger">
                Dropdowns
            </div>
            <div class="card-body">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-3">
            <div class="card bg-dark text-white">
            <img class="card-img" src="https://placeimg.com/640/980/arch" alt="Card image">
            <div class="card-img-overlay">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="https://placeimg.com/640/480/nature" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card card-nav-tabs">
                <h4 class="card-header card-header-info">Featured</h4>
                <div class="card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Used Space</p>
                <h3 class="card-title">49/50
                <small>GB</small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons text-danger">warning</i>
                <a href="#pablo">Get More Space...</a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                <i class="material-icons">store</i>
                </div>
                <p class="card-category">Revenue</p>
                <h3 class="card-title">$34,245</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                <i class="material-icons">info_outline</i>
                </div>
                <p class="card-category">Fixed Issues</p>
                <h3 class="card-title">75</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from Github
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                <i class="fab fa-twitter fa-2x m-2"></i>
                </div>
                <p class="card-category">Followers</p>
                <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">update</i> Just Updated
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
            <div class="card card-chart">
            <div class="card-header card-header-info">
                <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Daily Sales</h4>
                <p class="card-category">
                <span class="text-success"><i class="fas fa-long-arrow-alt-up"></i> 55% </span> increase in today sales.</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">access_time</i> updated 4 minutes ago
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-chart">
            <div class="card-header card-header-warning">
                <div class="ct-chart" id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Email Subscriptions</h4>
                <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-chart">
            <div class="card-header card-header-danger">
                <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Completed Tasks</h4>
                <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
                <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <span class="nav-tabs-title">Tasks:</span>
                    <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#profile" data-toggle="tab">
                        <i class="material-icons">bug_report</i> Bugs
                        <div class="ripple-container"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#messages" data-toggle="tab">
                        <i class="material-icons">code</i> Website
                        <div class="ripple-container"></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#settings" data-toggle="tab">
                        <i class="material-icons">cloud</i> Server
                        <div class="ripple-container"></div>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                <div class="tab-pane active" id="profile">
                    <table class="table">
                    <tbody>
                        <tr>
                        <td>
                            <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                <span class="check"></span>
                                </span>
                            </label>
                            </div>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                <span class="check"></span>
                                </span>
                            </label>
                            </div>
                        </td>
                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                <span class="check"></span>
                                </span>
                            </label>
                            </div>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                <span class="check"></span>
                                </span>
                            </label>
                            </div>
                        </td>
                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="messages">
                    <table class="table">
                    <tbody>
                        <tr>
                        <td>
                            <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                <span class="check"></span>
                                </span>
                            </label>
                            </div>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                <span class="check"></span>
                                </span>
                            </label>
                            </div>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="settings">
                    <table class="table">
                    <tbody>
                        <tr>
                        <td>
                            <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                <span class="check"></span>
                                </span>
                            </label>
                            </div>
                        </td>
                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                <span class="check"></span>
                                </span>
                            </label>
                            </div>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                        </td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                <span class="check"></span>
                                </span>
                            </label>
                            </div>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                            <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
            <div class="card-header card-header-warning">
                <h4 class="card-title">Employees Stats</h4>
                <p class="card-category">New employees on 15th September, 2016</p>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                <thead class="text-warning">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Country</th>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>Dakota Rice</td>
                    <td>$36,738</td>
                    <td>Niger</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Minerva Hooper</td>
                    <td>$23,789</td>
                    <td>Curaçao</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Sage Rodriguez</td>
                    <td>$56,142</td>
                    <td>Netherlands</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td>Philip Chaney</td>
                    <td>$38,735</td>
                    <td>Korea, South</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/chartist.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/chartist-plugin-tooltip.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/chartist-plugin-axistitle.min.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        initDashboardPageCharts();
    });

    function initDashboardPageCharts() {

        if ($('#dailySalesChart').length != 0 || $('#completedTasksChart').length != 0 || $('#websiteViewsChart').length != 0) {
            /* ----------==========     Daily Sales Chart initialization    ==========---------- */

            dataDailySalesChart = {
                labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
                series: [
                    [
                        {meta: 'description', value: 12 },
                        {meta: 'description', value: 17},
                        {meta: 'description', value: 7},
                        {meta: 'description', value: 17},
                        {meta: 'description', value: 23},
                        {meta: 'description', value: 18},
                        {meta: 'description', value: 38}
                    ]
                ]
            };

            optionsDailySalesChart = {
                low: 0,
                high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
                fullWidth: true,
                chartPadding: {
                    top: 0,
                    right: 20,
                    bottom: 0,
                    left: 0
                },
                plugins: [
                    Chartist.plugins.tooltip({
                        currency: 'RM '
                    }),
                    // Chartist.plugins.ctAxisTitle({
                    //     axisX: {
                    //         axisTitle: 'Time (mins)',
                    //         axisClass: 'ct-axis-title',
                    //         offset: {
                    //         x: 0,
                    //         y: 50
                    //         },
                    //         textAnchor: 'middle'
                    //     },
                    //     axisY: {
                    //         axisTitle: 'Goals',
                    //         axisClass: 'ct-axis-title',
                    //         offset: {
                    //         x: 0,
                    //         y: 0
                    //         },
                    //         textAnchor: 'middle',
                    //         flipTitle: false
                    //     }
                    // })
                ]
            }

            var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

            md.startAnimationForLineChart(dailySalesChart);



            /* ----------==========     Completed Tasks Chart initialization    ==========---------- */

            dataCompletedTasksChart = {
                labels: ['12p', '3p', '6p', '9p', '12p', '3a', '6a', '9a'],
                series: [
                    [230, 750, 450, 300, 280, 240, 200, 190]
                ]
            };

            optionsCompletedTasksChart = {
                lineSmooth: Chartist.Interpolation.cardinal({
                    tension: 0
                }),
                low: 0,
                high: 1000, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
                fullWidth: true,
                chartPadding: {
                    top: 0,
                    right: 20,
                    bottom: 0,
                    left: 0
                }
            }

            var completedTasksChart = new Chartist.Line('#completedTasksChart', dataCompletedTasksChart, optionsCompletedTasksChart);

            // start animation for the Completed Tasks Chart - Line Chart
            md.startAnimationForLineChart(completedTasksChart);


            /* ----------==========     Emails Subscription Chart initialization    ==========---------- */

            var dataWebsiteViewsChart = {
                labels: ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
                series: [
                    [542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895]

                ]
            };
            var optionsWebsiteViewsChart = {
                axisX: {
                    showGrid: false
                },
                low: 0,
                high: 1000,
                chartPadding: {
                    top: 0,
                    right: 5,
                    bottom: 0,
                    left: 0
                }
            };
            var responsiveOptions = [
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function(value) {
                            return value[0];
                        }
                    }
                }]
            ];
            var websiteViewsChart = Chartist.Bar('#websiteViewsChart', dataWebsiteViewsChart, optionsWebsiteViewsChart, responsiveOptions);

            //start animation for the Emails Subscription Chart
            md.startAnimationForBarChart(websiteViewsChart);
        }
    }
</script>
@endsection
