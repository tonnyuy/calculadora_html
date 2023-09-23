<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

$miarchivo = fopen("archivo1.txt","r+"); // r+ se usa para Apertura de lectura y escritura. puntero al principio del archivo
if ($miarchivo == false) {
    echo "error al abrir el fichero";
}
else{
    $contenido = fread($miarchivo , filesize("archivo1.txt"));
}
    rewind ($miarchivo);        // rewind es revovinar 
    while (feof($miarchivo) == false){       // creo un bucle
    echo fgets($miarchivo) . "<br>";         // fgets muestra la primera linea y FGETC muetra el primer caracter
    }
 // $todo = file_get_contents("archivo1.txt");      ESTA OPCION DIRECTAMENTE TE MUESTRA TODO EL CONTENIDO DEL FICHERO
 // echo $todo;

// OTRA FORMA SERIA poner las lineas del archivo de texo en cada pocision de una Array que seria asi:
// $array A =file ("archivo1.txt"); var_dump("arrray A");


$miarchivo = fopen("archivo2.txt","w"); //al usar la W si el fichero ya tenia lectura, el comando W sobreescribe todo lo que tenia y lo deja en 0


$miarchivo = fopen("archivo4.txt","w"); // usando la W si el fichero no existia crea uno nuevo


?>
</body>
</html>