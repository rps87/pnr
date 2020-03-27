CREATE DATABASE teste;

CREATE SEQUENCE seq_usuario  
INCREMENT 1
MINVALUE 1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

CREATE TABLE usuario (
  usuario_id serial PRIMARY KEY,
  usuario VARCHAR(255) NOT NULL,
  usuario_password VARCHAR(255) NOT NULL,
  usuario_nome VARCHAR(255) NULL,
  usuario_id_sessao VARCHAR(255) NULL,
  usuario_permissoes INT8 NOT NULL
);

INSERT INTO usuario (
    usuario_id,
    usuario,
    usuario_password,
    usuario_nome,
    usuario_id_sessao,
    usuario_permissoes) 
    VALUES(
        1,
        'admin',
        '$2a$08$2sGQinTFe3GF/YqAYQ66auL9o6HeFCQryHdqUDvuEVN0J1vdhimii',
        'Administador',
        'ljfp99gvqm2hg2bj6jjpu4ol64',
        1);