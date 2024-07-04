
@foreach($product as $row)
<div class="col-12 col-md-4 mb-4">
    <div class="card h-100">
        <a href="/product/{{$row->code}}">
            <img src="{{$row->images}}" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <ul class="list-unstyled d-flex justify-content-between">
                <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                </li>
                <li class="text-muted text-right">Rp{{$row->price}}</li>
            </ul>
            <a href="/product/{{$row->code}}" class="h2 text-decoration-none text-dark">{{$row->name}}</a>
            <p class="card-text">
                {{$row->description}}
            </p>
            <p class="text-muted">Reviews (0)</p>
        </div>
    </div>
</div>
@endforeach


<!-- <div class="col-12 col-md-4 mb-4">
    <div class="card h-100">
        <a href="shop-single.html">
            <img src="https://themewagon.github.io/zay-shop/assets/img/feature_prod_01.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <ul class="list-unstyled d-flex justify-content-between">
                <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                </li>
                <li class="text-muted text-right">$480.00</li>
            </ul>
            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
            <p class="card-text">
                Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
            </p>
            <p class="text-muted">Reviews (48)</p>
        </div>
    </div>
</div>

<div class="col-12 col-md-4 mb-4">
    <div class="card h-100">
        <a href="shop-single.html">
            <img src="https://themewagon.github.io/zay-shop/assets/img/feature_prod_01.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <ul class="list-unstyled d-flex justify-content-between">
                <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                </li>
                <li class="text-muted text-right">$360.00</li>
            </ul>
            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Summer Addides Shoes</a>
            <p class="card-text">
                Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et scelerisque ipsum lobortis nec.
            </p>
            <p class="text-muted">Reviews (74)</p>
        </div>
    </div>
</div> -->