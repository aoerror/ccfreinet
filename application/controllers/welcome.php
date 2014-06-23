<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('header');
		$this->load->view('login');
	}

	public function registros()
	{
		$data['title'] = "REGISTRO";
		$this->load->view('header2',$data);
		$this->load->view('registro');

	}
	public function secretarias()
	{
		$data['title'] = "INICIO:SECRETARIA";
		$data['nombre'] = "Nombre de la secretaria";
		$this->load->view('header2',$data);
		$this->load->view('secretarias/secretaria');

	}

	public function inscripciones()
	{
		$data['title'] = "INSCRIPCIONES";
		$this->load->view('header2',$data);
		$this->load->view('secretarias/inscripciones/menu');

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */