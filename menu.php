<?php
require 'functions.php';
$dishmenu = query(" SELECT * FROM menu order by id");
if (isset($_POST["cari"])) {
    $dishmenu = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <title>Menu Fitmeal</title>
    <style>
        body {
            font-family: "Poppins";
            font-size: 14px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background-color: #f7f7f7;
        }

        .tittle {
            text-align: center;
        }

        .search {
            width: 70%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: left;
            margin: 20px;
        }

        .search input {
            height: 30px;
            border: transparent;
            border-radius: 5px;
            padding-left: 15px;
            background-color: #FFFFFF;
            margin: 30px;
        }

        .search button {
            height: 30px;
            border: transparent;
            border-radius: 5px;
            text-align: center;
            padding-left: 20px;
            padding-right: 20px;
            background-color: #ffba51;
        }

        .tombol a {
            text-decoration: none;
            color: black;
            text-align: center;
            width: 100px;
            border-radius: 10px;
            padding: 10px;
            background-color: transparent;
            font-size: 15px;
            background-color: #ffc117;
            margin-right: 50px;
        }

        .menu {
            width: 70%;
            text-align: center;
            display: flex;
            justify-content: center;

        }

        .gbr {
            margin: 40px;
        }

        table {
            text-align: left;
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="tittle">
        <h1>Menu <font style="color: #ffba51;"> Fit</font>meal</h1>
        <a href="index.php">
            <img src="asset/logo/logo fitmeal.png" width="100px" />
        </a>

    </div>
    <form action="" method="post">
        <div class="search">
            <form action="" method="post">
                <input type="text" name="keyword" size="60" placeholder="Search" autocomplete="off">
                <button type="submit" name="cari">cari</button>
            </form>
        </div>
    </form>

    <div class="menu">
        <table>
            <?php $i = 1; ?>
            <?php foreach ($dishmenu as $row) : ?>
                <tr>
                    <td rowspan="5">
                        <div class="gbr">
                            <img src="menu/<?php echo $row["Image"]; ?>" alt="" height="200" width="200">
                        </div>

                    </td>
                </tr>
                <tr>
                    <td style="width: 600px;">
                        <br>
                        <font style="font-size: 24px;font-weight:bold;"><?= $row["nama"] ?></font>
                    </td>
                </tr>
                <tr>
                    <td style="width: 600px;">
                        <?= $row["deskripsi"] ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 600px;">
                        Price : Rp <?= $row["harga"] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        -
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>

    </div>
</body>

</html>