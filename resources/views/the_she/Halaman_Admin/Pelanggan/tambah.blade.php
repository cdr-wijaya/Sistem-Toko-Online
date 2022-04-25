@extends('the_she.Halaman_Admin.layouts.main-admin')

@section('konten') 
<div class="row">
   <div class="shadow p-5 col-lg-6 m-auto">
      <h3 class="text-center">Tambah Data Pelanggan</h3>
      <br>
      <form>
         <div class="mb-3">
            <label for="namapelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="namapelanggan" name="namapelanggan">
         </div>
         <div class="mb-3">
            <label for="emailpelanggan" class="form-label">Email Pelanggan</label>
            <input type="email" class="form-control" id="emailpelanggan" name="emailpelanggan">
         </div>
         <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
         </div>
         <div class="d-flex justify-content-between">
            <a href="/Admin/produk"class="btn btn-outline-warning">Kembali</a>
            <button type="submit" class="btn btn-primary px-3">Tambah</button>
         </div>
      </form>
   </div>
</div>
@endsection