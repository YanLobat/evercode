<?php
class Model_Post extends Model
{
	public function get_data()
	{
		$url = $_SERVER['REQUEST_URI'];
		if (strpos($url, '?'))
		{
        	$url = substr($url, 0, strpos($url, '?'));
        }
		$routes = explode('/', $url);
		if (!is_numeric($routes[2])) 
		{
			Route::ErrorPage404();
		}
		$id = $routes[2];
		$post=$this->db->selectbyid($id);
		return $post;
	}
};