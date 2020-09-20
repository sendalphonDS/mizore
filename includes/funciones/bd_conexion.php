<?php 

    $conn = new mysqli('localhost', 'root', '123456', 'camp');
    if($conn->connect_eror){
        echo $error ->$conn->connect_error;
    }

?>