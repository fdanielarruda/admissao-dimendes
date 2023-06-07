@if (session('error'))
   <script>
		alert("{{ session('error') }}")
	</script>
@endif

@if (session('success'))
	<script>
		alert("{{ session('success') }}")
	</script>
@endif
