<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Teacher extends CI_Controller
{
	public function __construct()
		{
			parent::__construct();
		}

	public function show(){
		$data['giaovien']=$this->db->select('*')->from('giaovien')->order_by('tid asc')->get()->result_array();
		$this->load->view('frontend/layout/showteacher',$data);
	}

	public function addteacher(){
		if($this->input->post('add')&&$this->input->post('name')&&$this->input->post('lop'))
			{
				$name=$this->input->post('name');
				$lop=$this->input->post('lop');

				$data = array(
					'teacher' => $name, 
					'lop' => $lop,
					);
				$this->db->insert('giaovien',$data);
				header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/teacher/show");
			}
		if($this->input->post('back'))
			{
				header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/teacher/show");
			}
		$this->load->view('frontend/layout/addteacher');
	}

	public function deleteteacher($id){
		$id=(int)$id;
		$data['giaovien']=$this->db->select('*')->from('giaovien')->where(array('tid'=>$id))->get()->row_array();
		if(count($data['giaovien']) ==0)
				{
					header("Location:http://cuongpham.freevnn.com/cuongpv/school_manager/teacher/show");
					die;
				}
		if($this->input->post('delete'))
			{
				$this->db->delete('giaovien',array('tid' =>$id) );
				header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/teacher/show");
			}
		if($this->input->post('back'))
			{
				header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/teacher/show");
			}
		$this->load->view('frontend/layout/deleteteacher',$data);
	}

	public function editteacher($id){
		$id=(int)$id;
		$data['giaovien']=$this->db->select('*')->from('giaovien')->where(array('tid'=>$id))->get()->row_array();
		if(count($data['giaovien']) ==0)
				{
					header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/teacher/show");
					die;
				}
		if($this->input->post('edit')){
				$name=$this->input->post('name');
				$lop=$this->input->post('lop');
				$data=array(
						'teacher' => $name,
						'lop' => $lop,
					);
				$this->db->where('tid',$id)->update('giaovien',$data);
				header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/teacher/show");
			}
		if($this->input->post('back')){
				header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/teacher/show");
			}
		$this->load->view('frontend/layout/editteacher',$data);
	}
}
?>