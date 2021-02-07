<?php

error_reporting(0);

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


$arreglo = array(
  "titulo"=>$titulo,
  "categoria"=>$categoria,
  "foto1"=>$_FILES['foto1']['name'],
  "foto2"=>$_FILES['foto2']['name'],
  "foto3"=>$_FILES['foto3']['name'],
  "foto4"=>$_FILES['foto4']['name'],
  "foto5"=>$_FILES['foto5']['name'],
  "foto6"=>$_FILES['foto6']['name'],
  "foto7"=>$_FILES['foto7']['name'],
  "foto8"=>$_FILES['foto8']['name'],
  "foto9"=>$_FILES['foto9']['name'],
  "foto10"=>$_FILES['foto10']['name'],
  "tallaXCH"=>$tallaXCH,
  "tallaCH"=>$tallaCH,
  "tallaM"=>$tallaM,
  "tallaG"=>$tallaG,
  "tallaXG"=>$tallaXG,
  "colores"=>$colores,
  "descripcion"=>$descripcion,
  "precio"=>$precio
);

echo '<pre>'; print_r($arreglo); echo '</pre>';

if (($_FILES['foto1']['name']!="")||($_FILES['foto2']['name']!="")||
    ($_FILES['foto3']['name']!="")||($_FILES['foto4']['name']!="")||
    ($_FILES['foto5']['name']!="")||($_FILES['foto6']['name']!="")||
    ($_FILES['foto7']['name']!="")||($_FILES['foto8']['name']!="")||
    ($_FILES['foto9']['name']!="")||($_FILES['foto10']['name']!="")){
// Where the file is going to be stored
	$target_dir = "../img/";
	$file1 = $_FILES['foto1']['name'];
  $file2 = $_FILES['foto2']['name'];
  $file3 = $_FILES['foto3']['name'];
  $file4 = $_FILES['foto4']['name'];
  $file5 = $_FILES['foto5']['name'];
  $file6 = $_FILES['foto6']['name'];
  $file7 = $_FILES['foto7']['name'];
  $file8 = $_FILES['foto8']['name'];
  $file9 = $_FILES['foto9']['name'];
  $file10 = $_FILES['foto10']['name'];

	$path1 = pathinfo($file1);
  $path2 = pathinfo($file2);
  $path3 = pathinfo($file3);
  $path4 = pathinfo($file4);
  $path5 = pathinfo($file5);
  $path6 = pathinfo($file6);
  $path7 = pathinfo($file7);
  $path8 = pathinfo($file8);
  $path9 = pathinfo($file9);
  $path10 = pathinfo($file10);

	$filename1 = $path1['filename'];
  $filename2 = $path2['filename'];
  $filename3 = $path3['filename'];
  $filename4 = $path4['filename'];
  $filename5 = $path5['filename'];
  $filename6 = $path6['filename'];
  $filename7 = $path7['filename'];
  $filename8 = $path8['filename'];
  $filename9 = $path9['filename'];
  $filename10 = $path10['filename'];

	$ext1 = $path1['extension'];
  $ext2 = $path2['extension'];
  $ext3 = $path3['extension'];
  $ext4 = $path4['extension'];
  $ext5 = $path5['extension'];
  $ext6 = $path6['extension'];
  $ext7 = $path7['extension'];
  $ext8 = $path8['extension'];
  $ext9 = $path9['extension'];
  $ext10 = $path10['extension'];

	$temp_name1 = $_FILES['foto1']['tmp_name'];
  $temp_name2 = $_FILES['foto2']['tmp_name'];
  $temp_name3 = $_FILES['foto3']['tmp_name'];
  $temp_name4 = $_FILES['foto4']['tmp_name'];
  $temp_name5 = $_FILES['foto5']['tmp_name'];
  $temp_name6 = $_FILES['foto6']['tmp_name'];
  $temp_name7 = $_FILES['foto7']['tmp_name'];
  $temp_name8 = $_FILES['foto8']['tmp_name'];
  $temp_name9 = $_FILES['foto9']['tmp_name'];
  $temp_name10 = $_FILES['foto10']['tmp_name'];

	$path_filename_ext1 = $target_dir.$filename1.".".$ext1;
  $path_filename_ext2 = $target_dir.$filename2.".".$ext2;
  $path_filename_ext3 = $target_dir.$filename3.".".$ext3;
  $path_filename_ext4 = $target_dir.$filename4.".".$ext4;
  $path_filename_ext5 = $target_dir.$filename5.".".$ext5;
  $path_filename_ext6 = $target_dir.$filename6.".".$ext6;
  $path_filename_ext7 = $target_dir.$filename7.".".$ext7;
  $path_filename_ext8 = $target_dir.$filename8.".".$ext8;
  $path_filename_ext9 = $target_dir.$filename9.".".$ext9;
  $path_filename_ext10 = $target_dir.$filename10.".".$ext10;


  // Check if file already exists
if ((file_exists($path_filename_ext1)&&!is_dir($path_filename_ext1)) || (file_exists($path_filename_ext2)&&!is_dir($path_filename_ext2)) ||
    (file_exists($path_filename_ext3)&&!is_dir($path_filename_ext3)) || (file_exists($path_filename_ext4)&&!is_dir($path_filename_ext4)) ||
    (file_exists($path_filename_ext5)&&!is_dir($path_filename_ext5)) || (file_exists($path_filename_ext6)&&!is_dir($path_filename_ext6)) ||
    (file_exists($path_filename_ext7)&&!is_dir($path_filename_ext7)) || (file_exists($path_filename_ext8)&&!is_dir($path_filename_ext8)) ||
    (file_exists($path_filename_ext9)&&!is_dir($path_filename_ext9)) || (file_exists($path_filename_ext10)&&!is_dir($path_filename_ext10)) ) {
      echo "Lo sentimos, algunos archivos ya existen. Esto podría crear un problema";

 }else{
      move_uploaded_file($temp_name1,$path_filename_ext1);
      move_uploaded_file($temp_name2,$path_filename_ext2);
      move_uploaded_file($temp_name3,$path_filename_ext3);
      move_uploaded_file($temp_name4,$path_filename_ext4);
      move_uploaded_file($temp_name5,$path_filename_ext5);
      move_uploaded_file($temp_name6,$path_filename_ext6);
      move_uploaded_file($temp_name7,$path_filename_ext7);
      move_uploaded_file($temp_name8,$path_filename_ext8);
      move_uploaded_file($temp_name9,$path_filename_ext9);
      move_uploaded_file($temp_name10,$path_filename_ext10);
      echo "Imagenes cargadas exitosamente";

      $mi_archivo = 'uniformes.txt';
      $manejador = fopen($mi_archivo, 'a') or die('No se pudo abrir el archivo '.$mi_archivo);
      fwrite($manejador, json_encode($arreglo)."\r\n");
      fclose($manejador);
 }
}


 ?>
