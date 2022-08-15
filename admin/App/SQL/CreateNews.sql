CREATE TABLE news
(
    id               INT AUTO_INCREMENT PRIMARY KEY UNIQUE NOT NULL,
    news_title       VARCHAR(250) NOT NULL,
    news_desc        VARCHAR(250) NOT NULL,
    news_image       VARCHAR(250) NOT NULL,
    news_author      VARCHAR(250) NOT NULL,
    publication_date DATE NOT NULL

)