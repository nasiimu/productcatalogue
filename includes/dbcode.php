<?php

    $HOSTNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "" ;
    $DATABASENAME = "producst-catalogue";

    $connection = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASENAME);
    if(!$connection) {
        die("connection failed");

    }

    else{
        echo "yes";

    } 
?>