    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            form{
                padding: 30px;
                color: black;
                border-radius: 30px;
                width: 500px;
                box-shadow: 0px 0px 50px rgb(201, 201, 201);
            }
            .btn{
                background: white !important;
                color: black;
                transition: 1s;
            }
            .btn:hover{
                background-color: #e5e5e5 !important;
                color: black;


            }


        </style>
        <title>SecondHadry</title>
    </head>
    <body>
    <?php include './comps/navbar.php'?>
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh">
        <h1 style="font-size: 60px;font-style: italic;font-weight: bold;" id="formHeader">Přihlášení</h1>
        <form class=" bg-body-tertiary" method="post" action="./phpscripts/login.php" id="login" style="display: block">
            <div class="mb-3">
                <label for="usernameInput" class="form-label">Uživatelské jméno</label>
                <input type="text" class="form-control" id="usernameInput" name="username">
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Heslo</label>
                <input type="password" class="form-control" id="passwordInput" name="password">
            </div>
            <button type="submit" class="btn">Login</button>
            <a  class="btn" onclick="switchForm()">Register</a>
        </form>



        <form method="post" action="./phpscripts/reg.php" style="display: none" id="register" class="bg-body-tertiary">
            <div class="mb-3">
                <label for="usernameInput" class="form-label">Uživatelské jméno</label>
                <input type="text" class="form-control" id="usernameInput" name="username">
            </div>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="text" class="form-control" id="emailInput" name="email">
            </div>
            <div class="mb-3">
                <label for="numberInput" class="form-label" >Telefonní Číslo</label>
                <input type="number" class="form-control" id="numberInput" name="number" maxlength="9">
            </div>
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Heslo</label>
                <input type="password" class="form-control" id="passwordInput" name="password">
            </div>
            <button type="submit" class="btn">Register</button>
            <a  class="btn" onclick="switchForm()">Login</a>
        </form>



    </div>
    <script>
        const login = document.getElementById('login');
        const register = document.getElementById('register');
        const header = document.getElementById('formHeader')

        function switchForm(){
            if(login.style.display === 'none'){
                login.style.display = "block";
                register.style.display = "none";
                header.innerHTML = 'Přihlášení';

            } else if(login.style.display === 'block'){
                register.style.display = 'block';
                login.style.display = 'none';
                header.innerHTML = 'Registrace'
            }
        }

        const numberInput = document.getElementById('numberInput');

        numberInput.addEventListener('input', function(event) {
            if (this.value.length > 9) {
                this.value = this.value.slice(0, 9);
            }
        });
    </script>

    <?php include './comps/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
    </html>