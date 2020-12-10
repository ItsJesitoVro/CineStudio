<aside>
  <div class="row">
    <div class="col-lg-3 col-sm-3 col-xs-12">
      <div class="fakeimg sugerencias">
      <h2 class="text-danger">Sugerencia</h2>
      <h5 class="text-warning">El Día Del Fin Del Mundo</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.</p></div>
      <div>.    </div>
      <div class="fakeimg sugerencias">
      <h2 class="text-danger">Sugerencia</h2>
      <h5 class="text-warning">Las Brujas</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.</p></div>
    </div>

    <div class="col-lg-9 col-sm-9 col-xs-12">
    <h2 class="display-4">Redactar Noticia</h2>
    <h4>Título:</h4>
    <form method="post" role= "form" action="<?php echo base_url(); ?>/index.php/Administrador/index_accion">
      <div>
      <textarea class="form-control" rows="1" id="titulo" name="titulo"></textarea>
      </div>
      <div class="form-group">
      <h4>Contenido:</h4>
      <textarea class="form-control" rows="25" id="contenido" name="contenido"></textarea>
      </div>
      <div>
        <h4>Autor:</h4>
      <textarea class="form-control" rows="1" id="autor" name="autor"></textarea>
      </div>
      <div>
        <h4>Fecha: </h4>
      <textarea class="form-control" rows="1" id="fecha" name="fecha"></textarea>
      </div>
      <div class="form-group">
        <h3>Recuerda subir una foto:</h3>
      <input type="file" class="form-control-file border" name="imagen" id="imagen">
      </div>
      
      <button type="submit" class="btn btn-danger btn-lg" name="terror" id="teror">Enviar</button>
      </form>
    </div>
  </div>  
    </aside>