# Docker Web Application with PHP and MySQL

This is a simple web application using PHP with Apache and MySQL, built and orchestrated using Docker Compose.

## Components
- **Frontend (PHP + Apache)**: A basic PHP application that interacts with the MySQL database and displays user data.
- **Backend (MySQL)**: Stores user data with preloaded example entries.

## Setup and Usage

### Build and start the application:
Run the following command to build and start the application:

```bash
docker-compose up --build


### Funktionsweise

- **Datenbankinitialisierung:** Beim ersten Start von MySQL wird das `init.sql`-Skript ausgeführt, das eine Tabelle `users` erstellt und zwei Benutzer (`JohnDoe` und `JaneDoe`) hinzufügt.
- **PHP Webanwendung:** Die `index.php`-Datei zeigt die gespeicherten Benutzerdaten (Benutzername und E-Mail) aus der MySQL-Datenbank an.
- **Erste Anzeige:** Sobald die Webanwendung läuft, werden die gespeicherten Benutzerdaten auf der Startseite angezeigt.

### Nächste Schritte

1. **Starten der Anwendung:** 
   - Führen Sie den Befehl `docker-compose up --build` aus, um die Docker-Container zu erstellen und zu starten.
2. **Zugriff auf die Webanwendung:**
   - Öffnen Sie `http://localhost` im Browser. Sie sollten eine Tabelle mit den Benutzerdaten sehen, die in der Datenbank vorab eingefügt wurden.
   
Dieses Setup stellt sicher, dass beim Start der Applikation bereits Daten aus der Datenbank angezeigt werden.

# Kurzanleitung: Befehle zum Hinzufügen von Daten in MySQL

<!-- 1. Mit dem MySQL-Container verbinden: -->
```bash
docker exec -it <container_name_or_id> mysql -u root -p
<!-- 2. Datenbank auswählen: -->
sql
Code kopieren
USE user_data;
<!-- 3. Neue Daten hinzufügen: -->
sql
Code kopieren
INSERT INTO users (username, email) VALUES ('CharlieBrown', 'charlie@example.com');
INSERT INTO users (username, email) VALUES ('DavidWilliams', 'david@example.com');
<!-- 4. Daten überprüfen: -->
sql
Code kopieren
SELECT * FROM users;