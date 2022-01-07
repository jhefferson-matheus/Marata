<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Pedido</title>

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
    <center><h1 class="m2">Cadastrar Pedidos</h1></center>
    <form action="{{ route('registrarPedido') }}" class="form_produto m2" method="POST">
        @csrf
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">ID</label>
            <input type="text" class="form-control" name="id_produto" id="formGroupExampleInput2" placeholder="ID do Pedido" value="{{ $id }}" disabled>            
        </div>
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Status</label>                      
            <select name="status" id="formGroupExampleInput2" class="form-control" placeholder="Status do Pedido">
            <option value="Em Aberto">Em Aberto</option>
            <option value="Pago">Pago</option>
            </select>          
        </div>
        <div class="form-group form_itens">
            <label for="formGroupExampleInput2">Quantidade</label>
            <input type="text" class="form-control" name="quantidade" id="formGroupExampleInput2" placeholder="Quantidade  do Pedido">            
        </div>
        <br /><br />
        <div class="container">
            <div class="row">
                <div class="col-sm">
                <center><a href="{{route('index')}}" class="btn btn-dark form_itens">Voltar</a></center>                
                </div>
                <div class="col-sm">
                <center><button class="btn btn-primary form_itens">Cadastrar</button> </center>
                </div>
            </div>
        </div>        
        
    </form>
    
    <script src="{{ asset('web/jquery.js') }}"></script>
    <script src="{{ asset('web/bootstrap.js') }}"></script>
</body>
</html>