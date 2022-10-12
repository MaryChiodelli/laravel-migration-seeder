<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni</title>
</head>
<body>
    <h1>Treni</h1>
    <ul>
        @forelse ($trains as $train)
        <li>
            <h3>Codice treno: {{ $train->train_code }}</h3>
            <div>Partenza: {{ $train->departure_station }}, {{ $train->departure_time }}</div>
            <div>Arrivo: {{ $train->arrival_station }}, {{ $train->arrival_time }}</div>
        </li>
        @empty
            <li>Nessun treno disponibile</li>
        @endforelse
    </ul>
</body>
</html>