<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
    <div class="container"  style="max-width: 910px;">
        <h1 class="display-5 text-center mt-5">BEC Market</h1>

        <div class="row bg-light mx-auto mt-5 border border-dark rounded-3 pb-3">
            <div class="col-12">
                <p class="h4 text-center pb-4 pt-4">Registra tu negocio</p>
            </div>
            <div class="col-sm-6 px-4">
                <label for="nn" class="form-label">Nombre negocio</label>
                <input type="text" class="form-control mb-3" id="nn" style="max-width: 400px;">

                <label for="tn" class="form-label">Tipo de negocio</label>
                <select class="form-select mb-3" id="tn" style="max-width: 400px;">
                    <option selected>Seleccione</option>
                    <option value="1">Supermercado</option>
                    <option value="2">Panadería</option>
                    <option value="3">Comida rápida</option>
                </select>

                <label for="re" class="form-label">Rut empresa</label>
                <input type="text" class="form-control mb-3" id="re" style="max-width: 400px;" placeholder="11.111.111-1">

                <label for="dn" class="form-label">Dirección negocio</label>
                <input type="text" class="form-control mb-3" id="dn" style="max-width: 400px;" placeholder="Calle #numero">

                <label for="rd" class="form-label">Su rut</label>
                <input type="text" class="form-control mb-3" id="rd" style="max-width: 400px;" placeholder="11.111.111-1">

            </div>

            <div class="col-sm-6 px-4">
                <label for="nd" class="form-label">Nombre</label>
                <input type="text" class="form-control mb-3" id="nd" style="max-width: 400px;">

                <label for="ad" class="form-label">Apellidos</label>
                <input type="text" class="form-control mb-3" id="ad" style="max-width: 400px;">

                <label for="cd" class="form-label">Celular</label>
                <input type="text" class="form-control mb-3" id="cd" style="max-width: 400px;" placeholder="+56987654321">

                <label for="ed" class="form-label">E-mail</label>
                <input type="text" class="form-control mb-3" id="ed" style="max-width: 400px;" placeholder="correo@example.com">

                <label for="pass" class="form-label">Contraseña</label>
                <input type="password" class="form-control mb-3" id="pass" style="max-width: 400px;" placeholder="Debe contener de 8 a 20 caracteres">

            </div>

            <div class="col-12 px-3 mt-3"> 
                <p class="lead text-decoration-underline text-center"> 
                    Al registrarte aceptas los Términos & Condiciones y la Política de Privacidad 
                </p>
            </div>

            <div class="row row row-cols-2 row-cols-sm-1 row-cols-md-3">
                <div class="col-sm-4 mt-4">
                    <a href="index.php" class="ms-5 mt-3"><i class="fas fa-chevron-circle-left display-5 text-dark"></i></a>
                </div>
    
                <div class="col-sm-4 mt-4">
                    <button type="button" class="btn btn-dark">REGISTRARSE</button>
                </div>
    
                <div class="col-sm-4 text-center mt-4 mx-auto">
                    <p class="text-center"> 
                        ¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a>
                    </p>
                </div>
            </div>

        </div>
        
        <div class="row text-center" style="margin-top: 100px;">
            <div class="col-sm pb-5">
              <h2 class="display-5">BEC Market</h2>
            </div>
            <div class="col-sm pb-5">
                  <p class="lead pb-2"><strong>NUESTRAS REDES</strong></p>
                  <a href="#"><i class="fab fa-facebook-f fs-4 text-dark me-5"></i></a>
                  <a href="#"><i class="fab fa-twitter fs-4 text-dark me-5"></i></a>
                  <a href="#"><i class="fab fa-instagram fs-4 text-dark"></i></a>
            </div>
            <div class="col-sm pb-5">
              <p class="lead"><strong>CONTACTO</strong></p>
              <a href="MAILTO:contacto@example.com" class="text-decoration-none lead">contacto@example.com</a></span></p>
            </div>
          </div>
       

            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/40e29f2951.js" crossorigin="anonymous"></script>
</body>
</html>