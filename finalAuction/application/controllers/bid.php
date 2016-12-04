<?php
	class Bid extends CI_Controller
	{
		function insert()
		{
			if(!$this->session->userdata('id'))
			{
				return redirect('login');
			}
			$t_id=$this->session->userdata('id');
			$bid_price=$this->input->post();
                        $mod_id=intval($t_id/8);
			$mode_id="players_info".$mod_id;
			foreach ($bid_price as $key => $value) 
			{
				$get=$this->db->where(['name'=>$key])
							->get('players_info'.$mod_id);
				$get=$get->result_array();
				$get_money=$this->db->where(['id'=>$t_id])
									->get('team');
				$get_money=$get_money->result_array();
				if($value>$get[0]['bid_price'])
				{
					if(!$get[0]['sold'])
					{
						if($value<=$get_money[0]['money'])
						{
							$m=$get_money[0]['money']-$value;
							if($t_id==$get[0]['team_id'])
							{
								$m=$m+$get[0]['bid_price'];
							}
							if($t_id!=$get[0]['team_id'])
							{
								$m_get=$this->db->where(['id'=>$get[0]['team_id']])
												->get('team');
								$m_get=$m_get->result_array();
								$m_id=$get[0]['team_id'];
								$m_money=$m_get[0]['money']+$get[0]['bid_price'];
								$this->db->query("UPDATE team SET money='$m_money' WHERE id='$m_id'");
							}
							$get_name=$get[0]['name'];
							$this->db->query("UPDATE team SET money='$m' WHERE id='$t_id' ");
							date_default_timezone_set("Asia/Kolkata");
							$timeS = date("j F y H:i:s");
							$timeE = date('j F y H:i:s',strtotime('+0 hour +6 minutes',strtotime($timeS)));
							$ctime=time();
							$etime=$ctime+300;
							$this->db->query("UPDATE `$mode_id` SET bid_price = '$value', team_id='$t_id' , time_start='$timeS', time_end='$timeE',timeS='$ctime', timeE='$etime' WHERE name='$key' AND timeE>='$ctime'");
						}
						if($value>$get_money[0]['money'])
						{
							echo "<script>alert('SORRY!!!...You don't have sufficient money');</script>";
						}
					}
					if($get[0]['sold'])
					{
						echo "<script>alert('SORRY!!!...The player is already sold');</script>";
					}
				}
				if($value<=$get[0]['bid_price'])
				{
					echo "<script>alert('PLEASE!!!...Show your money power by biding money more than bided price');</script>";
				}
			}
			echo "<script>
				window.location='";echo base_url('index.php/user');echo "'
			</script>";
		}

	}
?>