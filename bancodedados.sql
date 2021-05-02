create database BANCODETEXTO;
 use BANCODETEXTO;
 CREATE TABLE TEXTO(
 CODIGO_TEXTO INT  PRIMARY KEY NOT NULL auto_increment,
 TEXTO VARCHAR (300)
 );
 INSERT INTO TEXTO(TEXTO) VALUES ('Fotógrafos tem sálrios de mais de R$7000 por mês');
INSERT INTO TEXTO(TEXTO) VALUES ('Fotógrafos morre ao tirar foto');
INSERT INTO TEXTO(TEXTO) VALUES ('Fotógrafos tira a melhor foto do mundo');
INSERT INTO TEXTO(TEXTO) VALUES ('Fotógrafo ganha R$100 por foto ');
INSERT INTO TEXTO(TEXTO) VALUES ('Curso de Fotografia Grátis');
INSERT INTO TEXTO(TEXTO) VALUES ('Como tirar a foto perfeita');
INSERT INTO TEXTO(TEXTO) VALUES ('Como usar uma camera DSLR');
INSERT INTO TEXTO(TEXTO) VALUES ('Top 10 fotos mais bonitas do mundo');
INSERT INTO TEXTO(TEXTO) VALUES ('Equipamentos a venda ');
INSERT INTO TEXTO(TEXTO) VALUES ('Como usar uma camera ');
INSERT INTO TEXTO(TEXTO) VALUES ('Como usar a luz do sol ao seu favor');
INSERT INTO TEXTO(TEXTO) VALUES ('Top 10 melhores camras');
INSERT INTO TEXTO(TEXTO) VALUES ('Agencia de modelo procura fotógrafos');
INSERT INTO TEXTO(TEXTO) VALUES ('Como se tornar um fotógrafo');
INSERT INTO TEXTO(TEXTO) VALUES ('Dúvidas sobre a fotografia');
INSERT INTO TEXTO(TEXTO) VALUES ('Como achar o local perfeito para a foto');
INSERT INTO TEXTO(TEXTO) VALUES ('Técnica para fotos noturnas');
INSERT INTO TEXTO(TEXTO) VALUES ('Como não tremer nas fotos ');
INSERT INTO TEXTO(TEXTO) VALUES ('Fotógrafo ganha concurso ');
INSERT INTO TEXTO(TEXTO) VALUES ('Fotógrafo perde camera avaliada em R$5000');
SELECT TEXTO FROM TEXTO;
DROP DATABASE BANCODETEXTO;