CREATE TABLE product(
                        id INT AUTO_INCREMENT NOT NULL UNIQUE PRIMARY KEY,
                        product_name VARCHAR(90) NOT NULL,
                        product_desc VARCHAR(120) NOT NULL,
                        product_status VARCHAR(50) NOT NULL,
                        product_deadline DATE NOT NULL

);