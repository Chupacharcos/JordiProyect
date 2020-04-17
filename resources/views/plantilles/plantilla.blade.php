<!DOCTYPE html>
<html lang="es">
<head>
    <title>VideoClub</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <style>
        .header {
            background-color: #2175bc;
        }

        ul {
            margin: 0;
            padding: 10px;
        }

        ul li {
            display: inline;
        }

        ul li a {
            font-family: Arial;
            font-size: 11px;
            text-decoration: none;
            padding: 10px;
            background-color: #2175bc;
            color: #fff;
        }
    </style>
</head>
<body>
<div class='header'>
    <h1>Video Club</h1>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/llista">Llistat</a></li>
            <li><a href="/contactar">Contacta</a></li>
        </ul>
    </nav>
</div>
@yield('principal')
</body>
</html>
