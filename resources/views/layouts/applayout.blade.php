<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? $title .' - Ghetto Music': 'Ghetto Music'}}</title>
    @vite(['resources/js/main.js','resources/css/global.css'])
</head>

<body x-data="{ menu: false, download: false}">
    {{-- Layout App --}}
    <div id="appLayout">
        {{-- Left Layout --}}
        <x-app.global.sidebar.sidebar />
        {{-- Right Layout --}}
        <div id="rightLayout">
            {{-- Top Right Layout --}}
            <livewire:components.global.navegation />
            {{-- Center Right Layout  --}}
            <div id="center-rightLayout">
                <main id="main">
                    {{ $slot }}
                </main>
            {{-- Bottom Right Layout --}}
            <livewire:components.global.footer-app />                
            </div>
        </div>
    </div>
</body>

</html>
