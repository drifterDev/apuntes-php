CREATE DATABASE api_rest;

USE api_rest;

DROP TABLE books;

DROP TABLE authors;

DROP TABLE countries;

CREATE TABLE countries (
    id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY (id)
);

CREATE TABLE authors (
    id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, age INT NOT NULL, country_id INT NOT NULL, PRIMARY KEY (id), FOREIGN KEY (country_id) REFERENCES countries (id) ON DELETE CASCADE
);

CREATE TABLE books (
    id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, author_id INT NOT NULL, PRIMARY KEY (id), FOREIGN KEY (author_id) REFERENCES authors (id) ON DELETE CASCADE
);

INSERT INTO countries (name) VALUES ('United States');

INSERT INTO countries (name) VALUES ('United Kingdom');

INSERT INTO
    authors (name, age, country_id)
VALUES ('John Doe', 30, 1);

INSERT INTO
    authors (name, age, country_id)
VALUES ('Jane Smith', 35, 2);

INSERT INTO
    books (title, author_id)
VALUES ('The Great Gatsby', 1);

INSERT INTO
    books (title, author_id)
VALUES ('Pride and Prejudice', 2);

INSERT INTO
    authors (name, age, country_id)
VALUES ('Brandon Sanderson', 48, 1);

INSERT INTO
    books (title, author_id)
VALUES ('El imperio final', 3),
    ('El pozo de la ascencion', 3),
    ('El heroe de las eras', 3);

SELECT c.*, COUNT(DISTINCT a.id) as 'authors', COUNT(b.id) as 'books'
FROM
    countries c
    LEFT OUTER JOIN authors a ON c.id = a.country_id
    LEFT OUTER JOIN books b ON b.author_id = a.id
GROUP BY
    c.id;