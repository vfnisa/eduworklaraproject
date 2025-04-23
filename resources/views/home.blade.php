@extends('layout')
@section('title', 'Toko Online')
@section('content')
<style>
  .thumbnail_product{
    background-position: center;
    background-size: cover;
    height: 300px;
    width: 100%;
  }
</style>
  <!-- Hero Section -->
  <div class="bg-primary text-white text-center py-5">
    <div class="container">
      <h1 class="display-4">Selamat Datang di TokoKu!</h1>
      <p class="lead">Temukan produk terbaik dengan harga terjangkau</p>
    </div>
  </div>

  <!-- Produk Section -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Produk Unggulan</h2>
    <div class="row g-4">
      <!-- Produk Card 1 -->
      @foreach ( $products as $product)
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <div class="thumbnail_product" style="background-image: url('{{ $product->image }}');"></div>
          <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="text-primary fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            <a href="#" class="btn btn-primary w-100">Beli Sekarang</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mt-4">
      <div class="col-12">
        {{$products->links()}}
      </div>
    </div>
  </div>

@endsection
