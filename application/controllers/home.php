<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->helper('url');
        $data['base_url'] = base_url();
		
		//Grab remaining number of gonepons
		
		$number = 124;
		
		$data['number_left'] = $number;
		$this->load->view('home', $data);
	}

	public function search()
	{   
	    $this->load->helper('url');
        $data['base_url'] = base_url();
		//Do the search.
        $this->load->view('search', $data);
	}

	public function browse()
	{   
	    $this->load->helper('url');
        $data['base_url'] = base_url();
		//grab the data.
        $this->load->view('browse', $data);
	}

	public function about()
	{   
	    $this->load->helper('url');
        $data['base_url'] = base_url();
		//
        $this->load->view('about', $data);
	}

	public function get()
	{   
	    $this->load->helper('url');
        $data['base_url'] = base_url();
		//
        $this->load->view('get', $data);
	}

	public function shout()
	{   
	    $this->load->helper('url');
        $data['base_url'] = base_url();
		//
        $this->load->view('shout', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
