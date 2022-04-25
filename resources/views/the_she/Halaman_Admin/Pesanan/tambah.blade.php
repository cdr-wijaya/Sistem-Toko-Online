@extends('the_she.Halaman_Admin.layouts.main-admin')

@section('konten') 
<div class="row">
   <div class="shadow p-5 col-lg-6 m-auto">
      <h3 class="text-center">Tambah Data Pesanan</h3>
      <br>
      <form>
         <div class="mb-3">
            <label for="kodepesanan" class="form-label">Kode Pesanan</label>
            <input type="text" class="form-control" id="kodepesanan" name="kodepesanan">
         </div>
         <div class="mb-3">
            <label for="pelanggan" class="form-label">Pelanggan</label>
            <input type="text" class="form-control" id="pelanggan" name="pelanggan">
         </div>
         <div class="mb-3">
            <label for="produk" class="form-label">Produk</label>
            <input type="number" class="form-control" id="produk" name="produk">
         </div>
         <div class="mb-3">
            <label for="totalbayar" class="form-label">Total Bayar</label>
            <input type="number" class="form-control" id="totalbayar" name="totalbayar">
         </div>
         <div class="mb-3">
            <label for="kembalian" class="form-label">Kembalian</label>
            <input type="number" class="form-control" id="kembalian" name="kembalian">
         </div>
         <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="number" class="form-control" id="status" name="status">
         </div>
         <div class="d-flex justify-content-between">
            <a href="/Admin/produk"class="btn btn-outline-warning">Kembali</a>
            <button type="submit" class="btn btn-primary px-3">Tambah</button>
         </div>
      </form>
   </div>
</div>
@endsection