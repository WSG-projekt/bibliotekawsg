<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblioteka</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="welcome">
        <div class="container welcome-container justify-content-center d-flex align-items-center flex-column">
            <h1 class="text-center fw-bold">Witaj w aplikacji Biblioteki !</h1>
            <div class="card mt-5" style="width: 40rem">
                <div class="card-body">
                   <div class="left">
                       <p>Nie masz jeszcze konta w naszym systemie?</p>

                   </div>
                    <div class="right">
                        <p>Posiadasz już konto w naszym systemie?</p>
                    </div>
                    <div class="buttons">
                        <button type="button" class="btn btn-secondary"><a class="nav-link btn" href="{{ route('register') }}">Zarejestruj się</a></button>
                        <button type="button" class="btn btn-secondary"><a class="nav-link btn" href="{{ route('login') }}">Zaloguj się</a></button>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
