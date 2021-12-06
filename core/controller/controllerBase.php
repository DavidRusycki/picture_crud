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
    validaPossuiAcaoAndRotina();
    validaAcao($_GET[ACAO]);
    validaRotina($_GET[ROTINA]);
    validaParametros($_GET[ACAO], $_GET[ROTINA]);

    return true;
}

/**
 * Valida se a requisição possui uma ação de um rotina.
 * Caso não define uma genérica para cada.
 */
function validaPossuiAcaoAndRotina() {
    if (!isset($_GET[ACAO]) ) {
        $_GET[ACAO] = ACAO_CONSULTA;
    }
    if (!isset($_GET[ROTINA])) {
        $_GET[ROTINA] = IMAGEM;
    }
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
    includeControllerBd();
    return true; //TODO Desenvolver a validação de rotina.
    // return in_array($sRotina, getArrayRotinas());
}

/**
 * Valida os parametros da requisição.
 * @param Integer $iAcao
 * @param String $sRotina
 * @return Void
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

/**
 * Exibe a consulta.
 * @param String $sRotina - Rotina para consulta.
 */
function exibeConsulta($sRotina) : void {
    includeControllerConsultaImagem();
    iniciaConsulta();
}

/**
 * Exibe a tela de inclusão.
 */
function exibeIncluir($sRotina) : void {
    includeControllerManutencao();
    montaInclusao();
}

/**
 * Executa a inclusão
 */
function executaInclusao($sRotina) : void {
    includeControllerManutencao();
    processaInclusao();
    redirectHome();
}

/**
 * Exibe a alteração
 */
function exibeAlteracao($sRotina) : void {

}

/**
 * Executa a alteração.
 */
function executaAlteracao($sRotina) : void {

}

/**
 * Executa a exclusão.
 */
function executaExclusao($sRotina) : void {
    if (isset($_GET['codigo'])) {
        includeControllerManutencao();
        processaExclusao($_GET['codigo']);
    }
    redirectHome();
}

/**
 * Redireciona o usuário para o inicio.
 */
function redirectHome() : void {
    header('Location: index.php');
}