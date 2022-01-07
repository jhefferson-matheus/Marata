<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver um Produto</title>

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
    <center>
        <h1 class="m2">Atualizar Produto</h1>
    </center>
    <form action="{{ route('atualizarProduto', $produto->id) }}" class="form_produto m2" method="POST">
    @csrf
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Nome</label>
            <input type="text" class="form-control" name="nome" id="formGroupExampleInput2" value="{{ $produto->nome }}" required>            
        </div>
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Custo</label>
            <input type="text" class="form-control" name="custo" id="formGroupExampleInput2" value="{{ $produto->custo }}" required>            
        </div>
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Preço</label>
            <input type="text" class="form-control" name="preco" id="formGroupExampleInput2" value="{{ $produto->preco }}" required>            
        </div>
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Quantidade</label>
            <input type="text" class="form-control" name="quantidade" id="formGroupExampleInput2" value="{{ $produto->quantidade }}" required>            
        </div>
        <center>
            <button class="btn btn-success form_itens">Atualizar <i class="fa fa-check-square-o" aria-hidden="true"></i></i></button>
        </center>
    </form>
    
    <script src="{{ asset('web/jquery.js') }}"></script>
    <script src="{{ asset('web/bootstrap.js') }}"></script>
</body>
</html>
