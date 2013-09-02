<?php 
class Model_Posts extends Model
{
    public function get_data()
    {	
    	$pdo = new Sql();
    	return $pdo->select();
    }
}
