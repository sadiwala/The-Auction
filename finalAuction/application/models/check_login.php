<?php
	class Check_login extends CI_model
	{
		function check($team,$pass)
		{
			$n=$this->db->where(['teamname'=>$team,'pass'=>$pass])
						->get('team');
			if($n->num_rows())
			{
				return $n->row()->id;
			}
			else
			{
				return FALSE; 	
			}
		}
	}
?>