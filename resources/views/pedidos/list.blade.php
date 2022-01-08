<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <!--LINKS DO NOSSO BOTSTRAP-->
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
     <!--OPÇÕES DE CADASTRO E PESQUISA-->
    <center><h2 class="m2">Lista de Pedidos</h2></center>
    <div class="list">
        <div class="row">
            <div class="col-6">
                <form action="{{ route('pesquisarPedido') }}" method="post"> 
                    @csrf  
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar Pedidos" name="search">
                        <div class="input-group-btn">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6 lft">
                <a href="{{ route('index') }}" class="">
                    <button class="btn btn-dark"  type="button">Cadastrar Pedidos <i class="fa fa-list-ul"></i></button>
                </a>
            </div>  
        </div>  
        <!--TABELA DE LISTA DE PRODUTOS-->
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">ID do Produto</th>
            <th scope="col">Status</th>
            <th scope="col">quantidade</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
            </tr>
        </thead>

            <tbody>
                @foreach($pedido as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->id_produto }}</td>
                    <td>{{ $p->status }}</td>
                    <td>{{ $p->quantidade }}</td>
                    <td><a href="/pedidos/edit/{{$p->id}}"><button class="btn btn-info"  type="button"><i class="fa fa-pencil"></i></button></a></td>
                    <td><a href="/pedidos/drop/{{$p->id}}"><button class="btn btn-danger"  type="button"><i class="fa fa-trash-o"></i></button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
        <div class="d-flex justify-content-center">
            {!! $pedido->links() !!}
        </div>
    </div>

    <script src="{{ asset('web/jquery.js') }}"></script>
    <script src="{{ asset('web/bootstrap.js') }}"></script>
</body>
</html>