<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
</head>
<body>
    <style>
    body{
        background-image: url("gray.gif");
    }
    header {
        background-color: darkgrey;
        font-family: Bahnschrift;
        border-style: solid;
        border-color: gold;
        border-width: 10px;
    }
    main {
        font-size: 20px;
        border-style: solid;
        border-color: gold;
        border-width: 10px;
        padding: 15px;
        background-color: darkgrey;
        width: 650px;
        heigth: 700px;
    }
    </style>
    <header>
    <h1>Bienvenid@ a la pagina de prueba</h1>

    <p>En esta pagina se podra modificar una base de datos simple.</p>
    </header>

    <br>

    <main>
        <h3>Ingresa los datos solicitados para guardarlos en la tabla</h3>

        <form>
            <label for="Nombre">Nombre:</label>
            <input type="text" id="Nombre" name="Nombre" maxlength="50"><br><br>
            <label for="ColorFavorito">Color favorito:</label>
            <input type="text" id="ColorFavorito" name="ColorFavorito" maxlength="15"><br><br>
            <label for="ComidaPreferida">Comida preferida:</label>
            <input type="text" id="ComidaPreferida" name="ComidaPreferida" maxlength="30"><br><br>
            <label for="EstacionFavorita">Estacion favorita:</label>
            <input type="radio" id="EstacionFavorita" name="EstacionFavorita" Value="Primavera"> <label for="Primavera">Primavera</label>
            <input type="radio" id="EstacionFavorita" name="EstacionFavorita" Value="Verano"> <label for="Verano">Verano</label>
            <input type="radio" id="EstacionFavorita" name="EstacionFavorita" Value="Otoño"> <label for="Otoño">Otoño</label>
            <input type="radio" id="EstacionFavorita" name="EstacionFavorita" Value="Invierno"> <label for="Invierno">Invierno</label><br><br>
            <label for="PaginaURL">Pagina web que recomendarias (URL):</label>
            <input type="url" id="PaginaURL" name="PaginaURL"><br><br>
            <label for="Comentarios">Comentarios adicionales (opcional):</label><br><br>
            <textarea id="Comentarios" name="Comentarios" rows="3" cols="85" maxlength="174"></textarea><br>
            <input type="submit" value="Enviar">
        </form>
    </main>

</body>
</html>