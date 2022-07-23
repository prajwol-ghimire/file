<?php

$connection = mysqli_connect("localhost", "root", "");
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

//query

$sql="CREATE DATABASE IF NOT EXISTS `booksdata`" ;

if(mysqli_query($connection,$sql)){
    $connection = mysqli_connect("localhost", "root", "","booksdata");

        $sql="CREATE TABLE IF NOT EXISTS `udata`
        (`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `uname` varchar(50) DEFAULT NULL,
        `email` varchar(50) DEFAULT 'empty',
        `usname` varchar(50) DEFAULT NULL,
        `upassword` varchar(500)
        );";

       if (!mysqli_query($connection, $sql)){
        echo "Error creating table : " . mysqli_error($connection);
    }

}
else{
    return false;
}
if(mysqli_query($connection,$sql)){
    $connection = mysqli_connect("localhost", "root", "","booksdata");

        $booktable="CREATE TABLE IF NOT EXISTS `bookinfo`
        (`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `bookname` varchar(50) DEFAULT NULL,
        `author` varchar(50) DEFAULT 'empty',
        `book_images` varchar(500) DEFAULT NULL,
        `book_description` varchar(500)
        );";

       if (!mysqli_query($connection, $booktable)){
        echo "Error creating table : " . mysqli_error($connection);
    }

}
else{
    return false;
}

if(mysqli_query($connection,$sql)){
    $connection = mysqli_connect("localhost", "root", "","booksdata");

        $contacttable="CREATE TABLE IF NOT EXISTS `contactdata`
        (`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `name_box` varchar(50) DEFAULT NULL,
        `email_box` varchar(50) DEFAULT 'empty',
        `message_box` varchar(500) DEFAULT NULL
        );";

       if (!mysqli_query($connection, $contacttable)){
        echo "Error creating table : " . mysqli_error($connection);
    }

}
else{
    return false;
}

function getdata(){
    $tablename="bookinfo";
    $sql = "SELECT * FROM $tablename";
   // $sql="SELECT * FROM `bookinfo`";
    $connection = mysqli_connect("localhost", "root", "","booksdata");
    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
    else{
        echo ("none");
    }
}
