-- Erstellen der Tabelle
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL
);

-- Einfügen von Beispieldaten
INSERT INTO users (username, email) VALUES ('JohnDoe', 'john@example.com');
INSERT INTO users (username, email) VALUES ('JaneDoe', 'jane@example.com');
