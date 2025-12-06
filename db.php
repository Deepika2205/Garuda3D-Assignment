<?php
$server="localhost";
$username="root";
$password="";
$dbname="Garuda_3D";

$con = new mysqli($server,$username,$password);
if($con->connect_error){
     die("Connection failed: " . $conn->connect_error);
}
//create database and table
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
$con->query($sql);

//select database
$con->select_db($dbname);
$sql1="create table if not exists contact_form(
id int auto_increment primary key,
name varchar(100) not null,
email varchar(100) not null,
phone varchar(15) not null, 
message text not null,
created_at timestamp default  current_timestamp)";
$con->query($sql1);

?>