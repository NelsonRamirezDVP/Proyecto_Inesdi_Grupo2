-- Tabla de Roles
CREATE TABLE Roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL UNIQUE
);

-- Tabla de Usuarios con referencia a Roles
CREATE TABLE Usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    rol_id INT,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (rol_id) REFERENCES Roles(id)
);

-- Tabla de accesos (registro de auditoría)
CREATE TABLE Accesos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    ip_origen VARCHAR(45) NOT NULL,
    fecha_acceso TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    accion VARCHAR(100) NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);

-- Insertar roles
INSERT INTO Roles(nombre) VALUES ('admin'), ('dev'), ('auditor');

-- Insertar usuarios
INSERT INTO Usuarios(nombre, email, rol_id) VALUES
('Nelson Brizuela', 'nelson@example.com', 1),
('Carmen Yanes', 'carmen@example.com', 2),
('German Millan', 'german@example.com', 3);

-- Registrar accesos
INSERT INTO Accesos(usuario_id, ip_origen, accion) VALUES
(1, '192.168.1.10', 'Login Exitoso'),
(2, '192.168.1.11', 'Consulta de registros'),
(3, '10.0.0.5', 'Revisión de logs');
