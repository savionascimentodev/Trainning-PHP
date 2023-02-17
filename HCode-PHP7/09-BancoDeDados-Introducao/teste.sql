/* Entrar no banco dbphp7*/
USE dbphp7;

/* Criando a tabela users com suas colunas */
CREATE TABLE tb_users (
idUsuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
desLogin VARCHAR(64) NOT NULL,
desSenha VARCHAR(256) NOT NULL,
dtCadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

/* Inserindo valores no login e senha de um usuário */
INSERT INTO tb_users(desLogin, desSenha) VALUES('Root', '123');

/* Atualizando a senha do usuário */
UPDATE tb_users SET desSenha = '123456' WHERE idUsuario = 1;

/* Excluindo o usuário */
DELETE FROM tb_users WHERE idUsuario = 1;

/* Reseta a tabela inteira */
TRUNCATE TABLE tb_users;