
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 
  
  
   <!-- Smooth Products Gallery Slider
    ================================================== -->
 	<script type="text/javascript" src="js/smoothproducts.js"></script>
    <script type="text/javascript">
        /* wait for images to load */
        $(window).load( function() {
            $('.sp-wrap').smoothproducts();
        });
    </script>
        
    <!-- My JS Funcs
    ================================================== -->
 	<script type="text/javascript">
 	
 	$(".loginLink").click(function() {
  		$(".loginDiv").slideDown('slow');
  	});
  	
  	$(".loginDivClose").click(function() {
  		$(".loginDiv").slideUp('slow');
  	});
 
  $(".howitworks").click(function(){
        $("#howItWorksModal").modal('show');
    });

    </script>