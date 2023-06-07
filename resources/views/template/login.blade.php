<!DOCTYPE html>
<html lang="pt-br">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Dimendes</title>
   
   <!-- Custom fonts for this template-->
   <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
   <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

   <style>
      input {
         font-size: 16px !important;
      }
   </style>

   @notifyCss
</head>

<body class="bg-gradient-primary">

   <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

         <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">

               <div class="card-body p-0">

                  <div class="row">

                     <div class="col-lg-12">

                        <div class="p-5">
                           @yield('content')
                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

   <!-- Bootstrap core JavaScript-->
   <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></>
   <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

   <!-- Core plugin JavaScript-->
   <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

   <!-- Custom scripts for all pages-->
   <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

	<script>
		function removerClasseInvalida() {
			this.classList.remove('is-invalid');
		}
	
		document.querySelectorAll('input, textarea, select').forEach(function(element) {
			element.addEventListener('keypress', removerClasseInvalida);
			element.addEventListener('blur', removerClasseInvalida);
			element.addEventListener('change', removerClasseInvalida);
		});
	</script>

   <x-notify::notify />
   @notifyJs
</body>

</html>
