<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
        $dato= array(
            'string'=>'Hola mundo',
            'stringer'=>'mas datos'
        );

		$this->load->view('welcome_message', $dato);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */