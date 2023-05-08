INSERT INTO Utilisateur(Nom,Prenom,Email,Password) VALUES
('Rakoto','Jean','Jean12@gmail.com',md5('jean1234')),
('Rasoa','Jeanne','Jeanne1@gmail.com',md5('jeanne1234'))


INSERT INTO Auteur (Nom, Prenom, Email, Password) VALUES
('Smith', 'John', 'john.smith@example.com', md5('john1234')),
('Doe', 'Jane', 'jane.doe@example.com', md5('jane1234')),
('Garcia', 'Maria', 'maria.garcia@example.com', md5('maria1234')),
('Lee', 'David', 'david.lee@example.com', md5('david1234')),
('Johnson', 'Jessica', 'jessica.johnson@example.com', md5('jessica1234')),
('Nguyen', 'Tuan', 'tuan.nguyen@example.com', md5('tuan1234'));

INSERT INTO Article (Categorie,Titre,Resume,Image,Contenu,IDAuteur) values('Technologie','contenu libre sur l intelligence artificielle','contenu libre sur l intelligence artificielle','image-3.jpg','contenu libre sur l intelligence artificielle',1);
INSERT INTO Article (Categorie,Titre,Resume,Image,Contenu,IDAuteur) values('Technologie','contenu libre sur l intelligence artificielle','contenu libre sur l intelligence artificielle','image-3.jpg','contenu libre sur l intelligence artificielle',2);


INSERT INTO Publication(IDArticle,Etat) values(1);

INSERT INTO Publication(IDArticle,Etat) values(2);

INSERT INTO Publication(IDArticle,Etat) values(3);
