<?php
include('../clases/contenedorClasesGral.php');

$verUsuarios= new updownImagen;
$verUsuariosInicio = $verUsuarios->MuestraUsuarios();
?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Usuario</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Historial</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i=0; $i<count($verUsuariosInicio); $i++){ ?>
      <tr>
        <td><?php echo $verUsuariosInicio[$i]['nombre'];?></td>
        <td><?php echo $verUsuariosInicio[$i]['a_Paterno'];?></td>
        <td><?php echo $verUsuariosInicio[$i]['a_Materno'];?></td>
        <td><a id="<?php echo $verUsuariosInicio[$i]['idUsuarios'];?>"  data-toggle="modal" data-target="#infoUsers" class="HistorialUsuarios " href="envioPOST/historialUsuario.php?idUsuarios=<?php echo $verUsuariosInicio[$i]['idUsuarios']; ?>"><i class="fa fa-history faTabla"></i></a></td>
      </tr>
      <?php } ?>

    </tbody>
  </table>
  <div class="modal fade" id="infoUsers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="modal-body">

          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Salir</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript"> //Script encargado de limpiar el modal para mostrar las imagenes por id correctamente
  $(document).ready(function(){
    $('#infoUsers').on('hidden', function(){
        $(this).removeData('modal');
    });
  });
</script>