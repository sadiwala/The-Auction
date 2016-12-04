<?php
	class Login extends CI_Controller
	{
		function index()
		{
			if($this->session->userdata('id'))
			{
				return redirect('user');
			}
			$this->load->view('login_user');
		}
		function sucesful()
		{
			if($this->session->userdata('id'))
			{
				return redirect('user');
			}
			$this->form_validation->set_rules('team','Team Name','required|min_length[4]');
			$this->form_validation->set_rules('pass','Password','required|min_length[6]');
			if($this->form_validation->run())
			{
				$team=$this->input->post('team');
				$pass=$this->input->post('pass');
				$this->load->model('check_login');
				$id=$this->check_login->check($team,$pass);
				if($id)
				{
					$this->session->set_userdata('id',$id);
					return redirect('user');
				}
				else
				{

					$this->session->set_flashdata('login_failed','please enter correct username or password');
					return redirect('login');
				}
			}
			else
			{
				$this->load->view('login_user');		
			}
		}
	}
?>