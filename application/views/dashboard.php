
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
        <div class="visual">
            <i class="fa fa-users"></i>
        </div>
        <div class="details">
            <div class="number">
                <span data-counter="counterup" data-value="0"></span>
            </div>
            <div class="desc"> Pasien </div>
        </div>
    </a>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a class="dashboard-stat dashboard-stat-v2 red" href="#">
        <div class="visual">
            <i class="fa fa-bed"></i>
        </div>
        <div class="details">
            <div class="number">
                <span data-counter="counterup" data-value="0"></span></div>
            <div class="desc"> Pasien Rawat Inap </div>
        </div>
    </a>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a class="dashboard-stat dashboard-stat-v2 green" href="#">
        <div class="visual">
            <i class="fa fa-ambulance"></i>
        </div>
        <div class="details">
            <div class="number">
                <span data-counter="counterup" data-value="0"></span>
            </div>
            <div class="desc"> Pasien Rawat Jalan </div>
        </div>
    </a>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
        <div class="visual">
            <i class="fa fa-bar-chart"></i>
        </div>
        <div class="details">
            <div class="number">
                <span data-counter="counterup" data-value="0"></span></div>
            <div class="desc"> Laporan </div>
        </div>
    </a>
</div>

    <div class="col-lg-6 col-xs-12 col-sm-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-bar-chart font-dark hide"></i>
                    <span class="caption-subject font-dark bold uppercase">Grafik Jumlah Pasien</span>
                </div>
            </div>
            <div class="portlet-body">
                <div id="site_statistics_loading">
                    <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                <div id="site_statistics_content" class="display-none">
                    <div id="site_statistics" class="chart"> </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
    <div class="col-lg-6 col-xs-12 col-sm-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-share font-red-sunglo hide"></i>
                    <span class="caption-subject font-dark bold uppercase">Grafik Pendapatan</span>
                </div>
            </div>
            <div class="portlet-body">
                <div id="site_activities_loading">
                    <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                <div id="site_activities_content" class="display-none">
                    <div id="site_activities" style="height: 228px;"> </div>
                </div>
                <div style="margin: 20px 0 10px 30px">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                            <span class="label label-sm label-success"> Revenue: </span>
                            <h3>13.234.000</h3>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                            <span class="label label-sm label-info"> Tax: </span>
                            <h3>13.234.000</h3>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                            <span class="label label-sm label-danger"> Shipment: </span>
                            <h3>13.234.000</h3>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                            <span class="label label-sm label-warning"> Orders: </span>
                            <h3>13.234.000</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>