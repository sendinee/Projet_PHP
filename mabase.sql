drop database if exists mail;
create database mail;
use mail;

create table mail(
    id_mail 		int(5) not null auto_increment,
    nom_prenom 		varchar(60),
    email 		varchar(50),
    texte 		varchar(300),
    date 		DATETIME not null default current_timestamp,
    new tinyint 	not null,
    primary key(id_mail)
);

insert into mail values(null, 'Test test', 'test@gmail.com', "Je test pour voir HAHAHA", default, 0);
