# Verwenden des offiziellen PHP-Apache-Images
FROM php:7.4-apache

# Installieren der notwendigen PHP-Erweiterungen
RUN docker-php-ext-install mysqli

# Kopieren des Webanwendungs-Codes in das Container-Verzeichnis
COPY ./src /var/www/html/

# Apache-Konfiguration anpassen (optional)
COPY ./config/000-default.conf /etc/apache2/sites-available/000-default.conf

# Port freigeben
EXPOSE 80
