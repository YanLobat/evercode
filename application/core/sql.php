<?php
 class Sql
 {
 	private $db;
 	function __construct()
 	{
 		$this->db = new PDO('mysql:host=evercode.dev;dbname=evercode;','root');
 	}
 	function select()
 	{
 		$sql=$this->db->prepare("SELECT * FROM posts");
 		$sql->execute();
 		$posts=$sql->fetchAll();
 		return $posts;
 	}
 	function add($name,$date,$text)
 	{
 		$sql=$this->db->prepare("INSERT INTO posts VALUES(:name,:date,:text)");
 		$sql->bindParam(':name',$name,PDO::PARAM_STR);
 		$sql->bindParam(':date',$date,PDO::PARAM_STR);
 		$text=str_replace("\r\n", "<br>", $text);
 		$sql->bindParam(':text',$text,PDO::PARAM_STR);
 		$sql->execute();
 	}
 	function update($id,$name,$text)
 	{
 		$sql=$this->db->prepare("UPDATE posts SET name= :name,text= :text WHERE id= :id");
 		$sql->bindParam(':id',$id,PDO::PARAM_INT);
 		$sql->bindParam(':name',$name,PDO::PARAM_STR);
 		$text=str_replace("\r\n", "<br>", $text);
 		$sql->bindParam(':text',$text,PDO::PARAM_STR);
 		$sql->execute();
 	}
 };
