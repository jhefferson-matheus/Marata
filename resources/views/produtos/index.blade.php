<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"/>
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
    <center><h2 class="m2">Lista de Produtos</h2></center>
    <div class="list">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Custo</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
            </tr>
        </thead>

            <tbody>
                @foreach($produto as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->custo }}</td>
                    <td>{{ $p->preco }}</td>
                    <td>{{ $p->quantidade }}</td>
                    <td><a href="/produtos/edit/{{$p->id}}"><button class="btn btn-primary"  type="button"><i class="fa fa-pencil-square-o"></i></button></a></td>
                    <td><a href="/produtos/drop/{{$p->id}}"><button class="btn btn-danger"  type="button"> <i class="fa fa-trash-o"></i></button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('web/jquery.js') }}"></script>
    <script src="{{ asset('web/bootstrap.js') }}"></script>
</body>
</html>