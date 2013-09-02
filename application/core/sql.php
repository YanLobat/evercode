<?php
class Sql
{
	function __construct(){
		$pdo=new PDO("mysql:host=localhost;dbname=evercode", 'root','');
	}
	function select()
	{

		$stmt1 = $pdo->query('SELECT * from posts');
		return $stmt1;
	}				
	/*function insert($stmt1)
	{
		$stmt1 = $pdo->query('INSERT INTO posts VALUES(?,?,?)');
	}
	function update($stmt1)
	{
		$stmt1 = $pdo->query('UPDATE ');
	}*/
};
?>