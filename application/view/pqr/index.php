
<div id="masthead">  
  <div class="container">
    <div class="row"> 
      <div class="col-md-7">
        <h1>PQR
          <p class="lead"></p>
        </h1>
      </div>
      <div class="col-md-5">
        <div class="well well-lg"> 
          <div class="row">
            <div class="col-sm-12">
             <h2 class="color-white"><a href="javascript:proyecto.modal(myModalP)" class="color-white">Registrar PQR</a></h2>
            
             <div class="modal fade color-purple" id="myModalP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header color-purple">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title color-purple" id="myModalLabel">Registra tu PQR</h4>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo URL ?>pqr/agregarPqr" class="form-vertical" method="post">
                      <div class="form-group">
                        <label for="">Objeto de la solicitud</label>
                        <select class="form-control" name="txtTipoPqr">
                          <option value="Peticion">Petición</option>
                          <option value="Queja">Queja</option>
                        </select>
                      </div>                      <div class="form-group">
                        <label for="">Titulo</label>
                        <input type="text" class="form-control" id="txtTitulo" name="txtTitulo">
                      </div>
                      <div class="form-group">
                        <label for="">Categoria</label>
                        <select class="form-control" name="txtCategoria">
                          <option value="P">Productos</option>
                          <option value="I">Inventario</option>
                          <option value="C">Cartera</option>
                          <option value="O">Otra</option>
                        </select>
                      </div> 
                      <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea class="form-control" name="txtDescripcion" id="txtDescripcion" cols="0" rows="5"></textarea>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-default" name="btnPQR" >Registar PQR</button>
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
<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel">
        <div class="panel-body">
          <!--/stories-->

          <?php foreach ($listapqr as $key => $value): ?>
          <div class="row">    
            <br>
            <div class="col-md-2 col-sm-3 text-center">
              <h1><?php echo $value->categoria ?></h1>
            </div>
            <div class="col-md-10 col-sm-9">
              <h3><?php echo $value->titulo ?></h3>
              <div class="row">
                <div class="col-xs-9">
                  <h4><span class="label label-default"><?php echo $value->tipoPqr ?></span></h4><h4>
                  <small style="font-family:courier,'new courier';" class="text-muted">Descripción: <?php echo $value->descripcion ?></small>
                </h4></div>
                <div class="col-xs-3"></div>
                <?php if ($_SESSION['tipoUsuario'] == '1'){ ?>
              <br><br>
                <div class="row">
                    <div class="form-group">
                      <div class="col-md-3"><a class="btn btn-danger" href="<?php echo URL .'pqr/eliminarPqr/'.$value->idPqr ?>">Eliminar PQR</a></div>
                    </div> 
                 </div> 
               <?php }; ?>
              </div>
              <br><br>
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