@extends('layout')
@section('title', 'Toko Online')
@section('content')

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
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Produk 1">
          <div class="card-body">
            <h5 class="card-title">Nama Produk 1</h5>
            <p class="card-text">Deskripsi singkat produk 1.</p>
            <p class="text-primary fw-bold">Rp 100.000</p>
            <a href="#" class="btn btn-primary w-100">Beli Sekarang</a>
          </div>
        </div>
      </div>

      <!-- Produk Card 2 -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Produk 2">
          <div class="card-body">
            <h5 class="card-title">Nama Produk 2</h5>
            <p class="card-text">Deskripsi singkat produk 2.</p>
            <p class="text-primary fw-bold">Rp 150.000</p>
            <a href="#" class="btn btn-primary w-100">Beli Sekarang</a>
          </div>
        </div>
      </div>

      <!-- Produk Card 3 -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Produk 3">
          <div class="card-body">
            <h5 class="card-title">Nama Produk 3</h5>
            <p class="card-text">Deskripsi singkat produk 3.</p>
            <p class="text-primary fw-bold">Rp 200.000</p>
            <a href="#" class="btn btn-primary w-100">Beli Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
