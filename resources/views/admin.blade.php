<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            background-color: rgb(21, 121, 137);
            height: 700px;
            color: white;
            margin-top: 50px;
            border-radius: 10px;
        }

        .btn-admin {
            background-color: rgb(37, 37, 218);
            padding: 10px;
            color: white;
            border-radius: 5px;
            border: solid 0px;
        }
        .btn-admin:hover {
            background-color: rgb(30, 32, 128);
            color: rgb(161, 161, 161);
        }
        .btn-pengguna {
            background-color: rgb(19, 179, 41);
            padding: 10px;
            color: white;
            border-radius: 5px;
            border: solid 0px;
        }
        .btn-pengguna:hover {
            background-color: rgb(23, 95, 23);
            color: rgb(161, 161, 161);
        }
        .btn-logout {
            background-color: rgb(255, 0, 0);
            padding: 10px;
            color: rgb(255, 255, 255);
            border-radius: 5px;
            border: solid 0px;
        }
        .btn-logout:hover {
            background-color: rgb(95, 23, 23);
            color: rgb(161, 161, 161);
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div>
                <a href="/dosen">
                    <button class="btn-admin">Pengguna 1</button>
                </a>
                <a href="/pengguna">
                    <button class="btn-pengguna">Pengguna 2</button>
                </a>
                <a href='/logout'>
                <button class="btn-logout">Logout</button>
                </a>
            </div>
            <h1 style="text-align: center;">Manajemen Dosen</h1>
        </header>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>