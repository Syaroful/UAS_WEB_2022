<?php
require 'functions.php';

if (isset($_POST["submit"])) {

    if (tambah_data_booking($_POST) > 0) {
        echo "
            <script>
                alert('Anda Telah melakukan Booking!');
                document.location.href = 'booking_confirmation.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Booking Gagal, Coba Lagi!');
                document.location.href = 'index.html';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="asset/style_form.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <title>Fitmeal - booking</title>
</head>
<div class="container">
    <form action="" method="POST">
        <div class="logo">
            <a href="index.php">
                <img src="asset/logo/logo fitmeal.png" width="100px" />
            </a>
            <br /><br />
        </div>
        <div class="title">BOOKING <br /><br /></div>
        <div class="data">
            <div class="kiri">
                <label>First name* </label>
                <input type="text" name="fname" id="fname" required />

                <br />
                <label>Email* </label>
                <input type="text" name="email" id="email" required />
                <br />
                <label>People* </label>
                <select id="people" name="people">
                    <option value="1-2">1-2 persons</option>
                    <option value="3-5">3-5 persons</option>
                    <option value="6-8">6-8 persons</option>
                    <option value="9-12">9-12 persons</option>
                    <option value="12-16">12-16 persons</option>
                    <option value="17more">17++ persons</option>
                </select>
                <br />
                <label>Date* </label>
                <input type="date" id="date" name="date" />
                <br />
                <div class="time-selection">
                    <div class="start-time">
                        <label>Start-Time* </label>
                        <select id="stime" name="stime">
                            <option value="10:00:00">10:00</option>
                            <option value="11:00:00">11:00</option>
                            <option value="12:00:00">12:00</option>
                            <option value="13:00:00">13:00</option>
                            <option value="14:00:00">14:00</option>
                            <option value="17:00:00">17:00</option>
                            <option value="18:00:00">18:00</option>
                            <option value="19:00:00">19:00</option>
                            <option value="20:00:00">20:00</option>
                        </select>
                    </div>
                    <div class="end-time">
                        <label>End-Time* </label>
                        <select id="etime" name="etime">
                            <option value="11:00:00">11:00</option>
                            <option value="12:00:00">12:00</option>
                            <option value="13:00:00">13:00</option>
                            <option value="14:00:00">14:00</option>
                            <option value="17:00:00">17:00</option>
                            <option value="18:00:00">18:00</option>
                            <option value="19:00:00">19:00</option>
                            <option value="20:00:00">20:00</option>
                            <option value="21:00:00">21:00</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="kanan">
                <label>Last name* </label>
                <input type="text" name="lname" id="lname" required />
                <br />
                <label>Phone* </label>
                <input type="text" name="phone" id="phone" required />
                <br />
            </div>
        </div>
        <br /><br />
        <div>
            <button class="Book-btn" type="submit" name="submit">Book Now</button>
        </div>
    </form>
</div>
</body>

</html>