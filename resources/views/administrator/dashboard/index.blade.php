<x-app-admin-layout>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card rounded bg-warning text-white">
                    <div class="card-body tile_stats_count text-center">
                        <h3 class="count_top"><i class="fa fa-user"></i> Total Users</h3>
                        <h3 class="count">{{ $usercount }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card rounded bg-red text-white">
                    <div class="card-body tile_stats_count text-center">
                        <h3 class="count_top"><i class="fa fa-user"></i> Total Items Lost</h3>
                        <h3 class="count">{{ $lostcount }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card rounded bg-primary text-white">
                    <div class="card-body tile_stats_count text-center">
                        <h3 class="count_top"><i class="fa fa-user"></i> Total Items Found</h3>
                        <h3 class="count">{{ $foundcount }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card rounded bg-success text-white">
                    <div class="card-body tile_stats_count text-center">
                        <h3 class="count_top"><i class="fa fa-user"></i> Total Items Taken</h3>
                        <h3 class="count">300</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- top tiles -->

        <div class="row my-3">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Last Log Login User</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Email/NIK</th>
                                        <th>Time</th>
                                        <th>Ip Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datalog as $key => $log)
                                        <tr>
                                            <td>{{$key +1}}</td>
                                            <td>{{$log->user->email ?? $log->user->nik}}</td>
                                            <td>{{$log->created_at}}</td>
                                            <td>{{$log->ip_address}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Visitors</h2>
                        <ul class="nav navbar-right panel_toolbox">

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <canvas id="visitors"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- /top tiles -->

        <div class="row">

            <div class="col-md-6 mb-3 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Lost Items</h2>
                        <ul class="nav navbar-right panel_toolbox">

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <canvas id="lostItems"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Item Found</h2>
                        <ul class="nav navbar-right panel_toolbox">
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <canvas id="foundItem"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <br />
    </div>
</x-app-admin-layout>
