CREATE TABLE users (
                       id INT AUTO_INCREMENT PRIMARY KEY UNIQUE NOT NULL,
                       user_name VARCHAR(50) NOT NULL,
                       user_lastname VARCHAR(80) NOT NULL,
                       user_email VARCHAR(80) UNIQUE NOT NULL,
                       user_password VARCHAR(80) NOT NULL,
                       create_time TIMESTAMP NOT NULL
)