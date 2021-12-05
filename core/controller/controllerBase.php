<?php
require_once('./core/includer.php');

/**
 * Função de inicio do sistema.
 */
function init() : void {
    validaDadosRequisicao();
}

/**
 * Valida os dados da requisição para identificar o objetivo da mesma.
 */
function validaDadosRequisicao() : bool {
    includeConstantes();
    //Valida se a requisição possui os parametros minimos necessários. Ou seja se ela possui uma ação e uma rotina. se não tiver esses dois não tem como continuar, e portanto deve exibir um erro na tela do usuário e não um redirecionamento.
    if (!isset($_GET[ACAO]) && !isset($_GET[ROTINA])) {
        $_GET[ACAO] = ACAO_CONSULTA;
        $_GET[ROTINA] = MENU;
    }
    
    validaAcao($_GET[ACAO]);
    validaRotina($_GET[ROTINA]);
    validaParametros($_GET[ACAO], $_GET[ROTINA]);

    return true;
}

/**
 * Valida se é uma ação do sistema.
 */
function validaAcao(int $iAcao) : bool {
    return in_array($iAcao, ACOES);
}

/**
 * Valida se é uma rotina do sistema.
 */
function validaRotina(string $sRotina) : bool {
    return true; //TODO Desenvolver a validação de rotina.
    includeControllerBd();
    return in_array($sRotina, getArrayRotinas());
}

/**
 * Valida os parametros da requisição.
 */
function validaParametros(int $iAcao, string $sRotina) : void {

    switch ($iAcao) {
        case ACAO_CONSULTA:
            exibeConsulta($sRotina);
            break;
        case ACAO_EXIBE_INCLUIR:
            exibeIncluir($sRotina);
            break;
        case ACAO_EXECUTA_INCLUSAO:
            executaInclusao($sRotina);
            break;
        case ACAO_EXIBE_ALTERACAO:
            exibeAlteracao($sRotina);
            break;
        case ACAO_EXECUTA_ALTERACAO:
            executaAlteracao($sRotina);
            break;
        case ACAO_EXECUTA_EXCLUSAO:
            executaExclusao($sRotina);
            break;
    }
}

function exibeConsulta() : void {
    
}

function exibeIncluir() : void {

}