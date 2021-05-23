<div class="col-md-8 col-md-offseet-1">
    <hr>
    <table class="table table-hover">
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