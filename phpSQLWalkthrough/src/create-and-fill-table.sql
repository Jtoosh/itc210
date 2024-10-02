USE cars;

CREATE TABLE cars(
   id       INT UNSIGNED AUTO_INCREMENT NOT NULL,
   make     VARCHAR(20) NOT NULL,
   model    VARCHAR(80),
   year     INTEGER,
   plate    VARCHAR(12),
   owner    VARCHAR(40),
   PRIMARY KEY(id)
);

INSERT INTO cars(make,model,year,plate,owner)
VALUES ('MINI', 'Cooper', 2004, '4AVG893', 'George Harrison'),
('Subaru', 'Forester', 2010, 'MARK 4', 'Moon Zappa'),
('Chevrolet', 'Impala', 2021, 'C45 VHS', 'Ronald Reagan'),
('Ferrari', 'Barchetta', 1949, 'MM0008M', 'Clemente Biondetti'),
('Toyota', 'Previa', 1996, 'L67 1M4', 'Sampson Delilah'),
('Ford', 'Maverick', 1975, 'M33 484', 'Douglas McArthur'),
('Lotus', 'Esprit', 1994, '1337 EE', 'Lawrence Livermore'),
('Ford', 'F-150', 2010, '801 UT5', 'Roger Moore'),
('Dodge', 'Dart', 1968, 'AA7 982', 'Beatrix Potter'),
('AMC', 'Gremlin', 1977, '2HXY398', 'Norman Dogfeet'),
('Toyota', 'Hilux', 1985, '3FVX3733', 'Peter Quill'),
('Mazda', 'Miata', 1987, '8VFV1997', 'Karen Carpenter'),
('Honda', 'Civic', 1972, 'BOB 911', 'Eddie Murphy'),
('Ford', 'Taurus', 1989, '2VUL1612', 'Albert Einstein'),
('Volkswagen', 'Rabbit', 1979, 'WED 888', 'Scarlett Johansson'),
('Porsche', '928', 1982, '8QVC9393', 'Norman Rockwell'),
('Jeep', 'CJ5', 1983, 'CJ6 424', 'Indiana Jones'),
('Cadillac', 'Seville', 1980, 'VVX 280', 'Claude Frollo'),
('Mercury', 'Monarch', 1978, 'BBG 1000', 'Jumbo Tron'),
('Pontiac', 'Firebird', 1981, '290 QDG', 'Luke Duke');
