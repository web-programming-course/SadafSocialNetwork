CREATE TABLE Books(
	ISBN varchar(255),
    publisher text,
    files BLOB,
    descriptions text,
    numberofPage int,
    title text,
    dates Date,
    image BLOB,
    author text,
    AccountSpecID int(11),
    FOREIGN KEY (AccountSpecID) REFERENCES AccountSpecs(AccountSpecID),
	PRIMARY KEY(ISBN)
)ENGINE = MYISAM;


