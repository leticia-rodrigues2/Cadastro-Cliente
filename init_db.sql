CREATE DATABASE dbCadastroCliente;

CREATE USER 'cadastroCliente'@'%' IDENTIFIED BY '123';

GRANT ALL PRIVILEGES ON * . * TO 'cadastroCliente'@'%';

FLUSH PRIVILEGES;
