--criando database

CREATE DATABASE agenda;

--criando tabela com id, nome, telefone e observações
CREATE TABLE contacts(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    phone VARCHAR(20),
    observations TEXT
);