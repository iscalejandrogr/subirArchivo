<?php
//print_r($_FILES);
$ruta ="imagenes/".$_FILES["file"]["name"];//se debe crear ela carpeta "imagenes" dentro del hosting remoto dentro de htdocs

if(move_uploaded_file($_FILES["file"]["tmp_name"], $ruta)){
    /*echo "Nombre Tem: ".$_FILES["file"]["tmp_name"]."<br>";
    echo "Nombre: ".$_FILES["file"]["name"]."<br>";
    echo "Tipo: ".$_FILES['file']['type']."<br>";*/
    echo $ruta." fue guardado correctamente";
}else{
    echo "Errores al subir la imagen: ".$_FILES['file']['error']."<br>";
}
?>