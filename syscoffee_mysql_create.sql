CREATE TABLE `dados_colaboradores` (
	`id` int NOT NULL,
	`nome` varchar(255) NOT NULL,
	`tipo` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`senha` varchar(255) NOT NULL,
	`delete` int,
	`online` int,
	PRIMARY KEY (`id`)
);

CREATE TABLE `pagamentos` (
	`id_pagamento` int NOT NULL,
	`id` int NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`valor` FLOAT NOT NULL,
	`data_pagamento` DATE,
	PRIMARY KEY (`id_pagamento`)
);

CREATE TABLE `despesas` (
	`id_despesa` int NOT NULL,
	`id` int NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`despesa` varchar(255) NOT NULL,
	`valor` FLOAT NOT NULL,
	`data_despesa` DATE NOT NULL,
	`status` varchar(255) NOT NULL,
	PRIMARY KEY (`id_despesa`)
);

CREATE TABLE `Geral` (
	`id_geral` int NOT NULL,
	`id` int NOT NULL,
	`nome` varchar(255) NOT NULL,
	`id_pagamento` int NOT NULL,
	`id_despesa` int NOT NULL,
	PRIMARY KEY (`id_geral`)
);

ALTER TABLE `dados_colaboradores` ADD CONSTRAINT `dados_colaboradores_fk0` FOREIGN KEY (`id`) REFERENCES `Geral`(`id`);

ALTER TABLE `dados_colaboradores` ADD CONSTRAINT `dados_colaboradores_fk1` FOREIGN KEY (`nome`) REFERENCES `Geral`(`nome`);

ALTER TABLE `pagamentos` ADD CONSTRAINT `pagamentos_fk0` FOREIGN KEY (`id_pagamento`) REFERENCES `Geral`(`id_pagamento`);

ALTER TABLE `despesas` ADD CONSTRAINT `despesas_fk0` FOREIGN KEY (`id_despesa`) REFERENCES `Geral`(`id_despesa`);

ALTER TABLE `Geral` ADD CONSTRAINT `Geral_fk0` FOREIGN KEY (`id`) REFERENCES `dados_colaboradores`(`id`);

ALTER TABLE `Geral` ADD CONSTRAINT `Geral_fk1` FOREIGN KEY (`nome`) REFERENCES `dados_colaboradores`(`nome`);

ALTER TABLE `Geral` ADD CONSTRAINT `Geral_fk2` FOREIGN KEY (`id_pagamento`) REFERENCES `pagamentos`(`id_pagamento`);

ALTER TABLE `Geral` ADD CONSTRAINT `Geral_fk3` FOREIGN KEY (`id_despesa`) REFERENCES `despesas`(`id_despesa`);

