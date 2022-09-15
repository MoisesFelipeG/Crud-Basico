create database treino_crud;

use treino_crud;

create table usuario(
id int unsigned auto_increment not null primary key,
nome varchar(100) not null,
email varchar(150) not null,
data_nascimento date not null,
endereco varchar(150) not null,
telefone char(11) not null
)engine = innodb;

select * from usuario;

delete from usuario where id = 1;
