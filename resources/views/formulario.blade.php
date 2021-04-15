<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <title>Cadastro</title>
  </head>
  <body>
    <h1>Cadastro</h1>
    <form class="row g-3" method="POST" action ="/salvarCadastro">
        @csrf
        <div class="col-8">
            <label for="inputAddress" class="form-label">Nome Completo</label>
            <input type="text" class="form-control"required id="inputAddress" name="name">
        </div>
        <div class="col-md-5">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control"required id="inputEmail4" name="email">
        </div>
        <div class="col-md-5">
            <label for="inputPassword4" class="form-label">Senha</label>
            <input type="password" class="form-control" required id="inputPassword4" name="password">
        </div>
        <div class="col-md-5">
            <label for="inputCity" class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" required id="inputCity " name="date">
        </div>
        <div class="col-5">
            <label for="inputAddress2" class="form-label">Contato</label>
            <input type="text" class="form-control phone_with_ddd" required id="inputAddress2" name="phone">
        </div>
         <div class="col-12">
            <button type="submit" class="btn btn-outline-dark">Salvar</button>
        </div>
    </form>


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
   <script>
   $(document).ready(function(){
    $('.phone_with_ddd').mask('(00) 0 0000-0000');
   })
   </script>
  </body>
</html>
