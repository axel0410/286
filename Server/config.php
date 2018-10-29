<?php    
    $host="localhost";
    $user="X33173174";
    $password="X33173174";
    $dbname="X33173174";

    $redirect="../WebClient/main.html";

    $dbc=mysqli_connect($host,$user,$password,$dbname);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL"
            .mysqli_connect_error();
    }

    mysqli_select_db($dbc,$dbname);

?>