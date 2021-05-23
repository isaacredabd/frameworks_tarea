<div class="col-md-8 col-md-offseet-1">
    <table class="table table-hover">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Accion</td>


        </tr>

        <?php
            while ($user = $resultUser->fetch_object()): ?>
            <tr>
           
                <td><?=$user->id?></td>
                <td><?=$user->Nombre?></td>
                <td><?=$user->Apellido?></td>
                <td><?=$user->Email?></td>
                <td>
                <a href="index.php?controller=usuariocontroller&action=modificarlistar&pasar=<?php echo $user->id; ?>">editar</a>    
                </td>
                <!--
                <td>
                <a href="index.php?controller=usuariocontroller&action=modificarlistar&id=<?php echo $user->id; ?>&nombre=<?php echo $user->Nombre; ?>&apellido=<?php echo $user->Apellido; ?>&email=<?php echo $user->Email; ?>">
                editar</a>    
                </td>
                -->
                
               
                 
            </tr>
                <?php endwhile;
                ?>
    </table>

</div>
