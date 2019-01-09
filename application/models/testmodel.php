<?php


class Testmodel extends CI_model
{

	public function fetch_data($query)
	{
		$this->load->database();
		$this->db->select("*");
		$this->db->from("users");

		if($query != '')
		{
			$this->db->like('id',$query);
		}

		$this->db->order_by('id','DESC');

		return $this->db->get();

	}

}



?>