<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <div>
            <form method="post" action="{{ route('entrar') }}">
                @csrf
                <input type="email" name="email" placeholder="email">
                <input type="password" name="password" placeholder="**********">
                <button type="submit">Entrar</button>
            </form>
        </div>
    </body>
</html>
