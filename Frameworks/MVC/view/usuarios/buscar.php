
<br>
    <div class="col-md-6 col-md-offseet-1" style="padding: 20px;">
        <div class="input-group  bg-blue">
        <input type="text" class="form-control" placeholder="Ingrese el nombre" aria-label="Recipient's username" aria-describedby="button-addon1">
        <button class="btn btn-primary" type="button" id="button-addon2">Buscar</button>
        </div>
    </div>
<br>
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