<?php
/**
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_Utility extends CI_Controller
{
  	public function __construct()
  	{
	    parent::__construct();
	    //date_default_timezone_set("Asia/Kolkata");
	}
	public function signout()
	{
		$this->session->sess_destroy();
		redirect('login/','refresh');
	}
	public function access_denied()
	{
	    $this->load->view('common/page_403');
	}

  	public function page_not_found()
  	{
    	$this->load->view('common/page_404');
  	}
}
