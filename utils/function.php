<?php
    require'dbConnect.php';



    function Cause(){
        $sql = "select * from cause";
		
		$val=array();
		$basealaina= mysqli_query(dbconnect(), $sql);
		while ($temp = mysqli_fetch_array($basealaina)){
			$val[]	 = $temp;
		}	
	    return $val;
    }

	function Actualite(){
        $sql = "select * from actualite";
		
		$val=array();
		$basealaina= mysqli_query(dbconnect(), $sql);
		while ($temp = mysqli_fetch_array($basealaina)){
			$val[]	 = $temp;
		}	
	    return $val;
    }

   
?>