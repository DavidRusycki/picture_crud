<?php

/**
 * Controller de banco de dados do sistema.
 */

function execute(string $sSql) {
    $oPdoStatement = getConn()->prepare($sSql);
}
