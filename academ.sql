
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP DATABASE if exists academ;

CREATE DATABASE academ;
USE  academ;

CREATE TABLE login (
  id int(11) NOT NULL,
  user varchar(250) NOT NULL,
  password varchar(250) NOT NULL,
  email varchar(250) NOT NULL,
  pasadmin varchar(250) NOT NULL,
  rol int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO login (id, user, password, email, pasadmin, rol) VALUES
(1, 'Administrador', '', 'mariovargaz13@gmail.com', '123456', 1),
(2, 'Bryan', '12345', 'Bryan059@gmail.com', '', 2),
(4, 'Mario', '12345', 'Mario@gmail.com', '', 2),
(5, 'David', '1234', 'David@gmail.com', '', 2);


ALTER TABLE login
  ADD PRIMARY KEY (id);

ALTER TABLE login
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
