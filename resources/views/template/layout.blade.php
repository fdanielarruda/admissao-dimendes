<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Dimendes - @yield('title_page')</title>

   <!-- Custom fonts for this template -->
   <link href="{{ asset('/template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
   <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">
   <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
   <link href="{{ asset('/template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

   <div id="wrapper">

      @include('template.menu')

      <div id="content-wrapper" class="d-flex flex-column">

         <div id="content">

            <div class="container-fluid mt-4">

               <div class="card shadow mb-4">
                  <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">@yield('title_page')</h6>
                  </div>

                  <div class="card-body">
                     @yield('content')
                  </div>
               </div>

            </div>

         </div>

      </div>

   </div>

   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
   </a>

   @include('template.scripts')
</body>

</html>
