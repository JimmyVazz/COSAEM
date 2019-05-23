<?php
$connect=mysqli_connect("localhost","root","","cusaem");
error_reporting(E_ALL ^ E_NOTICE);
if ($connect) {
		echo "conexion exitosa. <br />";
		$nombre= $_POST ['nombre'];
		$correo= $_POST ['correo'];
        $servicio= $_POST ['servicio'];
        $mensaje= $_POST ['mensaje'];
        $folio=12345;


		$consulta="insert into buzon_de_entrada values ('$nombre','$correo','$mensaje','$servicio', '$folio')";
		
		$resultado=mysqli_query($connect,$consulta);
		
		if ($resultado) {
			echo "Mensaje enviado. <br />";
		}
		else {
            echo "error en la ejecución de la consulta. <br />";
            
            echo($resultado);
		}
		
}


?>