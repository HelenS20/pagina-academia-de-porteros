<?php
    include("../inscripcion_academia/conexion-ins.php");


    if(isset($_POST['send'])) {

        if(
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['apellido']) >= 1 &&
            strlen($_POST['edad']) >= 1 &&
            strlen($_POST['telefono']) >= 1 &&
            strlen($_POST['email']) >= 1
        ) {
            $name = trim( $_POST['nombre']);
            $lastname = trim( $_POST['apellido']);
            $age =  trim( $_POST['edad']);           
            $phone = trim( $_POST['telefono']);
            $email = trim( $_POST['email']);
            
            $consulta = "INSERT INTO nuevosporteros (nombre, apellido, edad, telefono, email)
                         VALUES ('$name', '$lastname', '$age', '$phone', '$email')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado) {
                ?>
                    <h3 class="success">Tu registro se a completado</h3>
                <?php
            }else{
                ?>
                    <h3 class="error">Ocurrio un error</h3>
                <?php
            }
    
        }else {
            ?>
                <h3 class="error">LLena todos los campos</h3>
            <?php
        }
    
    }
?>