
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: ahmunbd
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente_interno`
--

DROP TABLE IF EXISTS `cliente_interno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente_interno` (
  `cliente_interno_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `CLIENTE_ASOCIADO` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cliente_interno_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente_interno`
--

LOCK TABLES `cliente_interno` WRITE;
/*!40000 ALTER TABLE `cliente_interno` DISABLE KEYS */;
INSERT INTO `cliente_interno` VALUES (11,'Empresarios Destacados','La Voz');
/*!40000 ALTER TABLE `cliente_interno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `CLIENTE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(255) NOT NULL,
  PRIMARY KEY (`CLIENTE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (6,'La Voz');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `errores`
--

DROP TABLE IF EXISTS `errores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `errores` (
  `ERROR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MENSAJE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ERROR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `errores`
--

LOCK TABLES `errores` WRITE;
/*!40000 ALTER TABLE `errores` DISABLE KEYS */;
INSERT INTO `errores` VALUES (1,'EMAIL VACIO'),(2,'NO EXISTE UN USUARIO CON ESE EMAIL'),(3,'NOMBRE DE USUARIO EXISTENTE'),(4,'EMAIL EXISTENTE'),(5,'CLIENTE EXISTENTE'),(7,'CLIENTE INTERNO EXISTENTE'),(8,'YA EXISTE UNA PIEZA CON ESE NOMBRE'),(9,'YA EXISTE UN TRABAJO CON ESE NOMBRE');
/*!40000 ALTER TABLE `errores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `piezas`
--

DROP TABLE IF EXISTS `piezas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `piezas` (
  `PIEZA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`PIEZA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `piezas`
--

LOCK TABLES `piezas` WRITE;
/*!40000 ALTER TABLE `piezas` DISABLE KEYS */;
INSERT INTO `piezas` VALUES (4,'Banner'),(5,'Newsletter');
/*!40000 ALTER TABLE `piezas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tareas`
--

DROP TABLE IF EXISTS `tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tareas` (
  `TAREA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CLIENTE` varchar(45) DEFAULT NULL,
  `cliente_interno` varchar(45) DEFAULT NULL,
  `TRABAJO` varchar(45) DEFAULT NULL,
  `PIEZA` varchar(45) DEFAULT NULL,
  `OBSERVACIONES` varchar(255) DEFAULT NULL,
  `MES` varchar(45) DEFAULT NULL,
  `ANIO` varchar(45) DEFAULT NULL,
  `CANTIDAD` int(11) DEFAULT NULL,
  `USER` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`TAREA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tareas`
--

LOCK TABLES `tareas` WRITE;
/*!40000 ALTER TABLE `tareas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tareas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajos`
--

DROP TABLE IF EXISTS `trabajos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trabajos` (
  `TRABAJO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`TRABAJO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajos`
--

LOCK TABLES `trabajos` WRITE;
/*!40000 ALTER TABLE `trabajos` DISABLE KEYS */;
INSERT INTO `trabajos` VALUES (4,'Campaña banner para empresarios.'),(5,'Trabajo'),(6,'Dia del chanta'),(7,'Hola'),(8,'asdsasda'),(9,'dasdsa'),(10,'dsad'),(11,'yuy'),(12,'sadasa'),(13,'dgdg');
/*!40000 ALTER TABLE `trabajos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `USUARIO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `APELLIDO` varchar(45) DEFAULT NULL,
  `NOMBRE_USUARIO` varchar(45) DEFAULT NULL,
  `PASSWORD` varchar(45) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `ADMIN` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`USUARIO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (5,'Alan','Flores','aflores','ushuaia1','aflores@jpggrupo.com',1),(13,'Tupac','Amaru','tamaru','tupacamaru','tamaru@inca.com',0);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'ahmunbd'
--
/*!50003 DROP PROCEDURE IF EXISTS `ALTA_CLIENTE` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE PROCEDURE `ALTA_CLIENTE`(in nom varchar(255))
BEGIN
	
	SET @NOMBRE = (
		SELECT NOMBRE
		FROM clientes
		WHERE NOMBRE = nom
		LIMIT 1
	);		
	
	IF(@NOMBRE IS NULL) THEN		
		INSERT INTO clientes (NOMBRE) VALUES (nom);
		SELECT * FROM clientes WHERE NOMBRE = nom;
	ELSE
		SELECT * FROM errores WHERE ERROR_ID = 5;
		/*SELECT 'YA EXISTE UN CLIENTE CON ESE NOMBRE';*/
	END IF;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ALTA_CLIENTE_INTERNO` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE PROCEDURE `ALTA_CLIENTE_INTERNO`(in nom varchar(255), in ca varchar(255))
BEGIN
	
	SET @NOMBRE = (
		SELECT NOMBRE
		FROM cliente_interno
		WHERE NOMBRE = nom
		LIMIT 1
	);		
	
	IF(@NOMBRE IS NULL) THEN		
		INSERT INTO cliente_interno (NOMBRE, CLIENTE_ASOCIADO) VALUES (nom, ca);
		SELECT * FROM cliente_interno WHERE NOMBRE = nom;
	ELSE
		SELECT * FROM errores WHERE ERROR_ID = 7;
		/*SELECT 'YA EXISTE UN CLIENTE INTERNO CON ESE NOMBRE';*/
	END IF;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ALTA_PIEZA` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE PROCEDURE `ALTA_PIEZA`(in nom varchar(255))
