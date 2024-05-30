<?php
session_start();
require_once 'db_conn.php';

if(isset($_SESSION['username'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['item_id'])) {
        $item_id = $_POST['item_id'];

        $username = $_SESSION['username'];
        $user_query = "SELECT id FROM uzivatel WHERE uziv_jmeno='$username'";
        $user_result = $conn->query($user_query);

        if ($user_result->num_rows > 0) {
            $user_row = $user_result->fetch_assoc();
            $prodejce_id = $user_row['id'];

            $check_item_query = "SELECT * FROM polozka WHERE id='$item_id' AND prodejce_id='$prodejce_id'";
            $check_item_result = $conn->query($check_item_query);

            if ($check_item_result->num_rows > 0) {
                $delete_item_query = "DELETE FROM polozka WHERE id='$item_id'";
                if ($conn->query($delete_item_query) === TRUE) {
                    header("location: ../addItem.php");
                } else {
                    echo "Chyba při mazání inzerátu: " . $conn->error;
                }
            } else {
                echo "Inzerát neexistuje nebo nepatří vám.";
            }
        } else {
            echo "Uživatel nebyl nalezen.";
        }
    } else {
        echo "Neplatný požadavek.";
    }
} else {
    echo "Uživatel není přihlášen.";
}
$conn->close();
?>
