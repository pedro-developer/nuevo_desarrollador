<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alta Desarrollador</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="css/miestilo.css">
</head>
<body>
	<nav class="navcea">
  		<a class="navbar-brand" href="#">
    		<img src="" width="30" height="30" alt="" loading="lazy">
  		</a>
	</nav>
	<form method="post">
		<div class="container">
			<h1 class="text-center">Datos Desarrollador</h1>
			<div class="row">
				<div class="col-md-6">
					<h2>Datos Generales</h2>
					<label for="">Regimen Fiscal</label><span>*</span>
					<br>
					<div class="form-check form-check-inline">
  						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" requred>
  						<label class="form-check-label" for="inlineRadio1" required>Persona Moral</label>
					</div>
					<div class="form-check form-check-inline">
  						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
  						<label class="form-check-label" for="inlineRadio2">Persona Fisica</label>
					</div>
					<br>
					<label for="RFC">RFC</label><span>*</span>
					<input type="text" id="rfc" class="form-control" minlength="0" maxlength="13" required>
					<label for="nombre">Nombre o Razon social</label><span>*</span>
					<input type="text" class="form-control" id="nombre" required>
				</div>
				<div class="col-md-6">
					<h2 class="text-center">Datos de constitución</h2>
					<div class="row">
						<div class="form-group col-md-4" >
						<label for="noEscritura">No Escritura</label><span>*</span>
						<input type="text" class="form-control" id="noEscritura" required>
						</div>
					<div class="form-group col-md-4">
						<label for="nota">Notaria</label><span>*</span>
						<input type="text" class="form-control" id="nota" required>
					</div>
					<div class="form-group col-md-4">
						<label for="obj">Objeto</label><span>*</span>
						<input type="text" class="form-control" id="obj" required>
					</div>	
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="socios">Socios</label><span>*</span>
							<input type="text" class="form-control" id="soc" required>
						</div>
						<div class="form-group col-md-4">
							<label for="aConst">Año constitución</label><span>*</span>
							<input type="text" class="form-control" id="aConst" required>
						</div>
						<div class="form-group col-md-4">
							<label for="fConst">Fecha Constitución</label><span>*</span>
							<input type="date" class="form-control" id="fConst" required>
						</div>
					</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h2 class="text-center">Domicilio Fiscal</h2>
					<label for="calle">Calle</label><span>*</span>
					<input type="text" class="form-control" id="calle" required>
					<div class="form-row">
    					<div class="form-group col-md-4">
      						<label for="numextFis">No exterior</label><span>*</span>
      						<input type="text" class="form-control" id="numextFis" required>
    					</div>
    					<div class="form-group col-md-4">
      						<label for="numintFis">No Interior</label><span>*</span>
      						<input type="text" class="form-control" id="numintFis" required>
    					</div>
    					<div class="form-group col-md-4">
      						<label for="cpFis">C.P</label><span>*</span>
      						<input type="text" class="form-control" id="cpFis" required>
    					</div>
				</div>
				<label for="colonia">Colonia</label><span>*</span>
				<input type="text" class="form-control" id="colonia" required>
				<div class="form-row">
    					<div class="form-group col-md-6">
      						<label for="estado">Estado</label><span>*</span>
      						<input type="text" class="form-control" id="estado" required>
    					</div>
    					<div class="form-group col-md-6">
      						<label for="municipio">Municipio</label><span>*</span>
      						<input type="text" class="form-control" id="municipio" required>
    					</div>
    					
				</div>
				<div class="form-row">
    					<div class="form-group col-md-6">
      						<label for="estado">Telefono</label><span>*</span>
      						<input type="text" class="form-control" id="estado" required>
    					</div>
    					<div class="form-group col-md-6">
      						<label for="municipio">Correo</label><span>*</span>
      						<input type="text" class="form-control" id="municipio" required>
    					</div>

    					
				</div>		
			</div>
			<div class="col-md-6">
				<h2>Domicilio Residente</h2>
				<label for="calleRe">Calle</label>
				<input type="text" class="form-control" id="calleRe" name="calleRe">
				<div class="form-row">
    					<div class="form-group col-md-4">
      						<label for="numextRe">No exterior</label>
      						<input type="text" class="form-control" id="numextRe" >
    					</div>
    					<div class="form-group col-md-4">
      						<label for="numintRe">No Interior</label>
      						<input type="text" class="form-control" id="numintRe" >
    					</div>
    					<div class="form-group col-md-4">
      						<label for="cpRe">C.P</label>
      						<input type="text" class="form-control" id="cpRe" >
    					</div>
    					<label for="coloniaRe">Colonia</label>
						<input type="text" class="form-control" id="coloniaRe" >
						<div class="form-row">
    					<div class="form-group col-md-6">
      						<label for="estadoRe">Estado</label>
      						<input type="text" class="form-control" id="estadoRe" >
    					</div>
    					<div class="form-group col-md-6">
      						<label for="municipioRe">Municipio</label>
      						<input type="text" class="form-control" id="municipioRe" >
    					</div>
    					
				</div>
				</div>
			</div>
		</div>
			<div class="row">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Nombre <span>*</span></th>
							<th scope="col">RFC</th>
							<th scope="col">Calle</th>
							<th>No Exterior</th>
							<th>No Interior</th>
							<th>Colonia</th>
							<th>Municipio</th>
							<th>CP</th>
							<th>Correo</th>
							<th>Telefono</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input class="form-control" type="text" name="" id="" required></td>
							<td><input class="form-control" type="text" name="" id=""></td>
							<td><input class="form-control" type="text" name="" id=""></td>
							<td><input class="form-control" type="text" name="" id=""></td>
							<td><input class="form-control" type="text" name="" id=""></td>
							<td><input class="form-control" type="text" name="" id=""></td>
							<td><input class="form-control" type="text" name="" id=""></td>
							<td><input class="form-control" type="text" name="" id=""></td>
							<td><input class="form-control" type="text" name="" id=""></td>
							<td><input class="form-control" type="text" name="" id=""></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row">
				<table class="table table-hover">
					<thead>
						<th>Tipo</th>
						<th>Documento</th>
					</thead>
					<tbody>
						<tr>
							<td>Copia Certificada poder notarial del representante legal<span>*</span></td>
							<td><input type="file" class="form-control" required></td>
						</tr>
						<tr>
							<td>Copia Certificada acta constitutiva(persona Moral)<span>*</span></td>
							<td><input type="file" class="form-control" required></td>
						</tr>
						<tr>
							<td>Identificacion oficial del propietario<span>*</span></td>
							<td><input type="file" class="form-control" required></td>
						</tr>
						<tr>
							<td>Identificacion oficial del representante legal<span>*</span></td>
							<td><input type="file" class="form-control" required></td>
						</tr>
						<tr>
							<td>Copia inscripcion RFC<span>*</span></td>
							<td><input type="file" class="form-control" required></td>
						</tr>
					</tbody>
				</table>
			</div>
			<p class="text-danger">Campos con * son requeridos</p>
		<button class="btn btn-success">Enviar</button>
	</form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/control.js"></script>
</html>