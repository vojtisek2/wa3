<?php
require_once 'db_conn.php';

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $user_query = "SELECT id FROM uzivatel WHERE uziv_jmeno='$username'";
    $user_result = $conn->query($user_query);

    if ($user_result->num_rows > 0) {
        $user_row = $user_result->fetch_assoc();
        $prodejce_id = $user_row['id'];

        $sql = "SELECT p.*, u.email, u.telefon FROM polozka p
                INNER JOIN uzivatel u ON p.prodejce_id = u.id
                WHERE p.prodejce_id = '$prodejce_id'
                ORDER BY p.id DESC";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            ?>
            <div class="container">
                <?php
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title"><?php echo $row['nazev']; ?></h5>
                                        <p class="card-text">Cena: <?php echo $row['cena']; ?> CZK</p>
                                    </div>
                                    <div>
                                        <p class="card-text">Email: <?php echo $row['email']; ?></p>
                                        <p class="card-text">Telefon: <?php echo $row['telefon']; ?></p>
                                        <form method="post" action="./phpscripts/delete_item.php">
                                            <input type="hidden" name="item_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" class="btn" style="color: white;background-color: red;width: 200px">Smazat</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php
        } else {
            echo "Žádné výsledky";
        }
    } else {
        echo "Uživatel nebyl nalezen.";
    }
} else {
    header("Location: ./login.php");
    exit;
}
$conn->close();
?>
