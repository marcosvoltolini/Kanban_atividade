<?php
$conexao = mysqli_connect(
    'localhost', 
    'root',      
    'root',
    'kanban_db',
    3307
);

if (!$conexao) {
    die('Erro na conexão com o banco de dados: ' );

}
mysqli_set_charset($conexao, 'utf8mb4');  

?>