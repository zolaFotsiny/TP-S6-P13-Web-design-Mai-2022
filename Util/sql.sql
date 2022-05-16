
create database covid2
\c covid2
create table Pays(
    id serial primary key,
    nom varchar(50)
);
insert into Pays (nom) values('Madagascar');
insert into Pays (nom) values('Russe');
insert into Pays (nom) values('Chine');
insert into Pays (nom) values('Inde');

create table Actualite(
    id serial primary key ,
    titre VARCHAR(100),
    actu varchar(1500),
    idPays int references Pays,
    dateActualite date
);
-- madagascar
insert into Actualite (idPays,titre,actu,dateActualite)values(1,'Vaccin à madagascar', 'Il y aura une rumeur que le vaccin contre le corona virus seras disponible pour les <strong>malagasy</strong>, et sera entièrement gratuit.', '2021-04-30');
insert into Actualite (idPays,titre,actu,dateActualite)values(1,'2000 concentrateurs d oxygène sont arivés au pays …', 'Un deuxième lot de conteuneur est arrivé a l aéroport diVato.', '2021-04-30');



insert into Actualite (idPays,titre,actu,dateActualite)values(1,'VACCIN ANTI-COVID', 'D''après OMS Madagascar, les  250 000 doses de vaccin  Covishield/AstraZeneca  réceptionnées hier font partie d''une première allocation dans le cadre de l''initiative mondiale COVAX qui va se poursuivre dans les semaines à venir afin de couvrir dans un premier temps 20 % de la population. Selon les explications, les 250 000 doses seront déployées pou...', '2021-04-30');
insert into Actualite (idPays,titre,actu,dateActualite)values(1,'Toamasina', 'Les communes rurales d''Ampasimadinika et de Fanantenana du district de Toamasina 2 ont reçu respectivement 20 et 30 lampadaires d''éclairage publics le week-end dernier. Cette donation a été réalisée par le gouverneur de la région Atsinanana, Richard Théodore Rafidison...', '2021-10-30');

insert into Actualite (idPays,titre,actu,dateActualite)values(1,'Toamasina', 'Les communes rurales d''Ampasimadinika et de Fanantenana du district de Toamasina 2 ont reçu respectivement 20 et 30 lampadaires d''éclairage publics le week-end dernier. Cette donation a été réalisée par le gouverneur de la région Atsinanana, Richard Théodore Rafidison...', '2021-10-30');




--France

--Inde

--Russie
insert into Actualite (idPays,titre,actu,dateActualite)values(3,'Vaccin à madagascar', 'Il y aura une rumeur que le vaccin contre le corona virus seras disponible pour les <strong>malagasy</strong>, et sera entièrement gratuit.', '2021-04-30');
insert into Actualite (idPays,titre,actu,dateActualite)values(4,'Vaccin à madagascar', 'Il y aura une rumeur que le vaccin contre le corona virus seras disponible pour les <strong>malagasy</strong>, et sera entièrement gratuit.', '2021-04-30');
insert into Actualite (idPays,titre,actu,dateActualite)values(5,'Vaccin à madagascar', 'Il y aura une rumeur que le vaccin contre le corona virus seras disponible pour les <strong>malagasy</strong>, et sera entièrement gratuit.', '2021-04-30');

create table commentaire(
    id int primary key auto_increment,
    pseudoUser VARCHAR(30),
    commentaire VARCHAR(1500),
    dateCommentaire date
);

create table amdin(
    id int primary key,
    login varchar(20),
    mdp varchar(100)
);