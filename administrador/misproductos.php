<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="productos.css">

    <title>PRODUCTOS</title>

    <style media="screen">
      #corpusinterno{
        text-align: center;
      }
      .imaguniformes{
        height: 60px;
        width: 50px;
      }
      .tablauniformes{
        height: 170px;
      }
      .form-control {
        background:white!important;
      }
      /*MODAL WINDOW*/
      * {box-sizing: border-box;}
      .imagen-zoom-container {
        position: relative;
        margin:30px 0px;
      }
      .imagen-zoom-lens {
        position: absolute;
        z-index: 2;
        background-color: rgba(212,212,212,0.5);
        width: 60px;
        height: 60px;
      }
      .imagen-zoom-result {
        border: 1px solid #d4d4d4;
        width: 300px;
        height: 240px;
      }

    </style>
  </head>
<div id="mifiltro">

  <body style="background-color: white">
    <h1 style="text-align: center">Bienvenido administrador</h1>

    <div style="display:flex; justify-content:space-around; background-color: #919191">
      <div>
        <button type="button" onclick="mostrar()" name="button">Mostrar productos</button>
      </div>
      <div>
        <button id="clickmodifica" type="button" onclick="modificar()" name="button">Modificar productos</button>
      </div>
      <div>
        <button type="button" onclick="agregar()" name="button">Agregar productos</button>
      </div>
      <div>
        <button id="clickelimina" type="button" onclick="eliminar()" name="button">Eliminar productos</button>
      </div>
      <div>
        <button type="button" onclick="respaldo()" name="button">Respaldo de información</button>
      </div>
      <div>
        <button type="button" onclick="mipagina()" name="button">Visitar pagina</button>
      </div>
      <div>
        <button type="button" onclick="cierrasesion()" name="button">Cerrar sesión</button>
      </div>
    </div>

    <div id="corpus">
    </div>
  </div>

    </div>
    <div id="corpusinterno">
    </div>



    <script type="text/javascript">

      function mostrar(){
        $("#corpus").html('<h2 style="text-align:center">Tus productos</h2>');
        var web= "class/productos.php?id=1";
        $.ajax({url: web, success: function(result){
              	    $("#corpusinterno").html(result);
              	    //console.log(result);
              }});
      }
      function modificar(){
        $("#corpus").html('<h2 style="text-align:center">Modificar productos</h2>');
        var web= "class/productos.php?id=2";
        $.ajax({url: web, success: function(result){
              	    $("#corpusinterno").html(result);
              	    //console.log(result);
              }});
      }
      function agregar(){
        $("#corpus").html('<h2 style="text-align:center">Agregar productos</h2>');
        var web= "class/productos.php?id=3";
        $.ajax({url: web, success: function(result){
              	    $("#corpusinterno").html(result);
              	    //console.log(result);
              }});
      }
      function eliminar(){
        $("#corpus").html('<h2 style="text-align:center">Eliminar productos</h2>');
        var web= "class/productos.php?id=4";
        $.ajax({url: web, success: function(result){
              	    $("#corpusinterno").html(result);
              	    //console.log(result);
              }});
      }

      function respaldo(){
        alert("Tu información esta respaldada");
      }

      function mipagina(){
        window.location.href = '/';
      }

      function cierrasesion(){
        window.location.href = 'index.php';
      }

    </script>

  </body>
</html>
