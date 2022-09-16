<?php
require_once "./conexao.php";
$conexao = new conexao();
$id = "";

if(isset($_POST['atualizar'])){
    $id = $_POST['atualizar'];
}
if(isset($_POST['botao']))
{ 
    
    $bigodin = $conexao->executeQuery("update usuario set nome = '{$_POST['nome']}', email = '{$_POST['email']}', data_nascimento = '2020-10-08', endereco = '{$_POST['endereco']}', telefone = '{$_POST['telefone']}' where id = {$_POST['botao']};");
    var_dump($bigodin);
    if($bigodin[0] != '00000'){
        echo "ERRO";
    }
    else{
        echo "erro2";
    }
}else {
    echo ".....";
}
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
    <h2 class= "text-center"> Atualizar usuario<i class= "bi bi-people-fill" > </i> </h2>
    <h5 class="text-end">
    <a href="view/page_register.php"class="btnbtn-primarybtn-Xs">
    <i class= "bi bi-person-plus-fill" > </i>
    </a>
    </h5>
    </div>
    <form method="POST" action="./index3.php">
        <div class="row g-3">
    
    <div class="col-md-6">
    <label for="name" class="form-label">Nome <i class="bi bi-person"></i></label>
    <input type="name" class= "form-control" name= "nome" required>
    </div>
    <div class="col-md-6">
    <label for="email" class= "form-labe'">E-mail <i class= "bi bi-envelope" > </i> </label>
    <input type="email" class= "form-control" name= "email" required>
    </div>
    <div class="col-md-4">
    <label for= "birth" class="form-label"> Dt. de Nascimento <i class= "bi bi-calendar" > </i> </label>
    <input type="date" class= "form-control" name= "data" required>
    </div>
    <div class= "col-md-4" >
    <label for="phone" class= "form-label"> Telefone <i class= "bi bi-whatsapp"> </i> </label>
    <input type="text" class = "form-control" name="telefone" required>
    </div>
    <div class="col-md-12">
    <label for= "address" class= "form-label'">Endereco <i class= "bi bi-map"> </i> </label>
    <input type="text" class= "form-control" name="endereco" required>
    </div>
    <hr class= "my-4">
    <div class= "col-md-12 text-end">
    <button class= "btn btn-primary btn-Ig" type= "submit" name="botao" href="./index3.php" values = "<?php echo $id ?>">Atualizar</button>
    <a class=" btn btn-success btn-lg" href="./index.php"> Cancelar </a>
    </div>
    </div>
    </form>
    
    <script type="text/javascriptsrc=" src = "https://canjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>
</html>

