<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Imagens</title>
</head>
<body>
    
    <form enctype="multipart/form-data" action="index.php?acao=<?= ACAO_EXECUTA_INCLUSAO ?>&rotina=imagem" method="POST" >

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>
        <input type="file" name="arquivo" id="arquivo">
        <br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>