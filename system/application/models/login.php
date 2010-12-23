<?php
class Login extends Model{

var $username;
var $password;
function Login(){
     parent::Model();
}
function authenticateLogin(){

 $this->username=$this->input->post('uname');
 $this->password=$this->input->post('passwd');
 echo $loginquery="select * from code_login where username='".$this->username."' and password='".$this->password."'";
 $result=$this->db->query($loginquery);
 //$result=


 }
}
?>
