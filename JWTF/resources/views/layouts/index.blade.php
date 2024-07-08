<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista con Sidebar</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            flex-direction: row;
            margin: 0;
            padding: 0;
        }
        .sidebar {
            width: 70px;
            margin: 20px 0; 
            background-color: #7264ba;
            margin-left: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            box-sizing: border-box;
            padding: 20px; /* Espacio interno para los íconos */
            height: calc(100% - 40px); /* Altura del sidebar menos el espacio del margen */
            display: flex;
            flex-direction: column;
            align-items: center; /* Centrar íconos verticalmente */
            justify-content: space-around; /* Distribución uniforme vertical */
        }
        .sidebar img {
            width: 50px; /* Tamaño deseado para los íconos */
            height: 50px; /* Tamaño deseado para los íconos */
            margin-bottom: 20px; /* Espacio entre cada ícono */
        }
        .main-content {
            flex-grow: 1;
            margin: 20px; 
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            box-sizing: border-box;
            height: calc(100% - 40px); 
        }
    </style>
</head>

<body>
   
    <div class="sidebar">
        <img src="https://img.icons8.com/?size=100&id=102261&format=png&color=ffffff" alt="Icono 1">
        <img src="https://img.icons8.com/?size=100&id=10053&format=png&color=ffffff" alt="Icono 2">
        <img src="https://img.icons8.com/?size=100&id=59997&format=png&color=ffffff" alt="Icono 4">
        <img src="https://img.icons8.com/?size=100&id=44471&format=png&color=ffffff" alt="Icono 5">
       
    </div>
   
    <div class="main-content">
        @yield('content')
    </div>
    
</body>
</html>
