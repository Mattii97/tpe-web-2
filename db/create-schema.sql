CREATE DATABASE IF NOT EXISTS app CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS app.category(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    description VARCHAR(120),
    color CHAR(6),
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS app.expense(
    id INT NOT NULL AUTO_INCREMENT,
    date DATE NOT NULL, 
    product_name VARCHAR(60) NOT NULL,
    cost DECIMAL (10, 2),
    category_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (category_id) REFERENCES category(id)
);


