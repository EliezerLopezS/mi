<!DOCTYPE html>
<html lang="en">

<head>
<?php
    require 'seguridad/conn_mysql.php';

?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MI-EMPRESA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    
    <script src="js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="js/sweetalert2.min.css">

    <script src="https://apis.google.com/js/platform.js" async defer></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer-.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script type="text/javascript" href="js/jquery.min.js"></script>
    <!--link rel="stylesheet" href="js/sweetalert.css"-->
    <link src="js/main.js">
    <link src="js/funciones.js">
    
    <!--script src="js/sweetalert.min.js"></script-->
    

</head>

<body> 
<style>
  .whatsapp-float,
  .facebook-float,
  .gmail-float {
    position: fixed;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
  }

  .whatsapp-float {
    right: 20px;
    bottom: 20px;
    background-color: green;
  }

  .facebook-float {
    right: 20px;
    bottom: 100px;
    background-color: #3b5998;
  }

  .gmail-float {
    right: 20px;
    bottom: 180px;
    background-color: #db4a39;
  }

  .whatsapp-float a,
  .facebook-float a,
  .gmail-float a {
    display: block;
    line-height: 60px;
    color: #fff;
    font-size: 25px;
    text-decoration: none;
  }
</style>

<div class="whatsapp-float">
  <a href="https://wa.me/+529531188818" target="_blank"><i class="fab fa-whatsapp"></i></a>
</div>

<div class="facebook-float">
  <a href="https://www.facebook.com/<usuario-facebook>" target="_blank"><i class="fab fa-facebook-f"></i></a>
</div>

<div class="gmail-float">
  <a href="mailto:371eze6.375@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
</div>

<?php   
include 'inc/nav.php';
?>
<div id="carousel-1" class="carousel slide" data-bs-ride="carousel" style="height: 500px;">
    <div class="carousel-inner h-100">
        <div class="carousel-item active h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="assets/img/im1.jpg" alt="Slide Image" style="z-index: -1;" />
            <div class="container d-flex flex-column justify-content-center h-100">
                <div class="row">
                    <div class="col-md-6 col-xl-4 offset-md-2">
                        <div style="max-width: 350px;">
                            <h1 class="hero-title fw-bold ">Biben dum<br />fringi dictum, augue purus</h1>
                            <p class="my-3">Tincidunt laoreet leo, adipiscing taciti tempor. Primis senectus sapien, risus donec ad fusce augue interdum.</p><a class="btn btn-primary btn-lg me-2" role="button" href="#">Button</a><a class="btn btn-outline-primary btn-lg" role="button" href="#">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="assets/img/img3.jpg" alt="Slide Image" style="z-index: -1;" />
            <div class="container d-flex flex-column justify-content-center h-100">
                <div class="row">
                    <div class="col-md-6 col-xl-4 offset-md-2">
                        <div style="max-width: 350px;">
                            <h1 class="hero-title fw-bold">Biben dum<br />fringi dictum, augue purus</h1>
                            <p class="my-3">Tincidunt laoreet leo, adipiscing taciti tempor. Primis senectus sapien, risus donec ad fusce augue interdum.</p><a class="btn btn-primary btn-lg me-2" role="button" href="#">Button</a><a class="btn btn-outline-primary btn-lg" role="button" href="#">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="assets/img/img3.jpg" alt="Slide Image" style="z-index: -1;" />
            <div class="container d-flex flex-column justify-content-center h-100">
                <div class="row">
                    <div class="col-md-6 col-xl-4 offset-md-2">
                        <div style="max-width: 350px;">
                            <h1 class="hero-title fw-bold">Biben dum<br />fringi dictum, augue purus</h1>
                            <p class="my-3">Tincidunt laoreet leo, adipiscing taciti tempor. Primis senectus sapien, risus donec ad fusce augue interdum.</p><a class="btn btn-primary btn-lg me-2" role="button" href="#">Button</a><a class="btn btn-outline-primary btn-lg" role="button" href="#">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
    <ol class="carousel-indicators">
        <li class="active" data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
        <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
        <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
    </ol>
</div>
<!-- gallery-->

<div class="container d-flex flex-column align-items-center py-4 py-xl-5" id="micontenedor">
        <div class="row gy-4 row-cols-1 row-cols-md-2 w-100" style="max-width: 800px;" id="cont2">
            <div class="col order-md-first">
                <div class="card"><img class="card-img w-100 d-block" src="assets/img/im3.jpg" />
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4">
                        <h4>Title</h4>
                        <p>Volutpat habitasse risus posuere, commodo fusce donec. Turpis donec tristique.</p>
                    </div>
                </div>
            </div>
            <div class="col d-md-flex order-first justify-content-md-start align-items-md-end order-md-1">
                <div style="width: 80%;">
                    <h2>Litora vivamus dui, nam aliquam aenean</h2>
                    <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
                </div>
            </div>
            <div class="col order-md-2">
                <div class="card"><img class="card-img w-100 d-block" src="assets/img/im4.jpg" />
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4">
                        <h4>Title</h4>
                        <p>Volutpat habitasse risus posuere, commodo fusce donec. Turpis donec tristique.</p>
                    </div>
                </div>
            </div>
            <div class="col order-md-2">
                <div class="card"><img class="card-img w-100 d-block" src="assets/img/im4.jpg" />
                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4">
                        <h4>Title</h4>
                        <p>Volutpat habitasse risus posuere, commodo fusce donec. Turpis donec tristique.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php   
include 'inc/footer.php';
?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


    <!--script>
        $(document).ready(function() {
    // Manejar el envío del formulario
    $('#signup1').submit(function(e) {
        e.preventDefault(); // Evitar el envío del formulario

        // Obtener los datos del formulario
        var username = $('#username').val();
        var password = $('#password').val();

        // Realizar la solicitud AJAX  C:\xampp\htdocs\mi\acciones\login.php
        $.ajax({
            type: 'POST',
            url: 'acciones/login.php',
            data: {
                username: username,
                password: password
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Las credenciales son correctas, redirigir a la página principal
                    console.log('Redireccionando a index.php');
                    window.location.href = 'index.php';
                } else {
                    // Las credenciales son incorrectas, mostrar el mensaje de error en el formulario modal
                    $('#errorContainer').text(response.message);
                }
            },
            error: function() {
                // Ocurrió un error en la solicitud AJAX
                alert('Error en la solicitud AJAX');
            }
        });
    });
});

    </script-->

<script>
    
var modalElement = document.getElementById("signin1"); // Reemplaza "myModal" con el ID de tu modal
modalElement.addEventListener("hidden.bs.modal", function () {
  // Aquí resetea los campos del formulario al cerrar el modal
  document.getElementById("errorCont").textContent = "";
  document.getElementById("password").value = "";
  document.getElementById("password2").value = "";
  document.getElementById("full-name").value = "";
  document.getElementById("email").value = "";
  document.getElementById("phone").value = "";
  document.getElementById("formCheck-1").checked = false;
});


</script>



</body>
</html>