<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //retrieve form data
    $username = $POST['USERNAME'];
    $password = $POST['PASSWORD'];


    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "log";

    $conn = new mysqli($host,  $dbusername, $dbpassword, $dbname)
    if($conn-> connect_error){
        die("Connection failed: ". $conn->connect_error);
        $query = "SELECT * FROM login WHERE username='$username' AND password = '$password'";

        $result = $conn->query($query);
        if($result->num-rows == 1{

            //loginsuccess
             exit();
        })
        else{

            //login failed
            exit();
        }
    }
         $conn->closed();
}
?>
