<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Busqueda de Animales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .navbar-brand{
            border: 5px solid red;
            padding: 10px 20px;
            border-radius: 25px;
        }
        .contenedor{
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        img{
            width: 100%;
            min-width: 100%;
        }
        .busqueda{
            width: 100%;
            position: relative;
            margin-bottom: 50px;
        }
        .input-field{
            width: 100%;
            outline: 0;
            border: 2px solid #999999;
            border-radius: 3px;
            padding: 10px;
            padding-left: 60px;
            background-color: transparent;
            font-size: 2em;
            color: #999999;
        }
        .input-field::placeholder{
            color: #999999;
        }
        .icono{
            position: absolute;
            left: 0;
            top: 0;
            width: 60px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #999999;
            font-size: 1.6em;
        }
        .btn{
            width: 10%;
            margin-bottom: 40px;
        }
        .footer{
            background-color: #ccc;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Search De Animales</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="contenedor">
        <img src="images/logo-Google.png" alt="imagen logo Google">

        <div class="busqueda">
            <input type="text" name="busqueda" class="input-field" id="busqueda">
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </div>
        </div>
        <button type="button" class="btn btn-primary">Buscar</button>
    </div>


    <footer class="footer">
        <p>Todos los derechos reservados</p>
        <p>App creado por Proyectos y Soluciones T.I</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
