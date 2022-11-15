<?php

class Mdl_bienvenida extends CI_MODEL
{
    function __construct()
    {  
        parent ::__construct();
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


    function obtener_persona_all()
    {
        $consulta="Select * from p_persona;";
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



}
