<?php
class Model_Edit extends Model
{
	public function get_data()
	{
		$url = $_SERVER['REQUEST_URI'];
        $url = substr($url, 0, strpos($url, '?'));
		$routes = explode('/', $url);
		if (!is_numeric($routes[2])) 
		{
			Route::ErrorPage404();
		}
		$id = $routes[2];
		$editedname = isset($_POST['name']) ? $_POST['name'] : '';
		$editeddate = isset($_POST['date']) ? $_POST['date'] : '';
		$editedtext = isset($_POST['text']) ? $_POST['text'] : '';
		$post=$this->db->selectbyid($id);
		if (!$post['text'])
		{
			Route::ErrorPage404;
		}
		$post=$this->db->update($id,$editedname,$editeddate,$editedtext);
		return $post;
	}
};
?>