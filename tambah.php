<?php
    require 'functions.php';

    if(isset($_POST["submit"])) {
        if( isset($_POST["submit"])){
            //jika sudah ditekan dijalankan function tambah
            if(tambah($_POST) > 0) {
                echo "
                    <script>
                        alert('Data Has Been Added!');
                        document.location.href = 'index.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('Adding Data Failed!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add Employee</title>
</head>
<body>
    <h1>Add Employee</h1>

    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
           
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
           
        <label for="address">Address</label>
        <input type="text" name="address" id="address">
            
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
        </select>
            
        <label for="position">Position</label>
        <input type="text" name="position" id="position">
        
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="Fulltime">Fulltime</option>
            <option value="Parttime">Parttime</option>
        </select>
            
        <button type="submit" name="submit">Add Data</button>
           
    </form>
</body>
</html>