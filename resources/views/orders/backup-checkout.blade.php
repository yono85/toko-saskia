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
    <title>Checkout</title>
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
            
            <h1 id="titlePage" class="page-title text-truncate text-center text-upper text-capitalize flex-1 h6 mb-0" style="line-height: 60px">Cart</h1>

        </div>
    </nav>

    <div id="checkoutPage" class="container">
          
        <div id="content">
            <form method="POST" class="checkout-form my-4 my-md-5" action="/api/cart/send" id="form-cart">
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
                                    
                                                <button role="button" class="btn-add-checkout btn btn-sm py-0 d-inline-flex align-items-center text-danger" style="border-color: #a4133c !important; position: absolute; right:0px; top: 0px">
                                                    <i class="icon-close mr-0"></i>
                                                </button>
                                                    
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
                                        <textarea class="form-control border-2br-grey" name="address" rows="2" placeholder="Tulis alamat di sini">{{$orders['address']}}</textarea>

                                        <!-- <input type="email" class="form-control buyer_email_validation" placeholder="Email Aktif" name="email" id="buyer_email" value="" required=""> -->
                                        <div class="alert alert-danger invalid-feedback my-2" style="font-size: 100%; display: none;"></div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div class="py-2 separator">
                            <hr class="my-4 opacity-50">
                        </div>
                        
                        <section id="payment_details" class="mb-4">
                            <div id="payment-options">
                                <!-- product box -->
                                <h4 class="h6 mb-3 mb-md-4  text-uppercase">Opsi pembayaran</h4>

                                <h6 class="font-weight-normal d-flex mb-3"> Akun virtual
                                    <span class="badge border border-secondary text-secondary ml-auto" id="fee_va"></span>
                                    <a href="#service_fee" class="text-decoration-none ml-2 d-none btn-help" data-toggle="modal" data-target="#service_fee">
                                        <i class="icon-help-circle"></i>
                                    </a>
                                </h6>

                                <div class="payment-options mb-4" style="border-width: 2px">
                                    <label class="py-3 px-4">
                                        <input type="radio" name="payment" value="bca" required="">
                                        <img class="mr-3" src="https://utas.me/assets/images/bank_bca.png" alt="bca" height="32">
                                        <span>Bank BCA</span>
                                        <i class="ml-auto icon-check icon-status"></i>
                                    </label>
                                    <label class="py-3 px-4">
                                        <input type="radio" name="payment" value="bni" required="">
                                        <img class="mr-3" src="https://utas.me/assets/images/bank_bni.png" alt="bni" height="32">
                                        <span>Bank BNI</span>
                                        <i class="ml-auto icon-check icon-status"></i>
                                    </label>
                                    <label class="py-3 px-4">
                                        <input type="radio" name="payment" value="bri" required="">
                                        <img class="mr-3" src="https://utas.me/assets/images/bank_bri.png" alt="bri" height="32">
                                        <span>Bank BRI</span>
                                        <i class="ml-auto icon-check icon-status"></i>
                                    </label>
                                    <label class="py-3 px-4">
                                        <input type="radio" name="payment" value="mandiri" required="">
                                        <img class="mr-3" src="https://utas.me/assets/images/bank_mandiri.png" alt="mandiri" height="32">
                                        <span>Bank MANDIRI</span>
                                        <i class="ml-auto icon-check icon-status"></i>
                                    </label>
                                    <label class="py-3 px-4">
                                        <input type="radio" name="payment" value="permata" required="">
                                        <img class="mr-3" src="https://utas.me/assets/images/bank_permata.png" alt="permata" height="32">
                                        <span>Bank PERMATA</span>
                                        <i class="ml-auto icon-check icon-status"></i>
                                    </label>
                                </div>
            
                            </div>
                            
                        </section>
                        
                    </div>

                    <div class="col-md-6 pl-md-5">
                        <section id="pay_details" class="sticky-top " style="top: calc(60px + 1rem); z-index: 3;">
                            <div class="card card-body rounded-lg p-md-4 border-0">
                                <h4 class="h6 mb-3 mb-md-4  text-uppercase">Total</h4>

                                <div class="form-group mb-0" style="display:none">

                                    <div id="voucher_label" class="text-nowrap">
                                        <!-- if voucher applied: "Voucher: <strong>vouchercode</strong>" -->
                                        <label for="voucher_code" class="mb-0">Punya kode voucher?</label>
                                        <div class="ml-auto">
                                            <!-- if voucher applied: "Edit" -->
                                            <button class="btn theme-yellow bg-white px-3 invisible" type="button" data-toggle="collapse" data-target="#voucher_code" aria-expanded="true"><i class="icon icon-add mr-0"></i></button>
                                        </div>
                                    </div>

                                    <div class="input-group mt-1 mb-3 collapse show" id="voucher_code" style="">
                                        <input class="form-control voucher-code" placeholder="Masukkan kode voucher di sini">
                                        <div class="input-group-append">
                                            <button type="button" class="btn theme-yellow btn-apply-voucher">Apply</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="voucher">
                                </div>

                                <!-- Showing discount when voucher applied -->
                                <div class="voucher-discount" style="display:none;">
                                    <hr class="opacity-50">
                                    <div class="price-group ongkir-field">
                                        <label>Diskon</label>
                                        <strong class="price-label text-success">
                                            <span></span>
                                        </strong>
                                    </div>
                                </div>
                                
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
                                        <textarea class="form-control" name="note" rows="2" placeholder="Tulis catatan di sini">{{$orders['notes']}}</textarea>
                                        <div class="alert bg-light-blue mt-2 d-flex align-items-start">
                                            <i class="icon-information-circle mr-2 mt-1"></i>
                                            <small>Masukkan informasi tambahan dalam untuk penjual</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group form-group-submit mt-4 mb-0">
                                    <button type="submit" class="btn d-flex align-items-center justify-content-center position-relative py-3 theme-yellow btn-block btn-submit">Lanjut Pembayaran</button>
                                </div>

                                <input type="hidden" name="shipping_discount_minimum_percent_value">
                                <input type="submit" disabled="" style="display: none" aria-hidden="true">
                                
                            </div>
                        </section>
                    </div>

                </div>
            </form>
        </div>

    </div>

    <!-- CC form -->
    <!-- <div class="modal fade modal-compact modal-slide from-top" tabindex="-1" role="dialog" aria-hidden="true" id="cc-form">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i>
                    </button>

                    <div>
                        <iframe id="cc-iframe" frameborder="0" width="100%" height="400px"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <script type="text/template" id="template-cart-item">
        <div class="product-item">
            <button type="button" class="btn btn-remove-checkout text-danger" data-cart-key="%cart_key%"><i class="icon-close mr-0"></i></button>
            <div class="product-image">
                <img src="%image%" class="img-fluid product-image">
            </div>
            <div class="product-detail">
                <h4 class="product-title">%name%</h4>
                <div class="product-detail-footer mt-2">
                    <div class="input-group w-auto" %hide_btn% >
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-sm btn-light text-inherit btn-minus"><i class="icon-remove"></i></button>
                        </div>
                        <input type="number" data-cart-key="%cart_key%"
                            class="form-control form-control-sm product-quantity" value="%qty%" min="1" max="%qty_max%">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-sm btn-light text-inherit btn-plus"><i class="icon-add"></i></button>
                        </div>
                    </div>
                    <span class="price-regular product-price ml-2 text-nowrap" data-price="%priceval%">%price%</span>
                </div>
            </div>
        </div>
    </script>

    <!-- form product cart -->
    <div id="product-cart" class="d-none product-checkout mx-n3" style="display: block;">
    <!-- <div id="product-cart" class="d-none product-checkout mx-n3 d-block show" style="display: block;"> -->
    <!-- <div id="product-cart" class="d-none product-checkout mx-n3 d-block show confirmation" style="display: block;"> -->

        <!-- product added notification -->
        <div class="cart-info" style="display: none;">
            <i class="icon-check-circle-filled mr-2"></i>
            <span class="text">#</span>
        </div>

        <!-- delete product confirmation -->
        <div class="confirmation-dialog bg-white">
        
            <div class="dialog-body py-3 px-3">
                <h5 class="dialog-title mb-1">Hapus item?</h5>
                <p class="mb-0 text-sm opacity-75">Item ini akan dihapus dari keranjang Anda</p>
            </div>
            <div class="dialog-footer">
                <button type="button" class="btn btn-light btn-cancel text-inherit">Batal</button>
                <!-- <button class="btn bg-light cancel flex-1 w-50 rounded-0 text-inherit" type="button">Batal</button> -->

                <button type="button" class="btn btn-danger btn-confirm-delete">Hapus</button>
            </div>
        </div>

        <!-- end delete product confirmation -->
        <div class="container container-mobile" style="max-width: 420px">
            <div class="product-cart-body">

                <div class="product-bar" >
                    <div id="selected-product" class="mx-0">

                        <div class="scroll-area product-box bg-white user-cart">
                            <div class="">
                                <div style="padding:25px; text-align:center">
                                    <h5 class="dialog-title mb-1">Hapus item?</h5>
                                    <p class="mb-0 text-sm opacity-75">Item ini akan dihapus dari keranjang Anda</p>
                                </div>
                                
                                <!-- <button type="button" class="btn btn-remove-checkout text-danger" data-cart-key="35e42153806d9535a1626171e21db13b-default">
                                    <i class="icon-close mr-0"></i>
                                </button> -->

                                <!-- <div class="product-image">
                                    <img src="https://image.utas.co/image/60640efd5a78e081b799063b0a8f406daffb7.jpg" class="img-fluid product-image">
                                </div> -->

                                <!-- <div class="product-detail">

                                    <h4 class="product-title">Cohort Analysis Calculator</h4>
                                    <div class="product-detail-footer mt-2">
                                        <div class="input-group w-auto" style="display:none;">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-sm btn-light text-inherit btn-minus">
                                                    <i class="icon-remove"></i>
                                                </button>
                                            </div>
                                            <input type="number" data-cart-key="35e42153806d9535a1626171e21db13b-default" class="form-control form-control-sm product-quantity" value="1" min="1" max="1">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-sm btn-light text-inherit btn-plus"><i class="icon-add"></i></button>
                                            </div>
                                        </div>
                                        <span class="price-regular product-price ml-2 text-nowrap" data-price="249000">Rp 249.000</span>
                                    </div>

                                </div> -->

                            </div>
                        </div>

                    </div>
                    
                    <div class="product-bar-footer mx-0" style="display:none">
                        <button class="btn btn-expand d-none" type="button" aria-label="Checkout details">
                            <i class="icon-chevron-up"></i>
                        </button>
                        <div class="selected-info footer-item">
                            <i class="icon-shopping-cart mr-2 text-warning"></i>
                            <small>Keranjang</small>
                            <strong class="ml-1">(<span id="total-product-selected">1</span>)</strong>
                        </div>
                        <div class="total-price footer-item">
                            <small class="mr-1">Total</small>
                            <strong class="total-cart-price">Rp 249.000</strong>
                        </div>
                    </div>

                </div>
                
                <!-- <div class="product-bar">
                
                    <div class="dialog-body py-3 px-3">
                        <h5 class="dialog-title mb-1">Hapus item?</h5>
                        <p class="mb-0 text-sm opacity-75">Item ini akan dihapus dari keranjang Anda</p>
                    </div>
                </div> -->

                <div class="d-flex rounded-bottom overflow-hidden">
                    <button class="btn bg-light cancel flex-1 w-50 rounded-0 text-inherit" type="button">Batal</button>
                    <button class="btn btn-danger cancel flex-1 w-50 rounded-0" type="button">Hapus</button>
                    <!-- <a href="https://utas.me/tangguh/checkout" class="btn theme-yellow btn-action shadow-lg rounded-0 flex-1 w-50 mx-0 text-nowrap" id="btn-checkout"> Perbarui<i class="icon-arrow-forward-circle icon opacity-50 ml-2"></i></a> -->
                    <!-- <a href="https://utas.me/tangguh/checkout" class="btn theme-yellow btn-action shadow-lg rounded-0 flex-1 w-50 mx-0 text-nowrap" id="btn-checkout"> Perbarui<i class="icon-arrow-forward-circle icon opacity-50 ml-2"></i></a> -->
                    <!-- <button type="button" class="btn btn-danger btn-confirm-delete" data-cart-key="35e42153806d9535a1626171e21db13b-default">Hapus</button> -->
                </div>

            </div>
        </div>

        <!-- <div class="container container-mobile">
            <div class="product-cart-body">
                <div class="product-bar">
                    <div id="selected-product" class="mx-0">
                        <div class="scroll-area product-box bg-white user-cart">
                            <div class="product-item">
                                <button type="button" class="btn btn-remove-checkout text-danger" data-cart-key="35e42153806d9535a1626171e21db13b-default">
                                    <i class="icon-close mr-0"></i>
                                </button>
                                <div class="product-image">
                                    <img src="https://image.utas.co/image/60640efd5a78e081b799063b0a8f406daffb7.jpg" class="img-fluid product-image">
                                </div>
                                <div class="product-detail">
                                    <h4 class="product-title">Cohort Analysis Calculator</h4>
                                    <div class="product-detail-footer mt-2">
                                        <div class="input-group w-auto" style="display:none;">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-sm btn-light text-inherit btn-minus">
                                                    <i class="icon-remove"></i>
                                                </button>
                                            </div>
                                            <input type="number" data-cart-key="35e42153806d9535a1626171e21db13b-default" class="form-control form-control-sm product-quantity" value="1" min="1" max="1">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-sm btn-light text-inherit btn-plus"><i class="icon-add"></i></button>
                                            </div>
                                        </div>
                                        <span class="price-regular product-price ml-2 text-nowrap" data-price="249000">Rp 249.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-bar-footer mx-0">
                        <button class="btn btn-expand d-none" type="button" aria-label="Checkout details">
                            <i class="icon-chevron-up"></i>
                        </button>
                        <div class="selected-info footer-item">
                            <i class="icon-shopping-cart mr-2 text-warning"></i>
                            <small>Keranjang</small>
                            <strong class="ml-1">(<span id="total-product-selected">1</span>)</strong>
                        </div>
                        <div class="total-price footer-item">
                            <small class="mr-1">Total</small>
                            <strong class="total-cart-price">Rp 249.000</strong>
                        </div>
                    </div>
                </div>
                <div class="d-flex rounded-bottom overflow-hidden">
                    <button class="btn bg-light cancel flex-1 w-50 rounded-0 text-inherit" type="button">Batal</button>
                    <a href="https://utas.me/tangguh/checkout" class="btn theme-yellow btn-action shadow-lg rounded-0 flex-1 w-50 mx-0 text-nowrap" id="btn-checkout"> Perbarui<i class="icon-arrow-forward-circle icon opacity-50 ml-2"></i></a>
                </div>
            </div>
        </div> -->
    </div>

    <div class="product-cart-overlay product-cart-checkout-overlay"></div>

    <!-- Service Fee  -->
    <!-- <div class="modal fade modal-compact modal-slide from-top" tabindex="-1" role="dialog" aria-hidden="true" id="service_fee">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
                    <h4 class="h5 form-title text-center">BIAYA Layanan</h4>
                    <p class="opacity-75">Biaya Layanan adalah biaya yang dibebankan kepada Pembeli untuk setiap transaksi. Biaya ini diterapkan untuk tujuan pemeliharaan sistem dan peningkatan layanan dalam transaksi melalui <strong>Utas.Co</strong>.</p>
                    <button type="button" class="btn btn-block theme-yellow" data-dismiss="modal">Mengerti</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Login form -->
        <!-- login form -->
    <div class="modal fade modal-compact modal-slide from-top" tabindex="-1" role="dialog" aria-hidden="true" id="login-form">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i>
                    </button>

                    <!-- login area -->
                    <div id="login-area" class="collapse show">
                        <h6 class="text-center text-uppercase text-secondary mb-3"> Login Customer </h6>
                        <form action="#" id="login-email">
                            <a href="https://utas.me/tangguh/social-login?provider=Facebook" class="btn btn-light bg-white btn-block font-weight-bold d-flex align-items-center justify-content-center text-inherit position-relative">
                                <i class="icon-logo-facebook text-brand-facebook mr-2 h4 mb-0 position-absolute" style="left: 1rem;"></i>
                                Login dengan Facebook                        </a>
                            <!-- <div class="form-group mb-0 col-6">
                                <a href="https://utas.me/tangguh/social-login?provider=Google" class="btn btn-google btn-block d-flex align-items-center justify-content-center"><i class="icon-logo-google mr-2"></i>Google</a>
                            </div> -->
                            <div class="separator-or">
                                <div><span class="bg-white">Atau</span></div>
                                <hr>
                            </div>
                            <div class="form-label-group mb-2 email-field">
                                <input id="user_email" type="email" name="email" class="form-control buyer_email_validation" placeholder="Masukkan alamat email" required="">
                                <label for="user_email"><i class="icon-mail mr-2"></i>Alamat Email</label>
                                <div class="alert alert-danger invalid-feedback my-2" style="font-size: 100%; display: none;"></div>
                            </div>
                            <div class="form-group btn-verify">
                                <button class="btn theme-yellow btn-block btn-process-login font-weight-bold btn-icon" type="submit"><span class="d-block py-1">Login Customer</span></button>
                            </div>
                                                    
                                                </form>
                        <form action="https://utas.me/tangguh/verify" id="login-verify" class="collapse">
                            <div class="alert bg-light-yellow my-3 text-center">
                                Cek email dan WhatsApp Anda, kode login telah dikirimkan.                            <div class="d-flex align-items-center justify-content-center mt-2" style="gap: 0.5rem">
                                    <i class="icon icon-md icon-mail-delivered"></i>
                                    <strong id="mailto"></strong>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="otp" class="sr-only">Masukkan kode login disini</label>
                                <input id="otp" type="number" name="otp" class="form-control" placeholder="Masukkan kode login">
                                <input type="hidden" name="hash" class="login-hash">
                                <input type="hidden" name="checkout" class="checkout" value="0">
                                <input type="hidden" name="member" class="member" value="0">
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn theme-yellow btn-block btn-login font-weight-bold"><span class="d-block py-1">Login Customer</span></button>
                            </div>
                        </form>
                    </div>

                    <!-- register area -->
                    <div id="register-area" class="collapse">
                        <div id="register-form">
                            <h4 class="label-title form-title text-center">DAFTAR CUSTOMER</h4>
                            <div class="alert bg-light-green">
                                <h6>Keuntungan yang Anda dapatkan:</h6>
                                <small class="mb-2 d-block"><i class="icon-check-circle-filled mr-2 text-success"></i>Alamat Anda dapat disimpan</small>
                                <small class="mb-2 d-block"><i class="icon-check-circle-filled mr-2 text-success"></i>Belanja jadi lebih mudah dan cepat</small>
                                <small class="mb-2 d-block"><i class="icon-check-circle-filled mr-2 text-success"></i>Dapatkan lebih banyak diskon</small>
                                <small class="d-block"><i class="icon-check-circle-filled mr-2 text-success"></i>Pesanan Anda diprioritaskan</small>
                            </div>
                            <form action="#" id="register-email">
                                <div class="form-label-group mb-2">
                                    <input id="register_email" type="email" name="email" class="form-control" placeholder="Masukkan alamat email" required="">
                                    <label for="register_email"><i class="icon-mail mr-2"></i>Alamat Email</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn theme-yellow btn-block btn-register font-weight-bold"><span class="d-block py-1">Daftar Sekarang</span></button>
                                </div>
                            </form>
                            <div class="d-flex align-items-center justify-content-center text-secondary text-sm">Sudah jadi customer?<button class="btn btn-sm btn-link text-sm font-weight-bold" type="button" id="go-login"><u>Login di sini</u></button></div>
                        </div>
                        <form action="https://utas.me/tangguh/verify" id="activation-verify" class="collapse">
                            <h4 class="label-title form-title text-center">VERIFIKASI AKUN</h4>
                            <div class="alert alert-warning my-3 text-center">
                                Harap masukkan kode verifikasi yang dikirim ke email <strong id="mailto"></strong>
                            </div>
                            <div class="form-group mb-2">
                                <label for="activation_key" class="sr-only">Masukkan kode aktivasi</label>
                                <input id="activation_key" type="text" name="activation_key" class="form-control" placeholder="Masukkan kode aktivasi" required="">
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn theme-yellow btn-block btn-login font-weight-bold"><span class="d-block py-1">Verifikasi Sekarang</span></button>
                            </div>
                        </form>                    
                    </div>

                </div>
            </div>
        </div>

        <!-- <div class="form-dialog">
            <div class="form-dialog-item bg-white registration-dialog">
                <h3>Anda belum terdaftar</h3>
                <p class="text-secondary"><small>Anda ingin daftar sekarang?</small></p>
                <div class="button-group">
                    <button class="btn btn-link btn-cancel">Batal</button>
                    <button class="btn theme-yellow font-weight-bold go-register" type="button">Ya</button>
                </div>
            </div>
            <div class="form-dialog-item bg-white activation-dialog d-none">
                <h3>Pendaftaran berhasil</h3>
                <p class="text-secondary"><small>Silakan cek email Anda untuk menerima link aktivasi pendaftaran</small></p>
                <div class="button-group">
                    <button class="btn theme-yellow font-weight-bold btn-cancel">Kembali</button>
                </div>
            </div>
        </div> -->

    </div>


    <!-- <script type="text/javascript">
        window.STORE = 'tangguh';
        window.SHIP_COST = '0';
            window.CART_TOTAL = '249000';
            window.CART_ORDER_BUMP = '';
        window.CART_PAYMENT = '';
        window.SHIP_DISCOUNT = '0';
        window.SHIP_DISCOUNT_TYPE = '';
        window.PAYMENT_FEE = {"va":9420,"ro":10530,"ewallet":9125,"qr":6914,"cod":0};
        window.SERVICE_FEE = '';
        window.WRITE_DISTRICT = 'Tulis Kecamatan Anda';
    </script> -->

        <!-- Footer Copyright -->
            
    <!-- <script type="text/javascript">
        window.BASE_URL = "/";
        window.FRONTEND_HOST = "/";
        window.FB_PIXEL = "715332145559105";
        window.GOOGLE_ID = "UA-145358143-1";
        window.PUSH_PUBLIC_KEY = "BMBlr6YznhYMX3NgcWIDRxZXs0sh7tCv7_YCsWcww0ZCv9WGg-tRCXfMEHTiBPCksSqeve1twlbmVAZFv7GSuj0";
        window.SAFARI_PUSH_ID = "";
        window.STORE = "tangguh";
        window.CURRENCY = "IDR"
        window.ENABLE_WATERMARK = "1";
        window.APP_BASE_URL = 'https://app.utas.co/';
        window.PRODUCT_CTA_OPTION = "direct_checkout";
    </script> -->

    <script src="https://utas.me/assets/3rd-party/js/sweetalert2.all.min.js"></script>
    <script src="https://utas.me/assets/3rd-party/js/jquery.min.js"></script>
    <!-- <script src="/js/js10.js"></script> -->
    
    <script src="https://utas.me/assets/js/utility.js?v=2023.09.30"></script>
    <script src="https://utas.me/assets/js/app.js?v=2024.01.22" type="module"></script>

    <script src="/js/globals.js"></script>

    
    <script>
        $(document).ready(function(){

            $("#form-cart").submit(function(){

                return false;
            })
            return false;
        })
    </script>
</body>
</html>