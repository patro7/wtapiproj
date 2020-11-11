CREATE TABLE mytable(
   id     INTEGER  NOT NULL PRIMARY KEY 
  ,lname  VARCHAR(8) NOT NULL
  ,fname  VARCHAR(9) NOT NULL
  ,DOB    DATE  NOT NULL
  ,weight INTEGER  NOT NULL
  ,height NUMERIC(4,2) NOT NULL
  ,med    VARCHAR(3) NOT NULL
  ,bad    VARCHAR(16)
  ,member VARCHAR(22) NOT NULL
  ,severe VARCHAR(6) NOT NULL
  ,hist   VARCHAR(3) NOT NULL
  ,immune VARCHAR(9) NOT NULL
);
INSERT INTO mytable(id,lname,fname,DOB,weight,height,med,bad,member,severe,hist,immune) VALUES (31,'hiremath','rahul','2000-05-13',45,1.61,'Yes',NULL,'Diabetes','Mild','Yes','Sometimes');
INSERT INTO mytable(id,lname,fname,DOB,weight,height,med,bad,member,severe,hist,immune) VALUES (32,'jaju','neena','2000-11-17',60,1.61,'no','Tobaccco,Drugs','Asthma','Severe','No','Sometimes');
INSERT INTO mytable(id,lname,fname,DOB,weight,height,med,bad,member,severe,hist,immune) VALUES (33,'ghatole','shiv','1999-10-11',34,1.42,'Yes','Tobaccco,Alcohol','Diabetes','Mild','No','Often');
INSERT INTO mytable(id,lname,fname,DOB,weight,height,med,bad,member,severe,hist,immune) VALUES (34,'Patro','Ranjana','2000-05-22',67,1.62,'no','Alcohol','Asthma,Cardiac disease','Severe','No','Sometimes');
INSERT INTO mytable(id,lname,fname,DOB,weight,height,med,bad,member,severe,hist,immune) VALUES (35,'Kulkarni','Devashish','2002-04-30',40,1.51,'Yes','Alcohol','Diabetes','Severe','No','Sometimes');
