  setInterval("recarga()",5000);
  function recarga(){
    $.ajax({
      url:'envioPOST/SesionesActivas.php',
      success:function(html){
        $('.viewUserONLINE').html(html);
      }
    });
  }