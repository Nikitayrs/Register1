<?php

    // mysqli_connect
    $connect = mysqli_connect('localhost', 'root', 'root', 'companyname');

    if(!$connect) {
        die('Error connect to database'); // выводит сообщение и останавливает код
    }
    
