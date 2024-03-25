<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body>
        <div class="relative min-h-screen flex flex-col items-center justify-center">
            <div class="bg-cyan-900 shadow-md rounded-lg p-6 w-80 h-60">
                <h1 class="text-2xl text-cyan-100 font-semibold mb-4">Welcome</h1>
                    <div class="relative flex flex-col items-start">
                        @if (Route::has('login'))
                        <livewire:welcome.navigation />
                        @endif
                    </div>
            </div>
        </div>
    </body>
</html>