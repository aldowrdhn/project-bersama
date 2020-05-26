@extends('Layout.master')
@section('doc-tittle','Product')
@section('section-head','Our Product');
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
                        <h5 class="my-3">{{ $item['nama'] }}</h5>
                        <p class="product-desc mt-2 mb-1">{{ $item['content'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Made By Fidi IT Kreatif</h1>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-12 text-center">
                <button type="button" class="btn btn-outline-warning d-inline-block mx-3 my-2" onclick="allproject()">All Project</button>
                <button type="button" class="btn btn-outline-warning d-inline-block mx-3 my-2" onclick="ver1()">Versi 1</button>
                <button type="button" class="btn btn-outline-warning d-inline-block mx-3 my-2" onclick="ver2()">Versi 2</button>
                <button type="button" class="btn btn-outline-warning d-inline-block mx-3 my-2" onclick="ver3()">Versi 3</button>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-4 test-box" id="ver1">
                <div class="versi-box">
                    <img src="http://fidiitkreatif.co.id/asset/produk/3.png" alt="" class="phone">
                    <i class="fa fa-eye fa-3x" aria-hidden="true"></i>
                    <p>Versi 1</p>
                </div>
            </div>
            <div class="col-md-4 test-box" id="ver2">
                <div class="versi-box">
                    <img src="http://fidiitkreatif.co.id/asset/produk/2.png" alt="" class="phone">
                    <i class="fa fa-eye fa-3x" aria-hidden="true"></i>
                    <p>Versi 2</p>
                </div>
            </div>
            <div class="col-md-4 test-box" id="ver3">
                <div class="versi-box">
                    <img src="http://fidiitkreatif.co.id/asset/produk/1.png" alt="" class="phone">
                    <i class="fa fa-eye fa-3x" aria-hidden="true"></i>
                    <p>Versi 3</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
