<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_curso extends CI_Controller {
	function __construct()
    {
        parent ::__construct();
		$this->load->model('Mdl_curso');
    }   	


	public function index()
	{
		$this->load->view('View_curso/View_head');
		$this->load->view('View_curso/View_curso');
		$this->load->view('View_curso/View_footer');
		
	}
	
	public function buscar_curso()

	{
		$cbuscar_curso=$this->input->post('vbuscar_curso');
		
		echo json_encode($this->Mdl_curso->buscar_curso($cbuscar_curso));		
	}

	
	public function guardar_sacramento()
	{
		$id_sacramento=$this->input->post('vid_sacramento');
		$tipo_sacramento=$this->input->post('vtipo_sacramento');
		$borrado=$this->input->post('vborrado');

		$parametros['cid_sacramento']=$id_sacramento;
		$parametros['ctipo_sacramento']=$tipo_sacramento;
		$parametros['cborrado']=$borrado;


		


		$this->Mdl_curso->insertar_sacramento($parametros);
	}

	public function guardar()
	{
		$nombre=$this->input->post('vnombre');
		$apellidop=$this->input->post('vapellidop');
		$apellidom=$this->input->post('vapellidom');

		$parametros['cnombre']=$nombre;
		$parametros['capellidop']=$apellidop;
		$parametros['capellidom']=$apellidom;


		


		$this->Mdl_curso->insertar_persona($parametros);
	}


	public function guardar_curso()

	{
		$idusuario=$this->input->post('vidusuario');
		$idsacramento=$this->input->post('vidsacramento');
		$idcurso=$this->input->post('vidcurso');
		$idtipocurso=$this->input->post('vidtipocurso');
		$fechainicio=$this->input->post('vfechainicio');
		$fechafinal=$this->input->post('vfechafinal');
		$descripcion=$this->input->post('vdescripcion');
		$id_usuario_reg=$this->input->post('vid_usuario_reg');
		$fecha_reg=$this->input->post('vfecha_reg');
		$borrado=$this->input->post('vborrado');
		$titulo=$this->input->post('vtitulo');

		$parametros['cidusuario']=$idusuario;
		$parametros['cidsacramento']=$idsacramento;
		$parametros['cidcurso']=$idcurso;
		$parametros['cidtipocurso']=$idtipocurso;
		$parametros['cfechainicio']=$fechainicio;
		$parametros['cfechafinal']=$fechafinal;
		$parametros['cdescripcion']=$descripcion;
		$parametros['cid_usuario_reg']=$id_usuario_reg;
		$parametros['cfecha_reg']=$fecha_reg;
		$parametros['cborrado']=$borrado;
		$parametros['ctitulo']=$titulo;


		


		$this->Mdl_curso->insertar_curso($parametros);
	}



	public function modificar()
	{
		$id=$this->input->post('vid');
		$nombre=$this->input->post('vnombre');
		$apellidop=$this->input->post('vapellidop');
		$apellidom=$this->input->post('vapellidom');

		$parametros['cid']=$id;	
		$parametros['cnombre']=$nombre;
		$parametros['capellidop']=$apellidop;
		$parametros['capellidom']=$apellidom;


		


		$this->Mdl_curso->modificar_persona($parametros);
	}





	public function eliminar()
	{

		$id=$this->input->post('vid');
		$this->Mdl_curso->eliminar_persona($id);
	}

	public function eliminar_curso()
	{

		$id=$this->input->post('vid');
		$this->Mdl_curso->eliminar_curso($id);
	}

	public function obtener_todas_las_personas()
	{
		echo json_encode($this->Mdl_curso->obtener_persona_all());		
	}

	public function obtener_curso()
	{
		echo json_encode($this->Mdl_curso->obtener_curso_all());		
	}
	public function obtener_evento()
	{
		echo json_encode($this->Mdl_curso->obtener_evento_all());		
	}
	public function obtener_inscripcion()
	{
		echo json_encode($this->Mdl_curso->obtener_inscripcion_all());		
	}

	public function obtener_sacramento()
	{
		echo json_encode($this->Mdl_curso->obtener_sacramento_all());		
	}
	public function obtener_todas_las_personas_by()
	{
		$nombre=$this->input->post('vnombre');
		$apellidop=$this->input->post('vapellidop');
		$apellidom=$this->input->post('vapellidom');

	
		$parametros['cnombre']=$nombre;
		$parametros['capellidop']=$apellidop;
		$parametros['capellidom']=$apellidom;

		echo json_encode($this->Mdl_curso->obtener_persona_by($parametros));		
	}
   
}
