<?php
class Model_Add extends Model
{
	public function get_data()
	{
		$data['name']= isset($_POST['name'])?$_POST['name']:'';
		$data['date']= isset($_POST['date'])?$_POST['date']:'';
		$data['text']= isset($_POST['text'])?$_POST['text']:'';
		$this->db->add($data['name'],$data['date'],$data['text']);
		return $data;
	}
};
?>