<?php

//connect to the database
$servername="localhost";
$username="root";
$password="";
$database="gym_management";

$con= mysqli_connect($servername,$username,$password,$database);

// if(!$con){
//   die("connection failed:" . mysqli_connect_error());
// }

if($con){
    echo "database connection successfully!";
}
else{

    echo "connection is not successfully!";
}

//create database if not there then 
// $sql="CREATE DATABASE IF NOT EXISTS $database";

$sql="CREATE TABLE `gym_management`.`gym_signup_user` ( `id` INT NOT NULL AUTO_INCREMENT ,  `firstname` VARCHAR(100) NOT NULL ,  `lastname` VARCHAR(100) NOT NULL ,  `username` VARCHAR(100) NOT NULL ,  `password` VARCHAR(100) NOT NULL ,  `confimpassword` VARCHAR(100) NOT NULL ,  `mobileno` VARCHAR(100) NOT NULL ,  `emailid` VARCHAR(100) NOT NULL ,  `addresses` VARCHAR(255) NULL ,  `dob` DATE NOT NULL ,  `gender` VARCHAR(100) NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB";
// $result = mysqli_query($con,$sql);

// if($result){
//     echo "table is created!";
// }
// else{
//     echo "table is already created";
// }







?>