<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>

    <link rel="stylesheet" href="{{ asset('web/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('web/app.css') }}">
</head>
<body>
    <!--MENU NAV-BAR-->
    <nav class="bg-light">
        <center>
            <a href="https://github.com/jhefferson-matheus/Marata">
                <img class="logo_marata" src="{{url('/img/lg.png')}}" alt="Image"/>
            </a>
        </center>
    </nav>
    <center><h2 class="m2">Lista de Pedidos</h2></center>
    <div class="list">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">ID do Produto</th>
            <th scope="col">Status</th>
            <th scope="col">quantidade</th>
            </tr>
        </thead>

            <tbody>
                @foreach($pedido as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->id_produto }}</td>
                    <td>{{ $p->status }}</td>
                    <td>{{ $p->quantidade }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('web/jquery.js') }}"></script>
    <script src="{{ asset('web/bootstrap.js') }}"></script>
</body>
</html>