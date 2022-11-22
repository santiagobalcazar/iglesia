
<div class="container">
<input type="hidden" class="form-control" id="txb_id2">
<form>
<div class="form-group">
      <label for="txb_id_buscar"> titulo del curso:</label>
      <input type="text" class="form-control" id="txb_id_buscar">
    </div>
    </form>
    <button class="btn btn-outline-success btn-lg" onclick="buscar_curso()">buscar</button>

    <td><button type='button' class="btn btn-outline-success btn-lg"data-toggle='modal' data-target='#ventana_actualizar' id="editar_bien">crear evento</button></td>     
    
 
</div>
<div>
  <h>
</h>
</div>
 
<div class="container" id="tabla_cursos">
</div>


<div class = 'modal fade' id = 'ventana_actualizar' tabindex = '-1' role='dialog' aria-labelledby="">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLiveLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Título modal</font></font></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span>
        </button>
      </div>
      <div class="modal-body">
        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ingrese los datos para actualizar</font></font></p>
     
        <div class="form-group">
      <label for="txb_id_sacramento"> id id_sacramento:</label>
      <input type="text" class="form-control" id="txb_id_sacramento">
    </div>
    <div class="form-group">
      <label for="txb_id_tipo_curso">id_tipo_curso:</label>
      <input type="text" class="form-control" id="txb_id_tipo_curso">
    </div>
    <div class="form-group">
      <label for="txb_fecha_inicio">fecha_inicio:</label>
      <input type="text" class="form-control" id="txb_fecha_inicio">
    </div>
    <div class="form-group">
      <label for="txb_fecha_final">fecha_final:</label>
      <input type="text" class="form-control" id="txb_fecha_final">
    </div>
    <div class="form-group">
      <label for="txb_descripcion_curso">descripcion_curso:</label>
      <input type="text" class="form-control" id="txb_descripcion_curso">
    </div>
    <div class="form-group">
      <label for="txb_titulo">titulo:</label>
      <input type="text" class="form-control" id="txb_titulo">
    </div>
    
    
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cerrar</font></font></button>
        <button type="button" class="btn btn-success"  onclick = "guardar_curso();" data-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Guardar</font></font></button>
      </div>
    </div>
</div>
</div>





<!--
<div class="container" id="tabla_eventos">
</div>
<div class="container" id="tabla_inscripciones">
</div>


<div class="container">
<input type="hidden" class="form-control" id="txb_id3">
<form>
    <div class="form-group">
      <label for="txb_id_sacramento2">id_sacramento:</label>
      <input type="text" class="form-control" id="txb_id_sacramento2">
    </div>
    <div class="form-group">
      <label for="txb_tipo_sacramento"> tipo_sacramento:</label>
      <input type="text" class="form-control" id="txb_tipo_sacramento">
    </div>
    <div class="form-group">
      <label for="txb_borrado2"> borrado:</label>
      <input type="text" class="form-control" id="txb_borrado2">
    </div>
 
 
    </form>
  <button class="btn btn-outline-success btn-lg" onclick="guardar_sacramento()">Guardar</button>
  <button class="btn btn-outline-success btn-lg" onclick="a()">buscar</button>
 
</div>

<div class="container" id="tabla_sacramentos">
</div>

-->


