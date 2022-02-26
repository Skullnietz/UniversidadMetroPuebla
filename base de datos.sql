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
CREATE TABlE carreras (
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  created_at DATE NOT NULL,
  updated_at DATE
);
-- ? ---------------------------------------------------------------------
-- * Listo para ejecutar
CREATE TABlE ciclo_escolar (
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  created_at DATE NOT NULL,
  updated_at DATE
);
-- ? ---------------------------------------------------------------------
-- * Listo para ejecutar
CREATE TABlE cuatrimestres (
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  created_at DATE NOT NULL,
  updated_at DATE
);
-- ? ---------------------------------------------------------------------
-- * Listo para ejecutar
CREATE TABlE grupos (
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  idCarrera BIGINT NOT NULL,
  created_at DATE NOT NULL,
  updated_at DATE,
  FOREIGN KEY (idCarrera) REFERENCES carreras(id)
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
  idTipoUsuario BIGINT NOT NULL,
  idArea BIGINT NOT NULL,
  activo boolean NOT NULL DEFAULT 1,
  created_at DATE NOT NULL,
  updated_at DATE,
  FOREIGN KEY (idTiposUsuario) REFERENCES tipos_usuario(id),
  FOREIGN KEY (idArea) REFERENCES areas(id)
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
  idTipoUsuario BIGINT NOT NULL,
  sexo VARCHAR(10) NOT NULL,
  activo boolean NOT NULL DEFAULT 1,
  created_at DATE NOT NULL,
  updated_at DATE,
  FOREIGN KEY (idTipoUsuario) REFERENCES tipos_usuario(id)
);
-- ? ---------------------------------------------------------------------
-- ! Falta el la tabla de usuarios operativos
CREATE TABlE alumnos_carreras (
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  idUsuarioOperativo BIGINT NOT NULL,
  idCarrera BIGINT NOT NULL,
  idGgrupo BIGINT NOT NULL,
  idCicloEscolar BIGINT NOT NULL,
  created_at DATE NOT NULL,
  updated_at DATE,
  FOREIGN KEY (idUsuarioOperativo) REFERENCES usuarios_operativos(id),
  FOREIGN KEY (idCarrera) REFERENCES carreras(id),
  FOREIGN KEY (idGgrupo) REFERENCES grupos(id),
  FOREIGN KEY (idCicloEscolar) REFERENCES ciclo_escolar(id)
);