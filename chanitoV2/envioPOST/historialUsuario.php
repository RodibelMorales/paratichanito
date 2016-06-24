	<?php 
		include('../clases/contenedorClasesGral.php');
		$VerHistorialUsuario = new ControlSesiones;
		if (isset($_REQUEST['idUsuarios'])) {
			$VerHistorialUsuario->idUsuarios = $_REQUEST['idUsuarios'];
			$VerHistorialUsuario->HistorialUsuario();
		}
		else{
			echo "<script language='JavaScript'> alert('Ups, Primero debes seleccionar a un usuario para ver el historial'); window.location='../mi_foto_con_chanito.php';</script>";
		}
	?>
	<div class="modal fade" id="infos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="modal-body">
          		Realmente desea eliminar la imagen con el id <p id="debug-url"></p>
          </div>
          <div class="modal-footer">
            <a id="cierramodal" class="btn btn-danger" data-dismiss="modal">Cancelar</a>
            <a href="envioPOST/deleteImg.php?id_f=" class="btn btn-link btnOK link">Eliminar</a>
          </div>
        </div>
      </div>
    </div> <!--Modal para confirmar la eliminación de la imagen-->
  </div>

  <div class="modal fade" id="infos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="modal-body">
              <form name="UpdateImg" method="POST" action="envioPOST/">
              </form>
          </div>
          <div class="modal-footer">
            <a id="cierramodal" class="btn btn-danger" data-dismiss="modal">Cancelar</a>
            <a href="envioPOST/deleteImg.php?id_f=" class="btn btn-link btnOK upinfo">Guardar</a>
          </div>
        </div>
      </div>
    </div><!--Modal para modificar info de las imagenes.-->
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      //Script encargado cerrar el modal hijo creado dentro del modal padre
    	$('#cierramodal').on("click", function(e){
    		$('#infos').modal('hide');
    		e.stopPropagation();
    	});
      //Muestra modal de confirmación para eliminar
      $('#infos').on('show', function() {
            var id = $(this).data('id'),
                removeBtn = $(this).find('.link');
                removeBtn.attr('href', removeBtn.attr('href').replace(/(&|\?)id_f=\d*/, '$1id_f=' + id));
            $('#debug-url').html('Delete URL: <strong>' + removeBtn.attr('href') + '</strong>');
        });
      //Pasa id por URL para eliminar imagen
      $('.delete').on('click', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $('#infos').data('id', id).modal('show');
      });
    });
  </script>