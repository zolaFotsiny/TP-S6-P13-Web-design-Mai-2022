<?php
    require'dbConnect.php';

    function Actualite(){
        $con = dbconnect();
        $sql = "select * from Actualite";
        $result = $con->query($sql);
        $ret = array();
        while($huhu = $result->fetch())
            $ret[] = $huhu;
        return $ret;
    }

    function Definition(){
        $con = dbconnect();
        $sql = "select * from definition";
        $result = $con->query($sql);
        $ret = array();
        while($huhu = $result->fetch())
            $ret[] = $huhu;
        return $ret;
    }
   
?>