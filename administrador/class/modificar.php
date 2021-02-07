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

$tituloNEW = isset($_REQUEST['tituloNEW'])?$_REQUEST['tituloNEW']:'';
$categoriaNEW = isset($_REQUEST['categoriaNEW'])?$_REQUEST['categoriaNEW']:'';
$foto1NEW = isset($_REQUEST['foto1NEW'])?$_REQUEST['foto1NEW']:'';
$foto2NEW = isset($_REQUEST['foto2NEW'])?$_REQUEST['foto2NEW']:'';
$foto3NEW = isset($_REQUEST['foto3NEW'])?$_REQUEST['foto3NEW']:'';
$foto4NEW = isset($_REQUEST['foto4NEW'])?$_REQUEST['foto4NEW']:'';
$foto5NEW = isset($_REQUEST['foto5NEW'])?$_REQUEST['foto5NEW']:'';
$foto6NEW = isset($_REQUEST['foto6NEW'])?$_REQUEST['foto6NEW']:'';
$foto7NEW = isset($_REQUEST['foto7NEW'])?$_REQUEST['foto7NEW']:'';
$foto8NEW = isset($_REQUEST['foto8NEW'])?$_REQUEST['foto8NEW']:'';
$foto9NEW = isset($_REQUEST['foto9NEW'])?$_REQUEST['foto9NEW']:'';
$foto10NEW = isset($_REQUEST['foto10NEW'])?$_REQUEST['foto10NEW']:'';
$tallaXCHNEW = isset($_REQUEST['tallaXCHNEW'])?$_REQUEST['tallaXCHNEW']:'';
$tallaCHNEW = isset($_REQUEST['tallaCHNEW'])?$_REQUEST['tallaCHNEW']:'';
$tallaMNEW = isset($_REQUEST['tallaMNEW'])?$_REQUEST['tallaMNEW']:'';
$tallaGNEW = isset($_REQUEST['tallaGNEW'])?$_REQUEST['tallaGNEW']:'';
$tallaXGNEW = isset($_REQUEST['tallaXGNEW'])?$_REQUEST['tallaXGNEW']:'';
$coloresNEW = isset($_REQUEST['coloresNEW'])?$_REQUEST['coloresNEW']:'';
$descripcionNEW = isset($_REQUEST['descripcionNEW'])?$_REQUEST['descripcionNEW']:'';
$precioNEW = isset($_REQUEST['precioNEW'])?$_REQUEST['precioNEW']:'';

/*CAMBIO DE FOTOS*/
$foto1cambio = $_FILES['foto1nuevo']['name'];
$foto2cambio = $_FILES['foto2nuevo']['name'];
$foto3cambio = $_FILES['foto3nuevo']['name'];
$foto4cambio = $_FILES['foto4nuevo']['name'];
$foto5cambio = $_FILES['foto5nuevo']['name'];
$foto6cambio = $_FILES['foto6nuevo']['name'];
$foto7cambio = $_FILES['foto7nuevo']['name'];
$foto8cambio = $_FILES['foto8nuevo']['name'];
$foto9cambio = $_FILES['foto9nuevo']['name'];
$foto10cambio= $_FILES['foto10nuevo']['name'];

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

$arregloNEW = array(
  "titulo"=>$tituloNEW,
  "categoria"=>$categoriaNEW,
  "foto1"=>$foto1NEW,
  "foto2"=>$foto2NEW,
  "foto3"=>$foto3NEW,
  "foto4"=>$foto4NEW,
  "foto5"=>$foto5NEW,
  "foto6"=>$foto6NEW,
  "foto7"=>$foto7NEW,
  "foto8"=>$foto8NEW,
  "foto9"=>$foto9NEW,
  "foto10"=>$foto10NEW,
  "tallaXCH"=>$tallaXCHNEW,
  "tallaCH"=>$tallaCHNEW,
  "tallaM"=>$tallaMNEW,
  "tallaG"=>$tallaGNEW,
  "tallaXG"=>$tallaXGNEW,
  "colores"=>$coloresNEW,
  "descripcion"=>$descripcionNEW,
  "precio"=>$precioNEW
);

echo "<pre>"; print_r($arreglo); echo "</pre>";

echo "<pre>"; print_r($arregloNEW); echo "</pre>";

echo $foto1cambio.'<br>'.$foto2cambio.'<br>'.$foto3cambio.'<br>'.$foto4cambio.'<br>'.
      $foto5cambio.'<br>'.$foto6cambio.'<br>'.$foto7cambio.'<br>'.$foto8cambio.'<br>'.
      $foto9cambio.'<br>'.$foto10cambio.'<br>';


	$modificar = json_encode($arreglo);
	$archivo = file("uniformes.txt");
 	$conservar = array();
  $arreglonuevo = json_encode($arregloNEW);
  $arreglonuevo .= "\r\n";

 	foreach($archivo as $line) {
		//ignorando caracteres especiales al inicio o final de cadena
		if(trim($line) == $modificar) {
    		$conservar[] = json_encode($arregloNEW)."\n\r";
		}else {
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

/*
if (file_exists($foto1)&&!is_dir($foto1)) {
     unlink($foto1) or die("No se modifico, el elemento");
}
if (file_exists($foto2)&&!is_dir($foto2)) {
     unlink($foto2) or die("No se modifico, el elemento");
}
if (file_exists($foto3)&&!is_dir($foto3)) {
     unlink($foto3) or die("No se modifico, el elemento");
}
if (file_exists($foto4)&&!is_dir($foto4)) {
     unlink($foto4) or die("No se modifico, el elemento");
}
if (file_exists($foto5)&&!is_dir($foto5)) {
     unlink($foto5) or die("No se modifico, el elemento");
}
if (file_exists($foto6)&&!is_dir($foto6)) {
     unlink($foto6) or die("No se modifico, el elemento");
}
if (file_exists($foto7)&&!is_dir($foto7)) {
     unlink($foto7) or die("No se modifico, el elemento");
}
if (file_exists($foto8)&&!is_dir($foto8)) {
     unlink($foto8) or die("No se modifico, el elemento");
}
if (file_exists($foto9)&&!is_dir($foto9)) {
     unlink($foto9) or die("No se modifico, el elemento");
}
if (file_exists($foto10)&&!is_dir($foto10)) {
     unlink($foto10) or die("No se modifico, el elemento");
}*/
  echo '
      <script>
              alert("Modificacion con exito");
              //document.getElementById("clickmodifica").click();
      </script>
  ';

?>
