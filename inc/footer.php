        <div class="wrapper">
        	<div class="empty"></div>
        </div>
        <footer>
        	<div class="row">
        		<div class="col-md-6 col-md-offset-3 text-center">
        			<h5>0938919595</h5>
        			<h5>©2018 by Bright paints. Proudly created with Wix.com</h5>
        		</div>
        	</div>
        </footer>
  </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <!--
    <script type="text/javascript">
      //Allows bootstrap carousels to display 3 items per page rather than just one
$('.carousel.carousel-multi .item').each(function () {
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));

  if (next.next().length > 0) {
    next.next().children(':first-child').clone().attr("aria-hidden", "true").appendTo($(this));
  }
  else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
    </script>
  -->
  		<script>
		$(document).ready(function(){
			$('.menu-trigger').click(function(){
				$('nav ul').slideToggle(300);
			});
			$(window).resize(function(){
				if($(window).width() > 560){
					$('nav ul').removeAttr('style');
				}
			});
		});
		</script>
  </body>
</html>
