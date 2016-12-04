<?php
	class Player extends CI_Model
	{
		function plyr($id)
		{
			$m_id=intval($id/8);
                        $m_id="players_info".$m_id;
                        $p=$this->db->query("SELECT * FROM `$m_id` ORDER BY `timeE` ASC");
			return $p->result_array();
		}
		function team($id)
		{
			$t=$this->db->where(['id'=>$id])
						->get('team');
			return $t->result_array();
		}
		function your_team($id)
		{
			$m_id=intval($id/8);
                        $m=$this->db->where(['team_id'=>$id,'sold'=>1])
						->get('players_info'.$m_id);
			return $m->result_array();
		}
                function your_bid($id)
		{
			$m_id=intval($id/8);
                        $m_id="players_info".$m_id;
                        $m=$this->db->query("SELECT * FROM `$m_id` WHERE `team_id` LIKE '$id' AND `sold` LIKE '0'");
			return $m->result_array();
		}
		function sold($id)
		{
			$m_id=intval($id/8);
                        $m=$this->db->where(['sold'=>1])
						->get('players_info'.$m_id);
			return $m->result_array();
		}
		function search_p($splyr,$id)
		{
			$m_id=intval($id/8);
                        $m_id="players_info".$m_id;
                        $m=$this->db->query("SELECT * FROM `$m_id` WHERE `country` LIKE '%$splyr%' OR `name` LIKE '%$splyr%' OR `info` LIKE '%$splyr%'");
			return $m->result_array();
		}
	}
?>		