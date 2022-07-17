<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="train-container">
        @foreach($trains as $train)
        <div class="train-card">
            <div><b>Azienda: </b>{{$train->azienda}}</div>
            <div><b>Stazione di partenza: </b>{{$train->stazione_di_partenza}}</div>
            <div><b>Stazione di arrivo: </b>{{$train->stazione_di_arrivo}}</div>
            <div><b>Orario di partenza: </b>{{$train->orario_di_partenza}}</div>
            <div><b>Orario di arrivo: </b>{{$train->orario_di_arrivo}}</div>
            <div><b>Codice treno: </b>{{$train->codice_treno}}</div>
            <div><b>Numero di carrozze: </b>{{$train->numero_carrozze}}</div>
        </div>
        @endforeach
    </section>
</body>
</html>