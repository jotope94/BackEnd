<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form method="POST" action="/usuario/login">
        <div>
        {{ csrf_field() }}
            <label for="">email<br/>
            <input type="text" name="email"><br/>
            <label for="">senha</label><br/>
            <input type="text" name="senha"><br/>
            <button>salvar</button>
    
        </div>
    </form>  
</body>
</html>