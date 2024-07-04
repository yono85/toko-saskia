<html lang="en"><head>
    <title>{{$TITLE}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- icon -->
    <link rel="icon" href="{{$APPS['ICON']}}" sizes="32x32">
    <link rel="icon" href="{{$APPS['ICON']}}" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="{{$APPS['ICON']}}">
    <meta name="msapplication-TileImage" content="{{$APPS['ICON']}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{$APPS['ICON']}}">

    <link rel="stylesheet" href="https://themewagon.github.io/zay-shop/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://themewagon.github.io/zay-shop/assets/css/templatemo.css">
    <link rel="stylesheet" href="https://themewagon.github.io/zay-shop/assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&amp;display=swap">
    <link rel="stylesheet" href="https://themewagon.github.io/zay-shop/assets/css/fontawesome.min.css">


    <link rel="stylesheet" href="/css/default.css">

    @include('config')
    <script src="/js/globals.js"></script>

</head>

<body>
    <!-- Start Top Nav -->
    @include('front.component.nav')
    
    <!-- Close Top Nav -->


    <!-- Header -->
    @include('front.component.header')
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    @yield('content')

    <!-- Start Footer -->
    @include('front.component.footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="https://themewagon.github.io/zay-shop/assets/js/jquery-1.11.0.min.js"></script>
    <script src="https://themewagon.github.io/zay-shop/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://themewagon.github.io/zay-shop/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://themewagon.github.io/zay-shop/assets/js/templatemo.js"></script>
    <script src="https://themewagon.github.io/zay-shop/assets/js/custom.js"></script>
    <!-- End Script -->


</body></html>