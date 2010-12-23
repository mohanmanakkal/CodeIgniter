<?php

class Form extends Controller {
	
	function index()
	{       
		$this->load->helper(array('form', 'url'));
		$this->load->database();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname', 'Username', 'required');
                        $this->form_validation->set_rules('passwd', 'Password', 'required');	
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
                        	
		}
		else
		{  
                       $this->username=$this->input->post('uname');
                       $this->password=$this->input->post('passwd');
                       $loginquery="select * from code_login where username='".$this->username."' and password='".$this->password."'";
                       $result=$this->db->query($loginquery);
		       $this->load->view('loginsuccess');
		}
	}
}
?>
