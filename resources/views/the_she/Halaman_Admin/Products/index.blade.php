@extends('the_she.Halaman_Admin.layouts.main-admin')

@section('konten')
<div class="table-responsive mt-5">
    <table class="table table-striped caption-top table-borderless" id="example">
        <div class="d-flex justify-content-end mb-3">
            <a href="/Admin/produk/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data</a>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="w-100">Data Produk</h3>
            <div class="bg-success d-flex rounded align-items-center w-100 outline-hijau overflow-hidden">
                <form class="d-flex">
                    <div class="text-light px-2"><i class="fa-solid fa-magnifying-glass"></i></div>
                    <input class="input-1 border-success" type="search" placeholder="Search" aria-label="Search" id="myInputTextField" autocomplete="off">
                </form>
            </div>
        </div>
        <hr>
        <thead class="bg-success text-light">
            <tr>
                <th scope="col" class="text-nowrap">No.</th>
                <th scope="col" class="text-nowrap">Nama Produk</th>
                <th scope="col" class="text-nowrap">Jenis Produk</th>
                <th scope="col" class="text-nowrap" style="min-width: 400px">Deskripsi</th>
                <th scope="col" class="text-nowrap">Harga</th>
                <th scope="col" class="text-nowrap">Stok</th>
                <th scope="col" class="text-nowrap">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $tampilkan)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td class="text-nowrap">{{$tampilkan->nama_produk}}</td>
                <td class="text-nowrap">{{$tampilkan->jenis_produks->title}}</td>
                <td>{{$tampilkan->deskripsi}}</td>
                <td class="text-nowrap">Rp. {{number_format($tampilkan->harga, 0,",",".")}}</td>
                <td class="text-nowrap">{{$tampilkan->stok}}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="">
                            <button class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection