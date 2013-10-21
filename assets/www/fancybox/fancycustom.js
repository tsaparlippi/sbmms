// JavaScript Document
<!--  -->
 $(document).ready(function() {
	   
	 // $("a[rel*=fancybox]").css({'top':'20px'});
    $("a[rel*=fancybox]").fancybox({
		  'loadingImage' : 'src/loading.gif',
        'closeImage'   : 'src/closelabel.png',
      'hideOnOverlayClick':false,
      'hideOnContentClick':false,
	  'scrolling': false,
	  'showNavArrows'   : false,
	'centerOnScroll' : false
	  
    });
	
  });
<!--End -->
<!-- -->
<!--- -->