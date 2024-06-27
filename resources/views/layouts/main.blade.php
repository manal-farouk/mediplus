<!doctype html>
<html class="no-js" lang="zxx">
    <head>
   @include('includes.head')	
    </head>
    <body>
	
		<!-- Preloader -->
		@include('includes.Preloader')	
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
		@include('includes.GetProButton')	
		
		<!-- Header Area -->
        @include('includes.HeaderArea')	
		<!-- End Header Area -->
        @yield('content') 
		<!-- Footer Area -->
		@include('includes.FooterArea')
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        @include('includes.JqueryMinJS')
         </body>
</html>