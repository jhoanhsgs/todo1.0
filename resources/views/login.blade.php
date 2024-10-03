<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NotasWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
</head>
<body>

    <div class="container" id="app_login">
        <div class="col-md-4 offset-md-4 mt-5">
            <h1 class="my-3 text-center">Iniciar sesión</h1>
            <div class="card">
                <div class="card-body">
                    <form @submit.prevent="iniciarSesion">
                        <div class="mb-3">
                          <label for="usuario">Usuario</label>
                          <input type="email" v-model="usuario" class="form-control" id="usuario" placeholder="Usuario">
                        </div>
                        <div class="mb-3">
                          <label for="contraseña" class="form-label">Contraseña</label>
                          <input type="password" v-model="contraseña" class="form-control" id="contraseña" placeholder="Ingresar contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
