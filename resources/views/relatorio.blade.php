


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <title>Relatório</title>
  </head>
  <body>
  <h1>Relatório </h1>
  

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="/cadastroCliente"  class="btn btn-outline-dark me-md-2 btn-lg" type="button">Criar novo cadastro</a>
</div>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Telefone</th>
      <th scope="col">Data de nascimento</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   @foreach ($clientes as $cliente) 
   
    
    <tr>
      <th scope="row">{{$cliente->id_cliente}}</th>
      <td>{{ $cliente->nome_cliente }}</td>
      <td>{{ $cliente->email_cliente}}</td>
      <td>{{ $cliente->senha_cliente }}</td>
      <td>{{ $cliente->telefone_cliente }}</td>
      <td>{{ $cliente->data_nasc_cliente}}</td>
      <td >
         <a href="/editarFormulario/{{$cliente->id_cliente}}" class="btn btn-outline-dark">Editar</a>
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>

  
   



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>




  </body>
</html>




