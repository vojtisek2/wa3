<?php
include 'db_conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    $check_sql = "SELECT COUNT(*) AS count FROM uzivatel WHERE telefon = '$number'";
    $result = $conn->query($check_sql);
    $row = $result->fetch_assoc();
    if ($row['count'] > 0) {
        echo '<script>alert("Phone number already exists!");</script>';
    } else {
        $sql = "INSERT INTO uzivatel (uziv_jmeno, email, telefon, heslo) VALUES ('$username', '$email', '$number', '$password')";
        if ($conn->query($sql) === TRUE) {
            header("location: ../addItem.php");
        } else {
            echo '<script>alert("Error: ' . $sql . '\n' . $conn->error . '");</script>';
        }
    }
}
?>
