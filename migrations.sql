/* Izveido jaunu datu bāzi */
DROP DATABASE IF EXISTS blog_ipb23;
CREATE DATABASE blog_ipb23;

USE blog_ipb23;

/* Izveido posts tabulu */
CREATE TABLE posts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR(5200),
    category_id INT NULL
);

/* Izveido categories tabulu */
CREATE TABLE categories (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(25)
);

/* Ievieto datus kategoriju tabulā */
INSERT INTO categories (category_name)
VALUES 
("Sports"),
("Mūzika"),
("Svētki");

/* Ievieto datus postu tabulā */
INSERT INTO posts (content, category_id)
VALUES 
("BMW", 1),
("Kebabs", 2),
("Santorini", 3);

/* Pārbaudi, kā izskatās saistītie dati */
SELECT posts.*, categories.category_name 
FROM posts
LEFT JOIN categories ON posts.category_id = categories.id
WHERE posts.id = 1;
