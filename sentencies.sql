CREATE TABLE campeons (
    id INT AUTO_INCREMENT PRIMARY KEY,      -- ID único para cada campeón
    nom VARCHAR(255) NOT NULL,              -- Nombre del campeón
    rol VARCHAR(100) NOT NULL,              -- Rol del campeón (ej. Melee, Màgia, etc.)
    accio VARCHAR(100),                     -- Acciones disponibles (en este caso, "Editar" y "Eliminar")
    any_lancament YEAR                       -- Año de lanzamiento del campeón
);


INSERT INTO campeons (nom, rol, accio, any_lancament) VALUES
('Luchador A', 'Melee', 'Editar, Eliminar', 2019),
('Maga B', 'Màgia', 'Editar, Eliminar', 2020),
('Tirador C', 'Distància', 'Editar, Eliminar', 2018),
('Tanque D', 'Tanque', 'Editar, Eliminar', 2021),
('Suport E', 'Suport', 'Editar, Eliminar', 2022);

