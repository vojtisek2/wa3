<?php
session_start();
include 'db_conn.php';

if(isset($_SESSION['username'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_SESSION['username'];
        $nazev = $_POST['nazev'];
        $cena = $_POST['cena'];

        $user_query = "SELECT id FROM uzivatel WHERE uziv_jmeno='$username'";
        $user_result = $conn->query($user_query);

        if ($user_result->num_rows > 0) {
            $user_row = $user_result->fetch_assoc();
            $prodejce_id = $user_row['id'];

            $sql = "INSERT INTO polozka (prodejce_id, nazev, cena) VALUES ('$prodejce_id', '$nazev', '$cena')";
            if ($conn->query($sql) === TRUE) {
                $new_item_sql = "SELECT p.*, u.email, u.telefon FROM polozka p
                                INNER JOIN uzivatel u ON p.prodejce_id = u.id
                                WHERE p.id = LAST_INSERT_ID()";
                $new_item_result = $conn->query($new_item_sql);
                if ($new_item_result->num_rows > 0) {
                    header("location: ../addItem.php");
                } else {
                    echo "Error fetching the newly created item.";
                }
            } else {
                echo '<script>alert("Error: ' . $sql . '\n' . $conn->error . '");</script>';
            }
        } else {
            echo "User not found.";
        }
    } else {
        header("Location: ./login.php");
        exit;
    }
} else {
    header("Location: ./login.php");
    exit;
}
$conn->close();
?>
