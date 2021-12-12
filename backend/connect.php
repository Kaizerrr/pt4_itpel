<?php

    //define headers for Ionic framework
    header('Access-Control-Allow-Origin: *' );
    header('Access-Control-Allow-Methods: POST, GET, PUT, DELETE, PATCH, OPTIONS');
    header('Access-Control-Allow-Headers: token, Content-Type');
    header('Content-Type: text/plain'); 
    header('Access-Control-Allow-Headers: Acces-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    //define named constants
    DEFINE ( 'DB_HOST', 'localhost');
    DEFINE ('DB_USER', 'root');
    DEFINE ( 'DB_PASSWORD', '');
    DEFINE ('DB_NAME', 'itpe2l_database');

    //DB string connection establish connection
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect to database...'); 



?>