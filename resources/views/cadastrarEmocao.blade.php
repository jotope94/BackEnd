<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form method="POST" action="/emocao/createEmocao">
        <div>
            {{ csrf_field() }}
            <label for="">idUsuario</label><br/>
            <input type="text" name="idUsuario"><br/>   
            <label for="">idSentimento</label><br/>
            <input type="text" name="idSentimento"><br/>
            <label for="">Periodo</label><br/>
            <input type="" name="periodo"><br/>
            <button>salvar</button>
        </div>
    </form>  
</body>
</html>