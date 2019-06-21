<?php 

$hostname = "localhost";
$username = "root";
$password = "root";

function testdb_connect($hostname,$username,$password){
    $dbh = new PDO("mysql:host=$hostname;dbname=idk",$username,$password);
    return $dbh;
}
try {
    $dbh = testdb_connect($hostname,$username,$password);
    echo 'Connected to database';
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>