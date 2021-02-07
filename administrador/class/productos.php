<?php

$id = isset($_REQUEST['id'])?$_REQUEST['id'] :'0';


if ($id == '1'){
	//MOSTRAR
	$i=0;
	$filtro=2;
	echo '<div id="mifiltro2">
					<h1 style="color:blue">Selecciona alguno de tus productos para mirar su información</h1>
				</div>';
	error_reporting(0);
	$miarchivo=fopen("uniformes.txt", "r");
	if($miarchivo){
		echo '<div class="row" id="mifiltro3" style="margin: 0">';
		while( $cadena_json=json_decode(fgets($miarchivo)) ){
			//print_r ($cadena_json);
			//echo '<pre style="color: blue">'; print_r($cadena_json); echo '</pre>';
			$tallas='';
      	if (exif_imagetype("../img/".$cadena_json->foto1)!=FALSE){
        	echo '<div class="col-sm-3 col-md-3 col-lg-3 col-3">';
          echo '<a onclick="miboton'.$i.'()" style="cursor:pointer;">';
          echo '<img class="tablauniformes" src="img/'.rawurlencode($cadena_json->foto1).'"><br>';
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
									  echo '<a onclick="mifoto'.$i.'1()" id="primero'.$i.'" style="cursor:pointer;"> <img src="img/'.$cadena_json->foto1.'" alt="" class="imaguniformes"> </a>';}
									if ($cadena_json->foto2!=""){
									  echo '<a onclick="mifoto'.$i.'2()" style="cursor:pointer;"> <img src="img/'.$cadena_json->foto2.'" alt="" class="imaguniformes"> </a>';}
									if ($cadena_json->foto3!=""){
									  echo '<a onclick="mifoto'.$i.'3()" style="cursor:pointer;"> <img src="img/'.$cadena_json->foto3.'" alt="" class="imaguniformes"> </a>';}
									if ($cadena_json->foto4!=""){
									  echo '<a onclick="mifoto'.$i.'4()" style="cursor:pointer;"> <img src="img/'.$cadena_json->foto4.'" alt="" class="imaguniformes"> </a>';}
									if ($cadena_json->foto5!=""){
									  echo '<a onclick="mifoto'.$i.'5()" style="cursor:pointer;"> <img src="img/'.$cadena_json->foto5.'" alt="" class="imaguniformes"> </a>';}
									if ($cadena_json->foto6!=""){
									  echo '<a onclick="mifoto'.$i.'6()" style="cursor:pointer;"> <img src="img/'.$cadena_json->foto6.'" alt="" class="imaguniformes"> </a>';}
									if ($cadena_json->foto7!=""){
									  echo '<a onclick="mifoto'.$i.'7()" style="cursor:pointer;"> <img src="img/'.$cadena_json->foto7.'" alt="" class="imaguniformes"> </a>';}
									if ($cadena_json->foto8!=""){
									  echo '<a onclick="mifoto'.$i.'8()" style="cursor:pointer;"> <img src="img/'.$cadena_json->foto8.'" alt="" class="imaguniformes"> </a>';}
									if ($cadena_json->foto9!=""){
									  echo '<a onclick="mifoto'.$i.'9()" style="cursor:pointer;"> <img src="img/'.$cadena_json->foto9.'" alt="" class="imaguniformes"> </a>';}
									if ($cadena_json->foto10!=""){
									  echo '<a onclick="mifoto'.$i.'10()" style="cursor:pointer;"> <img src="img/'.$cadena_json->foto10.'" alt="" class="imaguniformes"> </a>';}
									echo '</div>';

									/*FOTO CON ZOOM*/
									echo '<b>Mueve el raton sobre el uniforme para ver de cerca</b>
												<div class="imagen-zoom-container" style="display: flex;justify-content:space-between">
													<div id="imagen-zoom-lens'.$i.'" class="imagen-zoom-lens"></div>
													<img id="laimagen'.$i.'" src="img/'.$cadena_json->foto1.'" width="300" height="240">
													<div id="elresultado'.$i.'" class="imagen-zoom-result"></div>
												</div>';

									if ($cadena_json->foto1!=""){
									  echo '<script>
									  function mifoto'.$i.'1() {
											document.getElementById("laimagen'.$i.'").src = "img/'.$cadena_json->foto1.'";
											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
									  }
									  function mifoto'.$i.'2() {
									    document.getElementById("laimagen'.$i.'").src = "img/'.$cadena_json->foto2.'";
											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
									  }
									  function mifoto'.$i.'3() {
									    document.getElementById("laimagen'.$i.'").src = "img/'.$cadena_json->foto3.'";
											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
									  }
									  function mifoto'.$i.'4() {
									    document.getElementById("laimagen'.$i.'").src = "img/'.$cadena_json->foto4.'";
											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
									  }
									  function mifoto'.$i.'5() {
									    document.getElementById("laimagen'.$i.'").src = "img/'.$cadena_json->foto5.'";
											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
									  }
									  function mifoto'.$i.'6() {
									    document.getElementById("laimagen'.$i.'").src = "img/'.$cadena_json->foto6.'";
											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
									  }
									  function mifoto'.$i.'7() {
									    document.getElementById("laimagen'.$i.'").src = "img/'.$cadena_json->foto7.'";
											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
									  }
									  function mifoto'.$i.'8() {
									    document.getElementById("laimagen'.$i.'").src = "img/'.$cadena_json->foto8.'";
											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
									  }
									  function mifoto'.$i.'9() {
									    document.getElementById("laimagen'.$i.'").src = "img/'.$cadena_json->foto9.'";
											zoomimagen'.$i.'("laimagen'.$i.'", "elresultado'.$i.'");
									  }
									  function mifoto'.$i.'10() {
									    document.getElementById("laimagen'.$i.'").src = "img/'.$cadena_json->foto10.'";
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
										<h2><b>'.$cadena_json->titulo.'</b><br></h2>
										<p><b>Tallas: </b>'.$tallas.'</p><br>
										<p><b>Colores: </b>'.$cadena_json->colores.'</p></b><br>
										<p><b>Descripcion: </b>'.$cadena_json->descripcion.'</p><br>
										<p><b>PRECIO: </b>'.$cadena_json->precio.'</p><br>
									</div>
		            </div>
		            <div class="modal-footer">
		              <img src="img/LOGOBLANCO.png" alt="" width="50">
		            </div>
		          </div>
		      </div>

					<script>
		        function miboton'.$i.'() {
							document.getElementById("mifiltro").style.filter = "blur(8px)";
							document.getElementById("mifiltro2").style.filter = "blur(8px)";
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

			echo '</div>';//filtro3

		fclose($miarchivo);
	}else{
		echo '<h1 style="color:red">Parece que no hay productos, para dudas o aclaraciones consulte al soporte tecnico</h1>';
	}

}
else if ($id == '2'){
	//MODIFICAR<h1 style="color:green">Selecciona alguno de tus productos para editar su información</h1>
	$i=0;
	$filtro=2;
	echo '<div id="mifiltro2">
					<h1 style="color:green">Selecciona alguno de tus productos para editar su información</h1>
				</div>';
	error_reporting(0);
	$miarchivo=fopen("uniformes.txt", "r");
	if($miarchivo){
		echo '<div class="row" id="mifiltro3" style="margin: 0">';
		while( $cadena_json=json_decode(fgets($miarchivo)) ){
			//print_r ($cadena_json);
			//echo '<pre style="color: blue">'; print_r($cadena_json); echo '</pre>';
			$tallas='';
      	if (exif_imagetype("../img/".$cadena_json->foto1)!=FALSE){
        	echo '<div class="col-sm-3 col-md-3 col-lg-3 col-3">';
          echo '<a onclick="miboton'.$i.'()" style="cursor:pointer;">';
          echo '<img class="tablauniformes" src="img/'.rawurlencode($cadena_json->foto1).'"><br>';
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
		            <div class="row modal-body" style="display: flex; justify-content:center; height: 460px; overflow:auto">

								<form enctype="multipart/form-data">
														<div class="form-group row container">
															<label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" name="titulo'.$i.'" placeholder="Titulo del articulo" value="'.$cadena_json->titulo.'">
															</div>
														</div>

														<div class="form-group row container">
															<label for="categoria" class="col-sm-2 col-form-label">Elije categoria</label>
															<div class="col-sm-10">
																<select class="form-control" name="categoria'.$i.'">';

																if ($cadena_json->categoria=="Sector enfermeria y medicina")
																	echo '<option selected="selected">Sector enfermeria y medicina</option>
																	<option>Sector seguridad privada</option>
																	<option>Sector industria</option>';

																if ($cadena_json->categoria=="Sector seguridad privada")
																	echo '<option>Sector enfermeria y medicina</option>
																	<option selected="selected">Sector seguridad privada</option>
																	<option>Sector industria</option>';

																if ($cadena_json->categoria=="Sector industria")
																	echo '<option>Sector enfermeria y medicina</option>
																	<option>Sector seguridad privada</option>
																	<option selected="selected">Sector industria</option>';

																echo '</select>
															</div>
														</div>
														<div class="form-group row container">
															<label for="fotografia" class="col-sm-2 col-form-label">Fotografias</label>
															<div class="col-sm-10">
															<div class="row">

																<div class="col-md-2">Foto 1 (principal)</div>
																	<div class="col-md-4">
																		<div class="custom-file">
																			<input type="file" class="custom-file-input" id="customFile" name="foto1'.$i.'" onchange="nombrefoto1'.$i.'()">
  																		<label class="custom-file-label" for="customFileLang" data-browse="Foto" name="foto1'.$i.'">'.$cadena_json->foto1.'</label>
																		</div>
																	</div>

															<br><br>

																<div class="col-md-2">Foto 2</div>
																	<div class="col-md-4">
																		<div class="custom-file">
																						<input type="file" class="custom-file-input" id="customFile" name="foto2'.$i.'" onchange="nombrefoto2'.$i.'()">
  																		<label class="custom-file-label" for="customFileLang" data-browse="Foto" name="foto2'.$i.'">'.$cadena_json->foto2.'</label>
																		</div>
																	</div>

															<br><br>

																<div class="col-md-2">Foto 3</div>
																<div class="col-md-4">
																	<div class="custom-file">
																		<input type="file" class="custom-file-input" id="customFile" name="foto3'.$i.'" onchange="nombrefoto3'.$i.'()">
																		<label class="custom-file-label" for="customFileLang" data-browse="Foto" name="foto3'.$i.'">'.$cadena_json->foto3.'</label>
																		</div>
																	</div>

															<br><br>

																<div class="col-md-2">Foto 4</div>
																<div class="col-md-4">
																	<div class="custom-file">
																		<input type="file" class="custom-file-input" id="customFile" name="foto4'.$i.'" onchange="nombrefoto4'.$i.'()">
																		<label class="custom-file-label" for="customFileLang" data-browse="Foto" name="foto4'.$i.'">'.$cadena_json->foto4.'</label>
																	</div>
																</div>

															<br><br>

															<div class="col-md-2">Foto 5</div>
																<div class="col-md-4">
																	<div class="custom-file">
																		<input type="file" class="custom-file-input" id="customFile" name="foto5'.$i.'" onchange="nombrefoto5'.$i.'()">
																		<label class="custom-file-label" for="customFileLang" data-browse="Foto" name="foto5'.$i.'">'.$cadena_json->foto5.'</label>
																	</div>
																</div>

														<br><br>

															<div class="col-md-2">Foto 6</div>
																<div class="col-md-4">
																	<div class="custom-file">
																				<input type="file" class="custom-file-input" id="customFile" name="foto6'.$i.'" onchange="nombrefoto6'.$i.'()">
																		<label class="custom-file-label" for="customFileLang" data-browse="Foto" name="foto6'.$i.'">'.$cadena_json->foto6.'</label>
																	</div>
																</div>

														<br><br>

															<div class="col-md-2">Foto 7</div>
															<div class="col-md-4">
																<div class="custom-file">
																	<input type="file" class="custom-file-input" id="customFile" name="foto7'.$i.'" onchange="nombrefoto7'.$i.'()">
																	<label class="custom-file-label" for="customFileLang" data-browse="Foto" name="foto7'.$i.'">'.$cadena_json->foto7.'</label>
																	</div>
																</div>

														<br><br>

															<div class="col-md-2">Foto 8</div>
															<div class="col-md-4">
																<div class="custom-file">
																	<input type="file" class="custom-file-input" id="customFile" name="foto8'.$i.'" onchange="nombrefoto8'.$i.'()">
																	<label class="custom-file-label" for="customFileLang" data-browse="Foto" name="foto8'.$i.'">'.$cadena_json->foto8.'</label>
																</div>
															</div>

														<br><br>

														<div class="col-md-2">Foto 9</div>
														<div class="col-md-4">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="customFile" name="foto9'.$i.'" onchange="nombrefoto9'.$i.'()">
																<label class="custom-file-label" for="customFileLang" data-browse="Foto" name="foto9'.$i.'">'.$cadena_json->foto9.'</label>
																</div>
															</div>

													<br><br>

														<div class="col-md-2">Foto 10</div>
														<div class="col-md-4">
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="customFile" name="foto10'.$i.'" onchange="nombrefoto10'.$i.'()">
																<label class="custom-file-label" for="customFileLang" data-browse="Foto" name="foto10'.$i.'">'.$cadena_json->foto10.'</label>
															</div>
														</div>

													<br><br>

															<!--FIN ROW-->
															</div>
														</div>
														</div>

														<div class="form-group row container">
															<label for="tallas" class="col-sm-2 col-form-label">Tallas</label>
															<div class="col-sm-1" style="text-align:left; display: flex">

																<div class="custom-control custom-checkbox">';
																	if($cadena_json->tallaXCH=="on")
																			echo '<input type="checkbox" class="custom-control-input" id="tallaXCH'.$i.'" name="tallaXCH'.$i.'" checked>';
																	else {
																			echo '<input type="checkbox" class="custom-control-input" id="tallaXCH'.$i.'" name="tallaXCH'.$i.'">';
																	}
																	echo '<label class="custom-control-label" for="tallaXCH'.$i.'">XCH</label>
																</div>

																<div class="custom-control custom-checkbox">';
																if($cadena_json->tallaCH=="on")
																		echo '<input type="checkbox" class="custom-control-input" id="tallaCH'.$i.'" name="tallaCH'.$i.'" checked>';
																else {
																		echo '<input type="checkbox" class="custom-control-input" id="tallaCH'.$i.'" name="tallaCH'.$i.'">';
																}
																	echo '<label class="custom-control-label" for="tallaCH'.$i.'">CH</label>
																</div>

																<div class="custom-control custom-checkbox">';
																if($cadena_json->tallaM=="on")
																		echo '<input type="checkbox" class="custom-control-input" id="tallaM'.$i.'" name="tallaM'.$i.'" checked>';
																else {
																		echo '<input type="checkbox" class="custom-control-input" id="tallaM'.$i.'" name="tallaM'.$i.'">';
																}
																	echo '<label class="custom-control-label" for="tallaM'.$i.'">M</label>
																</div>

																<div class="custom-control custom-checkbox">';
																if($cadena_json->tallaM=="on")
																		echo '<input type="checkbox" class="custom-control-input" id="tallaG'.$i.'" name="tallaG'.$i.'" checked>';
																else {
																		echo '<input type="checkbox" class="custom-control-input" id="tallaG'.$i.'" name="tallaG'.$i.'">';
																}
																	echo '<label class="custom-control-label" for="tallaG'.$i.'">G</label>
																</div>

																<div class="custom-control custom-checkbox">';
																if($cadena_json->tallaM=="on")
																		echo '<input type="checkbox" class="custom-control-input" id="tallaXG'.$i.'" name="tallaXG'.$i.'" checked>';
																else {
																		echo '<input type="checkbox" class="custom-control-input" id="tallaXG'.$i.'" name="tallaXG'.$i.'">';
																}
																	echo '<label class="custom-control-label" for="tallaXG'.$i.'">XG</label>
																</div>
															</div>
														</div>

														<div class="form-group row container">
															<label for="colores" class="col-sm-2 col-form-label">Colores</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" name="colores'.$i.'" placeholder="Colores disponibles" value="'.$cadena_json->colores.'">
															</div>
														</div>
														<div class="form-group row container">
															<label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
															<div class="col-sm-10">
																<textarea name="descripcion'.$i.'" placeholder="Describe al producto" class="form-control">'.$cadena_json->descripcion.'</textarea>
															</div>
														</div>
														<div class="form-group row container">
															<label for="precio" class="col-sm-2 col-form-label">Precio</label>
															<div class="col-sm-5">
																<input type="text" name="precio'.$i.'" placeholder="Precio del producto" class="form-control" value="'.$cadena_json->precio.'"><br />
															</div>
														</div>
														<button onclick="aceptar'.$i.'()" class="btn btn-primary mb-2">Aceptar cambios</button>
													</form>';

									echo '</div>
		            				<div class="modal-footer">
		              				<img src="img/LOGOBLANCO.png" alt="" width="50">
		            				</div>
		          		</div>
		      </div>

					<div id="resultado">
					</div>

					<script>
		        function miboton'.$i.'() {
							document.getElementById("mifiltro").style.filter = "blur(8px)";
							document.getElementById("mifiltro2").style.filter = "blur(8px)";
							var x = document.getElementById("mifiltro3").querySelectorAll(".col-md-3");
							var i;
  						for (i = 0; i < x.length; i++) {
    						x[i].style.filter = "blur(8px)";
  						}
		          document.getElementById("myModal'.$i.'").style.display = "block";
							document.getElementById("myModal'.$i.'").scrollTop += 10;
		        }

		        	document.getElementsByClassName("close'.$i.'")[0].onclick = function() {
		          document.getElementById("mifiltro").style.filter = "blur(0px)";
							document.getElementById("mifiltro2").style.filter = "blur(0px)";
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
								var x = document.getElementById("mifiltro3").querySelectorAll(".col-md-3");
								var i;
	  						for (i = 0; i < x.length; i++) {
	    						x[i].style.filter = "blur(0px)";
	  						}
		            document.getElementById("myModal'.$i.'").style.display = "none";
		          }
		        });

						/*CAMBIO DE NOMBRES LABELS*/
						function nombrefoto1'.$i.'(){
							document.getElementsByName("foto1'.$i.'")[1].textContent = document.getElementsByName("foto1'.$i.'")[0].files[0].name;
						}
						function nombrefoto2'.$i.'(){
							document.getElementsByName("foto2'.$i.'")[1].textContent = document.getElementsByName("foto2'.$i.'")[0].files[0].name;
						}
						function nombrefoto3'.$i.'(){
							document.getElementsByName("foto3'.$i.'")[1].textContent = document.getElementsByName("foto3'.$i.'")[0].files[0].name;
						}
						function nombrefoto4'.$i.'(){
							document.getElementsByName("foto4'.$i.'")[1].textContent = document.getElementsByName("foto4'.$i.'")[0].files[0].name;
						}
						function nombrefoto5'.$i.'(){
							document.getElementsByName("foto5'.$i.'")[1].textContent = document.getElementsByName("foto5'.$i.'")[0].files[0].name;
						}
						function nombrefoto6'.$i.'(){
							document.getElementsByName("foto6'.$i.'")[1].textContent = document.getElementsByName("foto6'.$i.'")[0].files[0].name;
						}
						function nombrefoto7'.$i.'(){
							document.getElementsByName("foto7'.$i.'")[1].textContent = document.getElementsByName("foto7'.$i.'")[0].files[0].name;
						}
						function nombrefoto8'.$i.'(){
							document.getElementsByName("foto8'.$i.'")[1].textContent = document.getElementsByName("foto8'.$i.'")[0].files[0].name;
						}
						function nombrefoto9'.$i.'(){
							document.getElementsByName("foto9'.$i.'")[1].textContent = document.getElementsByName("foto9'.$i.'")[0].files[0].name;
						}
						function nombrefoto10'.$i.'(){
							document.getElementsByName("foto10'.$i.'")[1].textContent = document.getElementsByName("foto10'.$i.'")[0].files[0].name;
						}

						/*ENVIO DE FORMULARIOS*/
						function aceptar'.$i.'(){
							var titulo= document.getElementsByName("titulo'.$i.'")[0].value;
							var categoria=document.getElementsByName("categoria'.$i.'")[0].value;
							/*ARCHIVOS REGISTRADOS EN EL LABEL*/
							var foto1= document.getElementsByName("foto1'.$i.'")[1].textContent;
							var foto2=document.getElementsByName("foto2'.$i.'")[1].textContent;
							var foto3= document.getElementsByName("foto3'.$i.'")[1].textContent;
							var foto4=document.getElementsByName("foto4'.$i.'")[1].textContent;
							var foto5= document.getElementsByName("foto5'.$i.'")[1].textContent;
							var foto6=document.getElementsByName("foto6'.$i.'")[1].textContent;
							var foto7= document.getElementsByName("foto7'.$i.'")[1].textContent;
							var foto8=document.getElementsByName("foto8'.$i.'")[1].textContent;
							var foto9= document.getElementsByName("foto9'.$i.'")[1].textContent;
							var foto10=document.getElementsByName("foto10'.$i.'")[1].textContent;
							var tallaXCH= document.getElementsByName("tallaXCH'.$i.'")[0].value;
							var tallaCH=document.getElementsByName("tallaCH'.$i.'")[0].value;
							var tallaM= document.getElementsByName("tallaM'.$i.'")[0].value;
							var tallaG=document.getElementsByName("tallaG'.$i.'")[0].value;
							var tallaXG= document.getElementsByName("tallaXG'.$i.'")[0].value;
							var colores=document.getElementsByName("colores'.$i.'")[0].value;
							var descripcion= document.getElementsByName("descripcion'.$i.'")[0].value;
							var precio= document.getElementsByName("precio'.$i.'")[0].value;

							/*NUEVAS FOTOS*/
							var form_data'.$i.' = new FormData();

							if (document.getElementsByName("foto1'.$i.'")[0].files.length==1)
										form_data'.$i.'.append("foto1nuevo", document.getElementsByName("foto1'.$i.'")[0].files[0]);

							if (document.getElementsByName("foto2'.$i.'")[0].files.length==1)
										form_data'.$i.'.append("foto2nuevo", document.getElementsByName("foto2'.$i.'")[0].files[0]);

							if (document.getElementsByName("foto3'.$i.'")[0].files.length==1)
										form_data'.$i.'.append("foto3nuevo", document.getElementsByName("foto3'.$i.'")[0].files[0]);

							if (document.getElementsByName("foto4'.$i.'")[0].files.length==1)
										form_data'.$i.'.append("foto4nuevo", document.getElementsByName("foto4'.$i.'")[0].files[0]);

							if (document.getElementsByName("foto5'.$i.'")[0].files.length==1)
										form_data'.$i.'.append("foto5nuevo", document.getElementsByName("foto5'.$i.'")[0].files[0]);

							if (document.getElementsByName("foto6'.$i.'")[0].files.length==1)
										form_data'.$i.'.append("foto6nuevo", document.getElementsByName("foto6'.$i.'")[0].files[0]);

							if (document.getElementsByName("foto7'.$i.'")[0].files.length==1)
										form_data'.$i.'.append("foto7nuevo", document.getElementsByName("foto7'.$i.'")[0].files[0]);

							if (document.getElementsByName("foto8'.$i.'")[0].files.length==1)
										form_data'.$i.'.append("foto8nuevo", document.getElementsByName("foto8'.$i.'")[0].files[0]);

							if (document.getElementsByName("foto9'.$i.'")[0].files.length==1)
										form_data'.$i.'.append("foto9nuevo", document.getElementsByName("foto9'.$i.'")[0].files[0]);

							if (document.getElementsByName("foto10'.$i.'")[0].files.length==1)
										form_data'.$i.'.append("foto10nuevo", document.getElementsByName("foto10'.$i.'")[0].files[0]);

							for (var elemento of form_data'.$i.'.entries()) {
			    			console.log(elemento[0]+ ", " + elemento[1].name);
							}


							var web= "class/modificar.php?titulo='.rawurlencode($cadena_json -> titulo).
							'&categoria='.rawurlencode($cadena_json -> categoria).
							'&foto1='.rawurlencode($cadena_json -> foto1).
							'&foto2='.rawurlencode($cadena_json -> foto2).
							'&foto3='.rawurlencode($cadena_json -> foto3).
							'&foto4='.rawurlencode($cadena_json -> foto4).
							'&foto5='.rawurlencode($cadena_json -> foto5).
							'&foto6='.rawurlencode($cadena_json -> foto6).
							'&foto7='.rawurlencode($cadena_json -> foto7).
							'&foto8='.rawurlencode($cadena_json -> foto8).
							'&foto9='.rawurlencode($cadena_json -> foto9).
							'&foto10='.rawurlencode($cadena_json -> foto10).
							'&tallaXCH='.rawurlencode($cadena_json -> tallaXCH).
							'&tallaCH='.rawurlencode($cadena_json -> tallaCH).
							'&tallaM='.rawurlencode($cadena_json -> tallaM).
							'&tallaG='.rawurlencode($cadena_json -> tallaG).
							'&tallaXG='.rawurlencode($cadena_json -> tallaXG).
							'&colores='.rawurlencode($cadena_json -> colores).
							'&descripcion='.rawurlencode($cadena_json -> descripcion).
							'&precio='.rawurlencode($cadena_json -> precio).
							'"+"&tituloNEW="+ titulo+
							"&categoriaNEW="+categoria+
							"&foto1NEW="+foto1+
							"&foto2NEW="+foto2+
							"&foto3NEW="+foto3+
							"&foto4NEW="+foto4+
							"&foto5NEW="+foto5+
							"&foto6NEW="+foto6+
							"&foto7NEW="+foto7+
							"&foto8NEW="+foto8+
							"&foto9NEW="+foto9+
							"&foto10NEW="+foto10+
							"&tallaXCHNEW="+tallaXCH+
							"&tallaCHNEW="+tallaCH+
							"&tallaMNEW="+tallaM+
							"&tallaGNEW="+tallaG+
							"&tallaXGNEW="+tallaXG+
							"&coloresNEW="+colores+
							"&descripcionNEW="+descripcion+
							"&precioNEW="+precio;

							$.ajax({url: web, cache: false, contentType: false, processData: false, data: form_data'.$i.', type: "POST", success: function(result){
													//alert("Modificacion con exito \"'.$cadena_json -> titulo.'\"");
													//$("#resultado").html(result);
													console.log(result);
													//alert(result);
										}});
							alert("CAMBIO REALIZADO");
						}
				</script>';
		$i++;
        }
			}

			echo '</div>';//filtro3

		fclose($miarchivo);
	}else{
		echo '<h1 style="color:red">Parece que no hay productos, para dudas o aclaraciones consulte al soporte tecnico</h1>';
	}
}
else if ($id == '3'){
	//AGREGAR
	echo '<form action="class/agrega.php" method="POST" enctype="multipart/form-data" style="text-align: -webkit-center">
							<div class="form-group row container">
								<label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="titulo" placeholder="Titulo del articulo">
								</div>
							</div>

							<div class="form-group row container">
								<label for="categoria" class="col-sm-2 col-form-label">Elije categoria</label>
								<div class="col-sm-10">
									<select class="form-control" name="categoria">
										<option>Sector enfermeria y medicina</option>
										<option>Sector seguridad privada</option>
										<option>Sector industria</option>
									</select>
								</div>
							</div>
							<div class="form-group row container">
								<label for="fotografia" class="col-sm-2 col-form-label">Fotografias</label>
								<div class="col-sm-10">
								<div class="row">

									<div class="col-md-1">Foto 1 (principal)</div>
										<div class="col-md-5">
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="customFile" name="foto1">
												<label class="custom-file-label" for="customFileLang" data-browse="Foto">Seleccionar Foto</label>
											</div>
										</div>

								<br><br>

									<div class="col-md-1">Foto 2</div>
										<div class="col-md-5">
											<div class="custom-file">
															<input type="file" class="custom-file-input" id="customFile" name="foto2">
												<label class="custom-file-label" for="customFileLang" data-browse="Foto">Seleccionar Foto</label>
											</div>
										</div>

								<br><br>

									<div class="col-md-1">Foto 3</div>
									<div class="col-md-5">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="customFile" name="foto3">
											<label class="custom-file-label" for="customFileLang" data-browse="Foto">Seleccionar Foto</label>
											</div>
										</div>

								<br><br>

									<div class="col-md-1">Foto 4</div>
									<div class="col-md-5">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="customFile" name="foto4">
											<label class="custom-file-label" for="customFileLang" data-browse="Foto">Seleccionar Foto</label>
										</div>
									</div>

								<br><br>

								<div class="col-md-1">Foto 5</div>
									<div class="col-md-5">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="customFile" name="foto5">
											<label class="custom-file-label" for="customFileLang" data-browse="Foto">Seleccionar Foto</label>
										</div>
									</div>

							<br><br>

								<div class="col-md-1">Foto 6</div>
									<div class="col-md-5">
										<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile" name="foto6">
											<label class="custom-file-label" for="customFileLang" data-browse="Foto">Seleccionar Foto</label>
										</div>
									</div>

							<br><br>

								<div class="col-md-1">Foto 7</div>
								<div class="col-md-5">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="customFile" name="foto7">
										<label class="custom-file-label" for="customFileLang" data-browse="Foto">Seleccionar Foto</label>
										</div>
									</div>

							<br><br>

								<div class="col-md-1">Foto 8</div>
								<div class="col-md-5">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="customFile" name="foto8">
										<label class="custom-file-label" for="customFileLang" data-browse="Foto">Seleccionar Foto</label>
									</div>
								</div>

							<br><br>

							<div class="col-md-1">Foto 9</div>
							<div class="col-md-5">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="customFile" name="foto9">
									<label class="custom-file-label" for="customFileLang" data-browse="Foto">Seleccionar Foto</label>
									</div>
								</div>

						<br><br>

							<div class="col-md-1">Foto 10</div>
							<div class="col-md-5">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="customFile" name="foto10">
									<label class="custom-file-label" for="customFileLang" data-browse="Foto">Seleccionar Foto</label>
								</div>
							</div>

						<br><br>

								<!--FIN ROW-->
								</div>
							</div>
							</div>

							<div class="form-group row container">
								<label for="tallas" class="col-sm-2 col-form-label">Tallas</label>
								<div class="col-sm-1" style="text-align:left">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="tallaXCH" name="tallaXCH">
										<label class="custom-control-label" for="tallaXCH">XCH</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="tallaCH" name="tallaCH">
										<label class="custom-control-label" for="tallaCH">CH</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="tallaM" name="tallaM">
										<label class="custom-control-label" for="tallaM">M</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="tallaG" name="tallaG">
										<label class="custom-control-label" for="tallaG">G</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="tallaXG" name="tallaXG">
										<label class="custom-control-label" for="tallaXG">XG</label>
									</div>
								</div>
							</div>

							<div class="form-group row container">
								<label for="colores" class="col-sm-2 col-form-label">Colores</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name=colores placeholder="Colores disponibles">
								</div>
							</div>
							<div class="form-group row container">
								<label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
								<div class="col-sm-10">
									<textarea name="descripcion" placeholder="Describe al producto" class="form-control"></textarea><br />
								</div>
							</div>
							<div class="form-group row container">
								<label for="precio" class="col-sm-2 col-form-label">Precio</label>
								<div class="col-sm-5">
									<input type="text" name="precio" placeholder="Precio del producto" class="form-control"><br />
								</div>
							</div>
							<button type="submit" class="btn btn-primary mb-2">Aceptar cambios</button>
						</form>';

}
else if ($id == '4'){
	//ELIMINAR<h1 style="color:orange">Selecciona alguno de tus productos para eliminarlo</h1>
	$i=0;
	$filtro=2;
	echo '<div id="mifiltro2">
					<h1 style="color:orange">Selecciona alguno de tus productos para eliminarlo</h1>
				</div>';
	error_reporting(0);
	$miarchivo=fopen("uniformes.txt", "r");
	if($miarchivo){
		echo '<div class="row" id="mifiltro3" style="margin: 0">';
		while( $cadena_json=json_decode(fgets($miarchivo)) ){
			//print_r ($cadena_json);
			//echo '<pre style="color: blue">'; print_r($cadena_json); echo '</pre>';
      	if (exif_imagetype("../img/".$cadena_json->foto1)!=FALSE){
        	echo '<div class="col-sm-3 col-md-3 col-lg-3 col-3">';
          echo '<a onclick="miboton'.$i.'()" style="cursor:pointer;">';
          echo '<img class="tablauniformes" src="img/'.rawurlencode($cadena_json->foto1).'"><br>';
					//echo $cadena_json->titulo;
          echo '</a>';
          echo '</div>
					<div id="resultado">
					</div>
					';

					echo '<script>
										function miboton'.$i.'(){
											console.log('.json_encode($cadena_json).');
											var web= "class/eliminar.php?titulo='.rawurlencode($cadena_json -> titulo).
											'&categoria='.rawurlencode($cadena_json -> categoria).
											'&foto1='.rawurlencode($cadena_json -> foto1).
											'&foto2='.rawurlencode($cadena_json -> foto2).
											'&foto3='.rawurlencode($cadena_json -> foto3).
											'&foto4='.rawurlencode($cadena_json -> foto4).
											'&foto5='.rawurlencode($cadena_json -> foto5).
											'&foto6='.rawurlencode($cadena_json -> foto6).
											'&foto7='.rawurlencode($cadena_json -> foto7).
											'&foto8='.rawurlencode($cadena_json -> foto8).
											'&foto9='.rawurlencode($cadena_json -> foto9).
											'&foto10='.rawurlencode($cadena_json -> foto10).
											'&tallaXCH='.rawurlencode($cadena_json -> tallaXCH).
											'&tallaCH='.rawurlencode($cadena_json -> tallaCH).
											'&tallaM='.rawurlencode($cadena_json -> tallaM).
											'&tallaG='.rawurlencode($cadena_json -> tallaG).
											'&tallaXG='.rawurlencode($cadena_json -> tallaXG).
											'&colores='.rawurlencode($cadena_json -> colores).
											'&descripcion='.rawurlencode($cadena_json -> descripcion).
											'&precio='.rawurlencode($cadena_json -> precio).'";
											$.ajax({url: web, success: function(result){
							              	    console.log(result);
																	$("#resultado").html(result);
							              }});
										}
		    				</script>';
					$i++;
        }
			}
			echo '</div>';//filtro3
			fclose($miarchivo);

	}else{
		echo '<h1 style="color:red">Parece que no hay productos, para dudas o aclaraciones consulte al soporte tecnico</h1>';
	}
}
else{
	echo '<script>alert("error");</script>';
}
 ?>
