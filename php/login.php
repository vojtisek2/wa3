<?php

session_start();
include 'db_conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM uzivatel WHERE uziv_jmeno='$username' AND heslo='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $_SESSION['username'] = $username;
        header("location:../additem.php");
    } else {
        echo "<script> alert('spatne uziv. jmeno nebo heslo ')</script>";
    }
}
?>
