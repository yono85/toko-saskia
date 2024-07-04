<div class="moby__aside-holder">
    <!-- Vertical Aside Navigation -->
    <div class="moby__side-bar">

        <!-- Side Bar Header -->
        <div class="side-bar-header">
            <a href="#" class="logo">
                <img src="{{$APPS['LOGO']}}" alt="logo">
                <span class="label-bar-header">
                    <b></b>
                </span>
            </a>
            <i id="menu-btn" class="icon-menu icon drawer-icon"></i>
            <span id="drawer-icon" class="menu-icon"><i class="icon icon-menu"></i></span>
            <a href="#" class="test-aside hide">TEST ASIDE</a>
        </div>

        <!-- /.Side Bar Header -->
        <ul class="moby__drawer-menu scroller">

            <!-- Start of Dashboard -->
            <li>
                <a href="{{$APPS['BASE_URL']}}/dashboard/v2" class="" >
                    <i class="icon fa flaticon2-line-chart">
                        <span class="path1"></span>
                    </i>
                    <span class="menu-item-title">Dashboard</span>
                </a>
            </li>
            <!-- End of DashBoard -->


            <li>
                <a href="#collaps2" data-toggle="collapse" aria-expanded="true">
                    <i class="icon sli_icon-bag">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <span class="menu-item-title">Kelola Pesanan</span>
                    <i class="icon icon-keyboard_arrow_down arrow-icon"></i>
                </a>
                <div class="collapse show" id="collaps2">
                    <ul>
                        <li>
                            <a href="{{$APPS['BASE_URL']}}/home/orders" data-role="collapse"><span>Pesanan Saya</span></a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
    <!-- Vertical Aside Navigation -->
</div>

<script>
// var CURRENT = CONFIG.APPS.URL.CURRENT;
// $('.moby__side-bar ul').find('a[href="'+CURRENT+'"]').addClass('active');
// $('.moby__side-bar ul').find('a[href="'+CURRENT+'"]').attr('aria-expanded', 'true');
</script>
