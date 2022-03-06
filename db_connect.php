<?php
    $servername='localhost';
    $username='root';
    $password = '';
    $dbname = 'u541226541_dges';
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)  {
        die('Could not Connect My Sql:' );
    }
?>