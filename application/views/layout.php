<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?> | RSU GRAN  HERNA MEDAN</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/sweetalert.min.js"></script>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
  
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
 </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="<?php echo base_url(); ?>dashboard">
                            <img src="<?php echo base_url(); ?>assets/pages/img/logo-horizontal.png" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="<?php echo base_url(); ?>assets/layouts/layout/img/avatar1.jpg" />
                                    <span class="username username-hide-on-mobile"> Firman </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="app_todo.html">
                                            <i class="icon-lock"></i> Ganti Password
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>">
                                            <i class="icon-logout"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="heading">
                                <h3 class="uppercase">Main Navigation</h3>
                            </li>
                            <li class="nav-item start">
                                <a href="<?php echo base_url(); ?>dashboard" class="nav-link">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>

                            <?php function rekammedis(){ ?>
                            <li class="nav-item start">
                                <a href="<?php echo base_url(); ?>rekammedis" class="nav-link nav-toggle">
                                    <i class="icon-notebook"></i>
                                    <span class="title">Rekam Medis</span>
                                </a>
                            </li>
                            <?php } ?>

                            <?php function pendaftaran(){ ?>
                            <li class="heading">
                                <h3 class="uppercase">Pendaftaran</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-user-follow"></i>
                                    <span class="title">Pendafaran</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>pendaftaran" class="nav-link ">
                                            <span class="title">Poli / IGD</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>poli/daftar_harian" class="nav-link ">
                                            <span class="title">Daftar Harian</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="#" class="nav-link ">
                                            <span class="title">Cetak Kartu</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>

                            <?php function poli(){ ?>
                            <li class="heading">
                                <h3 class="uppercase">Poli</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-layers"></i>
                                    <span class="title">Poli / IGD</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>poli" class="nav-link ">
                                            <span class="title">Antrian Periksa</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>poli/daftar_harian_selesai" class="nav-link ">
                                            <span class="title">Daftar Harian</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>

                            <?php function ranap(){ ?>
                            <li class="heading">
                                <h3 class="uppercase">RAWAT INAP</h3>
                            </li>
                            <li class="nav-item start">
                                <a href="<?php echo base_url(); ?>poli/rawatinap" class="nav-link nav-toggle">
                                    <i class="icon-users"></i>
                                    <span class="title">Pasien Rawat Inap</span>
                                </a>
                            </li>
                            <?php } ?>
   
                            <?php function lab(){ ?>
                            <li class="heading">
                                <h3 class="uppercase">Laboratorium</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-layers"></i>
                                    <span class="title">Laboratorium</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>laboratorium/antrian_periksa" class="nav-link ">
                                            <span class="title">Antrian Periksa</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>laboratorium/hasil_periksa" class="nav-link ">
                                            <span class="title">Hasil Periksa</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>laboratorium/kategori_pemerikasaan" class="nav-link ">
                                            <span class="title">Kategori Pemeriksaan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>laboratorium/daftar_pemerikasaan" class="nav-link ">
                                            <span class="title">Daftar Pemeriksaan</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?> 

                            <?php function radio(){ ?>
                            <li class="heading">
                                <h3 class="uppercase">Radiologi</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-layers"></i>
                                    <span class="title">Radiologi</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>radiologi/antrian_periksa" class="nav-link ">
                                            <span class="title">Antrian Periksa</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>radiologi/hasil_periksa" class="nav-link ">
                                            <span class="title">Hasil Periksa</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>radiologi/kategori_pemerikasaan" class="nav-link ">
                                            <span class="title">Kategori Pemeriksaan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>radiologi/daftar_pemerikasaan" class="nav-link ">
                                            <span class="title">Daftar Pemeriksaan</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>

                            <?php function pembayaran(){ ?>
                            <li class="heading">
                                <h3 class="uppercase">Pembayaran</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-credit-card"></i>
                                    <span class="title">Pembayaran</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>pembayaran/page_pembayaran" class="nav-link ">
                                            <span class="title">Pembayaran</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>pembayaran/riwayat_pembayaran" class="nav-link ">
                                            <span class="title">Riwayat Pembayaran</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>

                            <?php function pasien(){ ?>
                            <li class="heading">
                                <h3 class="uppercase">PASIEN</h3>
                            </li>
                            <li class="nav-item start">
                                <a href="<?php echo base_url(); ?>pasien" class="nav-link nav-toggle">
                                    <i class="icon-users"></i>
                                    <span class="title">Data Pasien</span>
                                </a>
                            </li>
                            <?php } ?>

                            <?php function master(){ ?>
                            <li class="heading">
                                <h3 class="uppercase">Setting Data</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-settings"></i>
                                    <span class="title">Master Data</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>paramedis" class="nav-link ">
                                            <span class="title">Data Para Medis</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>dokter" class="nav-link ">
                                            <span class="title">Data Dokter</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>pegawai" class="nav-link ">
                                            <span class="title">Data Pegawai</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>jabatan" class="nav-link ">
                                            <span class="title">Data Jabatan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>poliklinik" class="nav-link ">
                                            <span class="title">Data Poliklinik</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>spesialis" class="nav-link ">
                                            <span class="title">Data Spesialis</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>departemen" class="nav-link ">
                                            <span class="title">Data Departemen</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>bidang" class="nav-link ">
                                            <span class="title">Data Bidang Pegawai</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>

                            <?php function tarif(){ ?>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-settings"></i>
                                    <span class="title">Master Tarif</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>tarif/tarif_lab" class="nav-link ">
                                            <span class="title">Tarif Pemeriksaan Lab</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>tarif/tarif_radio" class="nav-link ">
                                            <span class="title">Tarif Pemeriksaan Radiologi</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>

                            <?php function ruangan(){ ?>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-settings"></i>
                                    <span class="title">Master Ruangan</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>kategoriruangan" class="nav-link ">
                                            <span class="title">Kategori Ruangan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>kelasruangan" class="nav-link ">
                                            <span class="title">Kelas Ruangan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>ruangan" class="nav-link ">
                                            <span class="title">Ruangan Dan Tarif</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>

                            <?php function apotek(){ ?>
                            <li class="heading">
                                <h3 class="uppercase">Apotek</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-heart"></i>
                                    <span class="title">Modul Apotek</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>obatpasien" class="nav-link ">
                                            <span class="title">Obat Pasien</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>obat" class="nav-link ">
                                            <span class="title">Obat dan Alkes</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>kategori" class="nav-link ">
                                            <span class="title">Kategori Barang</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>satuan" class="nav-link ">
                                            <span class="title">Satuan Barang</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>pembelian" class="nav-link ">
                                            <span class="title">Pembelian Obat</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>supplier" class="nav-link ">
                                            <span class="title">Data Supplier</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="#" class="nav-link ">
                                            <span class="title">Laporan Penjualan</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>

                            <?php function tindakan(){ ?>
                            <li class="heading">
                                <h3 class="uppercase">Tindakan</h3>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-magic-wand"></i>
                                    <span class="title">Menu Tindakan</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>tindakan/page_golongan" class="nav-link ">
                                            <span class="title">Golongan Tindakan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="<?php echo base_url(); ?>tindakan/page_tindakan" class="nav-link ">
                                            <span class="title">Data Tindakan</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>

                            <?php function laporan(){ ?>
                            <li class="heading">
                                <h3 class="uppercase">Laporan</h3>
                            </li>
                            <li class="nav-item start">
                                <a href="<?php echo base_url(); ?>laporan" class="nav-link">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">Laporan</span>
                                </a>
                            </li>
                            <?php } ?>

                            <?php function pengaturan(){ ?>
                            <li class="heading">
                                <h3 class="uppercase">Setting</h3>
                            </li>
                            <li class="nav-item start">
                                <a href="<?php echo base_url(); ?>laporan" class="nav-link">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">Data Rumah Sakit</span>
                                </a>
                            </li>
                            <?php } ?>

                            <!-- SESSION -->
                            <?php
                            $level = $this->session->userdata('level');
                            if($level == "admin"){
                                echo rekammedis();
                                echo pendaftaran();
                                echo poli();
                                echo ranap();
                                echo lab();
                                echo radio();
                                echo pembayaran();
                                echo pasien();
                                echo master();
                                // echo tarif();
                                echo ruangan();
                                echo apotek();
                                echo tindakan();
                                echo laporan();
                                echo pengaturan();
                            }elseif ($level == "pendaftaran"){
                                echo rekammedis();
                                echo pendaftaran();
                                echo pasien();
                                echo tindakan();
                                echo laporan();
                            }elseif ($level == "poli"){
                                echo rekammedis();
                                echo poli();
                                echo tindakan();
                            }elseif ($level == "ranap"){
                                echo ranap();
                                echo tindakan();
                            }elseif ($level == "apotek"){
                                echo apotek();
                                echo laporan();
                            }elseif ($level == "lab"){
                                echo lab();
                                echo tindakan();
                            }elseif ($level == "radiologi"){
                                echo radio();
                                echo tindakan();
                            }elseif ($level == "pembayaran"){
                                echo pembayaran();
                                echo laporan();
                            }
                        ?>
                        <!-- END SESSION -->
                        </ul>
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url(); ?>dashboard">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span><?php echo $title; ?></span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"><?php echo $title; ?>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                        <div class="row">
                            <?php $this->load->view($isi); ?>
                        </div>
                        <div class="clearfix"></div>
                        <!-- END DASHBOARD STATS 1-->
                        </div>
                    </div>

            <!-- END FOOTER -->
        </div>
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/table-datatables-rowreorder.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
        <script>
        $(document).ready(function() {
            $('#data').DataTable({
                "oLanguage": {
                    "sSearch": "<i class='fa fa-search fa-fw'></i> Pencarian : ",
                    "sLengthMenu": "_MENU_ &nbsp;&nbsp;",
                    "sInfoFiltered": "(difilter dari _MAX_ total data)",
                    "sZeroRecords": "Pencarian tidak ditemukan",
                    "sEmptyTable": "Data kosong",
                    "sLoadingRecords": "Harap Tunggu...",
                    "oPaginate": {
                        "sPrevious": "Prev",
                        "sNext": "Next"
                    }
                }
            });
        });
        </script>
    </body>

</html>