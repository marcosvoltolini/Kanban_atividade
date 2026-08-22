CREATE DATABASE kanban_db;
USE kanban_db;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    descricao TEXT NOT NULL,
    setor VARCHAR(100) NOT NULL,
    prioridade ENUM('baixa', 'media', 'alta') NOT NULL,
    data_cadastro DATE NOT NULL,
    status ENUM('a fazer', 'fazendo', 'pronto') NOT NULL DEFAULT 'a fazer',
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id) ON DELETE CASCADE
);

INSERT INTO usuarios (nome, email) VALUES
('João Silva', 'joao@example.com'),
('Maria Santos', 'maria@example.com'),
('Pedro Oliveira', 'pedro@example.com');       

INSERT INTO tarefas (id_usuario, descricao, setor, prioridade, data_cadastro, status) VALUES
(1, 'Revisar relatório de vendas', 'Comercial', 'alta', CURDATE(), 'a fazer'),
(2, 'Atualizar planilha de custos', 'Financeiro', 'media', CURDATE(), 'fazendo'),
(3, 'Preparar apresentação para cliente', 'Marketing', 'alta', CURDATE(), 'a fazer'),
(1, 'Verificar estoque de matéria-prima', 'Produção', 'baixa', CURDATE(), 'pronto'),
(2, 'Agendar reunião com fornecedores', 'Compras', 'media', CURDATE(), 'fazendo');