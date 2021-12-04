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