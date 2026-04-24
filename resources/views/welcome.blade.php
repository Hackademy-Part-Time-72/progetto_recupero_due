<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Task Manager</title>

    @livewireStyles
</head>

<body style="font-family: sans-serif; padding: 40px;">

    <h1>Task Manager</h1>

    <livewire:task-manager />

    @livewireScripts

</body>

</html>