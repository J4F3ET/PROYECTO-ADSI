<?php
class Conexion{
    // si no quiere usar la funcion estatica debe declarar una variable con la clase para usar sus metodos
    // dependiendo en que lugar la use 
    public static function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=adsi","root","");

        $link -> exec("set names utf8");

        return $link;
    }
}