<!doctype html>
<html>
<head>
	@include('includes.head')  
</head>
<body>

	
		@include('includes.header') 

		@yield('content')

		@include('includes.footer') 
	

	


	  <script src="<?php echo url(); ?>/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?php echo url(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo url(); ?>/js/jquery.nav.js"></script>
        <script src="<?php echo url(); ?>/js/slick.min.js"></script>
        <script src="<?php echo url(); ?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo url(); ?>/js/ajax-mail.js"></script>
        <script src="<?php echo url(); ?>/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo url(); ?>/js/wow.min.js"></script>
        <script src="<?php echo url(); ?>/js/counterup.js"></script>
        <script src="<?php echo url(); ?>/js/jquery.meanmenu.js"></script>
        <script src="<?php echo url(); ?>/js/plugins.js"></script>
        <!-- google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_qDiT4MyM7IxaGPbQyLnMjVUsJck02N0"></script>
        <script src="<?php echo url(); ?>/js/map.js"></script>
        <script src="<?php echo url(); ?>/js/main.js"></script>





</body>
</html>
