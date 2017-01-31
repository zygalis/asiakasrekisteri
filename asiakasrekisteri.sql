

drop database if exists asiakasrekisteri;

create database asiakasrekisteri;

use asiakasrekisteri;

create table asiakas(
    id int primary key auto_increment,
    etunimi varchar(50) not null,
    sukunimi varchar(50) not null,
    osoite varchar(50),
    postitmp varchar(50),
    postinro varchar(5)
    
);

create table kayttaja(
    id int primary key auto_increment,
    email varchar(100) not null unique,
    salasana varchar(255) not null
);
create table muistio(
    id int primary key auto_increment,
    tallennettu timestamp default current_timestamp,
    aika datetime not null,
    teksti text not null,
    asiakas_id int not null,
    index(asiakas_id),
    foreign key (asiakas_id) references asiakas(id)
    on delete restrict,
    kayttaja_id int not null,
    index(kayttaja_id),
    foreign key (kayttaja_id) references kayttaja(id)
    on delete restrict
);

insert into asiakas(etunimi,sukunimi,osoite,postinro,postitmp) values ('Eerika','Leppänen', 'Hiidentie 2', '90550', 'Oulu');
insert into asiakas(etunimi,sukunimi) values ('Anni','Kuosku');
insert into asiakas(etunimi,sukunimi) values ('Noora','Keränen');