BEGIN
	
	SET @NOMBRE = (
		SELECT NOMBRE
		FROM piezas
		WHERE NOMBRE = nom
		LIMIT 1
	);		
	
	IF(@NOMBRE IS NULL) THEN		
		INSERT INTO piezas (NOMBRE) VALUES (nom);
		SELECT * FROM piezas WHERE NOMBRE = nom;
	ELSE
		SELECT * FROM errores WHERE ERROR_ID = 8;
		/*SELECT 'YA EXISTE UN CLIENTE CON ESE NOMBRE';*/
	END IF;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ALTA_TAREA` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE PROCEDURE `ALTA_TAREA`(in cli varchar(255), in cli_interno varchar(255), in trab varchar(255), in pie varchar(255), in obs varchar(255), in m varchar(255), in a varchar(255), in cant varchar(45), in usr varchar(45))
BEGIN	
		
	INSERT INTO 
	TAREAS (CLIENTE, cliente_interno, TRABAJO, PIEZA, OBSERVACIONES, MES, ANIO, CANTIDAD, USER)
	VALUES (cli, cli_interno, trab, pie, obs, m, a, cant, usr);

	SELECT 'SE AGREGO LA TAREA CON EXITO';

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ALTA_TRABAJO` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE PROCEDURE `ALTA_TRABAJO`(in nom varchar(255))
BEGIN
	
	SET @NOMBRE = (
		SELECT NOMBRE
		FROM trabajos
		WHERE NOMBRE = nom
		LIMIT 1
	);		
	
	IF(@NOMBRE IS NULL) THEN		
		INSERT INTO trabajos (NOMBRE) VALUES (nom);
		SELECT * FROM trabajos WHERE NOMBRE = nom;
	ELSE
		SELECT * FROM errores WHERE ERROR_ID = 9;
		/*SELECT 'YA EXISTE UN CLIENTE CON ESE NOMBRE';*/
	END IF;	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ALTA_USUARIO` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE PROCEDURE `ALTA_USUARIO`(in nom varchar(255), in ape varchar(255), in nom_user varchar(255), in passwd varchar(255), in mail varchar(255), in adm int)
BEGIN
	
	SET @EMAIL = (
		SELECT NOMBRE
		FROM usuarios
		WHERE EMAIL = mail
		LIMIT 1
	);	

	SET @NOM_USUARIO = (
		SELECT NOMBRE
		FROM usuarios
		WHERE NOMBRE_USUARIO = nom_user
		LIMIT 1
	);	
	
	IF(@EMAIL IS NULL) THEN
		IF(@NOM_USUARIO IS NULL) THEN
			INSERT INTO usuarios (NOMBRE, APELLIDO, NOMBRE_USUARIO, PASSWORD, EMAIL, ADMIN) VALUES (nom, ape, nom_user, passwd, mail, adm);
			SELECT * FROM usuarios WHERE EMAIL = mail;
		ELSE
			SELECT * FROM errores WHERE ERROR_ID = 3;
			/*SELECT 'NOMBRE DE USUARIO EXISTENTE';*/
		END IF;
	ELSE
		SELECT * FROM errores WHERE ERROR_ID = 4;
		/*SELECT 'EMAIL EXISTENTE';*/
	END IF;
	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `cliente_interno_X_CLIENTE_ID` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE PROCEDURE `cliente_interno_X_CLIENTE_ID`(in id int)
BEGIN
	SET @CLIENTE = (
		SELECT NOMBRE
		FROM clientes
		WHERE CLIENTE_ID = id
		LIMIT 1
	);

	IF (@CLIENTE IS NULL) THEN
		SELECT 'NO EXISTE ESE CLIENTE ID';
	ELSE
		SELECT * FROM cliente_interno WHERE CLIENTE_ASOCIADO = @CLIENTE;
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `CLIENTE_X_ID` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE PROCEDURE `CLIENTE_X_ID`(in id int)
BEGIN
	SELECT * FROM clientes WHERE CLIENTE_ID = id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ELIMINAR_USUARIO` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE PROCEDURE `ELIMINAR_USUARIO`(in id int)
