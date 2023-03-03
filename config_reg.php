<?php
define('DBNAME','reg_form');
define('DBUSER','root');
define('DBPASS','');
define('DBHOST','localhost');

try{
    $db=new PDO("mysql:host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Your page is connect with database successfully";
}
catch (PDOException $e){
    echo"Issue -> Connection Failed ".$e->getMessage();
}
?>