<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Welcome!</title>
</head>
    <body class="bg-gradient">
        <div class="relative min-h-screen flex flex-col items-center justify-center">
            <div class="bg-cyan-950 shadow-md rounded-lg p-6 w-80 h-60 border-cyan-600">
                <h1 class="text-3xl text-cyan-50 font-semibold mb-5">Welcome!</h1>
                <h2 class="text-xl text-cyan-50 mb-10"> Join us today and enjoy our amazing app!</h2>
                    <div class="relative flex flex-col items-baseline">
                        @if (Route::has('login'))
                        <livewire:welcome.navigation />
                        @endif
                    </div>
            </div>
        </div>
    </body>
</html>