<div class="container position">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="panel border-radius padding sombra">
				<form action="<?php echo URL ?>sesion/addUser1" class="form" method="post">
					<div class="form-group">
						<label for="">Nombre de usuario</label>
						<input name="txtNombreUsuario" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Contraseña</label>
						<input name="txtContrasenia" type="password" class="form-control">
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6"><button name="btnIngresar" type="submit" class="btn btn-primary">Ingresar</button></div>
							<div class="col-md-3"><a class="btn btn-danger" href="<?php echo URL ?>registrar/index">Registrarse</a></div>

						</div>	
					</div>
					<div class="form-control">
						<a href="javascript:proyecto.modal(myModalRC)">Recuperar contraseña</a>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-4"></div>
		<div class="modal fade color-purple" id="myModalRC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header color-purple">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title color-purple" id="myModalLabel">Recupera tu contraseña</h4>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo URL?>sesion/recuperar" class="form-vertical"  method="post" enctype="multipart/form-data">
                      <div class="form-group">
                      <label for="">Nombre de usuario</label>
                        <input type="text" class="form-control" id="txtNombreUsuario" name="txtNombreUsuario">
                      </div>
                      <div class="form-group">
                      <div class="form-group">
						<label for="">Pregunta de seguridad</label>
						<select class="form-control" name="txtPregunta">
							<option value="1">¿Cual es el nombre de tu primer mascota?</option>
							<option value="2">¿Donde vive tu papá?</option>
							<option value="3">¿Como se llama tu mejor amigo?</option>
							<option value="4">¿Cual es tu materia favorita?</option>
						</select>
					</div>
                      <div class="form-group">
                        <label for="">Respuesta de seguridad</label>
                        <input type="text" class="form-control" id="txtRespuesta" name="txtRespuesta">
                      </div>
                      <label for="">Nueva contraseña</label>
                        <input type="text" class="form-control" id="txtNuevaContrasenia" name="txtNuevaContrasenia">
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary" name="btnRecuperar">Recuperar</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
	</div>
</div>
