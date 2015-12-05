/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : faculdade

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-12-05 16:12:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cursos
-- ----------------------------
DROP TABLE IF EXISTS `cursos`;
CREATE TABLE `cursos` (
`id_curso`  int(11) NOT NULL AUTO_INCREMENT ,
`curso`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`descricao`  varchar(25500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`perfil`  varchar(2500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`turnos`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`periodos`  int(3) NULL DEFAULT NULL ,
`valor`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id_curso`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=13

;

-- ----------------------------
-- Records of cursos
-- ----------------------------
BEGIN;
INSERT INTO `cursos` VALUES ('1', 'Engenharia de Computação', 'O Curso de Engenharia de Computação da Faculdade Presidente Antônio Carlos prepara seus egressos para o mercado de trabalho assim como fundamenta sua formação para o prosseguimento dos estudos em nível de mestrado e doutorado, focando os sistemas de telecomunicações, eletrônica e software, visando a formação de um profissional capacitado a atender as demandas de desenvolvimento de sistemas computacionais, segundo uma abordagem de projeto conjunto de hardware e software.\r\n\r\nAto Autorizativo:\r\n\r\nReconhecido pelo Artigo 63 da Portaria Normativa número 40, de 12 de dezembro de 2007.', 'Em termos técnicos o Engenheiro da Computação terá formação com sólidos fundamentos em eletrônica e eletricidade que lhe permitam projetar, avaliar e dar manutenção em hardware, habilidades e conhecimentos em redes de computadores e sistemas de telecomunicações, formação em TI que o habilite ao desenvolvimento de projeto de software assim como na gerência de projetos e uma base em matemática computacional de modo a entender e refinar os processos de otimização nos mais variados ramos do saber atravidades de da inteligência computacional.', 'Noite', '11', '693,90'), ('2', 'Engenharia Civil', 'O Curso de Engenharia Civil fundamenta-se em uma formação voltada para o desenvolvimento da capacidade crítica e criativa, sem deixar de lado a formação do aluno no sentido de criar um profissional com uma base sólida de conhecimentos científicos e técnicos. A graduação deve proporcionar condições para que cada aluno construa com rigor essa base inicial para a vida profissional, juntamente com o desenvolvimento da capacidade de análise. Com isso será possível ao profissional adaptar-se às necessidades do mercado de trabalho, bem como estará apto para o treinamento continuado que se inicia com a vida prática, única forma viável para acompanhar a contínua evolução da tecnologia.', 'A definição do perfil do egresso do Curso de Engenharia Civil baseou-se na Resolução CNE/CES 11, de 11 de março de 2002, que institui as Diretrizes Curriculares dos cursos de Engenharia, a qual em seu Artigo 3º estabelece:\r\n\r\nO Curso de Graduação em Engenharia tem como perfil do egresso/ profissional o engenheiro, com formação generalista, humanista, crítica e reflexiva, capacitado a absorver e desenvolver novas tecnologias, estimulando a sua atuação crítica e criativa na identificação e resolução de problemas, considerando seus aspectos políticos, econômicos, sociais, ambientais e culturais, com visão ética e humanística, em atendimento às demandas da sociedade.', 'Noite', '10', '693'), ('6', 'Medicina Veterinária', 'O curso de Medicina Veterinï¿½ria da UNIPAC Lafaiete tem uma formaï¿½ï¿½o multidisciplinar, estando fundamentado na ciï¿½ncia que se dedica ï¿½ prevenï¿½ï¿½o, controle, erradicaï¿½ï¿½o e tratamento das doenï¿½as, traumatismos ou qualquer outro agravo ï¿½ saï¿½de dos animais, alï¿½m do controle da sanidade dos produtos e subprodutos de origem animal para o consumo humano.\r\n\r\nNota 4 na avaliaï¿½ï¿½o do MEC. \r\n\r\nAto Autorizativo:\r\n\r\nReconhecido pela Portaria do Ministï¿½rio da Educaï¿½ï¿½o nï¿½ 125, de 15 de marï¿½o de 2013, publicada no D.O.U. em 19 de marï¿½o de 2013.', 'O profissional formado no curso de Medicina Veterinï¿½ria da UNIPAC Lafaiete possui formaï¿½ï¿½o generalista, humanista, crï¿½tica e reflexiva, apto a compreender e traduzir as necessidades de indivï¿½duos, grupos sociais e comunidades, com relaï¿½ï¿½o ï¿½s atividades inerentes ao exercï¿½cio profissional, no ï¿½mbito de seus campos especï¿½ficos de atuaï¿½ï¿½o em saï¿½de animal e clï¿½nica veterinï¿½ria; saneamento ambiental e medicina veterinï¿½ria preventiva, saï¿½de pï¿½blica e inspeï¿½ï¿½o e tecnologia de produtos de origem animal; zootecnia, produï¿½ï¿½o e reproduï¿½ï¿½o animal e ecologia e proteï¿½ï¿½o ao meio ambiente. Ter conhecimento dos fatos sociais, culturais e polï¿½ticos da economia e da administraï¿½ï¿½o agropecuï¿½ria e agroindustrial. Capacidade de raciocï¿½nio lï¿½gico, de observaï¿½ï¿½o, de interpretaï¿½ï¿½o e de anï¿½lise de dados e informaï¿½ï¿½es, bem como dos conhecimentos essenciais de Medicina Veterinï¿½ria, para identificaï¿½ï¿½o e resoluï¿½ï¿½o de problemas.', 'Noite', '10', '693'), ('7', 'Engenharia de Controle e Automação', 'ï¿½A Engenharia de Controle e Automaï¿½ï¿½o ï¿½ um ramo da engenharia voltado ï¿½ automaï¿½ï¿½o e controle de processos. ï¿½ amplamente empregada em indï¿½strias de qualquer natureza, outros ramos de atividade e atï¿½ em residï¿½ncias. \r\nUtiliza de elementos tecnolï¿½gicos como computadores, sensores, atuadores, robï¿½s, mï¿½quinas elï¿½tricas, softwares, etc., como recursos para o desenvolvimento de processos automatizados e para a supervisï¿½o destes. \r\nï¿½ uma ciï¿½ncia multidisciplinar, que engloba conhecimento de engenharia elï¿½trica, eletrï¿½nica, de computaï¿½ï¿½o e mecï¿½nica. \r\nPor ser necessï¿½ria em qualquer situaï¿½ï¿½o onde exista um processo que possa ser automatizado, a Engenharia de Controle e Automaï¿½ï¿½o ï¿½ considerada uma das profissï¿½es do futuro.ï¿½\r\n\r\nA profissï¿½o do Engenheiro de Controle e Automaï¿½ï¿½o ï¿½ regulamentada pelo sistema CONFEA/CREA, atravï¿½s das resoluï¿½ï¿½es, 218 de 1973 , 335 de 1984 e 427 de 1999. \r\nï¿½Compete ao Engenheiro de Controle e Automaï¿½ï¿½o, o desempenho das atividades 1 a 18 do art. 1ï¿½ da Resoluï¿½ï¿½o nï¿½ 218 de 29 de junho de 1973 do CONFEA, no que se refere ao controle e automaï¿½ï¿½o de equipamentos, processos, unidades e sistemas de produï¿½ï¿½o, seus serviï¿½os afins e correlatos.ï¿½\r\nParï¿½grafo ï¿½nico ï¿½ ï¿½... os Engenheiros de Controle e Automaï¿½ï¿½o integrarï¿½o o grupo ou categoria da engenharia, modalidade eletricista, prevista no item II, letra ï¿½Aï¿½, do Art. 8ï¿½, da Resoluï¿½ï¿½o 335, de 27 de outubro de 1984, do CONFEA.ï¿½\r\n\r\nAto Autorizativo:\r\n\r\nReconhecido pela Portaria do Ministï¿½rio da Educaï¿½ï¿½o nï¿½ 125, de 15 de marï¿½o de 2013, publicada no D.O.U. em 19 de marï¿½o de 2013.', 'O profissional formado no curso Engenharia de Controle e Automaï¿½ï¿½o deve ser capaz de atuar nas seguintes atividades:\r\n- Estudo, planejamento, especificaï¿½ï¿½o e projeto de plantas de automaï¿½ï¿½o industrial;\r\n- Conduï¿½ï¿½o de equipe de instalaï¿½ï¿½o, montagem, operaï¿½ï¿½o, reparo ou manutenï¿½ï¿½o de planta de controle e automaï¿½ï¿½o industrial;\r\n- Especificaï¿½ï¿½o, desenvolvimento e implantaï¿½ï¿½o de sistemas para:\r\n  Automatizar residï¿½ncias;\r\n  Automatizar o setor comercial de serviï¿½os;\r\n  Trabalhar com robï¿½tica em fï¿½bricas;\r\n Automatizar sistemas de produï¿½ï¿½o em sï¿½rie, em indï¿½strias siderï¿½rgicas, de extraï¿½ï¿½o mineral, tï¿½xtil, alimentï¿½cia, agronegï¿½cio, mecï¿½nica e elï¿½trica, entre outras.\r\n\r\nDeve tambï¿½m ser capaz de atuar nas seguintes atividades:\r\n- Modernizaï¿½ï¿½o, automaï¿½ï¿½o e otimizaï¿½ï¿½o de processos nos setores industriais, comerciais e de serviï¿½os;\r\n- Projetos e integraï¿½ï¿½o de sistemas de automaï¿½ï¿½o industrial em empresas de engenharia;\r\n- Execuï¿½ï¿½o de projetos de engenharia visando planejar a expansï¿½o e automaï¿½ï¿½o de longo prazo;\r\n- Instrumentaï¿½ï¿½o, controle, operaï¿½ï¿½o e supervisï¿½o de processos industriais.', 'Noite', '10', '693'), ('8', 'Pedagogia', 'O pedagogo Ã© o profissional especialista em educaÃ§Ã£o, que atua em vÃ¡rias instÃ¢ncias da prÃ¡tica educativa, devendo produzir e difundir conhecimentos no campo educacional. O Pedagogo da UNIPAC Lafaiete no decorrer de sua formaÃ§Ã£o desenvolve habilidades para atuar nas atividades referentes ao processo educativo em instituiÃ§Ãµes escolares e nÃ£o escolares, empresas, Ã³rgÃ£os pÃºblicos e ONGâ€™s. Cada vez mais se ampliam os espaÃ§os de atuaÃ§Ã£o do profissional da pedagogia, que nas empresas, sÃ£o envolvidos em tarefas de seleÃ§Ã£o e treinamento e no desenvolvimento de competÃªncias adquiridas pelos processos de reestruturaÃ§Ã£o do trabalho.', 'O profissional que se pretende formar para atuar na EducaÃ§Ã£o BÃ¡sica Ã© o que demonstra conhecimentos requeridos para o exercÃ­cio das seguintes competÃªncias e habilidades, conforme art. 5Âº da ResoluÃ§Ã£o nÂº 1/2006:\r\n\r\nâ€¢ atuar com Ã©tica e compromisso com vistas Ã  construÃ§Ã£o de uma sociedade justa, equÃ¢nime, igualitÃ¡ria;\r\nâ€¢ compreender, cuidar e educar crianÃ§as de zero a cinco anos, de forma a contribuir, para o seu desenvolvimento nas dimensÃµes, entre outras, fÃ­sica, psicolÃ³gica, intelectual, social;\r\nâ€¢ fortalecer o desenvolvimento e as aprendizagens de crianÃ§as do Ensino Fundamental, assim como daqueles que nÃ£o tiveram oportunidade de escolarizaÃ§Ã£o na idade prÃ³pria;\r\nâ€¢ trabalhar, em espaÃ§os escolares e nÃ£o-escolares, na promoÃ§Ã£o da aprendizagem de sujeitos em diferentes fases do desenvolvimento humano, em diversos nÃ­veis e modalidades do processo educativo;\r\nâ€¢ reconhecer e respeitar as manifestaÃ§Ãµes e necessidades fÃ­sicas, cognitivas, emocionais, afetivas dos educandos nas suas relaÃ§Ãµes individuais e coletivas;\r\nâ€¢ ensinar LÃ­ngua Portuguesa, MatemÃ¡tica, CiÃªncias, HistÃ³ria, Geografia, Artes, EducaÃ§Ã£o FÃ­sica, de forma interdisciplinar e adequada Ã s diferentes fases do desenvolvimento humano;', 'Manhã', '10', '400');
COMMIT;

-- ----------------------------
-- Table structure for inscritos
-- ----------------------------
DROP TABLE IF EXISTS `inscritos`;
CREATE TABLE `inscritos` (
`id_inscrito`  int(11) NOT NULL AUTO_INCREMENT ,
`nome`  varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL ,
`cpf`  varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL ,
`email`  varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL ,
`opcao1`  varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL ,
`opcao2`  varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL ,
`dia_prova`  varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL ,
PRIMARY KEY (`id_inscrito`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_bin
AUTO_INCREMENT=9

;

-- ----------------------------
-- Records of inscritos
-- ----------------------------
BEGIN;
INSERT INTO `inscritos` VALUES ('1', 'Goku', '12312123131', 'luizeduardovalle@gmail.com', 'Engenharia de Computação', 'Engenharia de Computação', '2015-12-26'), ('2', 'Vegeta', '12312123131', 'luizeduardovalle@gmail.com', 'Engenharia de Controle e Automação', 'Engenharia de Computação', '2015-12-26'), ('3', 'Picolo', '12312123131', 'luizeduardovalle@gmail.com', 'Engenharia Civil', 'Engenharia de Computação', '2015-12-26'), ('4', 'Videl', '12312123131', 'luizeduardovalle@gmail.com', 'Medicina Veterinária', 'Engenharia de Computação', '2015-12-26'), ('5', 'Goten', '12312123131', 'luizeduardovalle@gmail.com', 'Engenharia Civil', 'Engenharia de Computação', '2015-12-26'), ('6', 'Gohan', '12312123131', 'luizeduardovalle@gmail.com', 'Medicina Veterinária', 'Engenharia de Computação', '2015-12-26'), ('7', 'Bulma', '12312123131', 'luizeduardovalle@gmail.com', 'Engenharia de Controle e Automação', 'Engenharia de Computação', '2015-12-26'), ('8', 'Kamilla', '1231231', 'KAMILLA@gmail.com', 'Manhã', 'Manhã', '2015-12-26');
COMMIT;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`nome`  varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL ,
`email`  varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL ,
`senha`  varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL ,
`nivel`  int(11) NULL DEFAULT 1 ,
`status`  int(1) NULL DEFAULT 1 ,
`data_modificacao`  timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_unicode_ci
AUTO_INCREMENT=5

;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
BEGIN;
INSERT INTO `usuarios` VALUES ('1', 'Luiz', 'luizeduardovalle@gmail.com', '1', '3', '1', '2015-12-05 14:43:06'), ('2', 'Eduardo', 'eduardo@gmail.com.br', 'senha', '1', '1', '2015-12-05 13:58:01'), ('3', 'E1e21e', '12e1@21213.com', '202cb962ac59075b964b07152d234b70', '1', '0', '2015-12-05 14:14:36'), ('4', 'Kamilla', 'kamilla@gmail.com', '202cb962ac59075b964b07152d234b70', '2', '1', '2015-12-05 14:12:21');
COMMIT;

-- ----------------------------
-- Auto increment value for cursos
-- ----------------------------
ALTER TABLE `cursos` AUTO_INCREMENT=13;

-- ----------------------------
-- Auto increment value for inscritos
-- ----------------------------
ALTER TABLE `inscritos` AUTO_INCREMENT=9;

-- ----------------------------
-- Auto increment value for usuarios
-- ----------------------------
ALTER TABLE `usuarios` AUTO_INCREMENT=5;
