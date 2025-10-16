CREATE TABLE professor (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(225),
disciplina VARCHAR(225);

CREATE TABLE contato_professor(
professor_id INT,
FOREIGN KEY (professor_id) REFERENCES professor(id),
email VARCHAR(225),
telecrudfone VARCHAR(20));