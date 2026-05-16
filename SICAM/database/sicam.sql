CREATE DATABASE IF NOT EXISTS sicam CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE sicam;
CREATE TABLE roles (id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(50) UNIQUE);
INSERT INTO roles(name) VALUES ('Administrador General'),('Coordinador'),('Médico'),('Enfermera'),('Nutricionista'),('Psicólogo'),('Trabajador Social'),('Cuidador'),('Familiar'),('Auditor');
CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY,role VARCHAR(60) NOT NULL,full_name VARCHAR(120),username VARCHAR(50) UNIQUE,password VARCHAR(255),status TINYINT(1) DEFAULT 1,created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
INSERT INTO users(role,full_name,username,password) VALUES ('Administrador General','Administrador','admin','\$2y\$10\$D7dPCc4ICDYmJqhdJu7B4uA3KxXJfLTZQaaR1wQQe9eIrdw08m7m2');
CREATE TABLE older_adults (id INT AUTO_INCREMENT PRIMARY KEY,foto VARCHAR(150) NULL,tipo_documento VARCHAR(20),numero_documento VARCHAR(30) UNIQUE,nombres VARCHAR(80),apellidos VARCHAR(80),fecha_nacimiento DATE,sexo VARCHAR(20),eps VARCHAR(100),estado VARCHAR(20),fecha_ingreso DATE,deleted_at DATETIME NULL,created_at TIMESTAMP);
CREATE TABLE vital_signs (id INT AUTO_INCREMENT PRIMARY KEY,older_adult_id INT NOT NULL,presion_sistolica INT,presion_diastolica INT,frecuencia_cardiaca INT,saturacion_oxigeno DECIMAL(5,2),temperatura DECIMAL(4,2),peso DECIMAL(5,2),talla DECIMAL(4,2),imc DECIMAL(5,2),fecha_registro DATETIME,FOREIGN KEY (older_adult_id) REFERENCES older_adults(id));
CREATE TABLE alerts (id INT AUTO_INCREMENT PRIMARY KEY,older_adult_id INT NULL,tipo VARCHAR(100),mensaje TEXT,status VARCHAR(20) DEFAULT 'pendiente',created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,INDEX(status));
