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
    <!-- BARRA DE NAVEGACION -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BEC Market</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item pe-5">
                        <a href="vendedor-inicio.php" class="text-light text-decoration-none fw-normal">INICIO</a>
                    </li>
                    <li class="nav-item pe-5">
                        <a href="vendedor-datos.php" class="text-light text-decoration-none fw-normal">MIS DATOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../index.php" class="text-light text-decoration-none fw-normal">CERRAR SESION<i class="fas fa-sign-out-alt ps-2 fs-5"></i></a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
    <!-- BARRA DE NAVEGACION -->

    <!-- BARRA SECUNDARIA -->
      <div class="container">
        <nav class="nav nav-pills flex-column flex-sm-row mt-5 mx-auto" style="max-width: 500px;">
            <a class="flex-sm-fill text-sm-center nav-link link-dark" href="vendedor-inicio.php" style="background-color: #adb5bd;">MI NEGOCIO</a>
            <a class="flex-sm-fill text-sm-center nav-link bg-dark active" href="vendedor-productos.php">MIS PRODUCTOS</a>
            <a class="flex-sm-fill text-sm-center nav-link link-dark" href="vendedor-pedidos.php" style="background-color: #adb5bd;">PEDIDOS</a>
        </nav>
      </div>
    <!-- BARRA SECUNDARIA -->

    <!-- NUEVO PRODUCTO -->
    <div class="container mt-3">
        <a href="vendedor-productos.php"><i class="fas fa-chevron-circle-left fs-1 text-dark ms-5 mb-3"></i></a>
        <div class="border border-2 border-dark rounded mx-auto pb-3" style="max-width: 600px;">
            <h5 class="h5 text-center mt-3 mb-4">NUEVO PRODUCTO</h5>
            <div class="row">
                <div class="col-md-6">
                    <img src="../../img/noimg.png" class="card-img py-2 mx-auto d-block" alt="" style="max-width: 200px;">
                    <div class="mb-3 d-flex justify-content-center flex-column">   
                        <input class="form-control form-control-sm mx-auto" id="formFileSm" type="file"style="max-width: 200px;">
                        <button class="btn btn-dark mt-2 mx-auto btn-sm" style="max-width: 200px;">Agregar imagen</button>
                    </div>
                </div>
                <div class="col-md-6 px-5">
                    <label for="nombre" class="form-label fw-bold">Nombre:</label>
                    <input class="form-control form-control-sm mb-3" type="text" id="nombre" style="max-width: 400px;">

                    <label for="precio" class="form-label fw-bold">Precio:</label>
                    <input class="form-control form-control-sm mb-3" type="text" id="precio" style="max-width: 400px;">

                    <label for="stock" class="form-label fw-bold">Stock:</label>
                    <input class="form-control form-control-sm mb-3" type="text" id="stock" style="max-width: 400px;">
                </div>
                <div class="col-md-12 mt-2 px-5">
                    <p class="fw-bold">Descripci??n</p>
                    <textarea class="form-control"style="max-width: 600px;"></textarea>
                </div>
                <button class="btn btn-dark mt-4 mx-auto" style="max-width: 200px;">A??adir producto</button>
            </div>
        </div>
    </div>
    <!-- NUEVO PRODUCTO -->

    <!-- FOOTER -->
    <div class="container text-center" style="margin-top: 110px;">
        <div class="row">
          <div class="col-md pb-5">
            <h2 class="display-5">BEC Market</h2>
          </div>
          <div class="col-md pb-5">
                <p class="lead pb-2"><strong>NUESTRAS REDES</strong></p>
                <a href="#"><i class="fab fa-facebook-f fs-4 text-dark me-5"></i></a>
                <a href="#"><i class="fab fa-twitter fs-4 text-dark me-5"></i></a>
                <a href="#"><i class="fab fa-instagram fs-4 text-dark"></i></a>
          </div>
          <div class="col-md pb-5">
            <p class="lead"><strong>CONTACTO</strong></p>
            <a href="MAILTO:contacto@example.com" class="text-decoration-none lead">contacto@example.com</a></span></p>
          </div>
        </div>
    </div>
    <!-- FIN FOOTER -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/40e29f2951.js" crossorigin="anonymous"></script>
</body>
</html>