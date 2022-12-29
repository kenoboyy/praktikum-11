<?php
    require 'functions.php';

    //ambil data
    $id = $_GET["id"];
    $krywn = query("SELECT * FROM karyawan WHERE id = $id")[0];

    if(isset($_POST["submit"])){
        if( isset($_POST["submit"])){
            //jika sudah ditekan dijalankan function tambah
            if(ubah($_POST) > 0) {
                echo "
                    <script>
                        alert('Data Has Been Editted!');
                        document.location.href = 'index.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('Editting Data Failed!');
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
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee</h1>
    <div class="container">
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $krywn["id"] ?>">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= $krywn["name"] ?>" required> <br>
                
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?= $krywn["email"] ?>" required> <br>
                
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?= $krywn["address"] ?>" required> <br>
                
            <label for="gender">Gender</label>
            <select name="gender" id="gender">
                <option value="Female">Female</option>
                <option value="Male">Male</option>
            </select> <br>
                
            <label for="position">Position</label>
            <input type="text" name="position" id="position" value="<?= $krywn["position"] ?>" required> <br>
                
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="Fulltime">Fulltime</option>
                <option value="Parttime">Parttime</option>
            </select> <br>
                
            <button type="submit" name="submit">Edit Data</button>
        </form>
    </div>
</body>
</html>