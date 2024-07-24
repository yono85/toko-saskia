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
            
            <h1 id="titlePage" class="page-title text-truncate text-center text-upper text-capitalize flex-1 h6 mb-0" style="line-height: 60px">Cart</h1>

        </div>
    </nav>

    <div id="checkoutPage" class="container">
          
        <div id="content">
            <form method="POST" class="checkout-form my-4 my-md-5" action="/api/checkout/send" id="form-cart">
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
                                
                                <div class="px-4 py-3 rounded-lg list-item" style="background-color: #f1f5f9; "  data-id="{{$row->id}}" data-code="{{$orders['code']}}">
                                
                                    <div class="product-box mx-0 ">
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

                                    <div class="form-group mb-0 email-field box-field">
                                        <label for="buyer_email">Alamat Lengkap</label>
                                        <textarea class="form-control border-2br-grey" name="address" rows="2" placeholder="Tulis alamat di sini">{{$orders['address']}}</textarea>

                                        
                                        <div class="alert alert-danger invalid-feedback my-2" style="font-size: 100%; display: none;">Error</div>
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
                                        <textarea class="form-control" name="notes" rows="2" placeholder="Tulis catatan di sini">{{$orders['notes']}}</textarea>
                                        <div class="alert bg-light-blue mt-2 d-flex align-items-start">
                                            <i class="icon-information-circle mr-2 mt-1"></i>
                                            <small>Masukkan informasi tambahan dalam untuk penjual</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group form-group-submit mt-4 mb-0">
                                    <button type="submit" class="btn d-flex align-items-center justify-content-center position-relative py-3 theme-yellow btn-block is-loading spin-right remove" role="off">Lanjut Pembayaran</button>
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

    <!-- form product cart -->
    <div id="product-cart" class="d-none product-checkout mx-n3" style="display: block;">
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
        <div class="container container-mobile" id="modal-delete-item" style="max-width: 420px">
            <div class="product-cart-body">

                <div class="product-bar" >
                    <div id="selected-product" class="mx-0">

                        <div class="scroll-area product-box bg-white user-cart">
                            <div class="">
                                <div style="padding:25px; text-align:center">
                                    <h5 class="dialog-title mb-1">Hapus item?</h5>
                                    <p class="mb-0 text-sm opacity-75">Item ini akan dihapus dari keranjang Anda</p>
                                </div>
                                

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
                
                <div class="d-flex rounded-bottom overflow-hidden">
                    <button class="btn bg-light cancel flex-1 w-50 rounded-0 text-inherit" type="button">Batal</button>
                    <button class="btn btn-danger flex-1 w-50 rounded-0 is-loading modal-submit" role="off" type="button">Hapus</button>
                </div>

                <form action="/api/orders/delete/item" method="POST" id="form-delete">
                    <input type="hidden" name="item_id" value="" class="txt-def-empty">
                    <input type="hidden" name="code" value="" class="txt-def-empty">
                    <input type="hidden" name="uid" value="{{$account['id']}}">
                    @csrf()
                </form>

            </div>
        </div>

    </div>

    <div class="product-cart-overlay product-cart-checkout-overlay"></div>

    <script src="https://utas.me/assets/3rd-party/js/sweetalert2.all.min.js"></script>
    <script src="https://utas.me/assets/js/utility.js?v=2023.09.30"></script>
    <script src="https://utas.me/assets/js/app.js?v=2024.01.22" type="module"></script>

    <script src="/js/globals.js"></script>
    <script src="/assets/js/global.js"></script>

    <script>
        $(document).ready(function(){

            $("#form-cart").submit(function(e){

                var $form = $(this),
                $button = $form.find("button[type='submit']");

                if($button.attr("role") === "off"){
                    $button.attr("role","on");

                    var $address = $form.find("*[name='address']");
                    $form.find(".item-error").removeClass("item-error");
                    $form.find(".field-error").remove();

                    if( $.trim($address.val()) === ""){

                        $address.addClass("item-error");
                        $address.parent(".box-field").append("<span class='field-error'>Harap isi alamat lengkap</span>");
                        // ajax_alert("Harap isi Alamat lengkap", true, "Attention !");
                        $button.attr("role", "off");
                        $form.find(".item-error").eq(0).focus();
                        return false;
                    }


                    //
                    var $t = ajaxFormRequest($form);
                    $t.success(function(n){
                        console.log(n);
                        location.href = '/checkout';
                    });
                    $t.error(function(n){
                        console.log(n);
                        alert(n.responseJSON.message);
                    });
                }
                return false;
            });

            $("body").on("click", "button.btn-add-checkout", function(e){
                e.preventDefault();
                var $button = $(this),
                $item_id = $button.parents(".list-item").attr("data-id"),
                $code = $button.parents(".list-item").attr("data-code");

                $("#form-delete").find("*[name='item_id']").val($item_id);
                $("#form-delete").find("*[name='code']").val($code);

                // console.log($id);
            })

            $("#modal-delete-item button.modal-submit").click(function(e){
                e.preventDefault();
                var $button = $(this),
                $modal = $button.parents("#modal-delete-item"),
                $form = $modal.find("form"),
                $item = $("body").find(".list-item[data-id='"+$form.find("*[name='item_id']").val()+"']");

                if($button.attr("role") === "off"){
                    $button.attr("role", "on");

                    // SUBMIT
                    console.log("submot");

                    var $t = ajaxFormRequest($form);
                    $t.success(function(n){
                        console.log(n);
                        var $data = n.data;
                        $modal.find(".cancel").click();
                        $item.remove();
                        $button.attr("role", "off");

                        if( $data.redirect === "true"){
                            location.href = "/";
                        }
                        
                        flagnotif("success", n.message);
                    })
                    .error(function(n){
                        console.log(n);
                        $button.attr("role", "off");
                        flagnotif("error", n.responseJSON.message);
                    });
                }
            })

            return false;
        })

    </script>
</body>
</html>