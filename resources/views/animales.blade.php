<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="/crear">Crear animalito</a>
    @if(session("eliminado"))
        <b>Animalito eliminado</b>
    @endif

    @if(session("creado"))
        <b>Animalito Creado</b>
    @endif
    
    <table>
        <tr>
            <td>
                Id
            </td>
            <td>
                Nombre
            </td>
            <td>
                Especie
            </td>
            <td>
                Cantidad de Patas
            </td>
            <td>
                Cola
            </td>
            <td>
                Fecha de creado
            </td>
            <td>
                Fecha de modificado
            </td>
        </tr>

        @foreach($animales as $animalito)
        <tr>
            <td>
                {{ $animalito -> id }}
            </td>
            <td>
                {{ $animalito -> nombre }}
            </td>
            <td>
                {{ $animalito -> especie }}
            </td>
            <td>
                {{ $animalito -> cantidad_de_patas }}
            </td>
            <td>
                {{ $animalito -> cola }}
            </td>
            <td>
                {{ $animalito -> created_at }}
            </td>
            <td>
                {{ $animalito -> updated_at }}
            </td>
            <td>
                <a href="/eliminar?id={{ $animalito -> id }}">Eliminar</a>
            </td>
        </tr>

        @endforeach
    </table>

    
</body>
</html>