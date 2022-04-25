@extends('the_she/Halaman_Pelanggan/layouts/main')

@section('halaman_depan')
<div class="card mb-5">
   <div class="row g-0 ">
     <div class="col-md-5">
       <img src="/img/busana1.jfif" class="img-thumbnail w-100 border border-success" style="max-height: 450px;" alt="...">
     </div>
     <div class="col-md-7">
       <div class="card-body">
         <h5 class="card-title">Gaun Pernikahan</h5>
         <h2 class="text-success">Rp. 85.000</h2>
         <br>
         <div class="">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto enim voluptatem soluta eos odio cupiditate maiores veritatis doloribus itaque, repudiandae ipsum eius hic eaque quas. Numquam modi itaque molestiae possimus.
         </div>
         <br>
         <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
         <form action="" class="float-end">
            <div>
               <label for="">quantity :</label>
               <input class="text-center" type="number" min="1" max="450" value="1">
               <label for="">of <b>450</b></label>
            </div>
            <button class="btn btn-outline-success my-3"><i class="fa-solid fa-cart-plus"></i> Masukkan keranjang</button>
         </form>
       </div>
     </div>
   </div>
 </div>
@endsection