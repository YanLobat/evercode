<?php
class Model_Posts extends Model
{
	public function get_data()
	{
		$posts=$this->db->select();
		return $posts;
	}
};