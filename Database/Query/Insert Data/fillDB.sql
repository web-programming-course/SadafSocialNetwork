INSERT INTO `sadaf`.`AccountSpecs`
(`AccountSpecID`,
`UserID`,
`UserPassword`,
`PersonID`)
VALUES
(2,
"shiva",
"12345",
2);


INSERT INTO `sadaf`.`AccountSpecs`
(`AccountSpecID`,
`UserID`,
`UserPassword`,
`PersonID`)
VALUES
(3,
"kasra",
"12345",
3);


INSERT INTO `sadaf`.`AccountSpecs`
(`AccountSpecID`,
`UserID`,
`UserPassword`,
`PersonID`)
VALUES
(4,
"sahar",
"12345",
4);


INSERT INTO `sadaf`.`AccountSpecs`
(`AccountSpecID`,
`UserID`,
`UserPassword`,
`PersonID`)
VALUES
(5,
"mahmoud",
"12345",
5);


INSERT INTO `sadaf`.`AccountSpecs`
(`AccountSpecID`,
`UserID`,
`UserPassword`,
`PersonID`)
VALUES
(6,
"ali",
"12345",
6);


INSERT INTO `sadaf`.`AccountSpecs`
(`AccountSpecID`,
`UserID`,
`UserPassword`,
`PersonID`)
VALUES
(7,
"tara",
"12345",
7;



INSERT INTO `sadaf`.`persons`
(`PersonID`,
`pfname`,
`plname`,
`CardNumber`)
VALUES
(2,
"shiva",
"radmanesh",
0);


INSERT INTO `sadaf`.`persons`
(`PersonID`,
`pfname`,
`plname`,
`CardNumber`)
VALUES
(3,
"kasra",
"korminejad",
0);


INSERT INTO `sadaf`.`persons`
(`PersonID`,
`pfname`,
`plname`,
`CardNumber`)
VALUES
(4,
"sahar",
"sheikholeslami",
0);

INSERT INTO `sadaf`.`persons`
(`PersonID`,
`pfname`,
`plname`,
`CardNumber`)
VALUES
(5,
"ali",
"nasri",
0);

INSERT INTO `sadaf`.`persons`
(`PersonID`,
`pfname`,
`plname`,
`CardNumber`)
VALUES
(6,
"mohsen",
"mahmoudzade",
0);


INSERT INTO `sadaf`.`persons`
(`PersonID`,
`pfname`,
`plname`,
`CardNumber`)
VALUES
(7,
"tara",
"jadidi",
0);




-- ===========================================


-- ===========================================================
-- state 0 -> to read | 1 -> currently reading | 2 -> have read 
INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(5,
100,
1,
444);


INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(1,
105,
2,
111);


INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(1,
10,
1,
222);


INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(1,
0,
0,
999);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(3,
150,
2,
999);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(3,
0,
0,
333);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(3,
0,
0,
666);


INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
105,
2,
111);


INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
50,
1,
222);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
236,
2,
333);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
23,
2,
444);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
0,
0,
555);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
538,
2,
666);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
0,
0,
777);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(7,
102,
1,
888);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(4,
115,
2,
555);

INSERT INTO `sadaf`.`Connects`
(`AccountSpecID`,
`donePages`,
`state`,
`ISBN`)
VALUES
(4,
0,
0,
888);

-- ===========================================================
INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(444,
5,
"Besyar jazzab va amuzande mibashad");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(444,
5,
"Black lives matter");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(111,
1,
"That was really awsome");

INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(444,
1,
"Agar man bekhabam, che kasi mah ra be man khahad dad");

INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(444,
1,
"man maho mikham");



INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
333,
1,
"That idiot should have chosen Eric");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
999,
3,
"Best book ever");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
666,
3,
"I love romance books");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
333,
3,
"It sounds so cool");



INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
111,
7,
"khoob ast");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
222,
7,
"zibast");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
333,
7,
"Awli ast");

INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
333,
7,
"mareke ham hast");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
444,
7,
"Eeey badak nist");

INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
555,
7,
"first comment :D");

INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
666,
7,
"asir shodim bekhoda");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
777,
7,
":| base dige");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
888,
7,
"suzanesh gir karde -__-");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
999,
7,
"sare kar gozashtin?");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
888,
4,
"monaseb ast");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES(
555,
4,
"ghashange");

-- -- ================= Likes ==========================


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(444,
2,
"I had originally said I was not going to read this book, I did not know how well I would like it, and I do not tend to get involved with things that can make life at work harder for me.");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(111,
4,
"Can I read it Because I am really bored And I want to read a book so can i?");



INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(111,
6,
"how to read this im new here?");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(111,
6,
"how to read this im new here?");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(444,
2,
"Mn liaqate ezhare nazar dar morede in asar ro nadaram!");


INSERT INTO `sadaf`.`Comments`
(`ISBN`,
`WAccountSpecID`,
`content`)
VALUES
(333,
7,
"Raoul is very nonsensical");
-- ======== Reply =========

INSERT INTO `sadaf`.`Reply`
(`ISBN`,
`FID`,
`SID`)
VALUES
(444,
2,
6);

INSERT INTO `sadaf`.`Reply`
(`ISBN`,
`FID`,
`SID`)
VALUES
(111,
2,
5);


INSERT INTO `sadaf`.`Reply`
(`ISBN`,
`FID`,
`SID`)
VALUES
(111,
2,
6);


INSERT INTO `sadaf`.`Reply`
(`ISBN`,
`FID`,
`SID`)
VALUES
(111,
4,
7);


INSERT INTO `sadaf`.`Reply`
(`ISBN`,
`FID`,
`SID`)
VALUES
(444,
5,
7);


INSERT INTO `sadaf`.`Reply`
(`ISBN`,
`FID`,
`SID`)
VALUES
(333,
1,
6);


-- =============== 