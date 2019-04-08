CREATE TABLE friend(
	num int NOT NULL AUTO_INCREMENT,
	name char(20),
	address char(80),
	tel char(20),
	PRIMARY KEY(num)
);

insert into friend(name, address, tel) values('sam', 'seoul', '010-1234');
insert into friend(name, address, tel) values('robin', 'busan', '010-1234');