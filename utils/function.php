<?php
    require'dbConnect.php';

	function Cause(){
		$con = dbconnect();
		$sql = "select * from cause";
		
		$result = $con->query($sql);
        $ret = array();
        
		while($huhu = $result->fetch())
            $ret[] = $huhu;
        return $ret;
    }

	function Actualite(){
		$con = dbconnect();
        $sql = "select * from actualite";
		

		$result = $con->query($sql);
        $ret = array();
        
		while($huhu = $result->fetch())
            $ret[] = $huhu;
        return $ret;
    }

   
?>