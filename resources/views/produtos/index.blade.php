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
    <!--OPÇÕES DE CADASTRO E PESQUISA-->
    <center><h2 class="m2">Lista de Produtos</h2></center>
    <div class="list">
        <div class="container">
            <div class="row">
                <div class="col-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
          	            <button class="btn btn-secondary" type="submit">
            	            <i class="fa fa-search"></i>
          	            </button>
                    </div>
                </div>
                </div>
                <div class="col-3">
                    <a href="/produtos/novo" class="cd-bt">
                        <button class="btn btn-dark"  type="button">Cadastrar Produto <i class="fa fa-plus"></i></button>
                    </a>
                </div>                 
                <div class="col-3">
                    <a href="/pedidos/list" class="cd-bt">
                        <button class="btn btn-dark"  type="button">Visualizar Pedidos <i class="fa fa-list-ul"></i></button>
                    </a>
                </div>            
            </div>
        </div>        
        <!--TABELA DE LISTA DE PRODUTOS-->
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Custo</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Editar</th>
            <th scope="col">Pedido</th>
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
                    <td><a href="/produtos/edit/{{$p->id}}"><button class="btn btn-info"  type="button"><i class="fa fa-pencil"></i></button></a></td>
                    <td><a href="/pedidos/novo/"><button class="btn btn-primary"  type="button"><i class="fa fa-plus"></i></button></a></td>
                    <td><a href="/produtos/drop/{{$p->id}}"><button class="btn btn-danger"  type="button"><i class="fa fa-trash-o"></i></button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('web/jquery.js') }}"></script>
    <script src="{{ asset('web/bootstrap.js') }}"></script>
</body>
</html>