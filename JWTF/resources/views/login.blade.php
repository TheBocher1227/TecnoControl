
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .required::after {
            content: "*";
            color: red;
        }

        .container {
            max-height: 100vh;
            width: 25%;
            height: 100%;
            margin: auto;
            margin-top: 10%;
            box-shadow: 0 0 5px 5px rgba(0,0,0,0.1);
            border-radius: 15px;
            padding: 20px 50px;
        }

        .hr-text {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
        }

        .hr-text hr {
            flex: 1;
            border: none;
            padding: 0;
            border-top: 1px solid #000;
        }

        .hr-text span {
            padding: 0 10px;
            white-space: nowrap;
        }

        @media (max-width: 1000px) {
            .container {
                width: 40%;
            }
        }

        @media (max-width: 850px) {
            .container {
                width: 45%;
            }
        }

        @media (max-width: 700px) {
            .container {
                width: 60%;
            }
        }

        @media (max-width: 450px) {
            .container {
                width: 80%;
            }
        }

        @media (max-width: 380px) {
            .container {
                width: 80%;
            }
        }

        @media (max-width: 320px) {
            .container {
                width: 90%;
                padding: 10px;
                margin-top: 20%;
            }
        }


    </style>
</head>
<body>

    <div class="container">
        <h4 class="text-center">Bienvenido a Tecno Control</h4>
        <div class="form-group">
            <div class="mb-3">
                <label for="" class="required mt-2">Correo</label>
                <input type="text" class="form-control" placeholder="example@gmail.com">
            </div>
            <div class="mb-3">
                <label for="" class="required mt-2">Contraseña</label>
                <input type="password" class="form-control" placeholder="********">
            </div>

            <button class="btn btn-primary w-100" >Iniciar sesión</button>
        </div>

        <div class="hr-text">
            <hr>
            <span>o</span>
            <hr>
        </div>

        <button class="btn btn-dark w-100 mt-5 mb-5">Registrate</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
