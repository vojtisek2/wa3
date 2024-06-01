<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    </style>
    <title>SecondHadry</title>
</head>
<body>
    <?php include './comps/navbar.php'?>
    <div class="d-flex justify-content-center flex-column" style="height: 20vh; margin: 0">
        <div class="d-flex justify-content-center align-items-center" style="cursor: default;">
            <h1  style="font-style: italic; font-size: 60px !important; background: red;color: white;font-weight: bold;padding: 20px;border-radius: 27% 5% 25% 5% / 25% 25% 25% 25%;-webkit-box-shadow: 0 5.5px 10px 3px #dddddd;
-moz-box-shadow: 0 5.5px 10px 3px #dddddd;
box-shadow: 0 5.5px 10px 3px #dddddd; margin: 0">SecondHadry</h1>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center" style="margin: 0">
        <h2 class="mb-3 fs-1">Trending</h2>
    </div>

    <?php include './phpscripts/get_items.php'?>







    <?php include './comps/footer.php'?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>