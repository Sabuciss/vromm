/*izveido db*/
DROP DATABASE IF EXISTS blog_ipb23;
CREATE DATABASE blog_ipb23;

USE blog_ipb23;

CREATE TABLE posts (
    id INT NOT NULL  PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR (5200),
    category_id INT
);
/*ielikt saturu post tabula*/
INSERT INTO posts
 ( content)
VALUES 
("Ziemassvētki Nākkk"),
("Otrs bloga ierakstssss"),
("Ka pagatavot siermaizi");

SELECT * FROM posts;

-- atrodi visus ierakstus kuriem id vienads ar 1 --

SELECT * FROM posts WHERE id = 1;

-- atrodi visus ierakstus kuriem content sakas ar burtu o  --

SELECT * FROM posts WHERE content LIKE  "%o%";
/*izveido db*/

CREATE TABLE categories (
    id INT NOT NULL  PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR (25)
);
/*ielikt saturu post tabula*/
INSERT INTO categories
 (category_name)
VALUES 
("Sports"),
("Mūzika"),
("Svētki");




