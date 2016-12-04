<?php
	class User extends CI_Controller
	{
		function index()
		{
			if(!$this->session->userdata('id'))
			{
                                return redirect('login');
			}
			$id=$this->session->userdata('id');
			$this->load->model('player');
			$p=$this->player->plyr($id);
			$t=$this->player->team($id);
			$y=$this->player->your_bid($id);
			$this->load->view('user_home',['p'=>$p,'t'=>$t,'b'=>$p,'y'=>$y,'id'=>$id]);
		}
		function my_team()
		{
			if(!$this->session->userdata('id'))
			{
				return redirect('login');
			}
			$id=$this->session->userdata('id');
			$this->load->model('player');
			$p=$this->player->your_team($id);
			$t=$this->player->team($id);
			$b=$this->player->plyr($id);
			$this->load->view('user_sold',['p'=>$p,'t'=>$t,'b'=>$b,'y'=>$p,'id'=>$id]);
		}
		function sold_out()
		{
			if(!$this->session->userdata('id'))
			{
				return redirect('login');
			}
			$id=$this->session->userdata('id');
			$this->load->model('player');
			$p=$this->player->sold($id);
			$t=$this->player->team($id);
			$b=$this->player->plyr($id);
                        $uvb=$this->player->your_team($id);
			$this->load->view('user_sold',['p'=>$p,'t'=>$t,'b'=>$b,'y'=>$uvb,'id'=>$id]);
		}
		function search_p()
		{
			if(!$this->session->userdata('id'))
			{
				return redirect('login');
			}
			$id=$this->session->userdata('id');
			//$this->load->model('player');
			$splyr=$this->input->post('splyr');
			$this->load->model('player');
			$t=$this->player->team($id);
			$b=$this->player->plyr($id);
			$p=$this->player->search_p($splyr,$id);
			$m=$this->player->your_team($id);
			$this->load->view('user_home',['p'=>$p,'t'=>$t,'b'=>$b,'y'=>$m,'id'=>$id]);
		}
		function logout()
		{
			$this->session->unset_userdata('id');
			return redirect('login');
		}
	}
?>		