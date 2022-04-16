<!DOCTYPE html>
<html>
    <head>
        <title>Criar conta</title>
    </head>
    <body>
        <div>
            <form method="post" action="{{ route('adduser') }}">
                @csrf
                <input type="text" name="name" placeholder="name">
                <input type="email" name="email" placeholder="email">
                <input type="password" name="password" placeholder="**********">
                <button type="submit">Entrar</button>
            </form>
        </div>
    </body>
</html>
