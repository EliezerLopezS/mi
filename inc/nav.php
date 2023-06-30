<?php 
    session_start(); 
   error_reporting(E_PARSE);
?>
<script>
   /* function checkPasswordMatch() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("password2").value;
        var submitButton = document.getElementById("submitButton");
        var errorContainer = document.getElementById("errorCont");
        if (password !== confirmPassword) {
            submitButton.disabled = true;
            errorContainer.textContent = "Las contraseñas no coinciden.";
        } else {
            submitButton.disabled = false;
        }
    }
    function checkFormValidity() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("password2").value;
    var submitButton = document.getElementById("submitButton");
    var errorContainer = document.getElementById("errorCont");

    // Obtener los valores de los demás campos
    var fullName = document.getElementById("full-name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var termsCheckbox = document.getElementById("formCheck-1");
        // Expresiones regulares para validar los campos
        var fullNameRegex = /^[a-zA-Z ]{1,50}$/;
    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var phoneRegex = /^[0-9]{8,15}$/;

    if (password !== confirmPassword || !fullName || !email || !phone || !termsCheckbox.checked) {
        submitButton.disabled = true;
        errorContainer.textContent = "Por favor, complete todos los campos correctamente.";
        errorContainer.style.color = "red";
        errorContainer.style.fontFamily = "Arial, sans-serif";
    } else {
        submitButton.disabled = false;
        errorContainer.textContent = ""; // Limpiar el mensaje de error si todos los campos están completos y las contraseñas coinciden
    }
}

function checkFormValidity() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("password2").value;
    var submitButton = document.getElementById("submitButton");
    var errorContainer = document.getElementById("errorCont");

    // Obtener los valores de los demás campos
    var fullName = document.getElementById("full-name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var termsCheckbox = document.getElementById("formCheck-1");

    // Expresiones regulares para validar los campos
    var fullNameRegex = /^[a-zA-Z ]{1,50}$/;
    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var phoneRegex = /^[0-9]{8,15}$/;

    if (password !== confirmPassword || !fullNameRegex.test(fullName) || !emailRegex.test(email) || !phoneRegex.test(phone) || !termsCheckbox.checked) {
        submitButton.disabled = true;
        errorContainer.textContent = "Por favor, complete todos los campos correctamente.";
        errorContainer.style.color = "red";
        errorContainer.style.fontFamily = "Arial, sans-serif";
    } else {
        submitButton.disabled = false;
        errorContainer.textContent = ""; // Limpiar el mensaje de error si todos los campos están completos y las contraseñas coinciden
    }
}
*/

