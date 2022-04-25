@extends('the_she.Halaman_Admin.layouts.main-admin')

@section('konten') 
<div class="row">
   <div class="shadow p-5 col-lg-6 m-auto">
      <h3 class="text-center">Tambah Data Produk</h3>
      <br>
      <form>
         <div class="mb-3">
            <label for="namaproduk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="namaproduk" name="namaproduk">
         </div>
         <div class="mb-3">
            <label for="jenisproduk" class="form-label">Jenis Produk</label>
            <input type="text" class="form-control" id="jenisproduk" name="jenisproduk">
         </div>
         <div class="mb-3">
            <label for="jenisproduk" class="form-label">Stok</label>
            <input type="number" class="form-control" id="jenisproduk" name="jenisproduk">
         </div>
         <div class="mb-3">
            <label for="jenisproduk" class="form-label">Harga Produk</label>
            <input type="number" class="form-control" id="jenisproduk" name="jenisproduk">
         </div>
         <div class="mb-3">
            <label for="jenisproduk" class="form-label">Deskripsi Produk</label>
            <input type="text" class="form-control" id="jenisproduk" name="jenisproduk">
         </div>
         <div class="d-flex justify-content-between">
            <a href="/Admin/produk"class="btn btn-outline-warning">Kembali</a>
            <button type="submit" class="btn btn-primary px-3">Tambah</button>
         </div>
      </form>
   </div>
</div>
@endsection