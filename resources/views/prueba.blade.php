<!doctype html>
<html lang="en">
    <head>
        <title>@yield('titulo')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">
        </script>
    </head>

    <body>
      <form action="{{route('insertar')}}" method="post">
        @csrf
        <select name="equipo" id="">
            @foreach ($equipos as $e)
                <option value="{{$e->id}}">{{$e->nombre}}</option>
            @endforeach
        </select>
        <select name="jugador" id="">
            @foreach ($jugadores as $j)
                <option value="{{$j->id}}" {{ (old("jugador") == $j->id ? "selected":"") }}>{{$j->nombre}} - {{$j->apellido}}</option>
            @endforeach
        </select>
        <button type="submit">Añadir</button>
      </form>
      <table>
        @foreach ($t as $item)
            <tr>
                <td>{{$item->equipo->nombre}}</td>
                <td>{{$item->jugador->nombre}}-{{$item->jugador->apellido}}</td>
            </tr>
        @endforeach
      </table>
    </body>
</html>
