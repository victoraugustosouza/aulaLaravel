<html>

    <header>
            <title>This is title</title>
    </header>
    <body>
            @foreach($cadastros as $c)

            	<h3>{{ $c->nome}}  / {{$c->sobrenome}}</h3>

            @endforeach

            @include('exemplos.help')
    </body>
</html>