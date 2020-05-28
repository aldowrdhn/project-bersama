@extends('Layout.master')
@section('doc-tittle','Portfolio')
@section('section-head','Portfolio')
@section('portfolio-active','active')
@section('content')
@include('Layout.include.parallax')
<div class="pt-5">
    <div class="port-atas">
        <div class="text-center portfolio-menu">
            @foreach($button as $item)
            <button class="btn">{{ ($item['judul']) }}</button>
            @endforeach
        </div>
    </div>
    @foreach($title as $ket)
        <div class="port-bawah-img">
            <img src="{{ asset($ket['IMG']) }}" >
            <div class="hover-img text-center d-flex align-items-center justify-content-center">
                <div class="hover-text">
                    <a href="#" class="zoom-img"><i class="fa fa-eye"
                            aria-hidden="true"></i></a>
                    <h4>{{ ($ket['keterangan']) }}</h4>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
@endsection