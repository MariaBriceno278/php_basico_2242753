<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="p-3 mb-2 bg-info text-white" >Lista de Paises</h1>
    <table class="table table-bordered table-dark">
        <thead class="thead-dark">
            <tr>
                <th class="text-warning">Nombre</th>
                <th class="text-info">Capital</th>
                <th class="text-info">Moneda</th>
                <th class="text-info">Población</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($naciones as $nombre => $nacion )
                <tr>
                    <th>{{ $nombre}}</th>
                    <td>{{ $nacion["capital"]}}</td>
                    <td>{{ $nacion["moneda"]}}</td>
                    <td>{{ $nacion["poblacion"]}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>
