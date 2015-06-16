<!-- Modal del registro -->
<div class="modal fade color-purple" id="myModalR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrate</h4>
      </div>
      <div class="modal-body">
        <form action="" class="form-vertical" method="post">
          <div class="form-group">
            <label for="">Tipo de Pqr</label>
            <input type="text" class="form-control" id="txtTipoPqr" name="txtTipoPqr">
          </div>
          <div class="form-group">
            <label for="">Titulo pqr</label>
            <input type="text" class="form-control" id="txTtitulo" name="txTtitulo">
          </div>
          <div class="form-group">
            <label for="">Descripcion</label>
            <textarea class="form-control" id="txtCategoria" name="txtCategoria"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" id="btnCerrar">Cerrar</button>
            <button type="button" class="btn btn-primary" id="btnRegistrarse">Registrarse</button>
          </div>
        </form>
     </div>

    </div>
  </div>
</div>
<!-- Modal del Login -->
<div class="modal fade color-purple" id="myModalL" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresa</h4>
      </div>
      <div class="modal-body">
        <form action="" class="form-vertical">
          <div class="form-group">
            <label for="">Nombre de usuario</label>
            <input type="text" class="form-control" id="txtNombreUsuario" name="txtNombreUsuario">
          </div>
          <div class="form-group">
            <label for="">Contraseña</label>
            <input type="text" class="form-control" id="txtContraseña" name="txtContraseña">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Iniciar sesion</button>
      </div>
    </div>
  </div>
</div>
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
                    <form action="" class="form-vertical">
                      <div class="form-group">
                      <label for="">Nombre del producto</label>
                        <input type="text" class="form-control" id="txtNombreUsuario" name="txtNombreUsuario">
                      </div>
                      <div class="form-group">
                        <label for="">Existencias</label>
                        <input type="text" class="form-control" id="txtContraseña" name="txtContraseña">
                      </div>
                      <div class="form-group">
                        <label for="">Fabricante</label>
                        <input type="text" class="form-control" id="txtContraseña" name="txtContraseña">
                      </div>
                      <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea class="form-control" name="" id="" cols="0" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="">Imagen</label>
                         <input type="file" id="exampleInputFile">
                      </div>
                     
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Registrar</button>
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
       
          <div class="row">    
            <br>
            <div class="col-md-2 col-sm-3 text-center">
              <a class="story-title" href="#"><img alt="" src="http://api.randomuser.me/portraits/thumb/men/29.jpg" style="width:100px;height:100px" class="img-circle"></a>
            </div>
            <div class="col-md-10 col-sm-9">
              <h3>TrendPaper - What's Trending in the World</h3>
              <div class="row">
                <div class="col-xs-9">
                  <h4><span class="label label-default">betali.st</span></h4><h4>
                  <small style="font-family:courier,'new courier';" class="text-muted">Last week • <a href="#" class="text-muted">Read More</a></small>
                </h4></div>
                <div class="col-xs-3"></div>
              </div>
              <br><br>
            </div>
          </div>
          <hr>
          <!--/stories-->
          <a href="/" class="btn btn-primary pull-right btnNext">More <i class="glyphicon glyphicon-chevron-right"></i></a>  
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