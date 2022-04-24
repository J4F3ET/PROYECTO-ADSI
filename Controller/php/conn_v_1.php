<?php
class conn_mysql{
    public static function conn_f(){
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="proyecto";
        $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        return $conn; 
    }
}

?>