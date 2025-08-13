CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    senha VARCHAR(50) NOT NULL,
    nivel ENUM('admin','moderador','usuario') NOT NULL,
    precisa_trocar BOOL DEFAULT TRUE
);

-- Exemplo de inserção:
INSERT INTO usuarios (usuario, senha, nivel) VALUES ('admin', '123', 'admin');
INSERT INTO usuarios (usuario, senha, nivel) VALUES ('mod', '123', 'moderador');
INSERT INTO usuarios (usuario, senha, nivel) VALUES ('user', '123', 'usuario');
