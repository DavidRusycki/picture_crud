<?php

/**
 * Controller de banco de dados do sistema.
 */

 /**
  * Executa o sql passado.
  * @param String $sSql
  */
function executeArray(string $sSql) : array {
    $oPdoStatement = getConnection()->prepare($sSql);
    $oPdoStatement->execute();
    return $oPdoStatement->fetchAll(\PDO::FETCH_ASSOC);
}

/**
 * Executa o sql e 
 * 
 */
function executeBoolean($sSql) : bool {
    $oPdoStatement = getConnection()->prepare($sSql);
    return $oPdoStatement->execute();
}

/**
 * Retorna um objeto que representa a conexão com o banco de dados.
 */
function getConnection() : object {
    $oConn = new \PDO('pgsql:dbname=dinamic;host=localhost', 'postgres', 'postgres');
    return $oConn;
}