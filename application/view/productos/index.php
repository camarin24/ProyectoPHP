<div id="masthead">  
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>Productos
          <p class="lead"></p> 
        </h1>
      </div>
      <div class="col-md-5">
        <div class="well well-lg"> 
          <div class="row">
            <div class="col-sm-12">
              <?php if ($_SESSION['tipoUsuario'] == '1'){ ?>
              <h2 class="color-white"><a href="javascript:proyecto.modal(myModalP)" class="color-white">Registrar producto</a></h2>
              <?php }; ?>
              <div class="modal fade color-purple" id="myModalP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header color-purple">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title color-purple" id="myModalLabel">Registra tu producto</h4>
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo URL?>productos/agregarProducto" class="form-vertical"  method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="">Nombre del producto</label>
                          <input type="text" class="form-control" id="txtNombreProducto" name="txtNombreProducto">
                        </div>
                        <div class="form-group">
                          <label for="">Estado</label>
                          <input type="text" class="form-control" id="txtEstado" name="txtEstado">
                        </div>
                        <div class="form-group">
                          <label for="">Existencias</label>
                          <input type="text" class="form-control" id="txtExistencias" name="txtExistencias">
                        </div>
                        <div class="form-group">
                          <label for="">Fabricante</label>
                          <input type="text" class="form-control" id="txtFabricante" name="txtFabricante">
                        </div>
                        <div class="form-group">
                          <label for="">Descripción</label>
                          <textarea class="form-control" name="txtDescripcion" id="txtDescripcion" cols="0" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="">Imagen</label>
                          <input type="file" id="txtURL" name="txtURL">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary" name="btnRegistrarProducto">Registrar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div><!-- /cont -->

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="top-spacer"> </div>
      </div>
    </div> 
  </div><!-- /cont -->
</div>
<div class="modal fade color-purple" id="myModalM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header color-purple">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title color-purple" id="myModalLabel">Registra tu producto</h4>
      </div>
      <div class="modal-body">
      <form action="<?php echo URL?>productos/editarProductos" class="form-vertical"  method="post">
       <div class="form-group">
            <label for="">Id del producto</label>
            <input type="text" class="form-control" id="txtIdM" name="txtId" >
          </div>
          <div class="form-group">
            <label for="">Nombre del producto</label>
            <input type="text" class="form-control" id="txtNombreProductoM" name="txtNombreProducto">
          </div>
          <div class="form-group">
            <label for="">Estado</label>
            <input type="text" class="form-control" id="txtEstadoM" name="txtEstado">
          </div>
          <div class="form-group">
            <label for="">Existencias</label>
            <input type="text" class="form-control" id="txtExistenciasM" name="txtExistencias">
          </div>
          <div class="form-group">
            <label for="">Fabricante</label>
            <input type="text" class="form-control" id="txtFabricanteM" name="txtFabricante">
          </div>
          <div class="form-group">
            <label for="">Descripción</label>
            <textarea class="form-control" name="txtDescripcion" id="txtDescripcionM" cols="0" rows="5"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" name="btnModificarProducto">Modificar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel">
        <div class="panel-body">
          <!--/stories-->
          <?php foreach ($lista as $key => $value): ?>
            <div class="row">    
              <br>
              <div class="col-md-2 col-sm-3 text-center">
                <a class="story-title" href="#"><img alt="" src="<?php echo URL.$value->url; ?>" style="width:100px;height:100px" class="img-circle"></a>
              </div>
              <div class="col-md-10 col-sm-9">
                <h3><?php echo $value->nombreProducto ?></h3>
                <div class="row">
                  <div class="col-xs-9">
                    <h4><span class="label label-default">Existencias: <?php echo $value->existencias ?></span></h4><h4>
                    <small style="font-family:courier,'new courier';" class="text-muted">Fabricante • <?php echo $value->fabricante ?></small><br>  
                    <small style="font-family:courier,'new courier';" class="text-muted">Descripción • <?php echo $value->descripcion ?></small>
                  </h4></div>
                  <div class="col-xs-3"></div>
                </div>
                <?php if ($_SESSION['tipoUsuario'] == '1'){ ?>
                <br><br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-6"></div><button onclick="proyecto.modificar(myModalM,'<?php echo $value->nombreProducto?>','<?php echo $value->estado ?>','<?php echo $value->existencias ?>','<?php echo $value->fabricante ?>','<?php echo $value->descripcion ?>','<?php echo $value->idProducto ?>')" name="btnModificarProducto" type="button" class="btn btn-success">Modificar producto</button>
                    <div class="col-md-3"><a class="btn btn-danger" href="<?php echo URL .' productos/eliminarProducto/'.$value->idProducto?>">Eliminar producto</a></div>
                  </div> 
                </div> 
                <?php }; ?>

              </div>
            </div>
            <hr>
          <?php endforeach; ?>
          <!--/stories-->

        </div>
      </div>
    </div><!--/col-12-->
  </div>
</div>
<hr>
<div class="container" id="footer">
  <div class="row">
    <div class="col col-sm-12">

      <h1>Follow Us</h1>
      <div class="btn-group">
       <a class="btn btn-twitter btn-lg" href="http://www.twitter.com"><i class="icon-twitter icon-large"></i> Twitter</a>
       <a class="btn btn-facebook btn-lg" href="http://www.facebook.com"><i class="icon-facebook icon-large"></i> Facebook</a>
       <a class="btn btn-google-plus btn-lg" href="#"><i class="icon-google-plus icon-large"></i> Google+</a>
     </div>

   </div>
 </div>
</div>
<hr>
<hr>

