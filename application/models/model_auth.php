<?php 


class model_auth extends CI_model{
	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value ('password');

		$result = $this->db->where('username', $username)
		->where('password',$password)
		->get('tb_user');

		if($result->num_rows() >0){
			return $result ->row();
		}else{
			return array();
		}
		}
	}
}