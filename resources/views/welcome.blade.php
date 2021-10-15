<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Liveware with TailwindCss</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container mx-auto">
            <h1 class="text-purple-600 hover:text-red-500 font-bold mx-auto text-center">Standard Contact Form</h1>
            <div class="rounded-t-xl overflow-hidden bg-gradient-to-r from-amber-50 to-amber-100 p-10">
              <div class="text-center text-5xl font-extrabold leading-none tracking-tight">
                <span class="decoration-clone bg-clip-text text-transparent bg-gradient-to-b from-amber-400 to-red-500">
                  Hello<br>
                  World
                </span>
              </div>
            </div>
        </div>
    </body>
</html>
