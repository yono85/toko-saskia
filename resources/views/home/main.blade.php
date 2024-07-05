@extends('home.index')

@section('content')
<main class="moby__content-body">

    <div class="div msg-page hide">
        <div class="boxit">
            <div class="div fsize20">
                <span class="fa flaticon-danger"></span>
            </div>
            <span>Halaman ini sedang dalam proses <b>Update</b></span>
        </div>
    </div>

    <!-- Moby Sub Header -->
    <div id="moby__header2" class="moby__sub-header">
        <div class="row no-gutters">

            <!-- Moby Welcome Left Section -->
            <div class="col-lg-5 col-md-12 col-12 w-h-mobile">

                <div class="fl-left">
                    <div class="div">
                        <h2><span class="fa flaticon2-line-chart"></span> Dashboard</h2>
                    </div>
                    <div class="div">
                        <span class="label">Periode:</span>
                        <span class="label-this-date">Hari ini</span>
                    </div>
                </div>
            </div>

            <!-- Moby Welcome Right Section -->
            <div class="col-lg-7 col-md-12 col-12">
                <div class="moby-right_section">
                    <div class="moby__calander-holder">

                        <div class="tbl">
                            <div class="intbl">
                                <div class="div clr-float">
                                    <div class="in-right">

                                        <div class="date-section">

                                            <form action="" id="form-dashboard">

                                                <button class="btn-r is-loading green cmd-getReload" role="off">
                                                    <span class="flaticon2-refresh-arrow"></span>
                                                </button>
    
                                                <div class="ar-dwnld hide area-btn-download">
                                                    <button role="off" data-url="" class="br-rds4 is-loading grey cmd-download-rp">
                                                        <span class="fas fa-file-download"></span>
                                                    </button>
                                                </div>
    
                                                <div class="moby__filter-btn-holder">
                                                    <span class="moby__calander"><i class="icon-calendar_today_outlined icon warning"></i></span>
                                                    <input type="text" id="start-date" name="start-date" value="" class="datepicker splt2-3 typefalse" placeholder="Start Date"/>
                                                    <span class="picker-separator">~</span>
                                                    <input type="text" id="end-date" name="end-date" value="" class="datepicker splt2-3 typefalse" placeholder="End Date"/>
                                                </div>
                                                
                                                <div class="ar-selected area-list-company hide">
                                                    <div class="ddwn area-ddwn ar-content keep">
                                                        <button class="btn br-rds8 cddwn" role="off">
                                                            <label class="mg-b0"><span class="fsize14 color-black">Company ID</span></label>
                                                        </button>
                                                        <div class="ddwn-pg area-ddwn-page">
                                                            <div class="ddwn-header">
                                                                <div class="inhd br-green-f">
                                                                    <button height="auto" type="button"></button>
                                                                    <input type="text" placeholder="Cari Company" class="ddwn-tsrc">
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li aria-selected="false" class="mg-b0" dataid="-1"><button role="off" dataid="-1" class="pd-tb10"><span>Company ID</span></button></li>
                                                            </ul>
                                                        </div>

                                                        <input type="hidden" class="value-dropdown min1" name="companyid" value="">
                                                    </div>
                                                </div>

                                                <input type="hidden" name="id" value="">

                                            </form>

                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Moby Stat Widget Card -->

    <!-- Moby Stat Widget Card Ends -->
    <div id="moby__stat-widget" class="moby__stat-card stat-cards-shadow">
        <div class="row">
            <!-- #1 Total Visits Card Column -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 res-box pd-lr-box" id="seling" role="on">

                <div class="card stat-card body-h-100 danger">

                    <div class="area-child-box">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body">

                            <h3 class="card-title">
                                <span class="ctr h14 br-rds4 w60p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </h3>
                            <span class="card-sub-title">
                                <span class="ctr h14 br-rds4 w33p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </span>
                            <div class="circle-progress-bar mg-b10">
                                <div class="crcl br-rds50p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <ul class="card-footer-list">
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="card-header"></div> -->

                    <div class="card-body">
                        <h3 class="card-title">Pesanan Berhasil</h3>
                        <span class="card-sub-title v-total">0</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="0" data-value="0">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <i class="sli_icon-chemistry progress-bar-icon icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <ul class="card-footer-list">
                            <li>
                                <i class="card-footer-icon icon sli_icon-check"><span class="path1"></span><span class="path2"></span></i>
                                <span class="card-footer-num">
                                    <span class="v-paid">0</span>
                                    <span class="card-footer-text">Paid</span>
                                </span>
                            </li>
                            <li>
                                <i class="card-footer-icon icon sli_icon-close"><span class="path1"></span><span class="path2"></span></i>
                                <span class="card-footer-num">
                                    <span class="v-cancel">0</span>
                                    <span class="card-footer-text">Cancel</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- #2 Total Visits Card Column -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 res-box pd-lr-box" id="customers" role="on">

                <div class="card stat-card body-h-100 primary">

                    <div class="area-child-box">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body">

                            <h3 class="card-title">
                                <span class="ctr h14 br-rds4 w60p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </h3>
                            <span class="card-sub-title">
                                <span class="ctr h14 br-rds4 w33p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </span>
                            <div class="circle-progress-bar mg-b10">
                                <div class="crcl br-rds50p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <ul class="card-footer-list">
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="card-header"></div> -->

                    <div class="card-body">
                        <h3 class="card-title">Pesanan Batal</h3>
                        <span class="card-sub-title v-total">0</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="0" data-value="0">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <i class="sli_icon-bag progress-bar-icon icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <ul class="card-footer-list">
                            <li>
                                <i class="card-footer-icon icon sli_icon-check"></i>
                                <span class="card-footer-num">
                                    <span class="v-total">0</span>
                                    <span class="card-footer-text">Paid</span>
                                </span>
                            </li>
                            <li>
                                <i class="card-footer-icon icon sli_icon-close"></i>
                                <span class="card-footer-num">
                                    <span class="v-cancel">0</span>
                                    <span class="card-footer-text">Cancel</span>
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- #3 Average Sales Column -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 res-box pd-lr-box" id="users" role="on">

                <div class="card stat-card body-h-100 success">

                    <div class="area-child-box">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body">

                            <h3 class="card-title">
                                <span class="ctr h14 br-rds4 w60p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </h3>
                            <span class="card-sub-title">
                                <span class="ctr h14 br-rds4 w33p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </span>
                            <div class="circle-progress-bar mg-b10">
                                <div class="crcl br-rds50p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <ul class="card-footer-list">
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="card-header"></div> -->

                    <div class="card-body">
                        <h3 class="card-title">Produk</h3>
                        <span class="card-sub-title v-total">0</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="0" data-value="0">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <i class="sli_icon-book-open progress-bar-icon icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <ul class="card-footer-list">
                            <li>
                                <i class="card-footer-icon icon sli_icon-check"><span class="path1"></span><span class="path2"></span></i>
                                <span class="card-footer-num">
                                    <span class="v-total">0</span>
                                    <span class="card-footer-text">Total</span>
                                </span>
                            </li>
                            <li>
                                <i class="card-footer-icon icon sli_icon-clock"><span class="path1"></span><span class="path2"></span></i>
                                <span class="card-footer-num">
                                    <span class="v-verify">0</span>
                                    <span class="card-footer-text">Progress</span>
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- #4 New Members Column -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 res-box pd-lr-box" id="returns" role="on">
                
                <div class="card stat-card body-h-100 warning">

                    <div class="area-child-box">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body">

                            <h3 class="card-title">
                                <span class="ctr h14 br-rds4 w60p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </h3>
                            <span class="card-sub-title">
                                <span class="ctr h14 br-rds4 w33p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </span>
                            <div class="circle-progress-bar mg-b10">
                                <div class="crcl br-rds50p">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <ul class="card-footer-list">
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="ctr h14 br-rds4 w60p">
                                            <div class="divH">
                                                <span class="splash-tbl"></span>
                                            </div>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- Stat Card Head -->
                    <!-- <div class="card-header"></div> -->
                    
                    <div class="card-body">
                        <h3 class="card-title">Customers</h3>
                        <span class="card-sub-title v-total">0</span>
                        <div class="circle-progress-bar">
                            <div class="progress" data-percentage="0" data-value="0">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <i class="sli_icon-users progress-bar-icon icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <ul class="card-footer-list">
                            <li>
                                <i class="card-footer-icon icon sli_icon-user-following"></i>
                                <span class="card-footer-num">
                                    <span class="v-total-personal">0</span>
                                    <span class="card-footer-text">Personal</span>
                                </span>
                            </li>
                            <li>
                                <i class="card-footer-icon icon sli_icon-briefcase"></i>
                                <span class="card-footer-num">
                                    <span class="v-total-corp">0</span>
                                    <span class="card-footer-text">Corporate</span>
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- #1 Moby Cards Row -->
    <div class="row">
        
        <div class="col-lg-12 col-md-12 col-12 res-box" id="charts" role="off">
            <!-- Static Table Card -->
            <div class="card body-pd-0">

            <div class="area-child-box">
                <div class="ststc">
                    <img src="/assets/svg/loading.blue.svg" alt="loading">
                </div>
            </div>

                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">
                        <div class="div">Statistik Penjualan</div>
                        <div class="div fsize12 font-wg0">
                            <span class="label">Total </span>
                            <span class="v-total">Rp0</span>
                        </div>
                    </h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">

                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#" class="cmd-reload-box" role="off">
                                    <i class="icon-refresh_outlined icon"></i>
                                </a>
                            </li>
                            <li>
                                <!-- Static Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>

                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Export Excel</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>
                <!-- Card Header Ends -->
                <!-- Card Body -->
                <div class="card-body">
                <div class="graph-h">
                        <div id="sCharts"></div>
                    </div>
                 <!-- <div class="chart" id="line-chart"></div> -->
                </div>
                <!-- Card Body Ends -->
            </div>
            <!-- Static Table Card Ends -->
        </div>
    </div>

    <!-- #2 Moby Cards Row -->
    <div class="row">

        <!-- #3 Page view by Page title -->
        <div class="col-lg-6 col-md-12 col-12 res-box" id="rankseling" role="off">
            <!-- Page view Card -->
            <div class="card body-pd-0">

                <div class="area-child-box br-rds4">
                    <div class="card-header">

                        <h3 class="head-title">
                            <div class="div">
                                <span class="ctr h14 br-rds4 w110">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </div>
                        </h3>
                        
                        <div class="moby__card-extra">
                            <!-- Card Icon Menu -->
                            <ul class="moby__icon-menu">
                                <li>
                                <span class="ctr h14 br-rds4 w50">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="card-body scroller">
                        <div class="moby__page-view spin-nested-loading">
                            <ul class="spin-container">
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w75p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w60p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w33p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Card Header -->
                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">
                        <div class="div">
                            <div class="div">Rank Marketing</div>
                            <div class="div fsize12 font-wg0">
                                <span class="label">Total</span>
                                <span class="v-total">Rp</span>
                            </div>
                        </div>
                    </h3>
                    <!-- Card Header Title Ends -->
                    <!-- Card Extra -->
                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#" class="cmd-reload-box" role="off"> <i class="icon-refresh_outlined icon"></i> </a>
                            </li>
                            <li>
                                <!-- Page View Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Export Excel</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page View Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>

                <div class="card-body value scroller">
                    <div class="moby__page-view spin-nested-loading">
                        <ul class="spin-container">
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="fa flaticon-businesswoman"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="fa flaticon-businesswoman"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="fa flaticon-businesswoman"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="fa flaticon-businesswoman"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- #3 Page view by Page title -->
        <div class="col-lg-6 col-md-12 col-12 res-box" id="rankcustomers" role="off">
            <!-- Page view Card -->
            <div class="card body-pd-0">
                
                <div class="area-child-box br-rds4">
                    <div class="card-header">

                        <h3 class="head-title">
                            <div class="div">
                                <span class="ctr h14 br-rds4 w110">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </div>
                        </h3>
                        
                        <div class="moby__card-extra">
                            <!-- Card Icon Menu -->
                            <ul class="moby__icon-menu">
                                <li>
                                <span class="ctr h14 br-rds4 w50">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="card-body scroller">
                        <div class="moby__page-view spin-nested-loading">
                            <ul class="spin-container">
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w75p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w60p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w33p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <!-- Card Header Title -->
                    <h3 class="head-title">
                        <div class="div">
                            <div class="div">Rank Customers</div>
                            <div class="div fsize12 font-wg0">
                                <span class="label">Total</span>
                                <span class="v-total">Rp</span>
                            </div>
                        </div>
                    </h3>
                    
                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#" class="cmd-reload-box" role="off"> <i class="icon-refresh_outlined icon"></i> </a>
                            </li>
                            <li>
                                <!-- Page View Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Export Excel</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page View Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>

                <div class="card-body value scroller">
                    <div class="moby__page-view spin-nested-loading">
                        <ul class="spin-container">
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="fa flaticon-businesswoman"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="fa flaticon-businesswoman"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="fa flaticon-businesswoman"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="fa flaticon-businesswoman"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="row">


        <!-- #3 Page view by Page title -->
        <div class="col-lg-6 col-md-12 col-12 res-box" id="rankekspedisi" role="off">
            <!-- Page view Card -->
            <div class="card body-pd-0">

                <div class="area-child-box br-rds4">
                    <div class="card-header">

                        <h3 class="head-title">
                            <div class="div">
                                <span class="ctr h14 br-rds4 w110">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </div>
                        </h3>
                        
                        <div class="moby__card-extra">
                            <!-- Card Icon Menu -->
                            <ul class="moby__icon-menu">
                                <li>
                                <span class="ctr h14 br-rds4 w50">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="card-body scroller">
                        <div class="moby__page-view spin-nested-loading">
                            <ul class="spin-container">
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w75p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w60p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w33p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card-header">

                    <h3 class="head-title">
                        <div class="div">
                            <div class="div">Rank Ekspedisi</div>
                            <div class="div fsize12 font-wg0">
                                <span class="label">Total</span>
                                <span class="v-total">Rp</span>
                            </div>
                        </div>
                    </h3>

                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#" class="cmd-reload-box" role="off"> <i class="icon-refresh_outlined icon"></i> </a>
                            </li>
                            <li>
                                <!-- Page View Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Export Excel</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page View Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    <!-- Card Extra Ends -->
                </div>
                
                <div class="card-body value scroller">
                    <div class="moby__page-view spin-nested-loading">
                        <ul class="spin-container">
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="fa flaticon-truck icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="fa flaticon-truck icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="fa flaticon-truck icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="fa flaticon-truck icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- #3 Page view by Page title -->
        <div class="col-lg-6 col-md-12 col-12 res-box" id="rankdestination" role="off">
            <!-- Page view Card -->
            <div class="card body-pd-0">
                
                <div class="area-child-box br-rds4">
                    <div class="card-header">

                        <h3 class="head-title">
                            <div class="div">
                                <span class="ctr h14 br-rds4 w110">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                            </div>
                        </h3>
                        
                        <div class="moby__card-extra">
                            <!-- Card Icon Menu -->
                            <ul class="moby__icon-menu">
                                <li>
                                <span class="ctr h14 br-rds4 w50">
                                    <div class="divH">
                                        <span class="splash-tbl"></span>
                                    </div>
                                </span>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="card-body scroller">
                        <div class="moby__page-view spin-nested-loading">
                            <ul class="spin-container">
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w75p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w60p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item moby__page-view-list-red-color">
                                    <div class="div barfour">
                                        <div class="list-item-meta-avatar"></div>
                                        <div class="list-item-meta-content">
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w90">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="div">
                                                <span class="ctr h14 br-rds4 w33p">
                                                    <div class="divH">
                                                        <span class="splash-tbl"></span>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card-header">

                    <h3 class="head-title">
                        <div class="div">
                            <div class="div">Rank Destination</div>
                            <div class="div fsize12 font-wg0">
                                <span class="label">Total</span>
                                <span class="v-total">Rp</span>
                            </div>
                        </div>
                    </h3>
                    
                    <div class="moby__card-extra">
                        <!-- Card Icon Menu -->
                        <ul class="moby__icon-menu">
                            <li>
                                <a href="#" class="cmd-reload-box" role="off"> <i class="icon-refresh_outlined icon"></i> </a>
                            </li>
                            <li>
                                <!-- Page View Card Setting Dropdown -->
                                <div class="moby__dropdown">
                                    <div class="dropdown">
                                        <a class="simple-dropdown" data-toggle="dropdown"><i class="icon-more_vert_outlined icon"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                            <a class="dropdown-item" href="#">Export Excel</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page View Card Setting Dropdown -->
                            </li>
                        </ul>
                        <!-- Card Icon Menu Ends -->
                    </div>
                    
                </div>
                
                <div class="card-body value scroller">
                    <div class="moby__page-view spin-nested-loading">
                        <ul class="spin-container">
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="sli_icon-pointer icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="sli_icon-pointer icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="sli_icon-pointer icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-item moby__page-view-list-red-color">
                                <div class="div in-list">
                                    <div class="ar-ic">
                                        <div class="tbl">
                                            <div class="intbl">
                                                <span class="sli_icon-pointer icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div">
                                        <div class="div clr-float">
                                            <div class="fl-left">
                                                <h4>Name</h4>
                                            </div>
                                            <div class="fl-right fsize12 label">
                                                <span>Rp0</span>
                                            </div>
                                        </div>
                                        <div class="div">
                                            <div class="ar-bar" role="off">
                                                <div class="bared">
                                                    <div class="in-bared">
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>



    </div>


</main>

<script>
$(document).ready(function(){

    var from = $("#start-date")
    .datepicker({
        // defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2,
        dateFormat:"dd/mm/yy"
    })
    .on("change", function () {
        to.datepicker("option", "minDate", chkDate(this));
        // cekrangedate(from.val(),to.val());
    }),
    to = $("#end-date")
    .datepicker({
        // defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2,
        dateFormat: "dd/mm/yy"
    })
    .on("change", function () {
        from.datepicker("option", "maxDate", chkDate(this));
        // cekrangedate(from.val(),to.val());
    });

    function chkDate(element)
    {
        var date;

        try {
            date = $.datepicker.parseDate("dd/mm/yy", element.value);
        }
        catch (error)
        {
            date = null;
        }

        return date;
    }
    
    return false;
})
</script>
@endsection