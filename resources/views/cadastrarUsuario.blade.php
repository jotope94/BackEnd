<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form method="POST" action="/usuario/createUsuario">
        <div>
        {{ csrf_field() }}
            <label for="">nome<br/>
            <input type="text" name="nome"><br/>
            <label for="">senha</label><br/>
            <input type="text" name="senha"><br/>
            <label for="">email</label><br/>
            <input type="" name="email"><br/>
            <label for="">cpf</label><br/>
            <input type="text" name="cpf"><br/>
            <label for="">entidade</label><br/>
            <input type="text" name="entidade"><br/>
            <button>salvar</button>
    
        </div>
    </form>  
</body>
</html>