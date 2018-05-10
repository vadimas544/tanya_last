  $(document).ready(function(){  
     $('.add-to-cart').click(function(){
          var tid = $(this). attr("tid");

          $.ajax({
            type: "POST",
            url: "inc/addtocart.php",
            data: "id="+tid,
            dataType: "html",
            cache: false,
            success: function(data){
             loadcart();
            }
          });
      });
      function loadcart(){
        $.ajax({
          type: "POST",
          url: "loadcart.php",
          dataType: "html",
          cache: false,
          success: function(data){
            if(data == 0){
              $('.cart' > a).html("Cart is empty");
            }else{
              $('.cart' > a).html(data);
            }
          }

        });
      }
  });