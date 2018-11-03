<?php    
    $host="localhost";
    $DBuser="X33173174";
    $DBpassword="X33173174";
    $dbname="X33173174";

    $redirect="#page1";

    $dbc=mysqli_connect($host,$DBuser,$DBpassword,$dbname);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL"
            .mysqli_connect_error();
    }

    mysqli_select_db($dbc,$dbname);

?>