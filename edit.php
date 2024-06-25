<?php
    $edit=$_GET['edit'];
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"dbspark");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $mobileno=$_POST['mobileno'];
        $sql="UPDATE student SET name='$name',age='$age',mobileno='$mobileno' WHERE id='$edit'";
        if(mysqli_query($connection,$sql)){
            header("Location: http://localhost/crudapp/index.php");
        }
        else{
            echo "Some thing Error".$connection->error;
        }
    }
    $sql="SELECT * FROM student WHERE id='$edit'";
    $run=mysqli_query($connection,$sql);
    $row=mysqli_fetch_array($run);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <h2>Create Student</h2>
        <form action="" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php echo $row['Name'] ?>" id="name"><br>
            <label for="age">Age</label>
            <input type="number" name="age" value="<?php echo $row['Age'] ?>" id="age"><br>
            <label for="mobileno">MobileNo</label>
            <input type="text" name="mobileno" id="mobileno" value="<?php echo $row['MobileNo'] ?>"><br>
            <button class="cancel"><a href="index.php">Cancel</a></button>
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</body>
</html>