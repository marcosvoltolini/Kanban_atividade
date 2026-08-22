<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'kanban_db');

function conectarBD() {
    $conexao = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    $conexao->set_charset("utf8");
    

    return $conexao;
}