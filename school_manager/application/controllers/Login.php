<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function load_form()
    {
        $form=$this->load->view('login_view','',true);
        echo $form;
    }

    public function table()
    {
    	$data=$this->db->select('*')->from('sinhvien')->get()->result_array();
    	print_r($data);
    }
}
?>