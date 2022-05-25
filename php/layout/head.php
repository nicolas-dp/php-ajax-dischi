<!doctype html>
<html lang="en">

<head>
    <title>PHP Dischi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <header class="p-3 bg-dark d-flex justify-content-between align-items-center">
        <nav class="navbar navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./img/spotify.png" alt="logo" height="50" width="50" />
                </a>
            </div>
        </nav>

        <div class="filter">
            <form action="/../php/php-ajax-dischi/php/" method="get">
                <select name="genre" id="genre">
                    <option value="">All genres</option>
                    <option value="Rock">Rock</option>
                    <option value="Pop">Pop</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Metal">Metal</option>
                </select>

                <button type="submit">Filtra</button>

            </form>
        </div>
    </header>