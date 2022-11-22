<script type="text/javascript">
$auxiliar_id = 0;
$id_usuario = 1;
$default = 'Default';
$borrado ='N';

listar_cursos();

/*
listar_eventos();
listar_inscripciones();
listar_sacramentos();*/


function auxiliar_id($id_curso,$id_sacramento,$id_tipo_curso,$fecha_inicio,$fecha_final,$descripcion_curso,$titulo){
$auxiliar_id = $id_curso;

$("#txb_id_sacramento").val($id_sacramento);
$("#txb_id_tipo_curso").val($id_tipo_curso);
$("#txb_fecha_inicio").val($fecha_inicio);
$("#txb_fecha_final").val($fecha_final);
$("#txb_descripcion_curso").val($descripcion_curso);
$("#txb_titulo").val($titulo);
$("#editar_bien").click();
}


function buscar_curso(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/buscar_curso");?>",
    data:{
      vbuscar_curso : $("#txb_id_buscar").val(), 
    },
    success: function(curso){
      crear_tabla_curso(curso);
    },
    dataType:'json'
});
}


function listar_sacramentos(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/obtener_sacramento");?>",
    data:{
    },
    success: function(sacramentos){
      crear_tabla_sacramentos(sacramentos);
    },
    dataType:'json'
});

}


function crear_tabla_sacramentos(sacramentos){
    if(sacramentos.length >0)
    {
     
      var tabla_dinamica="<table class='table table-striped'>";
      tabla_dinamica+="";
      
      tabla_dinamica+="<tr>";
      
      tabla_dinamica+="<th>id_sacramento</th>";
      tabla_dinamica+="<th>tipo sacramento</th>";
      tabla_dinamica+="<th>borrado</th>";
      tabla_dinamica+="<th>Acciones</th>";
      tabla_dinamica+="</tr>";
      
      var i;
      for(i=0;i<sacramentos.length;i++)
      {
        tabla_dinamica+="<tr>";
        
        tabla_dinamica+="<td>"+sacramentos[i].id_sacramento+"</td>";
        tabla_dinamica+="<td>"+sacramentos[i].tipo_sacramento+"</td>";
        tabla_dinamica+="<td>"+sacramentos[i].borrado+"</td>";
        tabla_dinamica+="<td>";
        tabla_dinamica+="<button class='btn btn-outline-success btn-lg' onclick=\"eliminar('" +sacramentos[i].id_usuario+ "')\">Eliminar</button>";
        tabla_dinamica+="<button class='btn btn-outline-danger btn-lg' onclick=\"editar('" +sacramentos[i].id_usuario+"')\">editar</button>";
        tabla_dinamica+="</td>";
        tabla_dinamica+="</tr>";
      }
      tabla_dinamica+="</table>";
      $("#tabla_sacramentos").html(tabla_dinamica);
      
    }
    else
    {
        $("#tabla_sacramentos").html('<div class="alert alert-info"><strong> No hay datos que mostrar<strong></div>');
    }
}


function listar_inscripciones(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/obtener_inscripcion");?>",
    data:{
    },
    success: function(inscripciones){
      crear_tabla_inscripciones(inscripciones);
    },
    dataType:'json'
});

}


function crear_tabla_inscripciones(inscripciones){
    if(inscripciones.length >0)
    {
     
      var tabla_dinamica="<table class='table table-striped'>";
      tabla_dinamica+="";
      
      tabla_dinamica+="<tr>";
      
      tabla_dinamica+="<th>Nombres</th>";
      tabla_dinamica+="<th>Apellido paterno</th>";
      tabla_dinamica+="<th>Apellido materno</th>";
      tabla_dinamica+="<th>Acciones</th>";
      tabla_dinamica+="</tr>";
      
      var i;
      for(i=0;i<inscripciones.length;i++)
      {
        tabla_dinamica+="<tr>";
        
        tabla_dinamica+="<td>"+inscripciones[i].id_persona+"</td>";
        tabla_dinamica+="<td>"+inscripciones[i].id_curso+"</td>";
        tabla_dinamica+="<td>"+inscripciones[i].concluido+"</td>";
        tabla_dinamica+="<td>";
        tabla_dinamica+="<button class='btn btn-outline-success btn-lg' onclick=\"eliminar('" +inscripciones[i].id_usuario+ "')\">Eliminar</button>";
        tabla_dinamica+="<button class='btn btn-outline-danger btn-lg' onclick=\"editar('" +inscripciones[i].id_usuario+"')\">editar</button>";
        tabla_dinamica+="</td>";
        tabla_dinamica+="</tr>";
      }
      tabla_dinamica+="</table>";
      $("#tabla_inscripciones").html(tabla_dinamica);
      
    }
    else
    {
        $("#tabla_inscripciones").html('<div class="alert alert-info"><strong> No hay datos que mostrar<strong></div>');
    }
}


function listar_eventos(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/obtener_evento");?>",
    data:{
    },
    success: function(eventos){
      crear_tabla_evento(eventos);
    },
    dataType:'json'
});

}


