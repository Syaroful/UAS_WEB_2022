<?php
require 'functions.php';
$booking_ticket = query("SELECT * FROM booking ORDER BY id DESC
LIMIT 1");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="asset/style_form.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <title>Fitmeal - booking confirmation</title>
</head>
<div class="container">
    <div class="logo">
        <a href="index.php">
            <img src="asset/logo/logo fitmeal.png" width="100px" />
        </a>
        <br /><br />
    </div>
    <div class="title">BOOKING <br /><br /></div>
    <div class="data">
        <div class="kiri">
            <p style="font-size: 20px;">
                <?php foreach ($booking_ticket as $row) ?> <b>
                    <?= $row["first_name"], " ", $row["last_name"] ?>
                </b>
                <br>
                Terimakasih Sudah melakukan Booking, <br><br>
                Kode booking Anda :
            </p>
            <?php $i = 1; ?>
            <?php foreach ($booking_ticket as $row) : ?>
                <table>
                    <tr>
                        <td>
                            <div class="Book-num"> <?= $row["id"] ?></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">-----------------------------------------</td>
                    </tr>
                    <tr>
                        <td>Jumlah Pelanggan : </td>
                        <td><?= $row["people"] ?> orang</td>
                    </tr>
                    <tr>
                        <td>Tanggal :</td>
                        <td><?= $row["book_date"] ?></td>
                    </tr>
                    <tr>
                        <td>waktu pukul</td>
                        <td> <?= $row["start_time"] ?> sd <?= $row["end_time"] ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <br>


                        </td>
                    </tr>
                </table>
                <div>
                    <a style="
                    border: 10px;
                    border-color: #ffc117;
                    border-radius: 10px;
                    padding: 10px;
                    background-color: white;
                    font-size: 15px;
                    color: rgb(0, 0, 0);" href="update.php?id=<?php echo $row["id"]; ?>">Ubah Detail Order </a>
                </div>
                <br>
                <div>
                    <a style="
                    border: 10px;
                    border-color: #ffc117;
                    border-radius: 10px;
                    padding: 10px;
                    background-color: red;
                    font-size: 15px;
                    color: #FFFFFF" href="cancelBook.php?id=<?= $row["id"]; ?>" onclick=" return confirm('Apakah Anda ingin membatalkan booking?');">Cancel Order</a>
                </div>

                <?php $i++; ?>
            <?php endforeach; ?>

            <p><i>
                    Note : kartu Pemesanan akan kami kirim melalui Email atau Nomor telepon yang didaftarkan
                </i></p>
        </div>
        <div class="kanan">
            <img src="asset/Image/redPanda.png" alt="">
        </div>
    </div>
</div>
</body>

</html>