<?php
    // function dbconnect1(){
	// 	static $connect = null;
	// 	if ($connect === null) {
	// 	   try{
	// 			$host = 'localhost';
	// 			$username = 'root';
	// 			$password ='root';
	// 			$database = 'referencement';

				
	// 			$connect = mysqli_connect($host, $username, $password, $database);
	// 	   }catch (PDOException $e) {
	// 		print "Erreur ! : " . $e->getMessage();
	// 		die();
	// 		}
			
	// 	}
	// 	return $connect;
	// }
	function dbConnect(){
		$host = 'ec2-3-229-11-55.compute-1.amazonaws.com';
		$dbname = 'draaddkfo4k4q';
		$username = 'pgfyhyzblsjjfl';
		$password = '154d754df395f27f5c88b85ea641ecb102c05c704abc5aca57d7c9d75073caa4';
	 
	  $dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";
	   
	  try{
		 $conn = new PDO($dsn);
		  return $conn;
		 
	  }catch (PDOException $e){
		echo $e->getMessage();
		die();
	  }
	}
	  
?>