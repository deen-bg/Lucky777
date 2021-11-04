<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

    public function index()
	{	
		$this->load->view('head');
		$this->load->view('blog/list_blog');

	}
    /**
     * get 1 to be paramiter number any one 
     */
    public function detail()
    {
        $this->load->view('head');
		$this->load->view('blog/list_desc');

    }
}
