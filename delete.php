<?php
    $del=$_GET['del'];
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"dbspark");
    $sql="DELETE FROM student WHERE id='$del'";
    if(mysqli_query($connection,$sql)){
        header("Location: http://localhost/crudapp/index.php");
    }
    else{
        echo "Some thing Error".$connection->error;
    }
?>