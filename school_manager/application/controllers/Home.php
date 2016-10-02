<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function login()
    {
        $this->load->model("User_model");
        $data["user"]=$this->User_model->listuser();
        if($this->input->post('username')&& $this->input->post('password')){
            header("Location: http://localhost/cuongpv/school/sinhvien/showlist");
        }
        $this->load->view('frontend/layout/login_form');
    }

    public function register()
    {
        if($this->input->post('username')&& $this->input->post('password')){
            $email = $this->input->post('username');
            $password = $this->input->post('password');
            $info = array(
                        'email' => $email, 
                        'password' => $password,
                        );
            $this->db->insert('user',$info);
            echo "<script> window.location.href='http://localhost/cuongpv/school/home/login';</script>";
        }
        $this->load->view('frontend/layout/register'); 
    }
    public function checkemail(){
        $this->load->model("User_model");
        $data["user"] = $this->User_model->listuser();
        $email = $_POST["email"];
        $emailok = 1;
        $emailpt = "/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/";
        if(!preg_match($emailpt,$email)){
            echo "Email is not valid!";
        } else {
            foreach ($data as $key => $value) {
                foreach ($value as $key => $value) {
                    if ($email == $value["email"]) {
                        $emailok = 0;
                    }
                }
                if ($emailok) {
                    echo "You can use this email!";
                } else {
                    echo "This email already exist!";
                }
            }
        }
    }

    public function checkpassword(){
        $password = $_POST["password"];
        $passwordpt = "/^(?=.*[A-Z])[0-9a-zA-Z]{6,}$/";
        if (!preg_match($passwordpt,$password)) {
            echo "Pass word must atleast 6 characters and 1 uppercase letter";
        } else {
            echo "Password is fine";
        }
    }

    public function checklogin(){
        $this->load->model("User_model");
        $data["user"] = $this->User_model->listuser();
        $email = $_POST["email"];
        $password = $_POST["password"];
        $accountok = 0;
        foreach ($data as $key => $value) {
            foreach ($value as $key => $value) {
                if ($email == $value["email"] && $password == $value["password"]) {
                    $accountok = 1;
                }
            }
        }
       echo $accountok;
    }

    public function test(){

    }
}
?>