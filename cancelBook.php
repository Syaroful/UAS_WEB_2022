<?php

require 'functions.php';
$id = $_GET["id"];

if (del($id) > 0) {
    echo "
    <script>
        alert('Anda Talah Membatakan Order!');
        document.location.href = 'index.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Cancel Booking Fail !');
        document.location.href = 'booking_confirmation.php';
    </script>
";
}