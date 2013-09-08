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
 	function selectbyid($id)
 	{
 		$sql=$this->db->prepare("SELECT * FROM posts WHERE id = ?");
 		$sql->bindParam(1,$id,PDO::PARAM_INT);
 		$sql->execute();
 		$post=$sql->fetchAll();
 		return $post;
 	}
 	function add($name,$date,$text)
 	{
 		$sql=$this->db->prepare("INSERT INTO `evercode`.`posts` (`name`, `date`, `text`, `id`) VALUES (?,?, ?, NULL);");
 		$sql->bindParam(1,$name,PDO::PARAM_STR);
 		$sql->bindParam(2,$date,PDO::PARAM_STR);
 		$text=str_replace("\r\n", "<br>", $text);
 		$sql->bindParam(3,$text,PDO::PARAM_STR);
 		$sql->execute();
 	}
 	function update($id,$name,$date,$text)
 	{
 		$sql=$this->db->prepare("UPDATE posts SET name= :name,date= :date,text= :text WHERE id= :id");
 		$sql->bindParam(':name',$name,PDO::PARAM_STR);
 		$sql->bindParam(':date',$date,PDO::PARAM_STR);
 		$text=str_replace("\r\n", "<br>", $text);
 		$sql->bindParam(':text',$text,PDO::PARAM_STR);
 		$sql->bindParam(':id',$id,PDO::PARAM_INT);
 		$sql->execute();
 	}
 };
