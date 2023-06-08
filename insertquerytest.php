<?php
    include 'connection.php';

    $query = "INSERT INTO customer (customer_name, phone, email, password) VALUES('HELLO', 2, '2', '2')";
    $keeping = mysqli_query($connection, $query);

    if($keeping){
        echo "Success";
    }else{
        echo "Failed";
    }

?>