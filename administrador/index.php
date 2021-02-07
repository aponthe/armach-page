<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>administrador</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style media="screen">
    body{
      background-color: black
    }
    label{
      color: white
    }
    .btn{
      background-color: #617a94!important
    }
  </style>

</head>
<body>
	<div class="py-5 container" id="content" >
    	<div class="row">
		  <div class="col-md-4"></div>
		  <div class="col-md-4">
		  	<div class="col-md-12 text-center">
				<img src="img/LOGOBLANCO.png" style="width: 230px;" alt="">
		  	</div>
		  	<div class="col-md-12">
		  	<form action="valida.php" method="POST">
				  <div class="form-group">
				    <label for="user">Usuario</label>
				    <input type="text" class="form-control" name="user" id="user" placeholder="Usuario">
				  </div>
				  <div class="form-group">
				    <label for="pass">Password</label>
				    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
				  </div>
				  <div class="col-md-12 text-right">
            <button type="submit" class="btn btn-default">Entrar</button>
				   </div>
				</form>
		  	</div>
		  </div>
		  <div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>
