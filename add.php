<?php
    $connection=mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"dbspark");


    if(isset($_POST['submit']))
    {
      $name=$_POST['name'];
      $age=$_POST['age'];
      $mobileno=$_POST['mobileno'];


      $sql ="insert into student(Name,Age,Mobileno)values(' $name','$age','$mobileno')";

      if(mysqli_query($connection,$sql))
      {
        echo '<script>location.replace("index.php")<script>';
        header("Location:http://localhost/crudapp/index.php");
      }
      else
      {
        echo "Some thing Error" .$connection->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <form action="add.php" method="post">
    <div class="container">
        <h1>Create Student</h1>
            <label>Name</label>
            <input type="text" name="name" value=""id="name">
        <br>
        <br>
            <label>Age</label>
            <input type="number" name="age" value=""id="age">
        <br>
        <br>
            <label>MobileNo</label>
            <input type="mobileno" name="mobileno" value=""id="mobileno">
        <br>
        <br>
            <button class="c"><a href="index.php">Cancel</a></button>
            <input class="a" type="submit" name="submit" value="Add">
        </form>
    </div>


</body>
</html>