CREATE TABLE Product(
    idProduct INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL
)

CREATE TABLE  User(
    taxIdCode VARCHAR(100) PRIMARY KEY NOT NULL,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    age INT NOT NULL
)

CREATE TABLE User_Cart(
    idProduct       INT,
    taxIdCode       VARCHAR(100),
    FOREIGN KEY (idProduct)     REFERENCES Product(idProduct),
    FOREIGN KEY (taxIdCode)     REFERENCES User(taxIdCode)
)