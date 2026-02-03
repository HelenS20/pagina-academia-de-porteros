<?php
    include("conexionlogin.php");


    if(isset($_POST['send'])) {

        if(
            strlen($_POST['usuario']) >= 1 &&
            strlen($_POST['contraseña']) >= 1 
        ) {
            $name = trim( $_POST['usuario']);
            $password = trim( $_POST['contraseña']);
            $consulta = "INSERT INTO datos (usuario, contraseña)
                         VALUES ('$name', '$password')";
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