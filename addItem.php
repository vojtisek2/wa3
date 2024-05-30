<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-container{
            padding: 50px !important;
            border-radius: 20px;
            max-width: 600px;
            width: 600px;
            min-width: 200px;
            box-shadow: 0px 0px 50px rgb(201, 201, 201);

        }
    </style>
    <title>SecondHadry</title>
</head>
<body>
<?php include './comps/navbar.php'?>

    <div class="d-flex justify-content-center align-items-center flex-column" style="height: 60vh">
        <div class=" bg-body-tertiary form-container">
            <h2>Pridat inzerat</h2>
            <form action="./phpscripts/insert.php" method="POST">
                <div class="mb-3">
                    <label for="nazev" class="form-label">Nazev:</label>
                    <input type="text" id="nazev" name="nazev" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="cena" class="form-label">Cena:</label>
                    <input type="number" id="cena" name="cena" class="form-control" required>
                </div>
                <button type="submit" class="btn" style="background-color: red;color: white">Create Item</button>
            </form>
        </div>


    </div>

<div>
    <h1 class="text-center mb-3">Vase inzeraty</h1>
    <?php include './phpscripts/get_user_items.php'?>
</div>

<?php include './comps/footer.php'?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>