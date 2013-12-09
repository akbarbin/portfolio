CREATE TABLE contacts (
	id int(11) NOT NULL AUTO_INCREMENT,
	first_name varchar(50) NOT NULL,
        last_name varchar(50),
	email varchar(30) NOT NULL,
	content text NOT NULL,
	PRIMARY KEY (id)
);
