<div class="col-md-12 col-md-offseet-1" >
  
    <table class="table table-dark table-hover" >
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>

        </tr>

        <?php
            while ($user = $resultUser->fetch_object()): ?>
            <tr>
                <td><?=$user->id?></td>
                <td><?=$user->Nombre?></td>
                <td><?=$user->Apellido?></td>
                <td><?=$user->Email?></td>
            </tr>
                <?php endwhile;
                ?>
    </table>

</div>