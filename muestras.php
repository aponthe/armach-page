<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,600|Roboto+Condensed:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/armach.css">
    <link rel="stylesheet" href="css/productos.css">

    <style>

    </style>

    <title>Productos</title>
  </head>
  <body>
  <div id="mifiltro">
    <div class="fix">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">
          <img src="img/LOGO ARMACH.png" alt="" style="width: 60%">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Quienessomos.html">Quiénes somos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contacto.html">Contacto</a>
                </li>
            </ul>
        </div>
      </nav>
    </div>

    <div class="fix2">
      <a href="tel:7774286543">
        <img src="img/telefono.png" alt="telefono" class="telefono">
      </a>
    </div>

      <header>
        <div class="headerbannerproductos">
          <div style="background: rgba(112,112,112,0.53); height:100%; line-height:332px">
            <h1 style="color: white; padding-left: 40px; display: inline-block; vertical-align: middle; font-family: 'Roboto Condensed', sans-serif;">PRODUCTOS</h1>
          </div>
        </div>
      </header>
    </div>

      <?php
      $categoria = isset($_REQUEST['categoria'])?$_REQUEST['categoria']:'';
      //echo $categoria;
      $i=0;
    	$filtro=2;
    	echo '<div id="mifiltro2">
    					<h4 class="container py-3" style="text-align: center; font-family: Raleway, silf; font-width:600">Bienvenido al Catálogo seleccione un producto para ver detalles</h4>
    				</div>';
    	error_reporting();
    	$miarchivo=fopen("administrador/class/uniformes.txt", "r");
      //echo $miarchivo;
    	if($miarchivo){
    		echo '<div class="row" id="mifiltro3" style="margin: 0;text-align:center">';
    		while( $cadena_json=json_decode(fgets($miarchivo)) ){
          if ($cadena_json->categoria==$categoria) {

    			//print_r ($cadena_json);
    			//echo '<pre style="color: blue">'; print_r($cadena_json); echo '</pre>';
    			$tallas='';
          	if (exif_imagetype("administrador/img/".$cadena_json->foto1)!=FALSE){
            	echo '<div class="col-sm-3 col-md-3 col-lg-3 col-3">';
              echo '<a onclick="miboton'.$i.'()" style="cursor:pointer;">';
              echo '<img class="tablauniformes" src="administrador/img/'.rawurlencode($cadena_json->foto1).'"><br>';
              echo '</a>';
              echo '</div>';

    					if ($cadena_json->tallaXCH=='on') {
    						$tallas .= 'XCH';
    					}
    					if ($cadena_json->tallaCH=='on') {
    						$tallas .= ' CH';
    					}
    					if ($cadena_json->tallaM=='on') {
    						$tallas .= ' M';
    					}
    					if ($cadena_json->tallaG=='on') {
    						$tallas .= ' G';
    					}
    					if ($cadena_json->tallaXG=='on') {
    						$tallas .= ' XG';
    					}

    					echo '<!-- The Modal -->
    		      <div id="myModal'.$i.'" class="modal">
    		        <!-- Modal content -->
    		        <div class="modal-content">
    		          	<div class="modal-header">
    		              <h2>MUESTRA</h2>
    		              <span class="close'.$i.'">&times;</span>
    		            </div>
    		            <div class="row modal-body" style="display: flex">

    									<div class="col-md-6">';

    									echo '<div style="display:flex; text-align:left; justify-content:space-evenly">';/*IMAGENES VENTANA MODAL*/
    									if ($cadena_json->foto1!=""){
    									  echo '<a onclick="mifoto'.$i.'1()" id="primero'.$i.'" style="cursor:pointer;"> <img src="administrador/img/'.$cadena_json->foto1.'" alt="" class="imaguniformes"> </a>';}
    									if ($cadena_json->foto2!=""){
    									  echo '<a onclick="mifoto'.$i.'2()" style="cursor:pointer;"> <img src="administrador/img/'.$cadena_json->foto2.'" alt="" class="imaguniformes"> </a>';}
    									if ($cadena_json->foto3!=""){
    									  echo '<a onclick="mifoto'.$i.'3()" style="cursor:pointer;"> <img src="administrador/img/'.$cadena_json->foto3.'" alt="" class="imaguniformes"> </a>';}
    									if ($cadena_json->foto4!=""){
    									  echo '<a onclick="mifoto'.$i.'4()" style="cursor:pointer;"> <img src="administrador/img/'.$cadena_json->foto4.'" alt="" class="imaguniformes"> </a>';}
    									if ($cadena_json->foto5!=""){
    									  echo '<a onclick="mifoto'.$i.'5()" style="cursor:pointer;"> <img src="administrador/img/'.$cadena_json->foto5.'" alt="" class="imaguniformes"> </a>';}
    									if ($cadena_json->foto6!=""){
    									  echo '<a onclick="mifoto'.$i.'6()" style="cursor:pointer;"> <img src="administrador/img/'.$cadena_json->foto6.'" alt="" class="imaguniformes"> </a>';}
    									if ($cadena_json->foto7!=""){
    									  echo '<a onclick="mifoto'.$i.'7()" style="cursor:pointer;"> <img src="administrador/img/'.$cadena_json->foto7.'" alt="" class="imaguniformes"> </a>';}
    									if ($cadena_json->foto8!=""){
    									  echo '<a onclick="mifoto'.$i.'8()" style="cursor:pointer;"> <img src="administrador/img/'.$cadena_json->foto8.'" alt="" class="imaguniformes"> </a>';}
    									if ($cadena_json->foto9!=""){
    									  echo '<a onclick="mifoto'.$i.'9()" style="cursor:pointer;"> <img src="administrador/img/'.$cadena_json->foto9.'" alt="" class="imaguniformes"> </a>';}
    									if ($cadena_json->foto10!=""){
    									  echo '<a onclick="mifoto'.$i.'10()" style="cursor:pointer;"> <img src="administrador/img/'.$cadena_json->foto10.'" alt="" class="imaguniformes"> </a>';}
    									echo '</div>';

    									/*FOTO CON ZOOM*/
    									echo '<b id="cambiamovil'.$i.'">Mueve el raton sobre el uniforme para ver de cerca</b>
    												<div class="imagen-zoom-container" style="display: flex;justify-content:space-between">
    													<div id="imagen-zoom-lens'.$i.'" class="imagen-zoom-lens"></div>
    													<img id="laimagen'.$i.'" src="administrador/img/'.$cadena_json->foto1.'" width="300" height="240">
    													<div id="elresultado'.$i.'" class="imagen-zoom-result"></div>
    												</div>';

    									if ($cadena_json->foto1!=""){
    									  echo '<script>
                        if (window.innerWidth>600) {
                          document.getElementById("laimagen'.$i.'").style.height = "340px";
                          document.getElementById("laimagen'.$i.'").style.width = "180px";
                        }
                        if (window.innerWidth<600) {
                          document.getElementById("laimagen'.$i.'").style.height = "280px";
                          document.getElementById("laimagen'.$i.'").style.width = "215px";
                          document.getElementById("cambiamovil'.$i.'").textContent ="Desliza el dedo hacia arriba para ver información";
                        }

    									  function mifoto'.$i.'1() {
    											document.getElementById("laimagen'.$i.'").src = "administrador/img/'.$cadena_json->foto1.'";
    											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
    									  }
    									  function mifoto'.$i.'2() {
    									    document.getElementById("laimagen'.$i.'").src = "administrador/img/'.$cadena_json->foto2.'";
    											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
    									  }
    									  function mifoto'.$i.'3() {
    									    document.getElementById("laimagen'.$i.'").src = "administrador/img/'.$cadena_json->foto3.'";
    											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
    									  }
    									  function mifoto'.$i.'4() {
    									    document.getElementById("laimagen'.$i.'").src = "administrador/img/'.$cadena_json->foto4.'";
    											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
    									  }
    									  function mifoto'.$i.'5() {
    									    document.getElementById("laimagen'.$i.'").src = "administrador/img/'.$cadena_json->foto5.'";
    											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
    									  }
    									  function mifoto'.$i.'6() {
    									    document.getElementById("laimagen'.$i.'").src = "administrador/img/'.$cadena_json->foto6.'";
    											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
    									  }
    									  function mifoto'.$i.'7() {
    									    document.getElementById("laimagen'.$i.'").src = "administrador/img/'.$cadena_json->foto7.'";
    											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
    									  }
    									  function mifoto'.$i.'8() {
    									    document.getElementById("laimagen'.$i.'").src = "administrador/img/'.$cadena_json->foto8.'";
    											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
    									  }
    									  function mifoto'.$i.'9() {
    									    document.getElementById("laimagen'.$i.'").src = "administrador/img/'.$cadena_json->foto9.'";
    											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
    									  }
    									  function mifoto'.$i.'10() {
    									    document.getElementById("laimagen'.$i.'").src = "administrador/img/'.$cadena_json->foto10.'";
    											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
    									  }

    				            function zoomimagen'.$i.'(IDimagen, IDresultado) {
    				                imagen = document.getElementById(IDimagen);
    												lente = document.getElementById("imagen-zoom-lens'.$i.'");
    				                resultado = document.getElementById(IDresultado);
    				                /*CALCULANDO MEDIDAS DEL div*/
    				                ejeX = resultado.offsetWidth / lente.offsetWidth;
    				                ejeY = resultado.offsetHeight / lente.offsetHeight;
    				                /*MEDIDAS DEL RESULTADO*/
    				                resultado.style.backgroundImage = "url(\'" + imagen.src + "\')";
    				                resultado.style.backgroundSize = (imagen.width * ejeX) + "px " + (imagen.height * ejeY) + "px";
    				                /*EVENTOS CUANDO PASEMOS EL RATON*/
    				                lente.addEventListener("mousemove", moverlente);
    				                imagen.addEventListener("mousemove", moverlente);
    				                /*EVENTOS TOUCH SCREEN*/
    				                lente.addEventListener("ontouchmove", moverlente);
    				                imagen.addEventListener("ontouchmove", moverlente);

    				                function moverlente(e) {

    				                    var posicion, x, y;
    				                    e.preventDefault();
    				                    posicion = getCursorPos(e);
    				                    x = posicion.x - (lente.offsetWidth / 2);
    				                    y = posicion.y - (lente.offsetHeight/2);
    				                    /*RESPETANDO LIMITES*/
    				                    if (x > imagen.width - lente.offsetWidth) {x = imagen.width - lente.offsetWidth;}
    				                    if (x < 0) {x = 0;}
    				                    if (y > imagen.height - lente.offsetHeight) {y = imagen.height - lente.offsetHeight;}
    				                    if (y < 0) {y = 0;}
    				                    /*CAMBIA POSICION DEL LENTE*/
    				                    lente.style.left = x + "px";
    				                    lente.style.top = y + "px";
    				                    /*MOSTRAMOS EL RESULTADO*/
    				                    resultado.style.backgroundPosition = "-" + (x * ejeX) + "px -" + (y * ejeY) + "px";
    				                }
    				                function getCursorPos(e) {
    				                    var a, x = 0, y = 0;
    				                    e = e || window.event;
    				                    /*POSICION DE X Y Y RELATIVO AL DOM*/
    				                    a = imagen.getBoundingClientRect();
    				                    /*POSICION DE X Y Y RELATIVO A LA IMAGEN*/
    				                    x = e.pageX - a.left;
    				                    y = e.pageY - a.top;
    				                    /*WINDOW POSICION*/
    				                    x = x - window.pageXOffset;
    				                    y = y - window.pageYOffset;
    				                    return {x : x, y : y};
    				                }}
    									  </script>';
    									}

    									echo '</div>
    									<div class="col-md-6" style="text-align: justify">
    										<h4 style="text-align: center">'.$cadena_json->titulo.'</h4>
    										<p id="estilomodal"><b>Tallas: </b>'.$tallas.'</p>
    										<p id="estilomodal"><b>Colores: </b>'.$cadena_json->colores.'</p></b>
    										<p id="estilomodal"><b>Descripcion: </b>'.$cadena_json->descripcion.'</p>
    										<p id="estilomodal"><b>PRECIO: </b>'.$cadena_json->precio.'</p>
    									</div>
    		            </div>
    		            <div class="modal-footer">
    		              <img src="administrador/img/LOGOBLANCO.png" alt="" width="50">
    		            </div>
    		          </div>
    		      </div>

    					<script>
    		        function miboton'.$i.'() {
    							document.getElementById("mifiltro").style.filter = "blur(8px)";
    							document.getElementById("mifiltro2").style.filter = "blur(8px)";
                  document.getElementById("mifiltro4").style.filter = "blur(8px)";
    							var x = document.getElementById("mifiltro3").querySelectorAll(".col-md-3");
    							var i;
      						for (i = 0; i < x.length; i++) {
        						x[i].style.filter = "blur(8px)";
      						}
    		          document.getElementById("myModal'.$i.'").style.display = "block";
    							document.getElementById("primero'.$i.'").click();
    		        }

    		        	document.getElementsByClassName("close'.$i.'")[0].onclick = function() {
    		          document.getElementById("mifiltro").style.filter = "blur(0px)";
    							document.getElementById("mifiltro2").style.filter = "blur(0px)";
                  document.getElementById("mifiltro4").style.filter = "blur(0px)";
    							var x = document.getElementById("mifiltro3").querySelectorAll(".col-md-3");
    							var i;
      						for (i = 0; i < x.length; i++) {
        						x[i].style.filter = "blur(0px)";
      						}
    							document.getElementById("myModal'.$i.'").style.display = "none";
    		        }

    		        //window.onclick = function(event) {
    						window.addEventListener(\'click\', function(event) {
    							//alert(event.target.tagName);
    		          if (event.target == document.getElementById("myModal'.$i.'")) {
    		            document.getElementById("mifiltro").style.filter = "blur(0px)";
    								document.getElementById("mifiltro2").style.filter = "blur(0px)";
                    document.getElementById("mifiltro4").style.filter = "blur(0px)";
    								var x = document.getElementById("mifiltro3").querySelectorAll(".col-md-3");
    								var i;
    	  						for (i = 0; i < x.length; i++) {
    	    						x[i].style.filter = "blur(0px)";
    	  						}
    		            document.getElementById("myModal'.$i.'").style.display = "none";
    		          }
    		        });
    		    </script>
    					';
    					$i++;
            }

          }
    			}//FIN WHILE

    			echo '</div>';//filtro3

    		fclose($miarchivo);
    	}else{
    		//echo '<h1 style="color:red">Parece que no hay productos, para dudas o aclaraciones consulte al soporte tecnico</h1>';
    	}

       ?>

      <!--h3 class="container py-3" style="text-align: center; font-family: Raleway, silf; font-width:600">Bienvenido al Catálogo seleccione un producto para ver detalles</h3>

      <div class="py-5 container" id="uniformes">
          <?php/*
            error_reporting(0);
            $dir = "administrador/img/";
            $a = scandir($dir);
            echo '<div class="row">';
            foreach($a as $objeto=>$contenido){
                if (exif_imagetype("img/uniformes/".$contenido)!=FALSE){
                    echo '<div class="col-md-3 col-lg-3 col-3">';
                    echo '<a onclick="miboton()" style="cursor:pointer;">';
                    echo '<img class="tablauniformes" src=img/uniformes/'.rawurlencode($contenido).'><br>';
                    echo '</a>';
                    echo '</div>';
                }
            }
            echo '</div>';*/
          ?>
      </div-->


        <footer class="mifooter" id="mifiltro4">
          <div class="py-3" style="background: rgba(0,0,0,0.0);">

            <div class="row" id="verticalfooter">
                <div class="col-md-3 col-lg-3 col-3" id="radiuslogo">
                  <img src="img/LOGO.png" alt="" class="armachfooter">
                  <p class="estilologo" style="text-align: center; color: black; font-family: ARMACH; letter-spacing: 2px;">TEXTIL</p>
                </div>

                <div class="col-md-6 col-lg-6 col-4" style="text-align: justify">
                    <p id="estilofooterbold">Datos de contacto</p>

                    <div style="display:flex" class="centrarinfomovil">
                      <img class="iconosfootermovil" src="img/footerubicacion.png" alt="" style="height:10%">
                      <div>
                        <p id="estilofooter">Dirección: 16 P. #4.</p>
                        <p id="estilofooter">Col. Real Campestre</p>
                        <p id="estilofooter">Puebla, Puebla</p>
                      </div>
                    </div>
                    <br>
                    <p id="estilofooter"> <img class="iconosfootermovil" src="img/footertelefono.png" alt="" style="height:10%"> Telefono: 777-4286543</p>
                    <p id="estilofooter" style="margin-top:2.3em"> <img class="iconosfootermovil" src="img/footertelefono.png" alt="" style="height:10%"> Telefono: 222-5983583</p>
                    <br>
                </div>

                <div class="col-md-3 col-lg-3 col-3">
                  <p id="estilofooterbold" style="text-align:center">Síguenos en</p>
                    <div style="display:flex;justify-content:center" class="redesposicion">
                        <a href="https://www.facebook.com/armachmx"><img src="img/facebook.png" alt="" class="redessociales"></a>
                        <a href="https://www.instagram.com/armachtextilmx"><img src="img/instagram.png" alt="" class="redessociales"></a>
                    </div>
                </div>


            </div>
            <div style="display: flex; justify-content: space-around; align-content: flex-end; flex-flow: row wrap; height: 100%; color:white" id="estilofooter">
                            ARMACH TEXTIL&copy; 2019
            </div>

            </div>
        </footer>


    </body>
</html>
