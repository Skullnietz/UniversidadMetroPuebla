-- * Listo para ejecutar
CREATE DATABASE UniversidadMetroPuebla DEFAULT CHARACTER SET = 'utf8mb4';
-- ? ---------------------------------------------------------------------
-- * Listo para ejecutar
use UniversidadMetroPuebla;
-- ? ---------------------------------------------------------------------
-- * Listo para ejecutar
CREATE TABlE tipos_usuario (
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  created_at DATE NOT NULL,
  updated_at DATE
);
-- ? ---------------------------------------------------------------------
-- * Listo para ejecutar
CREATE TABlE areas (
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  created_at DATE NOT NULL,
  updated_at DATE
);
-- ? ---------------------------------------------------------------------
-- * Listo para ejecutar
CREATE TABlE usuarios_admin (
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  titulo VARCHAR(5) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  ap_paterno VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  idTU BIGINT NOT NULL,
  idA BIGINT NOT NULL,
  activo boolean NOT NULL DEFAULT 1,
  created_at DATE NOT NULL,
  updated_at DATE,
  FOREIGN KEY (idTU) REFERENCES tipos_usuario(id),
  FOREIGN KEY (idA) REFERENCES areas(id)
);
-- ? ---------------------------------------------------------------------
-- ! Faltan las ultimas columnas de la tabla
CREATE TABlE usuarios_operativos (
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  matricula VARCHAR(20) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  ap_paterno VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  idTU BIGINT NOT NULL,
  sexo VARCHAR(10) NOT NULL,
  activo boolean NOT NULL DEFAULT 1,
  created_at DATE NOT NULL,
  updated_at DATE,
  FOREIGN KEY (idTU) REFERENCES tipos_usuario(id)
);