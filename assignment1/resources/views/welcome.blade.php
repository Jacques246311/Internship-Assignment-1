<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>assignment1</title> <!-- Updated title -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
        }

        .selection-bg-red-500::selection {
            background-color: #EF4444;
            color: #FFFFFF;
        }
    </style>
</head>
<body class="antialiased selection-bg-red-500">
<div class="text-center text-4xl font-bold text-gray-800 dark:text-gray-200 mt-8">
    Hello World

</div>


<!-- Load compiled Vue component -->
<script src="{{ mix('js/app.js') }}" defer></script>


<div id="app">
    <user-signup-chart></user-signup-chart>
</div>
</body>
</html>
