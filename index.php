<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit], input[type=reset] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            margin-right: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: left;
        }

        input[type=submit]:hover, input[type=reset]:hover {
            background-color: #45a049;
        }

        .col-25 {
            float: left;
            width: 10%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            text-decoration: none;
            color: blue;
        }
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 30px;
            background-color: blue;
            color: white;
            text-align: center;
            padding-top: 8px;
        }
    </style>
</head>
<body>
        <h2>Welcome to My Guestbook</h2>
        <a href="index.php">Form Guestbook</a> | <a href="databt.php">View Guestbook</a>
        <hr>
        <form action="inputbt.php" method="POST">
            <div class="row">
                <div class="col-25">
                <label for="fname">Name :</label>
                </div>
                <div class="col-75">
                <input type="text" id="nama" name="nama" placeholder="Tulis nama..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="lname">E-Mail :</label>
                </div>
                <div class="col-75">
                <input type="text" id="email" name="email" placeholder="Tulis e-mail..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="subject">Message :</label>
                </div>
                <div class="col-75">
                <textarea id="subject" name="pesan" placeholder="Tulis pesan.." style="height:200px"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
        <footer>
            Nama Anggota Kelompok : Mochammad Andi Rambana, Dimas Pradipta, Reza Pratama
        </footer>
</body>
</html>