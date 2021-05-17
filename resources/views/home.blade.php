<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">

    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.bundle.js') }}"></script>

    <script src="{{ asset('menu.js') }}"></script>
</head>

<body class="container">
    <div class="menu">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/logo_principal.svg') }}" alt="" class="d-inline-block align-text-top">
                </a>
                <form class="d-flex">
                    <button class="btn btn-outline-mova" type="submit">
                        <img src="{{ asset('assets/setaVoltar.svg') }}" />
                        Voltar
                    </button>
                </form>
            </div>
        </nav>

    </div>

    <h1>Lista para teste</h1>
    <table border="1px">

        <tr>
            <td class="text text-uppercase">id</td>
            <td class="text text-uppercase">nome</td>
            <td class="text text-uppercase">img</td>
        </tr>

        @foreach($listaArray as $key => $item)
        <tr>
            <td>{{ $key }}</td>
            <td>{{ $item['name'] }}</td>
            <td><img src={{ $item['flag'] }} width="300rem" /></td>
            <!-- <td>{{ $item['topLevelDomain']['0'] }}</td> -->
        </tr>
        @endforeach
    </table>



    <footer class="pt-3">
        <button class="btn btn-outline-mova" type="submit">
            <img src="{{ asset('assets/setaVoltar.svg') }}" />
            Voltar
        </button>
    </footer>
</body>

</html>