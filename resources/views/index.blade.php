<!DOCTYPE html>

<html>
    <head>

    </head>
    <body>
        <div>
            <nav>
                <ul>
                    @if(Auth::check())
                    <ul>
                        <a href="{{ route('layout') }}">admin</a>
                    </ul>
                    <strong>{{ Auth::user()->name }}</strong>
                    <br>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                    @else
                    <a href="{{ route('login') }}">Login</a> / <a href="{{ route('criar.conta') }}">Criar Conta</a>

                    @endif
                </ul>
            </nav>
        </div>
        <h1>Jogo educacional de pergunta e resposta</h1>
    </body>

</html>
