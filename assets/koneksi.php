<?php

$server="localhost";
$user="root";
$pass="";
$db="mahasiswa";

$connect=mysql_connect("$server","$user","$pass");
$connect_db=mysql_select_db("$db");

if(!$connect){
	echo "FAIL CONNECTING TO SERVER!";
}
if(!$connect_db){
	echo "FAIL CONNECTING TO DATABASE!";
}

?>