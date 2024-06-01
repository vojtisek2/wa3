<?php
require_once 'db_conn.php';

$db = Database::getInstance();
$conn = $db->getConnection();
$sql = "SELECT p.*, u.email, u.telefon FROM polozka p
        INNER JOIN uzivatel u ON p.prodejce_id = u.id";

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
    echo "0 results";
}
$conn->close();
?>
