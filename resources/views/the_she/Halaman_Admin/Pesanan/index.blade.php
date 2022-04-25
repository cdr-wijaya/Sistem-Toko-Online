@extends('the_she.Halaman_Admin.layouts.main-admin')

@section('konten')
<div class="table-responsive mt-5">
    <table class="table table-striped caption-top table-borderless" id="example">
        <div class="d-flex justify-content-end mb-3">
            <a href="/Admin/produk/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data</a>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="w-100">Data Pesanan</h3>
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
                <th scope="col">No.</th>
                <th class="text-nowrap" scope="col">Kode Pesanan</th>
                <th scope="col">Pelanggan</th>
                <th scope="col">Produk</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td class="text-nowrap">2123490989</td>
                <td class="text-nowrap">Mark</td>
                <td class="text-nowrap">Suprime</td>
                <td class="text-nowrap text-warning">Dalam Proses</td>
                <td class="d-flex gap-2">
                    <a href="#" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="">
                    <button class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td class="text-nowrap">2123456789</td>
                <td class="text-nowrap">Jacob</td>
                <td class="text-nowrap">Udeng Bali</td>
                <td class="text-nowrap text-warning">Dalam Proses</td>
                <td class="d-flex gap-2">
                    <a href="#" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="">
                    <button class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td >1287892390</td>
                <td class="text-nowrap">Larry the Bird</td>
                <td>Peci</td>
                <td class="text-success">Sudah Sampai</td>
                <td class="d-flex gap-2">
                    <a href="#" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="">
                    <button class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td >1287892390</td>
                <td class="text-nowrap">iluh cantik</td>
                <td>Kaos Couples</td>
                <td class="text-success">Sudah Sampai</td>
                <td class="d-flex gap-2">
                    <a href="#" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="">
                    <button class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td >1287892390</td>
                <td class="text-nowrap">Ninik Arianti</td>
                <td>BRA B3</td>
                <td class="text-warning">Dalam Proses</td>
                <td class="d-flex gap-2">
                    <a href="#" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="">
                    <button class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td class="text-nowrap">2123456789</td>
                <td class="text-nowrap">Jacob</td>
                <td class="text-nowrap">Udeng Bali</td>
                <td class="text-nowrap text-warning">Dalam Proses</td>
                <td class="d-flex gap-2">
                    <a href="#" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="">
                    <button class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection