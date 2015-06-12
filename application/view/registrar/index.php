<div class="container position">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="panel border-radius padding ">
				<form action="<?php echo URL ?>registrar/addUser" class="form-vertical" method="post">
					<div class="form-group">
						<label for="">Nombre</label>
						<input type="text" class="form-control" id="txtNombre" name="txtNombre">
					</div>
					<div class="form-group">
						<label for="">Apellido</label>
						<input type="text" class="form-control" id="txtApellido" name="txtApellido">
					</div>
					<div class="form-group">
						<label for="">Nombre de usuario</label>
						<input type="text" class="form-control" id="txtNombreUsuario" name="txtNombreUsuario">
					</div>
					<div class="form-group">
						<label for="">Contraseña</label>
						<input type="password" class="form-control" id="txtContrasenia" name="txtContrasenia">
					</div>
					<div class="form-group">
						<label for="">Pregunta de seguridad</label>
						<select class="form-control" name="ddlPregunta">
							<option value="1">¿Cual es el nombre de tu primer mascota?</option>
							<option value="2">¿Donde vive tu papá?</option>
							<option value="3">¿Como se llama tu mejor amigo?</option>
							<option value="4">¿Cual era tu materia favorito?</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Respuesta de seguridad</label>
						<input type="text" class="form-control" id="txtRespuesta" name="txtRespuesta">
					</div>
					<div class="form-group">
						<input type="radio" name="rdbGroupTipoP" value="1"> Administrador<br>
						<input type="radio" name="rdbGroupTipoP" value="2"> Consumidor
					</div>
					<div class="form-group">
						<button type="submit" name="btnRegistrar" class="btn btn-primary">Registrar</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
