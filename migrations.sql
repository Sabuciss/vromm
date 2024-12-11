/*izveido db*/
DROP DATABASE IF EXISTS blog_ipb23;
CREATE DATABASE blog_ipb23;

USE blog_ipb23;

CREATE TABLE posts (
    id INT NOT NULL  PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR (5200)
);
/*ielikt saturu post tabula*/
INSERT INTO posts
 ( content)
VALUES 
("Ziemassvētki Nākkk"),
("Otrs bloga ierakstssss"),
("Ka pagatavot siermaizi");

SELECT * FROM posts;

