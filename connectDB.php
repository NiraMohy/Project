<?php
	
	

	$dsn = 'mysql:host=localhost;dbname=system_student2';
	$user = 'root';
	$pass = '';
	$options = array (
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' ,
	);
	try {
		$connectDB = new PDO($dsn ,$user ,$pass ,$options); 
		$connectDB->setattribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
	}
	
	catch(PDOException $e){
		echo "فشل الاتصال" . $e->getmessage();
	}


  function getAllFrom($field , $table , $where = Null , $orderBy , $ordering = 'DESC'){
    global $connectDB ;
    $getAll =$connectDB->prepare("SELECT $field FROM $table $where ORDER BY $orderBy $ordering ");
    $getAll->execute();
    $all = $getAll->fetchAll();
    return $all;
   }


?>