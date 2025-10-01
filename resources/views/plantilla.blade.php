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
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{route('vistaJugar')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQntLbDieNmfnNwUYPDmdvfyqxxVVwa8vMFvw&s" alt="Lobtuf grid" height="24" width="30">
                    Lobtuf</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false">
                    @auth
                        {{Auth::user()->email}}
                    @endauth
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown08">
                                <li><a href="{{route('vistaLogin')}}" type="button" class="close link-underline link-underline-opacity-0" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                Cerrar sesión
                                </a></li>
                            </ul>    
                        </li>
                </ul>    
                  </div>
                </div>
              </nav>
            <!-- place navbar here -->
        </header>
        <main>
            @yield('contenido')
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
