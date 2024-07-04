@extends('front.index')

@section('content')

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">

                @if($product_detail == null)
                    <div class="container-product-null">
                        <div class="div w100p icon-product">
                            <i class="fa fa-fw fa-cart-arrow-down "></i>
                        </div>
                        <div class="div w100p">
                            <span class="text-product">Produk yang Anda cari tidak ditemukan.</span>
                        </div>
                    </div>
                @else
                <!-- AREA DETAIL PRODUCT -->
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{$product_detail->images}}" alt="{{$product_detail->name}}" id="product-detail">
                    </div>
                </div>

                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{$product_detail->name}}</h1>
                            <p class="h3 py-2">Rp{{$product_detail->price}}</p>
                            

                            <h6>Description:</h6>
                            <p>{{$product_detail->description}}</p>

                            <form action="/api/checkout/create" method="POST" id="form-orders">

                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="quantity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button class="submit btn btn-success btn-lg" role="off" value="buy">Beli Sekarang</button>
                                    </div>
                                    <div class="col d-grid">
                                    
                                        <button class="submit btn btn-success btn-lg" style="width:50%" value="cart" role="off">
                                            <i class="fa fa-fw fa-cart-arrow-down mr-1"></i>
                                        </button>
                                    </div>
                                </div>

                                <input type="hidden" name="product_price" value="{{$product_detail->price}}">
                                <input type="hidden" name="type_orders" value="">
                                <input type="hidden" name="product_code" value="{{$product_detail->code}}">
                                <input type="hidden" name="user_id" value="{{$account !== null ? $account->id : ''}}">
                                @csrf()
                            </form>

                        </div>
                    </div>
                </div>

                @endif

            </div>
        </div>
    </section>

    <section class="">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Product</h1>
                </div>
            </div>
            <div class="row">

                @include('front.product.list')

            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Slider Script -->
    <!-- <script src="assets/js/slick.min.js"></script> -->

    <script>
        $(document).ready(function(){

            $("#form-orders").submit(function(){

                var $FORM = $(this),
                $BUTTON = $FORM.find("button.submit");

                if( $FORM.find("*[name='user_id']").val() === ""){

                    location.href = "/login";
                    return false;
                }
                
                if($BUTTON.attr("role") === "off"){
                    $BUTTON.attr("role", "on");
                    $FORM.find("*[name='type']").val($BUTTON.attr("value"));
                    var $t = ajaxFormRequest($FORM);
                    $t.success(function(n){
                        console.log(n);
                        location.href = n.data.redirect;
                    });
                    $t.error(function(n){
                        console.log(n);
                        alert(n.responseJSON.message);
                    })
                    
                    $BUTTON.attr("role", "off");

                }
                

                return false;
            });

            $("#form-orders button.submit").click(function(e){
                e.preventDefault();


                var $BUTTON = $(this),
                $TYPE = $BUTTON.attr("value"),
                $FORM = $BUTTON.parents("form");

                $FORM.find("*[name='type_orders']").val($TYPE);
                $FORM.submit();
                
            });

            return false;
        })
    </script>
    <!-- End Slider Script -->

    @endsection