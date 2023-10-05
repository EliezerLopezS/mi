<?php
session_start();
error_reporting(E_PARSE);

//include './js/funciones.js';
?>
<script>
    function checkFormValidity() {
        var password = document.getElementById("password");
        var confirmPassword = document.getElementById("password2");
        var fullNameInput = document.getElementById("full-name");
        var emailInput = document.getElementById("email");
        var phoneInput = document.getElementById("phone");
        var dirInput = document.getElementById("dir");
        var termsCheckbox = document.getElementById("formCheck-1");

        // Expresiones regulares para validar los campos
        var fullNameRegex = /^[a-zA-Z ]{1,50}$/;
        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        var phoneRegex = /^[0-9]{8,15}$/;
        var dirRegex = /^[a-zA-Z0-9\s,.'-]+$/;

        var errors = []; // Array para almacenar los mensajes de error

        // Verificar las condiciones de validación y actualizar los estilos de los campos correspondientes
        if (password.value !== confirmPassword.value) {
            errors.push("Las contraseñas no coinciden.");
        }

        if (!fullNameRegex.test(fullNameInput.value)) {
            errors.push("El nombre no debe incluir números.");
            fullNameInput.style.color = "red";
        } else {
            fullNameInput.style.color = "black";
        }

        if (!emailRegex.test(emailInput.value)) {
            errors.push("Correo no válido.");
            emailInput.style.color = "red";
        } else {
            emailInput.style.color = "black";
        }

        if (!phoneRegex.test(phoneInput.value)) {
            errors.push("Numero de telefono solo incluye números.");
            phoneInput.style.color = "red";
        } else {
            phoneInput.style.color = "black";
        }

        if (!dirRegex.test(dirInput.value)) {
            errors.push("Direccion solo incluye numeros y letras.");
            dirInput.style.color = "red";
        } else {
            dirInput.style.color = "black";
        }

        if (!termsCheckbox.checked) {
            errors.push("Debe aceptar los términos y condiciones.");
        }

        // Actualizar los estilos del botón de envío
        var submitButton = document.getElementById("submitButton");
        submitButton.disabled = errors.length > 0;

        // Mostrar los mensajes de error en el contenedor correspondiente
        var errorContainer = document.getElementById("errorCont");
        if (errors.length > 0) {
            errorContainer.textContent = errors.join("\n");
            errorContainer.style.color = "red";
            errorContainer.style.fontFamily = "Arial, sans-serif";
        } else {
            errorContainer.textContent = ""; // Limpiar el mensaje de error si todos los campos están completos y las contraseñas coinciden
        }
    }



</script>


<div>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-dark" style="background-color: #2e302e;">
        <div class="container-fluid">
            <!--a class="navbar-brand" href="#"><img src="assets/img/logg.png" alt=""
                    style="whidth:100px;height:100px;box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5);"></a-->
                    <!--h3 style="margin: 0;font: normal 36px Cookie, cursive;margin-bottom: 20px;color: #fff;text-decoration: none;">
                    <a href="#" style="text-decoration: none;color: #fff;">Tree<span style="color: #086e05;">JOB </span><img src="assets/img/loghgh.png" alt=""
                    style="whidth:100px;height:100px;"></a></h3-->
                    <h3 style="margin: 0; font: normal 36px Cookie, cursive; margin-bottom: 20px; color: #fff; text-decoration: none;">
    <a href="#" style="text-decoration: none; color: #fff; display: block; text-align: center;">
        Tree<span style="color: #086e05;">JOB</span>
        <img src="assets/img/loghgh.png" alt="" style="width: 75px; height: 50px; display: block; margin: 0 auto;">
    </a>
</h3>

                    
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ">
                <li class="nav-item "><a class="nav-link active" href="">
                            <p> </p>
                        </a></li>
                    <li class="nav-item"><a class="nav-link active" href="index">
                            <p> Home</p>
                        </a></li>
                    <li class="nav-item"><a class="nav-link  " href="#">
                            <P> About us</P>
                        </a></li>
                    <li class="nav-item"><a class="nav-link  " href="servicios">
                            <P> Services</P>
                        </a></li>
                    <li class="nav-item"><a class="nav-link " href="contacto">
                            <P> Contact</P>
                        </a></li>
                    <?php if ($_SESSION['nombreUser'] == "ADMIN" || $_SESSION['nombreUser']=="hidelopez@outlook.com") {
                        echo '<li class="nav-item"><a class="nav-link " href="clientes"> <P> Clients</P></a></li>';


                    } ?>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <?php
                    if (!$_SESSION['nombreUser'] == "") {
                        echo '
                        <div class="pull-left">
                            <ul class="nav pull-left">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle bg-success" style="   font-weight: bold;font-size: 20px;color: white;padding: 5px 10px;border-radius: 5px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        ' . $_SESSION['nombreUser'] . ' <i class="fa fa-user-o"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end bg-success">
                                    <li style="text-align: center;">
                                    <a style="cursor: pointer; font-weight: bold; font-size: 15px; color: white; padding: 5px 10px; border-radius: 5px; white-space: nowrap;">
                                        <b> <img src="assets/img/log.png" alt="Imagen" style="width: 80px; height: 70px; margin-right: 5px;"></b>
                                    </a>
                                </li>
                                <li class="divider" style="  margin: 10px 0;border-top: 1px solid #ccc;list-style: none;"></li>
                                        <li><a style="cursor: pointer;font-weight: bold;font-size: 15px;color: white;padding: 5px 10px;border-radius: 5px; white-space: nowrap;"><b><i style="width: 16px" class="fa fa-calendar"></i> ' . DiaFechaCompleta() . '</b></a></li>
                                        
                                        <li class="divider" style="  margin: 10px 0;border-top: 1px solid #ccc;list-style: none;"></li>
                                        
                                        <li><a class="dropdown-item bg-success" style="   font-weight: bold;font-size: 15px;color: white;padding: 5px 10px;border-radius: 5px;" href="acciones/logout.php" ><i class="bi bi-power"></i> LOGOUT</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        ';
                        /*echo '
    <div class="logged-in-user">
        <span class="user-name">' . $_SESSION['nombreUser'] . '</span>
        <a href="acciones/logout.php" class="logout-link">Cerrar sesión</a>
    </div>
    ';*/
                    } else {
                        echo '
                        <li class="nav-item"><a class="nav-link " href="#"><button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#signup"><i class="fa fa-user-o"></i> Log In</button></a></li>
                        <li class="nav-item"><a class="nav-link " href="#"><button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#signin1"><i class="fa fa-user-plus"></i> Sign Up</button></a></li>
                        ';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
    <div class="modal fade" role="dialog" tabindex="-1" id="signup">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Sign In</h4><button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div id="errorContainer" align="center" style="width: 100%; color:red;font-weight: bold;height: 25px;">
                </div>




                <div class="modal-body">
                    <form id="signup1" method="POST" action="acciones/login.php">
                        <div class="form-group mb-3">
                            <div class="input-group"><span class="text-primary input-group-text"><i
                                        class="fa fa-envelope-o"></i></span><input class="form-control" type="username"
                                    id="username" name="username" required="" placeholder="username or gmail"></div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group"><span class="text-primary input-group-text"><i
                                        class="fa fa-lock"></i></span><input class="form-control" type="password"
                                    id="passwordlog" name="passwordlog" required="" placeholder="Password"></div>
                        </div>
                        <div class="form-group mb-3"><button class="btn btn-primary btn-lg" style="width: 100%;"
                                type="submit" name="sqlLog" id="sqlLog">log in</button></div>
                    </form>
                    <hr style="background-color: #bababa;">
                    <p class="text-center">Or&nbsp;<a class="text-decoration-none" href="#" data-bs-dismiss="modal"
                            data-bs-toggle="modal" data-bs-target="#forgetPasswordModal">Forget password</a></p>
                    <p class="text-center">Don't have an account? &nbsp;<a class="text-decoration-none" href="#"
                            data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signin1">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>

    <!--forget password-->
    <div class="modal fade" id="forgetPasswordModal" tabindex="-1" aria-labelledby="forgetPasswordModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgetPasswordModalLabel">Forget password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de restablecimiento de contraseña -->
                    <form id="reset_pass">
                        <div class="form-group mb-3">
                            <div class="input-group">
                                <span class="text-primary input-group-text">
                                    <i class="fa fa-envelope-o"></i>
                                </span>
                                <input class="form-control" type="email" name="email" required placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn btn-primary btn-lg" style="width: 100%;" type="button"
                                onclick="submitFormReset()">Enviar correo electrónico</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" role="dialog" tabindex="-1" id="signin1">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Sign Up Now</h4><button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="form-group mb-3" id="errorCont" align="center" style="font-size: 12px;"></div>
                    <!--div class="text-center"><button class="btn btn-primary text-start" style="width: 100%;" type="button"><i class="fa fa-facebook"></i>&nbsp; Continue with Facebook</button></div>
                        <div class="text-center mt-2"><button class="btn btn-light text-start border-dark" style="width: 100%;" type="button"><i class="fa fa-google"></i>&nbsp; Continue with Google</button></div-->
                    <form class="mt-4" id="signin">
                        <div class="form-group mb-3">
                            <div class="input-group"><span class="text-primary input-group-text"><i
                                        class="fa fa-user-o"></i></span><input class="form-control" type="text"
                                    required="" id="full-name" name="full-name" placeholder="Name"
                                    pattern="[a-zA-Z ]{1,40}" maxlength="40" oninput="checkFormValidity()"></div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group"><span class="text-primary input-group-text"><i
                                        class="fa fa-envelope-o"></i></span><input class="form-control" type="email"
                                    required="" id="email" name="email" placeholder="Email"
                                    oninput="checkFormValidity()"></div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group"><span class="text-primary input-group-text"><i
                                        class="fa fa-phone"></i></span><input class="form-control" type="phone"
                                    required="" id="phone" name="phone" placeholder="Phone"
                                    oninput="checkFormValidity()"></div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group"><span class="text-primary input-group-text"><i
                                        class="fa fa-map-marker"></i></span><input class="form-control" type="text"
                                    required="" id="dir" name="dir" placeholder="Address" oninput="checkFormValidity()">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <span class="text-primary input-group-text"><i class="fa fa-lock"></i></span>
                                <input class="form-control" type="password" required="" id="password" name="password"
                                    value="" placeholder="Password" oninput="checkFormValidity()">
                            </div>
                        </div>


                        <div class="form-group mb-3">
                            <div class="input-group"><span class="text-primary input-group-text"><i
                                        class="fa fa-lock"></i></span><input class="form-control" type="password"
                                    required="" id="password2" name="password2" value=""
                                    placeholder="Repeat your password" oninput="checkFormValidity()"></div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"
                                    required="" oninput="checkFormValidity()"><label class="form-check-label"
                                    for="formCheck-1" id="formCheck-1" value="">I agree all the terms and
                                    conditions.</label></div>
                        </div>
                        <div class="form-group mb-3"><button class="btn btn-primary btn-lg" style="width: 100%;"
                                type="button" id="submitButton" onclick="submitForm()" disabled>Sign Up</button></div>
                    </form>
                    <hr style="background-color: #bababa;">
                    <p class="text-center">Already have an Account?&nbsp;<a class="text-decoration-none" href="#"
                            data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signup">Log In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>