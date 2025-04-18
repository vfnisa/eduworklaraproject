@extends('layout')
@section('title', 'Toko Online')
@section('content')

  <!-- Keranjang Belanja -->
  <div class="container my-5">
    <h2 class="mb-4">Keranjang Belanja</h2>

    <!-- Tabel Keranjang -->
    <div class="table-responsive">
      <table class="table table-bordered align-middle">
        <thead class="table-light">
          <tr>
            <th>Produk</th>
            <th>Harga</th>
            <th>Kuantitas</th>
            <th>Subtotal</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- Item Keranjang 1 -->
          <tr>
            <td>
              <div class="d-flex align-items-center">
                <img src="https://via.placeholder.com/80" alt="Produk 1" class="me-3 rounded" width="80">
                <span>Nama Produk 1</span>
              </div>
            </td>
            <td>Rp 100.000</td>
            <td>
              <input type="number" class="form-control" value="1" min="1">
            </td>
            <td>Rp 100.000</td>
            <td>
              <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
          </tr>

          <!-- Item Keranjang 2 -->
          <tr>
            <td>
              <div class="d-flex align-items-center">
                <img src="https://via.placeholder.com/80" alt="Produk 2" class="me-3 rounded" width="80">
                <span>Nama Produk 2</span>
              </div>
            </td>
            <td>Rp 150.000</td>
            <td>
              <input type="number" class="form-control" value="2" min="1">
            </td>
            <td>Rp 300.000</td>
            <td>
              <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Total dan Checkout -->
    <div class="row justify-content-end">
      <div class="col-md-4">
        <div class="card border-primary">
          <div class="card-body">
            <h5 class="card-title">Ringkasan Belanja</h5>
            <p class="card-text d-flex justify-content-between">
              <span>Total:</span>
              <strong>Rp 400.000</strong>
            </p>
            <a href="#" class="btn btn-success w-100">Lanjut ke Pembayaran</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
