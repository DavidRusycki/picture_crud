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
    if (isset($_GET[ACAO]) && isset($_GET[ROTINA]) && $_GET[ACAO] && $_GET[ROTINA]) {
        validaAcao($_GET[ACAO]);
        validaRotina();
        validaParametros();
    }
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
    includeControllerBd();
    return in_array($sRotina, getArrayRotinas());
}