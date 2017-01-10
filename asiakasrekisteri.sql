

drop database if exists asiakasrekisteri;

create database asiakasrekisteri;

use asiakasrekisteri;

create table asiakas(
    id int primary key auto_increment,
    etunimi varchar(50) not null,
    sukunimi varchar(50) not null,
    postitmp varchar(50),
    postinro varchar(5)
);

insert into asiakas(etunimi,sukunimi) values ('Eerika','Leppänen');
insert into asiakas(etunimi,sukunimi) values ('Anni','Kuosku');
insert into asiakas(etunimi,sukunimi) values ('Noora','Keränen');