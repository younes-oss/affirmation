create database preuve ;
use preuve;
create table Auteurs(
    id int auto_increment primary key,
    nom varchar(40),
    nationalité varchar(40)

);
create table livres(
    id int auto_increment primary key,
    titre varchar(40),
    prix float,
    date_publication date ,
    auteur_id int ,
    FOREIGN key (auteur_id) REFERENCES Autheurs (id)
);
alter TABLE livres add COLUMN stock int;
alter TABLE livres MODIFY COLUMN titre text;

DROP TABLE Auteurs;
TRUNCATE table livres;
INSERT into livres (titre ,prix ,date_publication, auteur_id)values ('livre1',34.43, '2022-05-23',2),
('livre2',34.43, '2022-05-23',2),
('livre3',34.43, '2021-05-23',2),
('livre4',34.43, '2023-05-23',1),
('livre5',34.43, '2025-05-23',4);
INSERT into Auteurs ( nom, nationalité)values ('Autheur1','marocain'),
('Autheur2','marocain'),
('Autheur3','marocain');
 update livres set prix = prix * 10;
 delete from livres where stock=0;



 select titre , prix from livres ;
 select * from livres where prix >20 ;
 select * from Auteurs where nationalité="francais";
 select * from 
 select count(id) from livres;

 select livres.titre ,Auteurs.nom 
 from Auteurs 
 inner join livres on Auteurs.id=livres.auteur_id ;
 select avg(prix) from livres ;
 select Autheurs.nom,livres.titre , count(id.livres) from Auteurs
 join livres on Auteurs.id=livres.auteur_id  group by livres.titre;
select * from livres where titre like '%Programation%';


select * from Auteurs 
left join Auteurs on Auteurs.id=livres.auteur_id where livres.titre is null ;

select livres.nom from Auteurs
join  livres on Auteurs.id=livres.auteur_id  where prix >avg(id.livres);

select Auteurs.nom from Auteurs
join livres on Auteurs.id=livres.auteur_id  where ;


