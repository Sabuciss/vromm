DROP DATABASE IF EXISTS blog_ipb23;
CREATE DATABASE blog_ipb23;
USE blog_ipb23;

/* Izveido categories tabulu */
CREATE TABLE categories (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(25) NOT NULL
);

/* Izveido posts tabulu ar ārējo atslēgu */
CREATE TABLE posts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR(5200) NOT NULL,
    category_id INT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
);

/* Ievieto kategorijas */
INSERT INTO categories (category_name) VALUES 
("Sports"), 
("Mūzika"), 
("Svētki");

/* Ievieto bloga ierakstus */
INSERT INTO posts (content, category_id) VALUES 
("BMW", 1), 
("Kebabs", 2), 
("Santorini", 3);


SELECT posts.*, categories.category_name 
FROM posts
LEFT JOIN categories ON posts.category_id = categories.id;
