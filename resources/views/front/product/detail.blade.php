@extends('front.index')

@section('content')

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
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
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" role="off" value="buy">Beli Sekarang</button>
                                    </div>
                                    <!-- <div class="col d-grid">
                                    fa fa-fw fa-cart-arrow-down text-dark mr-1
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
                                    </div> -->

                                    <div class="col d-grid">
                                    
                                        <!-- <a href="#" class="nav-icon position-relative text-decoration-none">
                                            <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>

                                        </a>

                                        <a href="#">
                                            <i class="fa fa-fw fa-heart text-dark mr-1"></i>

                                        </a> -->
                                        <a type="" href="/cart" class="btn btn-success btn-lg" style="width:50%" name="submit" value="">
                                            <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
</a>
                                    </div>
                                </div>

                                <input type="hidden" name="code" value="{{$product_detail->code}}">
                                <input type="hidden" name="user_id" value="{{$account !== null ? $account->id : ''}}">
                            </form>

                        </div>
                    </div>
                </div>

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
                $BUTTON = $FORM.find("button[type='submit']");

                if( $FORM.find("*[name='user_id']").val() === ""){

                    location.href = "/login";
                    return false;
                }


                console.log("submit");
                

                return false;
            })
            return false;
        })
    </script>
    <!-- End Slider Script -->

    @endsection