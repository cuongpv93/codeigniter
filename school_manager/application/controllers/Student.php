<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Student extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function showlist()
		{
			$data['sinhvien']=$this->db->select('*')->from('sinhvien')->get()->result_array();
			$this->load->view('frontend/layout/show',$data);
		}

		public function addstudent()
		{
			if($this->input->post('add')&&$this->input->post('name')&&$this->input->post('mssv')&&$this->input->post('lop')&&$this->input->post('diem'))
			{
				$name=$this->input->post('name');
				$mssv=$this->input->post('mssv');
				$lop=$this->input->post('lop');
				$diem=$this->input->post('diem');

				$data = array(
					'student' => $name, 
					'mssv' => $mssv,
					'lop' => $lop,
					'diem' => $diem,
					);
				$this->db->insert('sinhvien',$data);
				header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/student/showlist");
			}
			if($this->input->post('back'))
			{
				header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/student/showlist");
			}
			$this->load->view('frontend/layout/addstudent');
		}

		public function editstudent($id)
		{
			$id=(int)$id;
			$data['sinhvien']=$this->db->select('*')->from('sinhvien')->where(array('sid'=>$id))->get()->row_array();
			if(count($data['sinhvien']) ==0)
				{
					header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/student/showlist");
					die;
				}
			if($this->input->post('edit')){
				$name=$this->input->post('name');
				$mssv=$this->input->post('mssv');
				$lop=$this->input->post('lop');
				$diem=$this->input->post('diem');
				$data=array(
						'student' => $name,
						'mssv' => $mssv,
						'lop' => $lop,
						'diem' => $diem,
					);
				$this->db->where('sid',$id)->update('sinhvien',$data);
				header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/student/showlist");
			}
			if($this->input->post('back')){
				header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/student/showlist");
			}
			$this->load->view('frontend/layout/editstudent',$data);
		}

		public function deletestudent($id)
		{
			$id=(int)$id;
			$data['sinhvien']=$this->db->select('*')->from('sinhvien')->where(array('sid'=>$id))->get()->row_array();
			if(count($data['sinhvien']) ==0)
				{
					header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/student/showlist");
					die;
				}
			if($this->input->post('delete'))
			{
				$this->db->delete('sinhvien',array('sid' =>$id) );
				header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/student/showlist");
			}
			if($this->input->post('back'))
			{
				header("Location: http://cuongpham.freevnn.com/cuongpv/school_manager/student/showlist");
			}
			$this->load->view('frontend/layout/deletestudent',$data);
		}

		public function thongtin(){
			$data['thongtin']=$this->db->select('*')->from('sinhvien')->join('giaovien','sinhvien.lop=giaovien.lop')->get()->result_array();
			$this->load->view('frontend/layout/thongtin',$data);
		}
	}
?>