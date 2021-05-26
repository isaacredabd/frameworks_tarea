<hr>
<div class="card text-white bg-dark mb-3" style="max-width: 60rem; margin-left: auto; margin-right: auto;" >
    <div class="card-header text-center">
        Crear usuarios
    </div>
    <div class="card-body">

        <form action="index.php?controller=UsuarioController&action=guardar" method="POST">

            <label class="control-label">Nombre</label>
            <input class="form-control" type="text" name="txtNombre">

            <label class="control-label">Apellido</label>
            <input class="form-control" type="text" name="txtApellido">

            <label class="control-label">Email</label>
            <input class="form-control"type="email" name="txtEmail">
            <hr>
                <div class="col text-center">
                <a href="index.php?controller=UsuarioController&action=mostrarTodos">
                <button class="btn btn-success" type="submit" >Guardar</button>
                </a>
                </div>
            


        </form>
    </div>
</div>