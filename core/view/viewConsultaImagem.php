<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Imagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container" >

        
        <div class="container px-5 py-15" id="custom-cards">
            
            <a class="pb-2 border-bottom" href="index.php?acao=<?=ACAO_EXIBE_INCLUIR?>&rotina=imagem">Incluir</a>

            <div class="row row-cols-5 row-cols-lg-1 align-items-stretch g-5 py-5">

                <?php montaConsulta() ?>

            </div>
            
        </div>
        
    </div>

</body>
</html>