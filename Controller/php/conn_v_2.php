<?php
class coneccionBD{
    public static function Coneccion(){
        $host="localhost";
        $dbname="proyecto";
        $dbusername="root";
        $dbpassword="";
        try {
            //https://www.php.net/manual/es/class.pdo.php <-- PDO
            $conn= new PDO("mysql:host=$host;$dbname",$dbusername,$dbpassword);
            echo("Conectó");
        } catch (PDOException $ExpError) {
            echo("No conectó,error $ExpError");
        }
        return $conn;
    }
}
?>