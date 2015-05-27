<?php
print_r($_FILES);
//$nomImagen = "prueba.jpg";
$ruta ="imagenes/".$_FILES["file"]["name"];

move_uploaded_file($_FILES["file"]["tmp_name"], $ruta);

echo "Nombre Tem: ".$_FILES["file"]["tmp_name"]."<br>";
echo "Nombre: ".$_FILES["file"]["name"]."<br>";
echo "Tipo: ".$_FILES['file']['type']."<br>";
echo "Cambio de nombre: ".$ruta."<br>";
echo "Errores : ".$_FILES['file']['error']."<br>";
echo "Imagen ya esta en el servidor";
?>