<?php 

try 
{

	$db=new PDO("mysql:host=localhost;dbname=mehmetblog",'root','05314566885');
	
} 
catch (PDOException $e) 
{
	echo $e->getMessage();
}


 ?>