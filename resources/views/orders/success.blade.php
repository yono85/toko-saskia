<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,50030,600;1,400&amp;display=swap" type="text/css">
    <link rel="stylesheet" href="https://utas.me/assets/frontend.bundle.css?v=2024.05.08">
    <link rel="stylesheet" href="https://utas.me/assets/3rd-party/css/select2.min.css">
    <link href="https://cdn.datatables.net/v/bs4/dt-1.11.3/r-2.2.9/datatables.min.css" rel="stylesheet" type="text/css">
    <title>{{$TITLE}}</title>
    <meta name="description" content="">
    <link rel="icon" href="">
    <link rel="apple-touch-icon" href="">
    <link rel="manifest" href="https://utas.me/site.webmanifest">
    <link rel="mask-icon" href="https://utas.me/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="/css/style.css" rel="stylesheet" type="text/css">
    @include('config')
</head>

<body class="page-checkout store is-feed">

    <!-- NAV BAR -->
    <nav id="header-page" class="navbar navbar-expand-lg d-block nav-down nav-top">
        <div class="container d-flex justify-content-center align-items-center">

            <a class="btn border-0 align-items-center d-flex position-absolute" style="left: 0" role="button" href="/" aria-label="Go Back">
                <i class="icon-arrow-prev"></i>
            </a>
            
            <h1 id="titlePage" class="page-title text-truncate text-center text-upper text-capitalize flex-1 h6 mb-0" style="line-height: 60px">Terimakasih</h1>

        </div>
    </nav>

    <div id="checkoutPage" class="container">
          
        <div id="content">
            <form method="POST" class="checkout-form my-4 my-md-5" action="/api/checkout/confrm" id="form-checkout">
                <div class="row">
                    <div class="col-md-6">

                        <!-- switch order purchase detail when product physical-->
                        <div class="d-flex flex-column">
                            <section id="purchase_details">
                                <!-- Add separator when product is physical -->
                                                            <!-- product box -->
                                <div class="mb-3 mb-md-4 d-flex align-items-center justify-content-between">
                                    <h4 class="h6 mb-0 text-uppercase">
                                        Detail pembelian
                                    </h4>

                                    <!-- <span role="button" class="btn-add-checkout btn btn-sm theme-yellow bg-white text-inherit py-0 d-inline-flex align-items-center">Edit</span>

                                    <button type="button" class="btn btn-remove-checkout text-danger" data-cart-key="35e42153806d9535a1626171e21db13b-default">
                                        <i class="icon-close mr-0"></i>
                                    </button> -->

                                </div>

                                @foreach($orders['items'] as $row)
                                
                                <div class="px-4 py-3 rounded-lg list-item" style="background-color: #f1f5f9; ">
                                    <div class="product-box mx-0 " data-city-name="Jakarta Pusat (Kota)">
                                        <div class="product-item-group bg-transparent mb-0">
                                            <div class="group-body">
                                                <div class="product-item px-0" data-product-type="digital">
                                    
                                                <!-- <button role="button" class="btn-add-checkout btn btn-sm py-0 d-inline-flex align-items-center text-danger" style="border-color: #a4133c !important; position: absolute; right:0px; top: 0px">
                                                    <i class="icon-close mr-0"></i>
                                                </button>
                                                     -->
                                                    <div class="product-image">
                                                        <img src="{{$row->product_images}}" alt="{{$row->product_name}}" class="img-fluid product-image">
                                                    </div>

                                                    <div class="product-detail position-relative">
                                                        <h4 class="product-title font-weight-normal">{{$row->product_name}}</h4>
                                                        <div class="product-detail-footer mt-2">
                                                            <span class="price-regular font-weight-bold product-price ml-auto format-rupiah" >{{$row->total}}</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                @endforeach
                                

                            </section>

                            <div class="buyer-data-group">
                                <!-- remove separator when product is not physical -->
                                <div class="py-2 separator">
                                    <hr class="my-4 opacity-50">
                                </div>
                                
                                <section id="buyer_data">
                                    <h4 class="h6 mb-3 mb-md-4  text-uppercase">Info kontak</h4>
                                            
                                    <div class="form-group">
                                        <label for="buyer_name">Nama lengkap</label>
                                        <input type="text" class="form-control" placeholder="Nama lengkap" name="name" id="buyer_name" value="{{$account->name}}" required="" disabled="disabled">
                                    </div>

                                    <div class="form-group">
                                        <label for="buyer_phone">Email</label>
                                        <input type="tel" class="form-control" placeholder="Email" name="email_show" minlength="75" maxlength="15" value="{{$account->email}}" id="buyer_phone" required="" disabled="disabled">
                                    </div>

                                    <div class="form-group mb-0 email-field">
                                        <label for="buyer_email">Alamat Lengkap</label>
                                        <textarea class="form-control border-2br-grey" name="address" rows="2" placeholder="Tulis alamat di sini" disabled="disabled">{{$orders['address']}}</textarea>

                                        <!-- <input type="email" class="form-control buyer_email_validation" placeholder="Email Aktif" name="email" id="buyer_email" value="" required=""> -->
                                        <div class="alert alert-danger invalid-feedback my-2" style="font-size: 100%; display: none;"></div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div class="py-2 separator">
                            <hr class="my-4 opacity-50">
                        </div>
                        
                    </div>

                    <div class="col-md-6 pl-md-5">
                        <section id="pay_details" class="sticky-top " style="top: calc(60px + 1rem); z-index: 3;">
                            <div class="card card-body rounded-lg p-md-4 border-0">

                            <h4 class="h6 mb-3 mb-md-4  text-uppercase">Pembayaran</h4>

                                <div class="price-group">
                                    <label>Metode Pembayaran</label>
                                    <label class="price-label">Bank {{$orders['payment']['metode']}}</label>
                                </div>
                                <div class="price-group">
                                    <label>Status</label>
                                    <label class="price-label"> <b class="payment-status-{{$orders['payment']['status']}} text-upper">{{$orders['payment']['status']}}</b></label>
                                </div>

                                <hr class="opacity-50">


                                <h4 class="h6 mb-3 mb-md-4  text-uppercase">Total</h4>

                                
                                <hr class="opacity-50">

                                <div class="price-group">
                                    <label>Sub Total</label>
                                    <label class="price-label format-rupiah">{{$orders['subtotal']}}</label>
                                </div>
                                <div class="price-group">
                                    <label>Discount</label>
                                    <label class="price-label format-rupiah">{{$orders['discount']}}</label>
                                </div>
                                <hr class="opacity-50">

                                <div class="price-group">
                                    <label>Total pembayaran</label>
                                    <strong class="price-label format-rupiah">{{$orders['total']}}</strong>
                                </div>

                                <hr class="opacity-50">

                                <div class="form-group mb-2">
                                    <div class="d-flex align-items-center">
                                        <label for="buyer_note" class="mb-0">Catatan untuk penjual</label>
                                        <div class="ml-auto">
                                            <button class="btn theme-yellow bg-white px-3 invisible" id="add_note" type="button" data-toggle="collapse" data-target="#buyer_note" aria-expanded="true"><i class="icon icon-add mr-0"></i></button>
                                        </div>
                                    </div>
                                    <div class="mt-1 collapse show" id="buyer_note" style="">
                                        <textarea class="form-control" name="note" rows="2" placeholder="Tulis catatan di sini" disabled="disabled">{{$orders['notes']}}</textarea>
                                        <div class="alert bg-light-blue mt-2 d-flex align-items-start">
                                            <i class="icon-information-circle mr-2 mt-1"></i>
                                            <small>Masukkan informasi tambahan dalam untuk penjual</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group form-group-submit mt-4 mb-0" style="display:none">
                                    <button type="submit" class="btn d-flex align-items-center justify-content-center position-relative py-3 theme-yellow btn-block is-loading remove spin-right" role="off">Lanjut Pembayaran</button>
                                </div>

                                <input type="hidden" name="order_code" value="{{$orders['code']}}">

                                <input type="hidden" name="shipping_discount_minimum_percent_value">
                                <input type="submit" disabled="" style="display: none" aria-hidden="true">
                                
                            </div>
                        </section>
                    </div>

                </div>
                
            </form>
        </div>

    </div>



    <script src="https://utas.me/assets/3rd-party/js/sweetalert2.all.min.js"></script>
    <!-- <script src="https://utas.me/assets/3rd-party/js/jquery.min.js"></script> -->
    <!-- <script src="/js/js10.js"></script> -->
    
    <script src="https://utas.me/assets/js/utility.js?v=2023.09.30"></script>
    <script src="https://utas.me/assets/js/app.js?v=2024.01.22" type="module"></script>

    <script src="/js/globals.js"></script>

    
    <script>
        $(document).ready(function(){

            $("#form-checkout").submit(function(e){


                var $form = $(this),
                $button = $form.find("button[type='submit']");

                if($button.attr("role") === "off"){
                    $button.attr("role","on");

                    var $payment = $("*[name='payment']"),
                    $select = $("input[name='payment']:checked").val();

                    $form.find(".item-error").removeClass("item-error");
                    $form.find(".field-error").remove();
                    
                    if($select === undefined ){

                        $payment.parents(".box-field").prepend("<span class='field-error'>Harap pilih metode Pembayaran!</span>");
                        $payment.parents(".box-field").addClass("item-error");
                        ajax_alert("Harap pilih metode Pembayaran!", true, "Attention !");

                        $button.attr("role", "off");

                        return false
                    }

                    //
                    var $t = ajaxFormRequest($form);
                    $t.success(function(n){
                        console.log(n);
                    });
                    $t.error(function(n){
                        console.log(n);
                        alert(n.responseJSON.message);

                    });
                }
                return false;
            });


            return false;
        })
    </script>
</body>
</html>