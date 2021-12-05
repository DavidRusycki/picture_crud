<?php

/**
 * Controller de consulta das imagens.
 */

/**
 * Inicia o a montagem da consulta de imagens.
 */
function iniciaConsulta() : void {
    includeViewConsultaImagem();
}

/**
 * Exibe a consulta de imagens.
 */
function montaConsulta() : void {
    $aImagens = getArrayConsultaImagens();
    foreach($aImagens as $aLinha) {
        echo "<img src=\"./img/{$aLinha['nome']}\">";
        echo "<a class=\"btn btn-danger\" href=\"?codigo=".$aLinha['codigo']."acao=".ACAO_EXECUTA_EXCLUSAO."&rotina=".$_GET[ROTINA]."\">Deletar</a>";
        echo "<br>";
    }
}

/**
 * Retorna o array de imagens
 */
function getArrayConsultaImagens() : array {
    return executeArray(getSqlImagens());
}

/**
 * Retorna o sql para consulta de imagens.
 * @return String
 */
function getSqlImagens() : string {
    return 'select * from imagem';
}