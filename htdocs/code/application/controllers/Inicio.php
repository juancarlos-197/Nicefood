<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	
	public function index()
	{
	$datos['titulo']="NiceFood";
	$datos['banner']=$this->load->view('banner',$datos,true);
	$datos['slider']=$this->load->view('slider',$datos,true);
	$datos['contenido']=$this->load->view('nosotros',$datos,true);
	$datos['noticias']=$this->load->view('noticias',$datos,true);
	$datos['informacion']=$this->load->view('informacion',$datos,true);
	$datos['acercade']=$this->load->view('acercade',$datos,true);

	
     $this->load->view('index',$datos,false);

	}

	public function combos()
	{
		$this->load->model('Model_compra','modelo');
	//$datos['informacion']=$this->load->view('informacion',$datos,true);
	
	$datos['titulo']="NiceFood";
	$datos['banner']=$this->load->view('banner',$datos,true);
	$datos['slider']='';//$this->load->view('slider',$datos,true);
	
	$datos['compras']=$this->modelo->get_combos();

	$datos['contenido']=$this->load->view('cuadrocom',$datos,true);
	
	$datos['noticias']='';//$this->load->view('noticias',$datos,true);
	$datos['informacion']=$this->load->view('informacion',$datos,true);
     $this->load->view('index',$datos,false);

	}



public function carta()
	{
		$this->load->model('Model_compra','modelo');
	//$datos['informacion']=$this->load->view('informacion',$datos,true);
	
	$datos['titulo']="NiceFood";
	$datos['banner']=$this->load->view('banner',$datos,true);
	$datos['slider']='';//$this->load->view('slider',$datos,true);
	
	$datos['compras']=$this->modelo->get_carta();

	$datos['contenido']=$this->load->view('cuadro',$datos,true);
	
	$datos['noticias']='';//$this->load->view('noticias',$datos,true);
	$datos['informacion']=$this->load->view('informacion',$datos,true);
	
     $this->load->view('index',$datos,false);

	}






public function tucombo()
	{
		$this->load->model('Model_compra','modelo');
	//$datos['informacion']=$this->load->view('informacion',$datos,true);
	
	$datos['titulo']="NiceFood";
	$datos['banner']=$this->load->view('banner',$datos,true);
	$datos['slider']='';//$this->load->view('slider',$datos,true);
	$datos['tucombo']=$this->load->view('tucombo',$datos,true);
	//$datos['compras']=$this->modelo->get_carta();

	$datos['contenido']=$this->load->view('carta',$datos,true);
	
	$datos['noticias']='';//$this->load->view('noticias',$datos,true);
	$datos['informacion']=$this->load->view('informacion',$datos,true);
	
     $this->load->view('tucombo',$datos,false);

	}




public function compra()
	{
		$this->load->model('Model_compra','modelo');
	//$datos['informacion']=$this->load->view('informacion',$datos,true);
	
	$datos['titulo']="NiceFood";
	$datos['banner']=$this->load->view('banner',$datos,true);
	$datos['slider']='';//$this->load->view('slider',$datos,true);
	$datos['compra']=$this->load->view('compra',$datos,true);
	//$datos['compras']=$this->modelo->get_carta();

	//$datos['contenido']=$this->load->view('cuadro',$datos,true);
	
	$datos['noticias']='';//$this->load->view('noticias',$datos,true);
	$datos['informacion']=$this->load->view('informacion',$datos,true);
	
     $this->load->view('compra',$datos,false);

	}




public function acercade()
	{
		$this->load->model('Model_compra','modelo');
	//$datos['informacion']=$this->load->view('informacion',$datos,true);
	
	$datos['titulo']="NiceFood";
	$datos['banner']=$this->load->view('banner',$datos,true);
	$datos['slider']='';//$this->load->view('slider',$datos,true);
	$datos['acercade']=$this->load->view('acercade',$datos,true);
	//$datos['compras']=$this->modelo->get_carta();

	//$datos['contenido']=$this->load->view('cuadro',$datos,true);
	
	$datos['noticias']='';//$this->load->view('noticias',$datos,true);
	$datos['informacion']=$this->load->view('informacion',$datos,true);
	
     $this->load->view('acercade',$datos,false);

	}




public function contactos()
	{
		$this->load->model('Model_compra','modelo');
	//$datos['informacion']=$this->load->view('informacion',$datos,true);
	
	$datos['titulo']="NiceFood";
	$datos['banner']=$this->load->view('banner',$datos,true);
	$datos['slider']='';//$this->load->view('slider',$datos,true);
	$datos['contactos']=$this->load->view('contactos',$datos,true);
	//$datos['compras']=$this->modelo->get_carta();

	//$datos['contenido']=$this->load->view('cuadro',$datos,true);
	
	$datos['noticias']='';//$this->load->view('noticias',$datos,true);
	$datos['informacion']=$this->load->view('informacion',$datos,true);
	
     $this->load->view('contactos',$datos,false);

	}


}
