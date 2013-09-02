<?php

class Controller_Posts extends Controller
{

	function action_index()
	{	
		$data = $this->model->get_data();
		$this->view->generate('posts_view.php', 'template_view.php',$data);
	}
}