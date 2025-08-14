CREATE TABLE colaboradores (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Ex banco
    nome VARCHAR(100),
    cpf VARCHAR(14),
    unidade_atual VARCHAR(100),
    funcao VARCHAR(50),
    data_admissao DATE
);

CREATE TABLE pedidos_extra (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_supervisor INT,
    unidade VARCHAR(100),
    motivo TEXT,
    tempo VARCHAR(50),
    data_pedido DATETIME DEFAULT CURRENT_TIMESTAMP
);
