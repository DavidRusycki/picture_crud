<?php

/**
 * Arquivo includer do sistema.
 */

function includeConstantes() : void {
    require_once('./core/constantes.php');
}

function includeControllerBase() : void {
    require_once('./core/controller/controllerBase.php');
}

function includeControllerBd() : void {
    require_once('./core/controller/controllerBd.php');
}

function includeControllerConsultaImagem() : void {
    require_once('./core/controller/controllerConsultaImagem.php');
}

function includeControllerManutencao() : void {
    require_once('./core/controller/controllerManutencao.php');
}

function includeViewConsultaImagem() : void {
    require_once('./core/view/viewConsultaImagem.php');
}

function includeViewManutencaoImagem() : void {
    require_once('./core/view/viewManutencaoImagem.php');
}
