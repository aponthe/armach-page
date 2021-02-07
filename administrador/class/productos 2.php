<?php

$id = isset($_REQUEST['id'])?$_REQUEST['id'] :'0';


if ($id == '1'){
	//MOSTRAR
	$i=0;
	$filtro=2;
	echo '<div id="mifiltro'.$filtro.'">
					<h1 style="color:blue">Selecciona alguno de tus productos para mirar su información</h1>
				</div>';
	error_reporting(0);
	$miarchivo=fopen("uniformes.txt", "r");
	if($miarchivo){
		echo '<div class="row">';
		while( $cadena_json=json_decode(fgets($miarchivo)) ){
			//echo $cadena_json->foto1;
			//echo '<pre style="color: blue">'; print_r($cadena_json); echo '</pre>';
      	if (exif_imagetype("../img/".$cadena_json->foto1)!=FALSE){
        	echo '<div class="col-sm-3 col-md-3 col-lg-3 col-3">
								<div id="mifiltro'.++$filtro.'">
					';
          echo '<a onclick="miboton'.$i.'()" style="cursor:pointer;">';
          echo '<img class="tablauniformes" src="img/'.rawurlencode($cadena_json->foto1).'"><br>';
          echo '</a>';
          echo '</div>';

				echo '</div>';//filtro2

					echo '<!-- The Modal -->
		      <div id="myModal'.$i.'" class="modal">
		        <!-- Modal content -->
		        <div class="modal-content">
		          <div class="modal-header">
		              <h2>MUESTRA</h2>
		              <span class="close'.$i.'">&times;</span>
		            </div>
		            <div class="modal-body">
									<b>'.$cadena_json->titulo.'</b><br>
									<b>tallas XCH '.$cadena_json->tallaXCH.'</b><br>
									<b> CH '.$cadena_json->tallaCH.'</b><br>
									<b> M '.$cadena_json->tallaM.'</b><br>
									<b> G '.$cadena_json->tallaG.'</b><br>
									<b> XG '.$cadena_json->tallaXG.'</b><br>
									<b>colores <i style="color: blue">'.$cadena_json->colores.'</i></b><br>
		              <i>'.$cadena_json->descripcion.'</i><br>
									<b>PRECIO '.$cadena_json->precio.'</b><br>
		            </div>
		            <div class="modal-footer">
		              <img src="img/LOGOBLANCO.png" alt="" width="80">
		            </div>
		          </div>
		      </div>

					<script>
		        function miboton'.$i.'() {
							document.getElementById("mifiltro").style.filter = "blur(8px)";

							document.getElementById("mifiltro'.$filtro.'").style.filter = "blur(8px)";
							for (var i=2; i <= '.$filtro.'; i++) {
								document.getElementById("mifiltro"+i).style.filter = "blur(8px)";
							}

		          document.getElementById("myModal'.$i.'").style.display = "block";
		        }
		        document.getElementsByClassName("close'.$i.'")[0].onclick = function() {
		          document.getElementById("mifiltro").style.filter = "blur(0px)";
							for (var i=2; i <= '.$filtro.'; i++) {
								document.getElementById("mifiltro"+i).style.filter = "blur(0px)";
							}
		          document.getElementById("myModal'.$i.'").style.display = "none";
		        }
		        //window.onclick = function(event) {
						window.addEventListener(\'click\', function(event) {
							//alert(event.target.tagName);
		          if (event.target == document.getElementById("myModal'.$i.'")) {

		            document.getElementById("mifiltro").style.filter = "blur(0px)";
								for (var i=2; i <= '.$filtro.'; i++) {
									document.getElementById("mifiltro"+i).style.filter = "blur(0px)";
								}
		            document.getElementById("myModal'.$i.'").style.display = "none";
		          }
		        });
		    </script>
					';
					$i++;
        }
			}
    echo '</div>';

		fclose($miarchivo);
	}else{
		echo '<h1 style="color:red">Parece que no hay productos, para dudas o aclaraciones consulte al soporte tecnico</h1>';
	}

}
else if ($id == '2'){
	//MODIFICAR
	echo '<div id="mifiltro2">
					<h1 style="color:green">Selecciona alguno de tus productos para editar su información</h1>';
	error_reporting(0);
	$miarchivo=fopen("uniformes.txt", "r");
	if($miarchivo){
		echo '<div class="row">';
		while( $cadena_json=json_decode(fgets($miarchivo)) ){
			//echo $cadena_json->foto1;
			//echo '<pre style="color: blue">'; print_r($cadena_json); echo '</pre>';
      	if (exif_imagetype("../img/".$cadena_json->foto1)!=FALSE){
        	echo '<div class="col-sm-3 col-md-3 col-lg-3 col-3">';
          echo '<a onclick="miboton()" style="cursor:pointer;">';
          echo '<img class="tablauniformes" src="img/'.rawurlencode($cadena_json->foto1).'"><br>';
          echo '</a>';
          echo '</div>';
        }
			}
    echo '</div>';
	echo '</div>';//filtro2



			echo '<!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
              <h2>MUESTRA</h2>
              <span class="close">&times;</span>
            </div>
            <div class="modal-body">
              INFORMACION
            </div>
            <div class="modal-footer">
              <img src="img/LOGOBLANCO.png" alt="" width="80">
            </div>
          </div>
      </div>
			<script>
        function miboton() {
          document.getElementById("mifiltro").style.filter = "blur(8px)";
					document.getElementById("mifiltro2").style.filter = "blur(8px)";
          document.getElementById("myModal").style.display = "block";
        }
        document.getElementsByClassName("close")[0].onclick = function() {
          document.getElementById("mifiltro").style.filter = "blur(0px)";
					document.getElementById("mifiltro2").style.filter = "blur(0px)";
          document.getElementById("myModal").style.display = "none";
        }
        window.onclick = function(event) {
          if (event.target == document.getElementById("myModal")) {
            document.getElementById("mifiltro").style.filter = "blur(0px)";
            document.getElementById("myModal").style.display = "none";
          }
        }
    </script>
			';

		fclose($miarchivo);
	}else{
		echo '<h1 style="color:red">Parece que no hay productos, para dudas o aclaraciones consulte al soporte tecnico</h1>';
	}
}
else if ($id == '3'){
	//AGREGAR
	echo '<form action="class/agrega.php" method="POST" enctype="multipart/form-data">
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

									<div class="col-md-2">Foto 1 (principal)</div>
										<div class="col-md-4">
											<div class="custom-file">
												<input type="file" class="" lang="es" name="foto1">
											</div>
										</div>

								<br><br>

									<div class="col-md-2">Foto 2</div>
										<div class="col-md-4">
											<div class="custom-file">
												<input type="file" class="" lang="es" name="foto2">
											</div>
										</div>

								<br><br>

									<div class="col-md-2">Foto 3</div>
									<div class="col-md-4">
										<div class="custom-file">
											<input type="file" class="" lang="es" name="foto3">
											</div>
										</div>

								<br><br>

									<div class="col-md-2">Foto 4</div>
									<div class="col-md-4">
										<div class="custom-file">
											<input type="file" class="" lang="es" name="foto4">
										</div>
									</div>

								<br><br>

								<div class="col-md-2">Foto 5</div>
									<div class="col-md-4">
										<div class="custom-file">
											<input type="file" class="" lang="es" name="foto5">
										</div>
									</div>

							<br><br>

								<div class="col-md-2">Foto 6</div>
									<div class="col-md-4">
										<div class="custom-file">
											<input type="file" class="" lang="es" name="foto6">
										</div>
									</div>

							<br><br>

								<div class="col-md-2">Foto 7</div>
								<div class="col-md-4">
									<div class="custom-file">
										<input type="file" class="" lang="es" name="foto7">
										</div>
									</div>

							<br><br>

								<div class="col-md-2">Foto 8</div>
								<div class="col-md-4">
									<div class="custom-file">
										<input type="file" class="" lang="es" name="foto8">
									</div>
								</div>

							<br><br>

							<div class="col-md-2">Foto 9</div>
							<div class="col-md-4">
								<div class="custom-file">
									<input type="file" class="" lang="es" name="foto9">
									</div>
								</div>

						<br><br>

							<div class="col-md-2">Foto 10</div>
							<div class="col-md-4">
								<div class="custom-file">
									<input type="file" class="" lang="es" name="foto10">
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
							<button type="submit" class="btn btn-primary mb-2">Agregar productos</button>
						</form>';

}
else if ($id == '4'){
	//ELIMINAR<h1 style="color:orange">Selecciona alguno de tus productos para eliminarlo</h1>
	echo '<div id="mifiltro2">
					<h1 style="color:orange">Selecciona alguno de tus productos para eliminarlo</h1>';
	error_reporting(0);
	$miarchivo=fopen("uniformes.txt", "r");
	if($miarchivo){
		echo '<div class="row">';
		while( $cadena_json=json_decode(fgets($miarchivo)) ){
			//echo $cadena_json->foto1;
			//echo '<pre style="color: blue">'; print_r($cadena_json); echo '</pre>';
      	if (exif_imagetype("../img/".$cadena_json->foto1)!=FALSE){
        	echo '<div class="col-sm-3 col-md-3 col-lg-3 col-3">';
          echo '<a onclick="miboton()" style="cursor:pointer;">';
          echo '<img class="tablauniformes" src="img/'.rawurlencode($cadena_json->foto1).'"><br>';
          echo '</a>';
          echo '</div>';
        }
			}
    echo '</div>';
	echo '</div>';//filtro2



			echo '<!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
              <h2>MUESTRA</h2>
              <span class="close">&times;</span>
            </div>
            <div class="modal-body">
              INFORMACION
            </div>
            <div class="modal-footer">
              <img src="img/LOGOBLANCO.png" alt="" width="80">
            </div>
          </div>
      </div>
			<script>
        function miboton() {
          document.getElementById("mifiltro").style.filter = "blur(8px)";
					document.getElementById("mifiltro2").style.filter = "blur(8px)";
          document.getElementById("myModal").style.display = "block";
        }
        document.getElementsByClassName("close")[0].onclick = function() {
          document.getElementById("mifiltro").style.filter = "blur(0px)";
					document.getElementById("mifiltro2").style.filter = "blur(0px)";
          document.getElementById("myModal").style.display = "none";
        }
        window.onclick = function(event) {
          if (event.target == document.getElementById("myModal")) {
            document.getElementById("mifiltro").style.filter = "blur(0px)";
            document.getElementById("myModal").style.display = "none";
          }
        }
    </script>
			';

		fclose($miarchivo);
	}else{
		echo '<h1 style="color:red">Parece que no hay productos, para dudas o aclaraciones consulte al soporte tecnico</h1>';
	}
}
else{
	echo '<script>alert("error");</script>';
}
 ?>
