<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Artículo</title>
    <link rel="stylesheet" href="CSS/CSS.css"/>
</head>
<body class="cuerpo">
    <header class="Titulo">
        <h1>Uy un Cryptid</h1>
    </header>
    <nav class = "navigator" >
        <ul class="nav-menu">
            <li class="nav-itemn">
                <a href="Inicio.php" class="nav-menu-link nav-link  ">Inicio</a>
            </li>
            <li class="nav-itemn">
                <a href="Agregar.php" class="nav-menu-link nav-link ">Agregar artículo</a>
            </li>
        </ul>
    <br>
    <fieldset>
        <legend>Ingresa tu Artículo</legend>
              <label  for="TituloA">Titulo</label>
              <br>
              <input type="text" id="TituloA" name="user_title">
              <br>

              <label for="Desc">Descripción</label>
              <br>
              <input type="text" id="Desc" name="user_description">
              <br>

              <label for="Img">Imagen</label>
              <br>
              <input type="url" id="Img" name="user_image">              
              <br>

              <label for="Autor">Autor</label>
              <br>
              <input type="text" id="Autor" name="user_name">              
              <br>
              <input type="submit" value="Postear">
</nav>
</body>
</html>