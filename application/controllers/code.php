<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Code extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('help');
        $this->load->helper('form');


    }

    function index()
    {

        $this->load->library('menu',array('Inicio','Contactos','Curso','mas info'));
        $data['mi_menu'] = $this->menu->construirMenu();
        $this->load->view('codigo/header');
        $this->load->view('codigo/welcome', $data);

    }

    function mundo()
    {
        $dato = array(
            'string' => 'Hola mundo',
            'stringer' => 'mas datos'
        );
        $this->load->view('codigo/header', $dato);
        $this->load->view('codigo/welcome', $dato);

    }
    function nuevo(){

        $this->load->view('codigo/header');
        $this->load->view('codigo/formulario');


        $this->load->helper('smiley');
        $this->load->library('table');
        $image_array = get_clickable_smileys('http://localhost/codeigniter2/user_guide/images/smileys/',
            'comments');
        $col_array = $this->table->make_columns($image_array, 10);
        $data['smiley_table'] = $this->table->generate($col_array);
        $this->load->view('smiley_view', $data);


    }


}