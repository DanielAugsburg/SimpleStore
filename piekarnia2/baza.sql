Create Database Piekarnia2;
CREATE TABLE Piekarnia2.rejestracja (
  ID int not null auto_increment unique,
  imie varchar(70),
  nazwisko varchar(70),
  nick varchar(70),
  email varchar(70),
  telefon int(9),
  haslo varchar(32)
);
CREATE TABLE Piekarnia2.Produkty (
  ID int not null auto_increment unique,
  Nazwa varchar(70), 
  Cena float,
  kategoria varchar(50)
);

Insert Into Piekarnia2.Produkty (
    ID,
    Nazwa,
    Cena,
    kategoria
    ) 
Values 
(1,"Tort Oreo",199.0,'Torty'),
(2,"Czarny Las",149.30,'Torty'),
(3,"Tort ze złotem",450.10,'Torty'),
(4,"Tort czekoladowy z czarną porzeczką",110.0,'Torty'),
(5,"Cupcake z kremem",8.30,'Ciastka'),
(6,"Cupcake malinowy",7.00,'Ciastka'),
(8,"Cupcake czekoladowe",8.30,'Ciastka'),
(9,"Cupcake waniliowy",6.10,'Ciastka'),
(10,"Cupcake cytrynowy",7.30,'Ciastka'),
(12,"Kremowy BISZKOPT Z TRUSKAWKAMI",20.10,'Ciasta_Kremowe'),
(13,"Kremowy BANANOWY SONG",25.0,'Ciasta_Kremowe'),
(14,"Kremowy DESER TIRAMISU",23.0,'Ciasta_Kremowe'),
(15,"Kremowy PIJANA WIŚNIA",21.0,'Ciasta_Kremowe'),
(16,"Kremowy PORZECZKOWA PIERZYNKA",24.0,'Ciasta_Kremowe'),
(17,"Kremowy MARCELLO",21.0,'Ciasta_Kremowe'),
(18,"Kremowy STRACIATELLA WIŚNIOWA",22.0,'Ciasta_Kremowe'),
(19,"Sernik IZAURA",18.0,'Sernik'),
(20,"Sernik DUET",22.0,'Sernik'),
(21,"SERNIK Z WIŚNIAMI",26.0,'Sernik'),
(22,"SERNIK TOFFI/CZEKOLADA",25.0,'Sernik');

CREATE TABLE Piekarnia2.torba (
  ID int not null auto_increment unique,
  nazwa varchar(70),
  cena float,
  ilosc int,
  zdjecie varchar(70) 
);



CREATE TABLE Piekarnia2.komentarze (
  ID int not null auto_increment unique,
  Nick varchar(70),
  Komentarz varchar(300)
);