<?php
require '../seguridad/conn_mysql.php';
$op=$_POST['dat_op'];
switch ($op) {
case '1': {//AGREGAR PERSONAL
	if (
	!empty($_POST['dat_rfc'])&&
	!empty($_POST['dat_nom'])&& 
	!empty($_POST['dat_ema'])&& 
	!empty($_POST['dat_tel'])&& 
	!empty($_POST['dat_edad'])&& 
	!empty($_POST['dat_sex'])&& 
	!empty($_POST['dat_dir'])&& 
	!empty($_POST['dat_ciu'])&& 
	!empty($_POST['dat_est'])&& 
	!empty($_POST['dat_cred'])&& 
	!empty($_POST['dat_suc'])&& 
	!empty($_POST['dat_pue'])
	) 
	{
		if (isset($_POST['dat_rfc'])) 
		{
			$rfcp=$_POST['dat_rfc'];
			$consulta = "select * from personal where rfcp='$rfcp'";
			$result = $conn->query($consulta);
			$NFilas = $result->num_rows;
			if($NFilas>0)
			{
				?>
				<div class="alert alert-warning" alert>
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Warning!</strong> El registro ya existe.
				</div>
				<?php
			}else{
	
				$dat_rfc=$_POST['dat_rfc'];
				$dat_nom=$_POST['dat_nom'];
				$dat_ema=$_POST['dat_ema'];
				$dat_tel=$_POST['dat_tel'];
				$dat_edad=$_POST['dat_edad'];
				$dat_sex=$_POST['dat_sex'];
				$dat_dir=$_POST['dat_dir'];
				$dat_ciu=$_POST['dat_ciu'];
				$dat_est=$_POST['dat_est'];
				$dat_cred=$_POST['dat_cred'];
				$dat_pue=$_POST['dat_pue'];	
				$dat_suc=$_POST['dat_suc'];	
				$sql_insert=$conn->query("INSERT INTO personal 
				( rfcp,nombrep,edadp,sexop,emailp,telp,direccionp,ciudadp,estadop,credencialp,fk_puesto,idsuc) 
				VALUES ('".$dat_rfc."','".$dat_nom."',".$dat_edad.",'".$dat_sex."','".$dat_ema."','".$dat_tel."','".$dat_dir
				."','".$dat_ciu."','".$dat_est."','".$dat_cred."',".$dat_pue.",".$dat_suc.")");
				if ($sql_insert) 
				{
					?>
					<div class="alert alert-success">
						 <strong>Success!</strong> Se ha guardado la información.
					</div>
					<?php
				}
				else
				{
					?>
					<div class="alert alert-danger">
						 <strong>Danger!</strong>No se ha guardado la información. <?php echo $conn->error; ?>
					</div>
					<?php
				}
			}
		}
	}else{
		?>
		<div class="alert alert-info" role="alert">
		  <strong>Warning!</strong> Inserte todos los datos.
		</div>
		<?php
	}
}break;
case '2': {//MODIFICAR PERSONAL
	if (
	isset($_POST['dat_id']) || 
	isset($_POST['dat_nombre']) || 
	isset($_POST['dat_email']) || 
	isset($_POST['dat_phone']) || 
	isset($_POST['dat_addres'])
    )
	{
		$mid=$_POST['dat_id'];
		$name=$_POST['dat_nombre'];
		$email=$_POST['dat_email'];
		$phone=$_POST['dat_phone'];
		$addres=$_POST['dat_addres'];
		
		    // Prepara la consulta SQL con marcadores de posición (?)
			$sql = "UPDATE clientes SET nombre=?, email=?, phone=?, addres=? WHERE id=?";

			// Prepara la declaración SQL
			$stmt = $conn->prepare($sql);
		
			if ($stmt) {
				// Vincula los valores a los marcadores de posición y ejecuta la consulta
				$stmt->bind_param("ssssi", $name, $email, $phone, $addres, $mid);
				if ($stmt->execute()) {
					echo json_encode(array('success' => true, 'message' => 'Usuario actualizado correctamente.'));
				} else {
					echo json_encode(array('success' => false, 'message' => 'Error al actualizar el usuario: ' . $stmt->error));
				}
		
				// Cierra la declaración
				$stmt->close();
			} else {
				echo json_encode(array('success' => false, 'message' => 'Error en la preparación de la consulta: ' . $conn->error));
			}
		
			// Cierra la conexión
			$conn->close();
	}
}break;
case '3': {
	//ELIMINAR tbls_PERSONAL
	if (isset($_POST['del_personal']))
	{
		$id_personal=$_POST['del_personal'];
		$sql="DELETE FROM clientes WHERE id=$id_personal";
		if ($conn->query($sql) === TRUE) {
			//echo "Usuario agregado correctamente.";
			echo json_encode(array('success' => true, 'message' => 'Usuario eliminado correctamente.'));
		} else {
			//echo "Error al agregar usuario: " . $conn->error;
			echo json_encode(array('success' => false, 'message' => 'Error al eliminar usuario: ' . $conn->error));
		}
		
		$conn->close();
	}
}break;



}
?>