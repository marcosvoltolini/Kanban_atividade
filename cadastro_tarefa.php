<?php
require_once 'includes/database.php';

$edicao = false;
$tarefa = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tarefa = obterTarefa($id);
    if ($tarefa) {
        $edicao = true;
    }
}

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_usuario = $_POST['usuario'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $setor = $_POST['setor'] ?? '';
    $prioridade = $_POST['prioridade'] ?? '';
    
    if (empty($id_usuario) || empty($descricao) || empty($setor) || empty($prioridade)) {
        $mensagem = 'Todos os campos são obrigatórios.';
    } else {
        if ($edicao) {
            $id $_POST['id'];
            
        } 
    }