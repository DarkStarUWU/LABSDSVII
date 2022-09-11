<?php
    $precio1 = $_POST ['prec1'];
    $precio2 = $_POST ['prec2'];
    $precio3 = $_POST ['prec2'];

    $media = ($precio1+$precio2+$precio3)/3;
    echo "<br/> DATOS RECIBIDOS";
    echo "<br/> Precio productos establecimiento 1: ". $precio1 . "dolares";
    echo "<br/> Precio productos establecimiento 2: ". $precio2 . "dolares";
    echo "<br/> Precio productos establecimiento 3: ". $precio3 . "dolares <br/>";
    echo "<br/> Precio medio del producto es de: ". $media . "dolares";
    
    
?>