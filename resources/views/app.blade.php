<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Livewire Poll</title>

    @vite('resources/css/app.css')

    @livewireStyles
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    @livewireScripts
    <div>
        <h2 class="text-2xl font-bold my-4">Create Poll</h2>
        @livewire('create-poll')
    </div>
    <div>
        <h2 class="text-2xl font-bold my-4">Available Polls</h2>
        @livewire('polls')
    </div>
</body>

</html>
