<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Exclusão</title>

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
    <!--Confirmação-->
    <br><br>
    <center><h1>Deseja Deletar o Item Selecionado?</h1></center>
    <br><br><br><br>

    <form action="{{ route('deletarProduto', $produto->id) }}" class="form_produto m2" method="POST">
    @csrf
        <div class="container">
                <div class="row">
                    <div class="col-sm">
                    <center><a href="{{route('index')}}" class="btn btn-dark form_itens">Voltar</a></center>                
                    </div>
                    <div class="col-sm">
                    <center><button class="btn btn-primary form_itens">Confirmar</button> </center>
                </div>
            </div>
        </div>  
    </form>

    <script src="{{ asset('web/jquery.js') }}"></script>
    <script src="{{ asset('web/bootstrap.js') }}"></script>
</body>
</html>