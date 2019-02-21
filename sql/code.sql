-- ADDED
CREATE TABLE users (
    user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    city VARCHAR(30) NOT NULL,
    state char(2) NOT NULL,
    zip INT NOT NULL,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE topics (
  topic_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  topic VARCHAR(30) NOT NULL,
);

INSERT INTO topics
(topic)
                VALUES
('politics');
