<?php
if (isset($_POST['usuario']) && empty($_POST['usuario']) ==false)
{
    if (isset($_POST['email']) && empty($_POST['email']) == false)
    {
        if (isset($_POST['password']) && empty($_POST['password']) == false)
        {


                $nome = $_POST['usuario'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $comfirma = $_POST['redpassword'];

                echo "usuario cadastrado com sucesso.";


        }

    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastra-se</title>

    <link rel="stylesheet" href="bootstrap.min.css" />
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"       integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body  style="background-color: #5bc">
<div class="conteudo container" style="background-color: #5bc0de; margin-top: 100px">
    <h1 style="color: #fff; font-family: Arial">Tela de login</h1>
    <hr/>
        <form method="POST">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  type="text"  class="form-control" name="usuario" placeholder="Nome" >
            </div><br/>

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input id="Email" type="text" name="email" class="form-control" placeholder="Digite o seu email" aria-describedby="basic-addon1">
            </div><br/>

            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input  type="password"    class="form-control" name="password" placeholder="Digite a enha">
            </div><br/>

            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="Password2" type="password" class="form-control" name="redpassword" placeholder="Comfirma a Senha">
            </div><br/>

            <input class="btn btn-success" type="submit" value="Login" />
            </form><br/>
        </div>
</body>
</html>