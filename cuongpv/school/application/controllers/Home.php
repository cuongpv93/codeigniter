<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function login()
    {
        $this->load->model("User_model");
        $data["user"]=$this->User_model->listuser();
        if($this->input->post('login') && $this->input->post('username') && $this->input->post('password')){
            $email = $this->input->post('username');
            $password = $this->input->post('password');
            $emailpt = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
            $passpt = "/^[A-Za-z]\w{7,14}$/";
            if (!preg_match($emailpt, $email)) {
                echo '<script type="text/javascript">alert("Tai khoan khong dung dinh dang!");</script>';
            }
            if (!preg_match($passpt, $password)) {
                echo '<script type="text/javascript">alert("Mat khau khong dung dinh dang!");</script>';
            }
            if (preg_match($emailpt, $email) && preg_match($passpt, $password)) {
               $checkemail = 0;
                foreach ($data as $key => $value) {
                    foreach ($value as $key => $value) {
                        if($email == $value['email']&& $password == $value['password'])
                            $checkemail = 1;
                    }
                }
                if ($checkemail) {
                    header("Location: http://localhost/cuongpv/school/sinhvien/showlist");
                } else {
                    echo '<script type="text/javascript">alert("Dang nhap khong thanh cong! Sai tai khoan hoac mat khau.");</script>';
                }
            }            
        }  
        $this->load->view('frontend/layout/login_form');
    }

    public function register()
    {
    	$this->load->model("User_model");
    	$data["user"]=$this->User_model->listuser();
    	
        if($this->input->post('register') && $this->input->post('username') && $this->input->post('password')){
            $email = $this->input->post('username');
            $password = $this->input->post('password');
            $emailpt = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
            $passpt = "/^[A-Za-z]\w{7,14}$/";
            if (!preg_match($emailpt, $email)) {
                echo '<script type="text/javascript">alert("Tai khoan khong dung dinh dang!");</script>';
            }
            if (!preg_match($passpt, $password)) {
                echo '<script type="text/javascript">alert("Mat khau khong dung dinh dang!");</script>';
            }
            if (preg_match($emailpt, $email) && preg_match($passpt, $password)) {
               $checkemail = 1;
                foreach ($data as $key => $value) {
                    foreach ($value as $key => $value) {
                        if($email == $value['email'])
                            $checkemail = 0;
                    }
                }
                if ($checkemail) {
                        $info = array(
                        'email' => $email, 
                        'password' => $password,
                        );
                    $this->db->insert('user',$info);
                    echo "<script> alert('Dang ki thanh cong!'); window.location.href='http://localhost/cuongpv/school/home/login';</script>";
                } else {
                    echo '<script type="text/javascript">alert("Tai khoan da ton tai!");</script>';
                }
            }            
        }  
        $this->load->view('frontend/layout/register');     
    }

    public function test_ajax(){
        
    }

    public function printdata(){
        $this->load->model("User_model");
        $data=$this->User_model->listuser();
        die(json_encode($data));
    }
}
?>