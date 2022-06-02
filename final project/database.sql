 DROP DATABASE IF EXISTS travel;
CREATE DATABASE IF NOT EXISTS travel;
USE travel;

SELECT 'CREATING DATABASE STRUCTURE' as 'INFO';

DROP TABLE IF EXISTS booking,
                     message,
                     login,
                     signup, 
                     tourlist;
                     
 create table login(
     username  varchar(255) NOT NULL ,
     password  varchar(255) NOT NULL
     );

 create table signup(
     email  varchar(255) NOT NULL
     );


  create table message(
     name  varchar(255) NOT NULL ,
     email varchar(255) NOT NULL,
     message varchar(255) NOT NULL
     );
 
    create table booking(
     name  varchar(255) NOT NULL ,
     email varchar(255) NOT NULL,
     people varchar(255) NOT NULL,
     place  varchar(255) NOT NULL ,
     date    date NOT NULL,
     time   varchar(255) NOT NULL,
     idcardnumber  bigint(15) NOT NULL ,
     number    bigint(13) NOT NULL
     );
 
   create table tourlist(
     tourplace  varchar(255) NOT NULL ,
     duration int(10) NOT NULL,
     startdate varchar(255) NOT NULL,
     enddate  date(255) NOT NULL ,
     booklastdate  date NOT NULL,
     tranport   varchar(255) NOT NULL
     );
 
 
 
 
