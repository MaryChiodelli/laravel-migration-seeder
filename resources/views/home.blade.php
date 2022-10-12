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
            <div>{{ $train->company }}</div>
            <div>{{ $train->train_code }}</div>
        </li>
        @empty
            <li>Nessun treno disponibile</li>
        @endforelse
    </ul>
</body>
</html>