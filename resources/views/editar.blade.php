<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar animal</title>
</head>

<body>
    <center>
        <h1>Resultados:</h1>
        <p>ID pesquisado: <input type="text" name="id" value="{{$animal->id}}" disabled> </p>
        <hr>


        <form action="/editar-animal/{{$animal->id}}" method="post">
            @csrf
            <label for="lblNome">Nome: </label>
            <input type="text" name="nome" value="{{$animal->nome}}" >

            <br><br>

            <label for="lblraça">Idade: </label>
            <input type="text" name="raça" value="{{$animal->raça}}" >

            <br><br>

            <button>Atualizar</button>
        </form>

        <br><br>
        
        <a href="/">Voltar ao início</a>
    </center>
</body>

</html>