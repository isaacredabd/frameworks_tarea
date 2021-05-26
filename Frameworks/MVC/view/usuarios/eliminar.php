<div class="col-md-12 col-md-offseet-1" >
    <table class="table table-dark table-hover">
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
                <a href="index.php?controller=usuariocontroller&action=eliminar&id=<?php echo $user->id; ?>" class="alert-link">
                <i class="fas fa-trash-alt "></i>
                </a>    
                </td>
                        
                    
                 
            </tr>
                <?php endwhile;
                ?>
    </table>

</div>
