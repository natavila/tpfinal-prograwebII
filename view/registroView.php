{{> header}}

<div class="container-sm my-3 d-flex justify-content-center">
        <h4>Registrarse</h4>
    </div>
    <!--FORM-->
    <div class="container-sm my-3 d-flex justify-content-center">
        <form action="/registro/procesarFormulario" method="POST">
            <div class="form-group">
                <label for="inputNombre">Nombre y Apellido</label>
                <input type="text" class="form-control" name="nombre" id="inputNombre">
            </div>
            <div class="form-group">
                <label for="inputDni">DNI</label>
                <input type="number" class="form-control" name="dni" id="inputDni">
            </div>
            <div class="form-group">
                <label for="inputFecha">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fechaNac" id="inputFecha">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword">
            </div>

            <button type="submit" name="submit" class="btn btn-dark">Registrarse</button>
        </form>

    </div>

    <div class="container-fluid my-2 d-flex justify-content-center">
        <small>Usted recibirá un email para la confirmación de su cuenta. Luego el administrador
            le asignará su rol correspondiente en la empresa.
        </small>
    </div>





{{> footer}}