CREATE TABLE funcionario(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    codigo VARCHAR(45),
    nome VARCHAR(45),
    salario VARCHAR(45),
    data_nascimento VARCHAR(45),
    cpf VARCHAR(45),
    senha VARCHAR(45),
    funcao INT
) ENGINE=MyISAM DEFAULT CHARSET= latin1 AUTO_INCREMENT=5;


INSERT INTO funcionario(id,codigo,nome,salario,data_nascimento,cpf,senha,funcao) VALUES
(1,'111','gilmar',4000,'2000-01-01','123.123.123-12','123',1),
(2,'222','sophia',3000,'2001-04-05','243.243.243-25','132',1),
(3,'333','samuel',2000,'1995-07-03','435.435.435-27','152',2),
(3,'444','amanda',4000,'1999-04-07','465.465.465-67','156',1);



CREATE TABLE  funcao(
 id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
 descricao VARCHAR(45),
 obs TEXT


)ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;

INSERT INTO funcao (id,descricao,obs)VALUES
(1,'porgarmador junior','tome cuidado ele é perigoso'),
(2,'Analista pleno','Entrou na empresa a pouco tempo'),
(3,'testador','O medo de todos porgamadores'),
(4,'Gerente','O lider da equipe');


CREATE TABLE usuario(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    codigo VARCHAR(45),
    nome VARCHAR(45),
    cpf VARCHAR(45),
    senha VARCHAR(45)
)ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;


INSERT INTO usuario(id,codigo,nome,cpf,senha)VALUES
(1,'123','adm','123.123.123-12','123');


CREATE TABLE agenda(
 id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
 data DATE,
 hora_inncio TIME,
 hora_fim TIME,
 horas TIME,
 curso VARCHAR(255),
 codigo VARCHAR(45),
 obs TEXT,
 funcionario INT
)ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;


INSERT INTO agenda ( data ,hora_inncio,hora_fim,horas,curso,codigo,obs,funcionario) VALUES
('2023-11-08','13:30:00','17:30:00','4:00:00','Informatica','01','obs',1);


delimiter //
CREATE TRIGGER calcular_ho
 BEFORE INSERT ON agenda
FOR EACH ROW
BEGIN
SET new.horas =TIMEDIFF( NEW.hora_fim ,NEW.hora_inncio);
END //
delimiter ; 



