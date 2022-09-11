<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        if (array_key_exists('enviar', $_POST)){
            if($_REQUEST['Apellido'] != ""){
                echo "El apellido Ingresado es: $_REQUEST[Apellido]";
            }
            else{
                echo "Porfavor coloque el apellido";
            }
            echo "<br/>";

            if($_REQUEST['Nombre'] !=""){
                echo "El nombre Ingresado es: $_REQUEST[Nombre]";
            }
            else{

                echo "Porfavor coloque el nombre";
            }

        }
        else{
            ?>
            <form ACTION = "lab33.php" METHOD = "POST">
                Nombre: <input type="text" name="Nombre" value="">
                Apellido: <input type="text" name="Apellido" value="">
                <input TYPE="submit" NAME = "enviar" value ="Enviar datos">
            </form>
        }
    <?php
    }
    ?>
</body>
</html>