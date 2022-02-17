<?php 
    $fio = $_POST["fio"];
    $login = $_POST["login"];
    $email = $_POST["email"];
    $password = $_POST["password"];

       
        $querys = "INSERT INTO `groomroom`(`fio`, `login`, `email`, `password`) VALUES ('$fio','$login','$email','$password')";
        
      ?>