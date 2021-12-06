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

        echo "<div class=\"col\">
            <div class=\"card card-cover h-400 overflow-hidden text-white bg-dark rounded-10 shadow-lg\" style=\"background-image: url('./img/{$aLinha['nome']}'); background-size: cover;\">
                <a href=\"?codigo=".$aLinha['codigo']."&nome=".$aLinha['nome']."&acao=".ACAO_EXECUTA_EXCLUSAO."&rotina=".$_GET[ROTINA]."\" class=\"d-flex flex-column h-400 p-2 pb-4 text-white text-shadow-1\">
                    <h2 class=\"pt-5 mt-5 mb-3 display-10 lh-5 fw-bold\">".ucfirst('Apagar')."</h2>
                </a>
            </div>
        </div>";

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