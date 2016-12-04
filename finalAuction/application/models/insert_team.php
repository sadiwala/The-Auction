<?php
	class Insert_team extends CI_Model
	{
		function intable($team,$pass,$fn,$sn,$tn,$fe,$se,$te)
		{
			return $this->db->insert('team',['teamname'=>$team,'pass'=>$pass,'fname'=>$fn,'sname'=>$sn,'tname'=>$tn,'femail'=>$fe,'semail'=>$se,'temail'=>$te,'money'=>650000000]);
		}
	}
?>