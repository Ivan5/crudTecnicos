<div class="box-principal">
<h3 class="titulo">Tecnico <?php echo $datos['nombre']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Perfil del Tecnico <?php echo $datos['nombre']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <img class="img-responsive" src="<?php echo URL;?>Views/template/imagenes/avatars/<?php echo $datos['imagen']; ?>">
        </div>
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['nombre']; ?>
            </li>
            <li class="list-group-item">
              <b>Edad: </b><?php echo $datos['edad']; ?>
            </li>
            <li class="list-group-item">
              <b>Calificación: </b><?php echo $datos['calificacion']; ?>
            </li>
            <li class="list-group-item">
              <b>Sección: </b><?php echo $datos['nombre_seccion']; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>