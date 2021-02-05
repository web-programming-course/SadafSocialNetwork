CREATE TABLE Likes(
	AccountSpecID varchar(255),
    id int,
    ISBN varchar(255),
    FOREIGN KEY (AccountSpecID) REFERENCES AccountSpecs(AccountSpecID),
    FOREIGN KEY (ISBN) REFERENCES Books(ISBN),
    FOREIGN KEY (id) REFERENCES Comments(id),
	PRIMARY KEY(ISBN , ID)
)ENGINE = MYISAM;


