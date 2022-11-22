<?php

class Mdl_curso extends CI_MODEL
{
    function __construct()
    {  
        parent ::__construct();
    }    

    function insertar_curso($parametros)
    {
        $campos= array(
            'id_usuario'=> $parametros['cidusuario'],
            'id_sacramento'=> $parametros['cidsacramento'],
            'id_curso'=> $parametros['cidcurso'],
            'id_tipo_curso'=> $parametros['cidtipocurso'],
            'fecha_inicio'=> $parametros['cfechainicio'],
            'fecha_final'=> $parametros['cfechafinal'],
            'descripcion_curso'=> $parametros['cdescripcion'],
            'id_usuario_reg'=> $parametros['cid_usuario_reg'],
            'fecha_reg'=> $parametros['cfecha_reg'],
            'borrado'=> $parametros['cborrado'],
            'titulo_curso'=> $parametros['ctitulo']
        );
       
        $this->db->insert('p_curso',$campos);     
    }

    function insertar_persona($parametros)
    {
        $campos= array(
            'nombres'=> $parametros['cnombre'],
            'apellidop'=> $parametros['capellidop'],
            'apellidom'=> $parametros['capellidom']
        );
        echo $parametros['cnombre'];
        $this->db->insert('persona',$campos);     
    }
    function insertar_sacramento($parametros)
    {
        $campos= array(
            'id_sacramento'=> $parametros['cid_sacramento'],
            'tipo_sacramento'=> $parametros['ctipo_sacramento'],
            'borrado'=> $parametros['cborrado']
        );
        echo $parametros['cid_sacramento'];
        $this->db->insert('p_sacramento',$campos);     
    }

    function modificar_persona($parametros)
    {
        $id =$parametros['cid'];
        $campos= array(
            'nombres'=> $parametros['cnombre'],
            'apellidop'=> $parametros['capellidop'],
            'apellidom'=> $parametros['capellidom']
        );
        
        
        
    $this->db->where('id', $id);

    $this->db->update('persona', $campos);





    }

    function buscar_curso($cbuscar_curso)
    {
        $consulta = "Select * from p_curso where titulo_curso like '%$cbuscar_curso%'";
        $resultado = $this->db->query($consulta);
        return $resultado->result_array();

    }

    function obtener_persona_all()
    {
        $consulta="Select * from p_persona;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }
    function obtener_curso_all()
    {
        $consulta="Select * from p_curso where borrado = 'N';";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }
    function obtener_evento_all()
    {
        $consulta="Select * from p_evento;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }
    function obtener_inscripcion_all()
    {
        $consulta="Select * from p_inscripcion;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }

      function obtener_sacramento_all()
    {
        $consulta="Select * from p_sacramento;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }
    function obtener_persona_by($parametros)
    {
        $this->db->select('*');
        $this->db->from('persona');
        $this->db->like('nombres', $parametros['cnombre']);
        $this->db->like('apellidop', $parametros['capellidop']);
        $this->db->like('apellidom', $parametros['capellidom']);
        $query = $this->db->get();
        return $query->result_array();
    }

    function eliminar_persona($id)
    {
        
        $consulta="Delete from persona where id= '".$id."';" ;
        $this->db->query($consulta);
        
    }

    function eliminar_curso($id)
    {
        
        $consulta="Delete from p_curso where id_curso= '".$id."';" ;
        $this->db->query($consulta);
        
    }



}