function checkFormValidity() {
    var password = document.getElementById("password");
    var confirmPassword = document.getElementById("password2");
    var fullNameInput = document.getElementById("full-name");
    var emailInput = document.getElementById("email");
    var phoneInput = document.getElementById("phone");
    var termsCheckbox = document.getElementById("formCheck-1");

    // Expresiones regulares para validar los campos
    var fullNameRegex = /^[a-zA-Z ]{1,50}$/;
    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var phoneRegex = /^[0-9]{8,15}$/;

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


<div >
        <nav class="navbar navbar-light navbar-expand-md sticky-top">
            <div class="container-fluid"><a class="navbar-brand" href="#"><img src="assets/img/4.png" alt="" style="whidth:70px;height:70px"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav ">
                        <li class="nav-item"><a class="nav-link active " href="index.php"> <p> INICIO</p></a></li>
                        <li class="nav-item"><a class="nav-link active " href="#"> <P> NOSOTROS</P></a></li>
                        <li class="nav-item"><a class="nav-link active " href="#"> <P> SERVICIOS</P></a></li>
                        <li class="nav-item"><a class="nav-link active " href="contacto.php"> <P> CONTACTO</P></a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                    <?php
                      if(!$_SESSION['nombreUser']==""){
                        echo '
                        <div class="pull-left">
                            <ul class="nav pull-left">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle bg-primary" style="   font-weight: bold;font-size: 20px;color: white;padding: 5px 10px;border-radius: 5px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        ' . $_SESSION['nombreUser'] . ' <i class="fa fa-user-o"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end bg-secondary">
                                        
                                        <li><a class="dropdown-item bg-secondary" href="/help/support" style="   font-weight: bold;font-size: 15px;color: white;padding: 5px 10px;border-radius: 5px;"><i class="bi bi-person-gear"></i> Contact Support</a></li>
                                        
                                        <li><a class="dropdown-item bg-secondary" style="   font-weight: bold;font-size: 15px;color: white;padding: 5px 10px;border-radius: 5px;" href="acciones/logout.php" ><i class="bi bi-power"></i> Logout</a></li>
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
                      }else{
                        echo '
                        <li class="nav-item"><a class="nav-link active" href="#"><button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#signup"><i class="fa fa-user-o"></i> Log In</button></a></li>
                        <li class="nav-item"><a class="nav-link active" href="#"><button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#signin1"><i class="fa fa-user-plus"></i> Sign Up</button></a></li>
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
                        <h4>Sign In</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="errorContainer" align="center" style="width: 100%; color:red;font-weight: bold;height: 25px;"></div>
                  
                    
            
              
                    <div class="modal-body">
                        <form  id="signup1" method="POST" action="acciones/login.php">
                            <div class="form-group mb-3">
                                <div class="input-group"><span class="text-primary input-group-text"><i class="fa fa-envelope-o"></i></span><input class="form-control" type="username" id="username" name="username" required="" placeholder="username or gmail"></div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group"><span class="text-primary input-group-text"><i class="fa fa-lock"></i></span><input class="form-control" type="password" id="passwordlog" name="passwordlog"required="" placeholder="Password"></div>
                            </div>
                            <div class="form-group mb-3"><button class="btn btn-primary btn-lg" style="width: 100%;" type="submit" name="sqlLog" id="sqlLog">log in</button></div>
                        </form>
                        <hr style="background-color: #bababa;">
                        <p class="text-center">Or&nbsp;<a class="text-decoration-none" href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#forgetPasswordModal">Forget password</a></p>
                        <p class="text-center">Don't have an account? &nbsp;<a class="text-decoration-none" href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signin1">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!--forget password-->
 <div class="modal fade" id="forgetPasswordModal" tabindex="-1" aria-labelledby="forgetPasswordModalLabel" aria-hidden="true">
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
                        <button class="btn btn-primary btn-lg" style="width: 100%;" type="button" onclick="submitFormReset()">Enviar correo electrónico</button>
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
                        <h4>Sign Up Now</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body">
                    <div id="errorCont" align="center"></div>
                        <div class="text-center"><button class="btn btn-primary text-start" style="width: 100%;" type="button"><i class="fa fa-facebook"></i>&nbsp; Continue with Facebook</button></div>
                        <div class="text-center mt-2"><button class="btn btn-light text-start border-dark" style="width: 100%;" type="button"><i class="fa fa-google"></i>&nbsp; Continue with Google</button></div>
                        <form class="mt-4" id="signin">
                            <div class="form-group mb-3">
                                <div class="input-group"><span class="text-primary input-group-text"><i class="fa fa-user-o"></i></span><input class="form-control" type="text" required="" id="full-name" name="full-name"  placeholder="Name" pattern="[a-zA-Z ]{1,40}" maxlength="40" oninput="checkFormValidity()"></div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group"><span class="text-primary input-group-text"><i class="fa fa-envelope-o"></i></span><input class="form-control" type="email" required="" id="email"  name="email" placeholder="Email" oninput="checkFormValidity()"></div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group"><span class="text-primary input-group-text"><i class="fa fa-phone"></i></span><input class="form-control" type="phone" required="" id="phone" name="phone" placeholder="Phone" oninput="checkFormValidity()"></div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="input-group">
                                    <span class="text-primary input-group-text"><i class="fa fa-lock"></i></span>
                                    <input class="form-control" type="password" required="" id="password" name="password" value="" placeholder="Password" oninput="checkFormValidity()">
                                </div>
                            </div>


                            <div class="form-group mb-3">
                                <div class="input-group"><span class="text-primary input-group-text"><i class="fa fa-lock"></i></span><input class="form-control" type="password" required="" id="password2" name="password2" value="" placeholder="Repeat your password" oninput="checkFormValidity()"></div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" required="" oninput="checkFormValidity()"><label class="form-check-label" for="formCheck-1" id="formCheck-1" value="" >I agree all the terms and conditions.</label></div>
                            </div>
                            <div class="form-group mb-3"><button class="btn btn-primary btn-lg" style="width: 100%;" type="button" id="submitButton"  onclick="submitForm()" disabled>Sign Up</button></div>
                        </form>
                        <hr style="background-color: #bababa;">
                        <p class="text-center">Already have an Account?&nbsp;<a class="text-decoration-none" href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signup">Log In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

