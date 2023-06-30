<?php
    require 'conn_mysql.php';
    require 'functions.php';
    if (isset($_POST['email']) || isset($_POST['password']))
    {
        $email=$_POST['email'];
        $pass=$_POST['password'];
        if ($email=="" || $pass=="")
        {
            ?>
            <label style='color:red'>
                <b>Campo Vacio</b>
            </label>
            <?php
        }
        else
        {
		    $sql_user="SELECT *FROM personal WHERE emailp = '".$email."' AND passwordp = '".$pass."'";
            if (!($resultado=$conn->query($sql_user)))
            {
                mostrarError($conn,$sql_user);
            }
            $feclave=$resultado->fetch_assoc();
            
			$idp=$feclave['idpersonal'];
            if ($feclave['emailp'] && $feclave['passwordp'])
            {
             
                    session_start();
                    
                    $_SESSION["usuarioactual"] = $feclave['emailp'];
					
					$_SESSION['nombre'] = $feclave['nombrep'];
					$_SESSION['idp'] = $idp;
                    echo "<script>window.location.href='mi/';</script>";
                


	
            }
            else
            {
                ?>
                <label style='color:red'>
                    <b>Datos Incorrectos.</b>
                </label>
                <?php
            }
        }
    }
?>