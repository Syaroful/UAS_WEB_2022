<?php
//koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "fitmeal");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah_data_booking($data)
{
    global $conn;
    $fname = htmlspecialchars($data["fname"]);
    $lname = htmlspecialchars($data["lname"]);
    $email = htmlspecialchars($data["email"]);
    $phone = htmlspecialchars($data["phone"]);
    $people  = htmlspecialchars($data["people"]);
    $date  = htmlspecialchars($data["date"]);
    $stime  = htmlspecialchars($data["stime"]);
    $etime  = htmlspecialchars($data["etime"]);


    // query insert data
    $query = "INSERT INTO `booking` (`first_name`, `last_name`, `email`,
    `phone`, `people`, `book_date`, `start_time`, `end_time`) VALUES
    ('$fname','$lname','$email','$phone','$people','$date','$stime','$etime')
";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function update($data)
{
    global $conn;
    $id = $data["id"];

    $fname = htmlspecialchars($data["fname"]);
    $lname = htmlspecialchars($data["lname"]);
    $email = htmlspecialchars($data["email"]);
    $phone = htmlspecialchars($data["phone"]);
    $people  = htmlspecialchars($data["people"]);
    $date  = htmlspecialchars($data["date"]);
    $stime  = htmlspecialchars($data["stime"]);
    $etime  = htmlspecialchars($data["etime"]);
    // query insert data
    $query = "UPDATE booking SET
            first_name = '$fname',
            last_name = '$lname',
            email = '$email',
            phone = '$phone',
            people = '$people',
            book_date = '$date',
            start_time = '$stime',
            end_time = '$etime'
        WHERE id = $id
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function del($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM booking WHERE id = $id");

    return mysqli_affected_rows($conn);
}
function cari($keyword)
{
    $query = "SELECT * FROM menu
    WHERE
    nama LIKE '%$keyword%' OR
    deskripsi LIKE '%$keyword%'
    ";
    return query($query);
}