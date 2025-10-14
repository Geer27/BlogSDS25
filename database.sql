-- Base de datos para el Blog de Semana de Sistemas 2025

-- Tabla de visitas al blog
CREATE TABLE IF NOT EXISTS visitas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    comentario TEXT,
    fecha_visita TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_fecha (fecha_visita)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertar datos de ejemplo
INSERT INTO visitas (nombre, email, comentario) VALUES
('Visitante Demo', 'demo@example.com', 'Interesante blog sobre la Semana de Sistemas 2025');
