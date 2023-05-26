<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="/crear" method="post">

        @csrf
        
        Nombre <input type="text" name="nombre" id=""> <br>
        Especie <input type="text" name="especie" id=""><br>
        Patas <input type="text" name="patas" id=""> <br>
        Cola <input type="checkbox" name="cola" id=""><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>