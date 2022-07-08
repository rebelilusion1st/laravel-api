<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Laravel API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url('bg.jpg');
        }
        .kontainer {
            margin-top: 30px;
        }
        .kontainer h1 {
            font-size: 100px;
        }
        .card {
            padding: 60px;
        }
        .card-body h2 {
            font-size: 50px;
        }
        .card-body p {
            font-size: 20px;
        }
        /* * {
            border: 2px solid !important;
        } */
    </style>
</head>

<body>
    <div class="container-md kontainer">
        <h1 class="text-center mb-3">Tugas Laravel API</h1>
        <h2 class="text-center">(Mengambil data API quote dari berbagai ANIME secara random)</h2>
        <h3 class="text-center">By Muhammad Muslim Abdul Jabbaar</h3>
        <div class="card mb-5 text-center">
            <div class="card-body">
                <h2 class="card-title"><?= $decode['anime']; ?></h2>
                <h3 class="mt-3">(<?= $decode['character']; ?>)</h3>
                <p class="card-text">"<?= $decode['quote']; ?>"</p>
            </div>
            <a href="index.php" class="mt-3">
                <button class="btn btn-danger">Quote Lainnya</button>
            </a>
        </div>
    </div>
</body>

</html>