<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bingo Cards</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @vite('resources/css/app.css')

</head>
<body class="font-sans antialiased">
<div>
    <div class="flex justify-center items-center h-screen">
        <div class="text-center m-2">
            <h1 class="text-4xl lg:text-7xl font-bold">Bingo Cards</h1>
            <div class="bg-gray-400 mt-4 grid grid-cols-5 border border-gray-600 border-4">
                <div class="border border-2 border-gray-500 p-4 lg:p-8 text-2xl lg:text-5xl font-bold">B</div>
                <div class="border border-2 border-gray-500 p-4 lg:p-8 text-2xl lg:text-5xl font-bold">I</div>
                <div class="border border-2 border-gray-500 p-4 lg:p-8 text-2xl lg:text-5xl font-bold">N</div>
                <div class="border border-2 border-gray-500 p-4 lg:p-8 text-2xl lg:text-5xl font-bold">G</div>
                <div class="border border-2 border-gray-500 p-4 lg:p-8 text-2xl lg:text-5xl font-bold">O</div>
            </div>
            <div class="mb-6 grid grid-rows-5 grid-flow-col border border-gray-600 border-4">
                @foreach($numbers as $number)
                    <div class="border border-2 border-gray-400 p-4 lg:p-8 text-xl lg:text-4xl font-bold">{{ $number}}</div>
                @endforeach
            </div>
            <div class="flex justify-center items-center space-x-2">
            <a href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Neue Bingo-Karte
                erstellen</a>
            <button onclick="window.print();" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Bingo-Karte
                drucken</button>
            </div>
            <div class="text-center text-xs mt-4">© 2024 kayschima (Kay Markschies)</div>
        </div>
    </div>
</div>
</body>
</html>
