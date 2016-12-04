<?php
	class Register extends CI_Controller
	{
		function index()
		{
			if($this->session->userdata('id'))
			{
				return redirect('user');
			}
			$this->load->view('registration.php');
		}
		function sucsesful()
		{
			if($this->session->userdata('id'))
			{
				return redirect('user');
			}
			$this->form_validation->set_message('is_unique','The Team Name is already registered.');
			$this->form_validation->set_rules('team','Team Name','required|min_length[4]|is_unique[team.teamname]');
			$this->form_validation->set_rules('pass','Password','required|min_length[6]');
			$this->form_validation->set_rules('fname','First Member Name','required');
			$this->form_validation->set_rules('sname','Second Member Name','required');
			$this->form_validation->set_rules('tname','Third Member Name','required');
			
			
			$this->form_validation->set_rules('femail','First Member Email','required|valid_email');
			$this->form_validation->set_rules('semail','Second Member Email','required|valid_email');
			$this->form_validation->set_rules('temail','Third Member Email','required|valid_email');
			if($this->form_validation->run())
			{
				
				$tname=$this->input->post('tname');
				$fname=$this->input->post('fname');
				$sname=$this->input->post('sname');
				$femail=$this->input->post('femail');
				$semail=$this->input->post('semail');
				$temail=$this->input->post('temail');
				$team=$this->input->post('team');
				$pass=$this->input->post('pass');
				$this->load->model('insert_team');
				if($this->insert_team->intable($team,$pass,$fname,$sname,$tname,$femail,$semail,$team))
				{
					echo "<script>alert('Your team is sucesfully registered');</script>";
					$this->load->model('check_login');
					$id=$this->check_login->check($team,$pass);
					if($id)
					{
						
                                          $this->session->set_userdata('id',$id);						
echo "<script>alert('Your team was successfully registered');</script>";
					}
return redirect('user');
					echo "<script>
				window.location='";echo base_url('index.php');echo "'
			</script>";
				}
				else
				{
					echo "connection to database failed...";
				}
			}
			else
			{
				$this->load->view('registration.php');
			}
		}
	}
?>