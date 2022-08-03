<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Arkatama Test</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <form action="/" method="post">
            @csrf
            <label for="user-data">Masukkan data </label>
            <input type="text" name="user-data" id="user-data">
            <button type="submit">Simpan</button>
        </form>

        @if ($people = session('people'))
            <h3>nama : {{ $people->name }}</h2>
            <h3>umur : {{ $people->age }}</h2>
            <h3>kota : {{ $people->city }}</h2>
            <h2>Berhasil disimpan</h2>
        @endif
    </body>
</html>