function crear_tabla_evento(eventos){
    if(eventos.length >0)
    {
     
      var tabla_dinamica="<table class='table table-striped'>";
      tabla_dinamica+="";
      
      tabla_dinamica+="<tr>";
      
      tabla_dinamica+="<th>Nombres</th>";
      tabla_dinamica+="<th>Apellido paterno</th>";
      tabla_dinamica+="<th>Apellido materno</th>";
      tabla_dinamica+="<th>Acciones</th>";
      tabla_dinamica+="</tr>";
      
      var i;
      for(i=0;i<eventos.length;i++)
      {
        tabla_dinamica+="<tr>";
        
        tabla_dinamica+="<td>"+eventos[i].id_usuario+"</td>";
        tabla_dinamica+="<td>"+eventos[i].id_evento+"</td>";
        tabla_dinamica+="<td>"+eventos[i].id_tipo_evento+"</td>";
        tabla_dinamica+="<td>";
        tabla_dinamica+="<button class='btn btn-outline-success btn-lg' onclick=\"eliminar('" +eventos[i].id_usuario+ "')\">Eliminar</button>";
        tabla_dinamica+="<button class='btn btn-outline-danger btn-lg' onclick=\"editar('" +eventos[i].id_usuario+"')\">editar</button>";
        tabla_dinamica+="</td>";
        tabla_dinamica+="</tr>";
      }
      tabla_dinamica+="</table>";
      $("#tabla_eventos").html(tabla_dinamica);
      
    }
    else
    {
        $("#tabla_eventos").html('<div class="alert alert-info"><strong> No hay datos que mostrar<strong></div>');
    }
}




function listar_cursos(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/obtener_curso");?>",
    data:{
    },
    success: function(cursos){
      crear_tabla_curso(cursos);
    },
    dataType:'json'
});

}


function crear_tabla_curso(cursos){
    if(cursos.length >0)
    {
     
      var tabla_dinamica="<table class='table table-striped'>";
      tabla_dinamica+="";
      
      tabla_dinamica+="<tr>";
      
      tabla_dinamica+="<th>titulo</th>";
      tabla_dinamica+="<th>fecha_inicio</th>";
      tabla_dinamica+="<th>fecha_final</th>";
      tabla_dinamica+="<th>descripcion_curso</th>";
  
      tabla_dinamica+="<th></th>";
      tabla_dinamica+="<th></th>";
      tabla_dinamica+="</tr>";
      
      var i;
      for(i=0;i<cursos.length;i++)
      {
        tabla_dinamica+="<tr>";
        
        tabla_dinamica+="<td>"+cursos[i].titulo_curso+"</td>";
        tabla_dinamica+="<td>"+cursos[i].fecha_inicio+"</td>";
        tabla_dinamica+="<td>"+cursos[i].fecha_final+"</td>";
        tabla_dinamica+="<td>"+cursos[i].descripcion_curso+"</td>";
        tabla_dinamica+="<td>";
        tabla_dinamica+="<button class='btn btn-outline-success btn-lg' onclick=\"eliminar_curso('" +cursos[i].id_curso+ "')\">Eliminar</button>";
        tabla_dinamica+="<td><button class='btn btn-outline-success btn-lg' onclick=\"auxiliar_id('" +cursos[i].id_curso+ "','"+cursos[i].id_sacramento+"','"+cursos[i].id_tipo_curso+"','"+cursos[i].fecha_inicio+"','"+cursos[i].fecha_final+"','"+cursos[i].descripcion_curso+"','"+cursos[i].titulo_curso+"')\">editar</button></td>";
       tabla_dinamica+="</td>";
        tabla_dinamica+="</tr>";
      }
      tabla_dinamica+="</table>";
      $("#tabla_cursos").html(tabla_dinamica);
      
    }
    else
    {
        $("#tabla_cursos").html('<div class="alert alert-info"><strong> No hay datos que mostrar<strong></div>');
    }
}

function guardar_curso(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/guardar_curso");?>",
    data:{
      vidusuario :$id_usuario,
      vidsacramento :$("#txb_id_sacramento").val(),
      vidcurso : 'Default',
      vidtipocurso :$("#txb_id_tipo_curso").val(),
      vfechainicio :$("#txb_fecha_inicio").val(),
      vfechafinal :$("#txb_fecha_final").val(),
      vdescripcion :$("#txb_descripcion_curso").val(),
      vid_usuario_reg :$id_usuario,
      vfecha_reg :'NOW()',
      vborrado :$borrado,
      vtitulo :$("#txb_titulo").val()
    },
    success: function(){
      listar_cursos();
    },

});

}



function guardar_sacramento(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/guardar_sacramento");?>",
    data:{
      vid_sacramento :$("#txb_id_sacramento2").val(),
      vtipo_sacramento :$("#txb_tipo_sacramento").val(),
      vborrado :$("#txb_borrado2").val()
    },
    success: function(){
      alert('aaaaaa');
    },

});

}


function guardar(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/guardar");?>",
    data:{
      vnombre :$("#txb_nombre").val(),
      vapellidop :$("#txb_apellidoP").val(),
      vapellidom :$("#txb_apellidoM").val()
    },
    success: function(){
      limpiar_campos();
    },

});

}



function editar(id,nombre,apellidop,apellidom){
  $("#txb_id").val(id);
  $("#txb_nombre").val(nombre);
  $("#txb_apellidoP").val(apellidop);
  $("#txb_apellidoM").val(apellidom);
}



function eliminar(id){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/eliminar");?>",
    data:{
      vid :id
      
    },
    success: function(){

    },

});

}

function eliminar_curso(id){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/eliminar_curso");?>",
    data:{
      vid :id
      
    },
    success: function(){
      listar_cursos();
    },

});

}

function guardar_actualizar()
{
  
  var id = $("#txb_id").val().length;
  if(id == 0){
    guardar();
  }else{
    modificar();
  }
  $("#txb_id").val("");
  listar_personas();
}



</script>

<footer>
</footer>
</body>




</html>