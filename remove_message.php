<?php 
 	try{
		$db = new PDO("mysql:host=localhost;dbname=stemferndb;port=3306","root","");
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e){
		echo "Cannot connect to database ".$e->getMessage();
		exit;
	}

    $db->query("DELETE FROM contact_form WHERE id = ".$_GET['id']);
    header("Location:viewContacts.php");
    exit;
?>