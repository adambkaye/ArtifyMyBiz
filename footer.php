<footer style="display:block; margin-top:100px;">
    <p>© ArtifyMyBiz Cooperative 2015</p>
</footer>





    <!-- Bootstrap core JavaScript-->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 
  
  
   <!-- Smooth Products Gallery Slider -->
 	<script type="text/javascript" src="js/smoothproducts.js"></script>
    <script type="text/javascript">
        /* wait for images to load */
        $(window).load( function() {
            $('.sp-wrap').smoothproducts();
        });
    </script>
        
        
    <!-- My JS Funcs-->
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
    
    $(".contact-artist").click(function(){
        $("#contactArtistModal").modal('show');
        $(".bizCreate").hide();
        $(".bizCreate2").hide();
        $(".bizSignUp").show();
        
    });
    
    $(".bizSignUpBtn").click(function(){
        $("#contactArtistModal").modal('show');
        $(".bizSignUp").hide();
        $(".bizCreate2").hide();
        $(".bizCreate").show();
        
    });
    
    $(".bizSignUpBtn2").click(function(){
        $("#contactArtistModal").modal('show');
        $(".bizSignUp").hide();
        $(".bizCreate").hide();
        $(".bizCreate2").show();
        
    });
    
    
    </script>
    
    

</body>			  
</html>

