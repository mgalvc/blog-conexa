CREATE TABLE tbl_categoria (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(128) NOT NULL
);

CREATE TABLE tbl_post (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	texto VARCHAR(128) NOT NULL,
	autor VARCHAR(128) NOT NULL,
	titulo VARCHAR(128) NOT NULL,
	created_at TIMESTAMP NOT NULL,
	updated_at TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW(),
	id_categoria INTEGER NOT NULL,
	FOREIGN KEY (id_categoria) REFERENCES tbl_categoria(id)
);

CREATE TABLE tbl_comentario (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	autor VARCHAR(128) NOT NULL,
	texto VARCHAR(128) NOT NULL,
	id_post INTEGER NOT NULL,
	FOREIGN KEY (id_post) REFERENCES tbl_post(id)
);

INSERT INTO tbl_categoria (nome) VALUES ('Integrações');
INSERT INTO tbl_categoria (nome) VALUES ('Serviços');
INSERT INTO tbl_categoria (nome) VALUES ('Financeiro');
INSERT INTO tbl_categoria (nome) VALUES ('Agenda');
INSERT INTO tbl_categoria (nome) VALUES ('Parceiros');
INSERT INTO tbl_categoria (nome) VALUES ('Outros');