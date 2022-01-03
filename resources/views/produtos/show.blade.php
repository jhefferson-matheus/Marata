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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="https://github.com/jhefferson-matheus/Marata"><img class="logo_marata" src="{{url('/img/lg.png')}}" alt="Image"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!--FORMULÁRIO-->
    <center><h1 class="m2">Visualizar Produto</h1></center>
    <form class="form_produto m2">
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Nome</label>
            <input type="text" class="form-control" name="nome" id="formGroupExampleInput2"  disabled="" value="{{ $produto->nome }}">            
        </div>
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Custo</label>
            <input type="text" class="form-control" name="custo" id="formGroupExampleInput2"  disabled="" value="{{ $produto->custo }}">            
        </div>
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Preço</label>
            <input type="text" class="form-control" name="preco" id="formGroupExampleInput2"  disabled="" value="{{ $produto->preco }}">            
        </div>
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Quantidade</label>
            <input type="text" class="form-control" name="quantidade" id="formGroupExampleInput2"  disabled="" value="{{ $produto->quantidade }}">            
        </div>
        <center><a href="{{route('home')}}" class="btn btn-dark form_itens">Voltar</a></center>
    </form>
    
    <script src="{{ asset('web/jquery.js') }}"></script>
    <script src="{{ asset('web/bootstrap.js') }}"></script>
</body>
</html>