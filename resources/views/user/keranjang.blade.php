@extends('layouts.app')

@section('headercontent')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Pesanan kamu</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Keranjang</li>
            </ol>
        </nav>
    </div>
</div>
@endsection
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Pesanan kamu</h5>
            <h1 class="mb-5">Your Order</h1>
        </div>
        <div class="row g-4">
            @foreach ($keranjangs as $keranjang )

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <img src="{{ asset('upload/menu/' . $keranjang->menu->image) }}" width="100px" height="100px" alt="" srcset="">
                        <h5>{{ $keranjang->menu->name }}</h5>
                        <h5 class="mt-2">$ {{  $keranjang->menu->price  }}</h5>
                        <p>{!! $keranjang->menu->desc !!}</p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
@endsection

