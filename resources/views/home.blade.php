<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>

    <div class="container">
        @foreach ($movies as $item)
            <div class="card">
                <ul>
                    <li>
                        <h2>TITOLO: {{ $item->title }}</h2>
                        <p>NAZIONE: {{ $item->nationality }}</p>
                        <p>DATA: {{ $item->date }}</p>
                        <p>VOTO: {{ $item->vote }}</p>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
</body>
</html>