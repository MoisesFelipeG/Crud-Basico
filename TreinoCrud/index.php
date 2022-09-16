<?php
require_once "./conexao.php";
$conexao = new conexao();
if(isset($_POST["excluir"]) && !empty($_POST["excluir"])){
 $conexao->executeQuery("delete from usuario where id = ".$_POST["excluir"].";");
}

$bigodin = $conexao->executeSelect("select * from usuario");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - UDEMY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
    <style type="text/css">
    body {
        margin: 20px;
        background-color: #ffff
    }
    *{
        font-family: 'Open Sans', sans-serif;
    }
    h2{
        font-family: 'Open Sans', sans-serif;
    }
    .thead{
        background-color: #f7f7f7;
    }
    </style>
</head>
<body>
    <div class="container">
    <h2 class= "text-center"> Lista de Clientes <i class= "bi bi-people-fill" > </i> </h2>
    <h5 class="text-end">
    <a href="index2.php" class="btnbtn-primarybtn-Xs">
    <i class= "bi bi-person-plus-fill" > </i>
    </a>
    </h5>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">DT.NASCIMENTO</th>
      <th scope="col">ENDERECO</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">ACOES</th>
    </tr>
  </thead>
  <tbody>

    <?php
    
    foreach ($bigodin as $usuario) {
        echo
        '
        <tr>
        <th scope="row">'.$usuario->id.'</th>
        <td>'.$usuario->nome.'</td>
        <td>'.$usuario->email.'</td>
        <td>'.$usuario->data_nascimento.'</td>
        <td>'.$usuario->endereco.'</td>
        <td>'.$usuario->telefone.'</td>
        <td>
      <form method="POST" action = "index3.php">
      <button class="btn btn-warning btn-Xs" name = "atualizar" value = "'.$usuario->id.'">
      <i class= "bi bi-pencil-square"></i>
      </button>
      </form>
      </td>
      <td>
      <form method="POST" action="index.php">
      <button class= "btn btn-danger btn-Xs" value ="'.$usuario->id.'" name= "excluir"
      type = "submit"> 
      <i class= "bi bi-trash"> </i>
      </button>
      </form>
      </td>
      </tr>
    ';
    }



    ?>
    <!--tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>mark@gmail.com</td>
      <td>24/09/2003</td>
      <td>Rua das flores</td>
      <td>31993050294</td>
      <td>
      <formmethod="POST">
    <button class="btn btn-warning btn-Xs">
    <i class= "bi bi-pencil-square"></i>
    </button>
    </form>
    </td>
    <td>
    <form method="POST" onclick= "return confirm ('Tem certeza que deseja excluir ?');">
    <button class= "btn btn-danger btn-Xs"> 
    <i class= "bi bi-trash"> </i>
    </button>
    </form>
    </td>
    </tr -->
    <script type="text/javascriptsrc=" src = "https://canjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>
</html>