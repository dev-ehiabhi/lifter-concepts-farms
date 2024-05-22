<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/20">
        <div class="grid mx-4">
            <div class="w-70 mx-auto">
                Top Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium doloremque voluptatum omnis harum quia nesciunt ducimus optio reiciendis incidunt. Asperiores labore eos est, laudantium praesentium recusandae harum distinctio officiis quod.
            </div>
        </div>
    </body>
</html>