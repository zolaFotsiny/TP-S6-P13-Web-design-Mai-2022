create  database referencement;
use referencement;

create table actus (
id int primary key auto_increment,
dateActus date,
titre varchar (250),
resume text,
contenu text 
);

insert into actus (dateActus,titre,resume,contenu) values ('2022-02-02','resy italie','resy italie de zay fotsiny ','resy italie fa tsy misy contenu');


insert into cause () values ("La principale cause du réchauffement climatique est l'émission de gaz à effet de serre due à l'activité humaine. Une grande partie de cela provient de l'utilisation de combustibles fossiles")


 
create table actualite(
titre varchar (250),
soustitre varchar (250),
description text,
date date 

);


create table cause (
	id serial,
	titre varchar (250),
	contenu text 
);


insert into actualite (titre,soustitre,description,data) values  ('425 bombes au carbone qui pourraient faire dérailler la lutte contre le changement climatique','Des chercheurs ont identifié des projets d''extraction de charbon, pétrole et gaz,déjà en opération ou encore en construction, dont les émissions de CO₂ cumulées feraient exploser le budget carbone mondial. ','Selon l''ouvrage, publié jeudi 12 mai dans la revue Energy Policy, il existe aujourd''hui 425 ''bombes climatiques'' dans le monde, déjà en fonctionnement ou encore en projet, dans 48 pays. Si tous ces éléments sont pleinement exploités, leurs émissions potentielles totales représenteraient le double du budget carbone mondial - le plafond d''émissions - qui ne doit pas être dépassé dans l''espoir de maintenir le réchauffement climatique à 1,5°C par rapport aux niveaux préindustriels. De quoi compenser les objectifs de l''accord de Paris sur le climat et la lutte contre le changement climatique.',now())