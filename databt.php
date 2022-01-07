<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <style>
        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 50%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        }
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

        <table id="customers">
            <tr>
                <th>Posted</th>
                <th>Nama</th>
                <th>E-Mail</th>
                <th>Pesan</th>
            </tr>
            <?php
                include "koneksi.php";
                $sql = mysqli_query ($connect, "select * from bukutamu");
                while ($result = mysqli_fetch_array($sql)){ 
            ?>
            <tr>
                <td><?php echo $result[1];?></td>
                <td><?php echo $result[2];?></td>
                <td><?php echo $result[3];?></td>
                <td><?php echo $result[4];?></td>
            </tr>
            <?php } ?>
        </table>

        <!-- <?php
			include "koneksi.php";
			$sql = mysqli_query ($connect, "select * from bukutamu order by id desc");
			while ($result = mysqli_fetch_array($sql)){ 

            $posted = $result['posted'];
            $name= $result['name'];
            $email = $result['email'];
            $msg = $result['msg'];
        
            echo "Posted  :$posted<br>";
            echo "Nama    :$name<br>";
            echo "E-Mail  :$email<br>";
            echo "Pesan   :$msg<br><hr>";
            }
        ?> -->
</body>
</html>