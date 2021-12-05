<?php

/**
 * Controller de manutencao do sistema.
 */

/**
 * Deleta a imagem.
 * @param Integer $iCodigo
 */
function processaExclusao(int $iCodigo) : bool {
    return executeBoolean(getSqlDeleteImagem($iCodigo));
}

/**
 * Retorna o sql para deletar uma imagem.
 * @param Integer $iCodigo
 */
function getSqlDeleteImagem(int $iCodigo) : string {
    return "delete from imagem where codigo = {$iCodigo}";
}

/**
 * Monta a tela de inclusão.
 */
function montaInclusao() : void {
    includeViewManutencaoImagem();
}

/**
 * Realiza a inclusão da imagem no sistema.
 */
function processaInclusao() : bool {
    validaPostSetado();
    validaFilesSetado();

    move_uploaded_file($_FILES['arquivo']['tmp_name'], getCaminhoPadrao($_POST['nome']));
    return executeBoolean(getSqlInsertImagem($_POST['nome']));
}

/**
 * Valida se o POST está setado.
 */
function validaPostSetado() : bool {
    if (!isset($_POST)) {
        throw new \Exception('O post deve estar setado para uma inclusão', 401);
    }
    return true;
}

/**
 * Valida se o FILES está setado.
 */
function validaFilesSetado() : bool {
    if (!isset($_FILES)) {
        throw new \Exception('Nenhum arquivo recebido para inclusão', 404);
    }
    return true;
}

/**
 * Retorna o caminho para a imagem.
 * @param String $sNome - Nome da imagem.
 */
function getCaminhoPadrao(string $sNome) : string {
    return "./img/{$sNome}";
}

/**
 * Retorna o sql para insert de imagem.
 */
function getSqlInsertImagem(string $sNome) : string {
    return "insert into imagem (nome) values ('{$sNome}')";
}