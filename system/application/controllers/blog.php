<?php
class Blog extends Controller {

	function index()
	{ echo $this->load->database();
		$this->load->view('login');
              $this->load->model('Login');
               //$this->load->model('input');
              $this->Login->authenticateLogin(); 
	}

        function comments()
        {
                 echo "Hi";
        }
        function welcome($id)
        {
                echo "Welcome the world of MVC".$id;
        }
}
?>
