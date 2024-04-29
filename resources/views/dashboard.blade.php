<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ mix('js/app.js') }}"></script> 
</head>
<body>
<x-app-layout>
    //this is header
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('') }}
            <a href="{{ url('chatify') }}">chat now</a>

        </h2>
    </x-slot>

    

   
</x-app-layout>
 
</body>
</html>