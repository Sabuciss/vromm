/*izveido db*/
DROP DATABASE IF EXISTS blog_ipb23;
CREATE DATABASE blog_ipb23;

USE blog_ipb23;

CREATE TABLE posts (
    id INT NOT NULL  PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR (5200),
    category_id INT
);
CREATE TABLE categories (
    id INT NOT NULL  PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR (25)
);

/*ielikt saturu post tabula*/
INSERT INTO posts
 (content, category_id)
VALUES 
("Ziemassvētki Nākkk", 1),
("Otrs bloga ierakstssss", 2),
("Ka pagatavot siermaizi", 3);

/*ielikt saturu post tabula*/
INSERT INTO categories
 (category_name)
VALUES 
("Sports"),
("Mūzika"),
("Svētki");



