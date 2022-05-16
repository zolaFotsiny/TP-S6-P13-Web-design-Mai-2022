<?php
function dbConnect(){
    // $host = 'localhost';
    // $dbname = 'covid2';
    // $username = 'postgres';
    // $password = '123456';
    $host = 'ec2-54-160-96-70.compute-1.amazonaws.com';
    $dbname = 'd48i0l6f9jfqjm';
    $username = 'qxkqclsglyjxca';
    $password = 'dce6f6c5063ce6d5eb0aebb0bf164ba81ffb4845e0556192ce24d85df1a6b9d3';
 
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






