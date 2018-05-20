  $(document).ready(function(){  
     $('.add-to-cart').click(function(){
          var tid = $(this). attr("tid");

          $.ajax({
            type: "POST",
            url: "../inc/addtocart.php",
            data: "id="+tid,
            dataType: "html",
            cache: false,
            success: function(data){
             alert("Ok");
            }
          });
      });
      function loadcart(){
        $.ajax({
          type: "POST",
          url: "../inc/loadcart.php",
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

     $('#form').submit(function(){

        event.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var comment = $("#comment").val();

        $.ajax({
          type: "POST",
          url: "mail.php",
          data: $(this).serialize()
      }).done(function(){
        $('#name,#email,#subject,#comment').val("");
        alert("Спасибо за вашу заявку! Скоро мы с вами свяжемся");
      });
      return false;
    });

     $('#form').validate({
        rules:{
          "name":{
            required: true,
            minlength: 5,
            maxlength: 15
          },
          "email":{
            required: true,
            email: "Not correct",
          },
          "subject":{
            required: true
          }
        }
     });

  });