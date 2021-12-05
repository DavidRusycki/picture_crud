<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Imagens</title>
</head>
<body>
    
    <form enctype="multipart/form-data" action="?acao=<?=ACAO_EXECUTA_INCLUSAO?>&rotina=imagem" method="POST" >

        <input type="text" name="nome" id="nome">
        <input type="file" name="arquivo" id="arquivo">

    </form>

</body>
</html>