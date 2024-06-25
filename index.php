<?php
    $connection=mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"dbspark");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h1>Student Data</h1>
    <br>
    <button class="a"><a href="add.php">Add New</a></button>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>MobileNo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <hr>
            <tbody>
            <?php
                $connection=mysqli_connect("localhost","root","");
                $db=mysqli_select_db($connection,"dbspark");
                $sql="SELECT * FROM student";
                $run=mysqli_query($connection,$sql);
                $id=1;
                while($row=mysqli_fetch_array($run)){
                    $uid=$row['Id'];
                    $name=$row['Name'];
                    $age=$row['Age'];
                    $mobileno=$row['MobileNo'];
                    ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $age ?></td>
                        <td><?php echo $mobileno ?></td>
                        <td>
                            <button class="edit"> <a href='edit.php?edit=<?php echo $uid ?>'>Edit</a></button>
                            <button class="delete"> <a href='delete.php?del=<?php echo $uid ?>'>Delete</a></button>
                        </td>
                    </tr>
                <?php $id++; } ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>