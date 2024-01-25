<?php
    $fullname = $_POST['fullname'];
    $fullemail = $_POST['fullemail'];
    $fullmobile = $_POST['fullmobile'];
    $fulladdress = $_POST['fulladdress'];

    $conn = new mysqli('localhost','root','','portfolio');
    if($conn->connect_error){
        die('Connection failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(fullname, fullemail, fullmobile, fulladdress) values(?, ?, ?, ?)");
        $stmt ->bind_param("ssss", $fullname, $fullemail, $fullmobile, $fulladdress);
        $stmt ->execute();
        echo " registration successfull..";
        $stmt -> close();
        $conn -> close();
    }
?>