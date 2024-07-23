@extends('front.index')
@section('content')
<section class="bg-light">
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
@endsection