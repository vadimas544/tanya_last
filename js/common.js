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
             alert("Товар добавлен в корзину!");
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

     


 });
       function post(){

          $.ajax
          ({
            type: "post",
            url: "../mail.php",
            data: $("#form").serialize(),  // Сеарилизуем объект
            success: function(response)
            {
              $('#results').html(response);
            }
          });
        
          return false;
      }


  /*
       $("form").submit(function(event){
          event.preventDefault();
          $.ajax({
              url: "../mail.php", //url страницы (action_ajax_form.php)
              type: "POST", //метод отправки
              data: $("#"+form).serialize(),  // Сеарилизуем объект
              success: function(response) { //Данные отправлены успешно
                result = $.parseJSON(response);
                  $('#results').html('Имя: '+result.name+'<br>Телефон: '+result.phonenumber);
                  alert("Form send success!");
            },
            error: function(response) { // Данные не отправлены
                  /*$('#result_form').html('Ошибка. Данные не отправлены.');
                  alert("Form not send!");
            }
        });

      });
 

     $('.send-mail').click(function(){

        event.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var comment = $("#comment").val();

        $.ajax({
          type: "POST",
          url: "mail.php",
          data: $(this).serialize(),
          success: function(data){

             showerrors(); 
          }
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

/*
  function ajax() { //Ajax отправка формы
  var msg = $("#form").serialize();
  $.ajax({
    type: "POST",
    url: "../send.php",
    data: msg,
    success: function(data) {
      $("#results").html(data);
    },
    error:  function(xhr, str){
      alert("Возникла ошибка!");
    }
  });
}

jQuery.fn.notExists = function() { //Проверка на существование элемента
  return $(this).length == 0;
}

$(document).ready(function(){ //Валидация формы
  $(".send").validation(
    $("#name").validate({
      test: "blank letters", 
      invalid: function(){
        if($(this).nextAll(".error").notExists()) {
          $(this).after('<div class="error">Введите корректное имя</div>');
          $(this).nextAll(".error").delay(2000).fadeOut("slow");
          setTimeout(function () {
            $("#name").next(".error").remove();
          }, 2600);
        }
      },
      valid: function(){
        $(this).nextAll(".error").remove();
      }
    }),
    $("#email").validate({
      test: "blank email",
      invalid: function(){
        if($(this).nextAll(".error").notExists()) {
          $(this).after('<div class="error">Введите корректный email</div>');
          $(this).nextAll(".error").delay(2000).fadeOut("slow");
          setTimeout(function () {
            $("#email").next(".error").remove();
          }, 2600);
        }
      },
      valid: function(){
        $(this).nextAll(".error").remove();
      }
    }),
    $("#subject").validate({
      test: "blank", 
      invalid: function(){
        if($(this).nextAll(".error").notExists()) {
          $(this).after('<div class="error">Введите тему</div>');
          $(this).nextAll(".error").delay(2000).fadeOut("slow");
          setTimeout(function () {
            $("#subject").next(".error").remove();
          }, 2600);
        }
      },
      valid: function(){
        $(this).nextAll(".error").remove();
      }
    }),
    $("#comment").validate({
      test: "blank", 
      invalid: function(){
        if($(this).nextAll(".error").notExists()) {
          $(this).after('<div class="error">Введите сообщение</div>');
          $(this).nextAll(".error").delay(2000).fadeOut("slow");
          setTimeout(function () {
            $("#comment").next(".error").remove();
          }, 2600);
        }
      },
      valid: function(){
        $(this).nextAll(".error").remove();
      }
    })
  );


*/
  