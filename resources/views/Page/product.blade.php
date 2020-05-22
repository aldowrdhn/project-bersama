@extends('Layout.master')
@section('doc-tittle','Product')
@section('product-active','active')
@section('content')
<section>
    <div class="container">
        <div class="row my-5">
            @foreach($product as $item)
                <div class="col-sm-12 col-md-3 text-center my-5">
                    <div class="product-box">
                        <img src="{{ asset($item['img']) }}" alt=""
                            class="img-product mx-1 my-1">
                        <h5 class="my-1">{{ $item['nama'] }}</h5>
                        <p class="product-desc mt-2 mb-">{{ $item['content'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
