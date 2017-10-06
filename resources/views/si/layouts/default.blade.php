<!doctype html>
<html>
<head>
	@include('si.includes.head')  
	<style type="text/css">

	</style>
</head>
<body>

	
		@include('si.includes.header') 

		@yield('content')

		@include('si.includes.footer') 
	

	

<script src="<?php echo url(); ?>/si/assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo url(); ?>/si/assets/bundles/vendorscripts.bundle.js"></script> 
<script src="<?php echo url(); ?>/si/assets/js/page.js"></script>




</body>
</html>
