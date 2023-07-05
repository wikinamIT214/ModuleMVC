<?php 
class a extends db{


    function hello(){
        $receive = array();
        $query = "SELECT * FROM nhanvien";
        $result = mysqli_query($this->conn,$query);
        // while($a = mysqli_fetch_array($result)){
        //     $receive = $a;
        // }
        // return $receive;
        // return "Trần Văn Nam";
        return $result;
    }
}


?>