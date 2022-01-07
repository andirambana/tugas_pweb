<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="databt.css">
</head>
<body>

        <h1>Welcome to My Guestbook</h1>
        <div class="centerbutton">
                <a href="index.php"><button class="button">Form Guestbook</button></a>
                <a href="databt.php"><button class="button">View Guestbook</button></a>
        </div>

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