<?php 
class ParentMysqliDao {
    
    public static function connect (){

        $db = new mysqli('localhost','samir','samsgbd','afpa_test');
        
        return $db;
    }
}
?>