<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
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
    <!--FORMULÁRIO-->
    <center><h1 class="m2">Cadastrar Produtos</h1></center>
    <form action="{{ route('registrarProduto') }}" class="form_produto m2" method="POST">
        @csrf
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Nome</label>
            <input type="text" class="form-control" name="nome" id="formGroupExampleInput2" placeholder="Nome do Produto">            
        </div>
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Custo</label>
            <input type="text" class="form-control" name="custo" id="formGroupExampleInput2" placeholder="Custo de Fabricação do Produto">            
        </div>
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Preço</label>
            <input type="text" class="form-control" name="preco" id="formGroupExampleInput2" placeholder="Preço do Produto">            
        </div>
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Quantidade</label>
            <input type="text" class="form-control" name="quantidade" id="formGroupExampleInput2" placeholder="Quantidade Disponível do Produto">            
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <center><a href="{{route('index')}}" class="btn btn-danger form_itens">Voltar <i class="fa fa-times-circle-o" aria-hidden="true"></i></a></center>                
                </div>
                <div class="col-sm">
                    <center><button class="btn btn-success form_itens">Cadastrar <i class="fa fa-check-square-o" aria-hidden="true"></i></i></button> </center>
                </div>
            </div>
        </div>        
        
    </form>
    
    <script src="{{ asset('web/jquery.js') }}"></script>
    <script src="{{ asset('web/bootstrap.js') }}"></script>
</body>
</html>