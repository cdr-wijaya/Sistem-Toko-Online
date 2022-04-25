<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>The She Olshop | Admin</title>
   {{-- Icon --}}
  <link rel="icon" href="/img/logo_framework.png"> 
   <!-- my font  -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Henny+Penny&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   {{-- Font Awesome Icon --}}
   <link rel="stylesheet" href="/fontawesome-free-6.1.1-web/css/all.min.css">
   {{-- Bootstrap --}}
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   {{-- mycss --}}
   <link rel="stylesheet" href="/css/template.css">
   {{-- JQuery and Data Table plugin --}}
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
   <script type="text/javascript" charset="utf8" src="/js/jquery.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
   <script>
      $(document).ready(function() {
         $('#example').DataTable({
            dom: 'lrtip',
            "lengthMenu": [5, 10, 20, 30, 40, 50],
         });
         oTable = $('#example').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
         $('#myInputTextField').keyup(function(){
               oTable.search($(this).val()).draw();  
         })
      });
   </script>
</head>
<body>
   {{-- Navigation Bar Admin --}}
   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2)">
      <div class="container">
         <a class="navbar-brand fs-3 text-success mt-lg-2 d-flex align-items-center gap-2" href="/Admin"  style="font-family: 'Bungee Shade';"><img src="/img/logo_framework.png" width="40" alt="">TSO <sup class="fs-6 fw-bold text-secondary opacity-75" style="font-family: 'calibri';">Admin</sup></a>
         <div class="order-lg-2 d-flex align-items-center gap-3">
         <div class="btn-group">
            <button type="button" class="btn btn-outline-success btn-sm rounded-pill dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
               <i class="fa-solid fa-user"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
            <li><button class="dropdown-item" type="button"><i class="fa-solid fa-user-pen"></i> Edit Profile</button></li>
            <li><button class="dropdown-item" type="button"><i class="fa-solid fa-key"></i> Change Password</button></li>
            <li><a class="dropdown-item text-danger" href="/"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
            </ul>
         </div>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-ellipsis-vertical"></i>
         </button>
         </div>
         <div class="collapse navbar-collapse justify-content-end me-lg-2" id="navbarSupportedContent">
         <ul class="navbar-nav mb-2 mb-lg-0 gap-4">
            <div class="navbar-nav border-end border-2">
               <li class="nav-item">
                  <a class="nav-link text-success opacity-75 aktif" href="/Admin"><i class="fa-solid fa-gauge-high"></i> Dashboard</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-success opacity-75" href="/Admin/pelanggan"><i class="fa-solid fa-users"></i> Pelanggan</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-success opacity-75" href="/Admin/produk"><i class="fa-solid fa-box-open"></i> Produk</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-success opacity-75" href="/Admin/pesanan"><i class="fa-solid fa-arrows-down-to-line"></i> Pesanan</a> 
               </li>
            </div>
         </ul>
         </div>
      </div>
   </nav>

   {{-- About Footer --}}
   <div class="modal fade" id="Tentang" tabindex="-1" aria-labelledby="TentangLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="TentangLabel"><i class="fa-solid fa-circle-info"></i> Tentang Aplikasi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="text-center d-grid gap-4">
               <div>
                  <img class="w-25" src="/img/logo_framework.png" alt="">
               </div>
               <div>
                  <h2 class="fs-4"><b>The She Olshop</b></h2>
                  <p class="fs-6 m-0">Versi 2022.1.1.TSO</p>
               </div>
               <div class="row text-start gap-4">
                  <div class="col-12">
                     <h6><b>Developer :</b></h6>
                     <a href="https://www.instagram.com/cdr_wijaya/" class="text-decoration-none">I Gede Candra Wijaya</a> <strong>&</strong>
                     <a href="https://www.instagram.com/deaasd_/" class="text-decoration-none">Ayu Sri Dewi</a>
                  </div>
                  <div class="col-12">
                     <h6><b>Description :</b></h6>
                     <p style="text-align: justify; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, facilis. Nemo, placeat laudantium. Dolor, iure nesciunt, expedita dolores alias iste qui, necessitatibus amet eum eaque doloremque incidunt placeat nisi ut. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus saepe cumque beatae nobis quaerat dolores culpa neque. Veritatis laudantium veniam quisquam dicta quo dignissimos obcaecati deserunt libero, minima nisi temporibus?</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </div>

   {{-- Isi Halaman Admin --}}
   <div class="container" id="margin">
         @yield('konten')
   </div>

   {{-- Konten The She Olshop --}}
  <div id="margin" class="container">
      @yield('halaman_depan')
   </div>
   <hr>
   <footer class="d-flex flex-column align-items-center gap-3 mb-4">
      <div class="d-flex">
      <a href="https://www.instagram.com/" class="btn"><i class="fa-brands fa-instagram fs-3"></i></a>
      <a href="https://www.facebook.com/" class="btn"><i class="fa-brands fa-facebook fs-3"></i></a>
      <a href="https://twitter.com/" class="btn"><i class="fa-brands fa-twitter fs-3"></i></a>
      </div>
      
      <button data-bs-toggle="modal" data-bs-target="#Tentang">&copy; 2022 The She Olshop, Inc</button>
   </footer>

</body>
</html>