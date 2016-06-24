$(document).ready(function() {
   $('.Nform').click(function(){
      $.ajax({
        type: "POST",
        url: "upImage.php",
        success: function(a) {
                $('.MuestrainfoAJAX').html(a);
          }
       });
   });
   $('.Nformuser').click(function(){
      $.ajax({
        type: "POST",
        url: "upImageUser.php",
        success: function(a) {
                $('.MuestrainfoAJAX').html(a);
          }
       });
   });
   $('.Hfotos').click(function(){
      $.ajax({
        type: "POST",
        url: "envioPOST/historico_fotos.php",
        success: function(a) {
                $('.MuestrainfoAJAX').html(a);/*Agregar el redireccionamiento despues del success*/
          }
       });
   });
   $('.Nusuario').click(function(){
      $.ajax({
        type: "POST",
        url: "Nusuario.php",
        success: function(a) {
                $('.MuestrainfoAJAX').html(a);/*Agregar el redireccionamiento despues del success*/
          }
       });
   });
   $('.profile').click(function(){
      $.ajax({
        type: "POST",
        url: "envioPOST/profileUser.php",
        success: function(a){
            $('.MuestrainfoAJAX').html(a);/*Ver perfil por usuario*/
        }
      });
   });
   $('.HistorialUsuarios').click(function(){
      $.ajax({
        type:"POST",
        url: "envioPOST/historialUsuario.php",
        success: function(a){
          $('.HistorialUser').html(a);/*Historico de los usuarios*/
        }
      });
   });
});
$(document).ready(function(){ /*Funcion encargada de ocultar el div contenedor de los usuarios en linea*/
    $("#opcionesmenu").on("click",function(){
      $("#viewUserONLINE").hide();
    });
    $("#opcionesmenu2").on("click",function(){
      $("#viewUserONLINE").hide();
    });
    $("#opcionesmenu3").on("click",function(){
      $("#viewUserONLINE").hide();
    });
    $("#opcionesmenu4").on("click",function(){
      $("#viewUserONLINE").hide();
    });

    /*$('huser').click(function(){
      $('#infoUsers').modal('show')
        $('.modal-body').val('');
        $('.modal-body').load($(this).attr('href'));
        return  false;
    });*/

});