BEGIN
	IF(id = '') THEN
		SELECT 'FALTO PASAR ID';
	ELSE
		DELETE FROM usuarios WHERE USUARIO_ID = id;
		SELECT 'SE ELIMINO EL USUARIO CORRECTAMENTE';
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `MODIFICAR_USUARIO` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE PROCEDURE `MODIFICAR_USUARIO`(in id int, in nom varchar(255), in ape varchar(255), in nom_user varchar(255), in passwd varchar(255), in mail varchar(255), in adm int)
BEGIN
	
	SET @NOMBRE_USUARIO = (SELECT NOMBRE_USUARIO FROM usuarios WHERE USUARIO_ID = id);
	SET @PASSWORD = (SELECT PASSWORD FROM usuarios WHERE USUARIO_ID = id);
	SET @EMAIL = (SELECT EMAIL FROM usuarios WHERE USUARIO_ID = id);

	IF(nom_user != '') THEN
		SET @NOMBRE_USUARIO = nom_user;	
	END IF;

	IF(passwd != '') THEN
		SET @PASSWORD = passwd;	
	END IF;

	IF(mail != '') THEN
		SET @EMAIL = mail;	
	END IF;
	
	UPDATE usuarios 
	SET NOMBRE = nom,
		APELLIDO = ape,
		NOMBRE_USUARIO = @NOMBRE_USUARIO,
		PASSWORD = @PASSWORD,
		EMAIL = @EMAIL,
		ADMIN = adm
	WHERE USUARIO_ID = id;
	SELECT 'SE MODIFICO EL USUARIO CORRECTAMENTE';
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `UPDATE_TAREA` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE PROCEDURE `UPDATE_TAREA`(in id varchar(45), in cli varchar(255), in cli_interno varchar(255), in trab varchar(255), in pie varchar(255), in obs varchar(255), in m varchar(255), in cant varchar(45))
BEGIN	
		
	UPDATE tareas	
	SET 
	CLIENTE = cli, 
	cliente_interno = cli_interno, 
	TRABAJO = trab, 
	PIEZA = pie, 
	OBSERVACIONES = obs, 
	MES = m, 
	CANTIDAD = cant	
	WHERE TAREA_ID = id;
	

	SELECT 'SE EDITO LA TAREA CON EXITO';

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `USUARIO_X_EMAIL` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE PROCEDURE `USUARIO_X_EMAIL`(in mail varchar(255))
BEGIN
	IF(mail = '') THEN
		SELECT * FROM errores WHERE ERROR_ID = 1;
		/* EMAIL VACIO; */
	ELSE
		SET @USER = (SELECT NOMBRE FROM usuarios WHERE EMAIL = mail LIMIT 1);		
		IF(@USER IS NOT NULL) THEN
			SELECT * FROM usuarios WHERE EMAIL = mail;			
			/* TODO OK! */
		ELSE
			SELECT * FROM errores WHERE ERROR_ID = 2;
			/* NO EXISTE EL EMAIL; */
		END IF;
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-01 12:48:38
