<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <style>
        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>
        <h2>Welcome to My Guestbook</h2>
        <a href="index.php">Form Guestbook</a> | <a href="databt.php">View Guestbook</a>
        <hr>
        <?php

        include "koneksi.php";

        $posted         = date('Y-m-d');
        $nama 			= $_POST['nama'];
        $email 			= $_POST['email'];
        $pesan 			= $_POST['pesan'];
        $pesan          = addslashes($pesan);

        $sql = mysqli_query($connect, "insert into bukutamu
        values('','$posted','$nama','$email','$pesan')");
                
        if(!$sql)
            {
                echo("Invalid Query!
                Please reqister again...");
                exit;
            }
        mysqli_close($connect);
        echo("Thank you for signing up Guestbook...");

        ?>
</body>
</html>