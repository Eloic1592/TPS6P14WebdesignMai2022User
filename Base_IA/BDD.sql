Create database gestionia;
Create role gestionia login password 'gestionia';
Alter database gestionia owner to gestionia;
\c  gestionia gestionia
gestionia

CREATE DATABASE gestionia;


CREATE TABLE Auteur(
    ID SERIAL PRIMARY KEY,
    Nom VARCHAR(100) NULL,
    Prenom VARCHAR(100) NOT NULL,
    Email TEXT NOT NULL,
    Password VARCHAR(60) NOT NULL
);

CREATE TABLE Utilisateur(
    ID SERIAL PRIMARY KEY,
    Nom VARCHAR(100) NULL,
    Prenom VARCHAR(100) NOT NULL,
    Email TEXT NOT NULL,
    Password VARCHAR(60) NOT NULL
);

CREATE TABLE Article(
    ID SERIAL PRIMARY KEY,
    Categorie VARCHAR(70) NOT NULL,
    Titre TEXT NOT NULL,
    Resume TEXT NOT NULL,
    Image TEXT NULL,
    Contenu TEXT NOT NULL,
    IDAuteur INT NOT NULL REFERENCES Auteur(ID)
);

CREATE TABLE Publication(
    IDArticle INT NOT NULL REFERENCES Article(ID),
    Etat INT DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_at TIMESTAMP DEFAULT NULL
);


-- Liste des articles avec le nom des auteurs
Drop view v_listearticle
Create or replace view v_listearticle as
select a.*,at.nom,at.prenom from article a join auteur at on a.IDAuteur=at.id;
/*(1 : publié , 11: supprimé*/

