CREATE TABLE IF NOT EXISTS `atividade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(600) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `status_id` int(11) NOT NULL,
  `situation` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,  
  PRIMARY KEY (status_id)
);

INSERT INTO status
(title) VALUES
('Pendente'), ('Em Desenvolvimento'), ('Em Teste'), ('Concluído');

