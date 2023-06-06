<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/template/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('/template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('/template/js/sb-admin-2.min.js') }} "></script>

<!-- Page level plugins -->
<script src="{{ asset('/template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
   // start datatable for created_at
   $(document).ready(function() {
      $('#dataTable').DataTable({
         order: [
            [2, 'desc']
         ],
         language: {
            url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json',
         }
      });
   });
</script>

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
