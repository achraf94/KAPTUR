<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ci_home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('project_model');
    }
    
    function issues(){
        $data["issues"] = $this->project_model->getIssues();
        $this->load->view("issues_risks",$data);
    }

    function hoverCrad(){
        $this->load->view("hover");
    }
}