<?php

$titulo = isset($_REQUEST['titulo'])?$_REQUEST['titulo']:'';
$categoria = isset($_REQUEST['categoria'])?$_REQUEST['categoria']:'';
$foto1 = isset($_REQUEST['foto1'])?$_REQUEST['foto1']:'';
$foto2 = isset($_REQUEST['foto2'])?$_REQUEST['foto2']:'';
$foto3 = isset($_REQUEST['foto3'])?$_REQUEST['foto3']:'';
$foto4 = isset($_REQUEST['foto4'])?$_REQUEST['foto4']:'';
$foto5 = isset($_REQUEST['foto5'])?$_REQUEST['foto5']:'';
$foto6 = isset($_REQUEST['foto6'])?$_REQUEST['foto6']:'';
$foto7 = isset($_REQUEST['foto7'])?$_REQUEST['foto7']:'';
$foto8 = isset($_REQUEST['foto8'])?$_REQUEST['foto8']:'';
$foto9 = isset($_REQUEST['foto9'])?$_REQUEST['foto9']:'';
$foto10 = isset($_REQUEST['foto10'])?$_REQUEST['foto10']:'';
$tallaXCH = isset($_REQUEST['tallaXCH'])?$_REQUEST['tallaXCH']:'';
$tallaCH = isset($_REQUEST['tallaCH'])?$_REQUEST['tallaCH']:'';
$tallaM = isset($_REQUEST['tallaM'])?$_REQUEST['tallaM']:'';
$tallaG = isset($_REQUEST['tallaG'])?$_REQUEST['tallaG']:'';
$tallaXG = isset($_REQUEST['tallaXG'])?$_REQUEST['tallaXG']:'';
$colores = isset($_REQUEST['colores'])?$_REQUEST['colores']:'';
$descripcion = isset($_REQUEST['descripcion'])?$_REQUEST['descripcion']:'';
$precio = isset($_REQUEST['precio'])?$_REQUEST['precio']:'';

$eliminados="";

$arreglo = array(
  "titulo"=>$titulo,
  "categoria"=>$categoria,
  "foto1"=>$foto1,
  "foto2"=>$foto2,
  "foto3"=>$foto3,
  "foto4"=>$foto4,
  "foto5"=>$foto5,
  "foto6"=>$foto6,
  "foto7"=>$foto7,
  "foto8"=>$foto8,
  "foto9"=>$foto9,
  "foto10"=>$foto10,
  "tallaXCH"=>$tallaXCH,
  "tallaCH"=>$tallaCH,
  "tallaM"=>$tallaM,
  "tallaG"=>$tallaG,
  "tallaXG"=>$tallaXG,
  "colores"=>$colores,
  "descripcion"=>$descripcion,
  "precio"=>$precio
);

	$borrar = json_encode($arreglo);
	$archivo = file("uniformes.txt");
 	$conservar = array();
 	foreach($archivo as $line) {
		//ignorando caracteres especiales al inicio o final de cadena
		if(trim($line) != $borrar) {
    		$conservar[] = $line;
		}
 	}
	//print_r ($conservar);
	$miarchivo = fopen("uniformes.txt", "w+");
 	flock($miarchivo, LOCK_EX);
 	foreach($conservar as $line) {
		fwrite($miarchivo, $line);
 	}
 	flock($miarchivo, LOCK_UN);
 	fclose($miarchivo);

$foto1 = '../img/'.$arreglo["foto1"];
$foto2 = '../img/'.$arreglo["foto2"];
$foto3 = '../img/'.$arreglo["foto3"];
$foto4 = '../img/'.$arreglo["foto4"];
$foto5 = '../img/'.$arreglo["foto5"];
$foto6 = '../img/'.$arreglo["foto6"];
$foto7 = '../img/'.$arreglo["foto7"];
$foto8 = '../img/'.$arreglo["foto8"];
$foto9 = '../img/'.$arreglo["foto9"];
$foto10 = '../img/'.$arreglo["foto10"];

if (file_exists($foto1)&&!is_dir($foto1)) {
     unlink($foto1) or die("No se elimino, el elemento");
}
if (file_exists($foto2)&&!is_dir($foto2)) {
     unlink($foto2) or die("No se elimino, el elemento");
}
if (file_exists($foto3)&&!is_dir($foto3)) {
     unlink($foto3) or die("No se elimino, el elemento");
}
if (file_exists($foto4)&&!is_dir($foto4)) {
     unlink($foto4) or die("No se elimino, el elemento");
}
if (file_exists($foto5)&&!is_dir($foto5)) {
     unlink($foto5) or die("No se elimino, el elemento");
}
if (file_exists($foto6)&&!is_dir($foto6)) {
     unlink($foto6) or die("No se elimino, el elemento");
}
if (file_exists($foto7)&&!is_dir($foto7)) {
     unlink($foto7) or die("No se elimino, el elemento");
}
if (file_exists($foto8)&&!is_dir($foto8)) {
     unlink($foto8) or die("No se elimino, el elemento");
}
if (file_exists($foto9)&&!is_dir($foto9)) {
     unlink($foto9) or die("No se elimino, el elemento");
}
if (file_exists($foto10)&&!is_dir($foto10)) {
     unlink($foto10) or die("No se elimino, el elemento");
}
  echo '
      <script>
              alert("Se elimino el producto exitosamente");
              document.getElementById("clickelimina").click();
      </script>
  ';

 ?>
