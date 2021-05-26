
<?php
 require_once 'controller/UsuarioController.php';
 $var = new usuariocontroller;
 $resul= $var->modificarlistar(); 
?>
<hr>
<div class="card text-white bg-dark mb-3" style="max-width: 60rem; margin-left: auto; margin-right: auto;" >
<div class="card-header text-center">
        Actualizar Usuarios
    </div>

   
            
               
<div class="card-body">

        <form action="index.php?controller=UsuarioController&action=actualizar" method="POST">

            <input type="hidden" class="form-control" type="text" name="txtid" value="<?php echo $resul= $var->modificarlistar();?>">
            <?php
            while ($user = $resultUser->fetch_object()): ?>
            <label class="control-label">Nombre</label>
            <input class="form-control" type="text" name="txtNombre" value="<?=$user->Nombre?>">

            <label class="control-label">Apellido</label>
            <input class="form-control" type="text" name="txtApellido" value="<?=$user->Apellido?>">

            <label class="control-label">Email</label>
            <input class="form-control"type="email" name="txtEmail" value="<?=$user->Email?>">
            <?php endwhile;
                ?>
                <hr>
            <div class="col text-center">
                <a href="index.php?controller=UsuarioController&action=actualizar">
                <button class="btn btn-success" type="submit" >Actualizar</button>
                </a>
            </div>
    </div>
    </div>

