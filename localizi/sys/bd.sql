-- Copiando estrutura para tabela enderecos.ll_enderecos_mapa
CREATE TABLE `ll_enderecos_mapa` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nome` CHAR(255) NOT NULL COLLATE 'latin1_swedish_ci',
	`id_dinamico` CHAR(255) NOT NULL COLLATE 'latin1_general_ci',
	PRIMARY KEY (`id`),
	UNIQUE INDEX `Índex 2` (`id_dinamico`)
)
COLLATE='latin1_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=11;


-- Copiando estrutura para tabela enderecos.ll_enderecos_endereco
CREATE TABLE `ll_enderecos_endereco` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`mapa` INT(11) NOT NULL,
	`nome` VARCHAR(255) NOT NULL COLLATE 'latin1_swedish_ci',
	`estado` VARCHAR(255) NOT NULL COLLATE 'latin1_general_ci',
	`cidade` VARCHAR(255) NOT NULL COLLATE 'latin1_general_ci',
	`bairro` VARCHAR(255) NOT NULL COLLATE 'latin1_general_ci',
	`logradouro` VARCHAR(255) NOT NULL COLLATE 'latin1_general_ci',
	`numero` VARCHAR(255) NOT NULL COLLATE 'latin1_general_ci',
	`complemento` VARCHAR(255) NOT NULL COLLATE 'latin1_general_ci',
	`telefone` VARCHAR(255) NOT NULL COLLATE 'latin1_general_ci',
	PRIMARY KEY (`id`),
	INDEX `Índex 2` (`mapa`),
	CONSTRAINT `FK_ll_enderecos_endereco_ll_enderecos_mapa` FOREIGN KEY (`mapa`) REFERENCES `ll_enderecos_mapa` (`id`) ON UPDATE CASCADE ON DELETE CASCADE
)
COLLATE='latin1_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=3;
