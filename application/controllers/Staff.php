<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

	public function index()
	{
        $crud = new grocery_CRUD();

        $crud->set_table('company');
        $crud->columns('id','name','address','email','phone','fax');

//        $crud->display_as('salesRepEmployeeNumber','from Employeer')
//            ->display_as('customerName','Name')
//            ->display_as('contactLastName','Last Name');
        $crud->set_subject('Company');
//        $crud->set_relation('salesRepEmployeeNumber','employees','lastName');

        $output = $crud->render();

		$this->load->view('company', $output);
	}
}
