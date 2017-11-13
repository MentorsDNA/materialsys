/*
SQLyog Community
MySQL - 10.1.16-MariaDB : Database - syscamii20
*********************************************************************
*/

insert  into `propietarios`(`id`,`nombres`,`apellido_paterno`,`apellido_materno`,`numero_identificacion`,`tipo_identificacion`) values 
('1','Henry Alex','Roque','Quispe','42216317',1),
('2','Norma','Cruz','Chambi','42145744',1),
('3','Carmen','Quispe','Gil','01221684',1),
('4','No','No','No','000000000',1);


insert  into `bancos`(`nombre`,`acronimo`,`direccion`) values 
('Banco de Credito BCP','BCP','Jr Lima 510'),
('Banco Interbank Peru','INTB','Jr Lima 423 - 425'),
('Banco Scotiabank Peru','SCOB','Jr Deustua 458'),
('Banco Continental Bbva','BBVA','Jr Lima 400 - 411'),
('Banco Financiero','FINB','Jr Deustua 318 - 320'),
('Banco MiBanco','MIBA','Jr Puno 326 - 342'),
('Caja Municipal Cusco','CCUZ','Jr Arequipa 346'),
('Caja Municipal Tacna','CTAC','Jr Fermin Arbulu 153'),
('Caja Municipal Arequipa','CAQP','Jr Arequipa 385');


insert  into `grupo_empresas`(`numero_ruc`,`propietario_empresa`,`nombre`) values 
('20601107954','1','Grupo Camii EIRL'),
('10422163170','1','Henry Alex Roque Quispe'),
('20448805124','2','Creaciones Camii EIRL'),
('10012216845','3','Carmen Quispe Gil'),
('00000000000','4','Mercado Libre'),
('00000000001','4','Sin Nombre');


insert  into `propietario_direccions`(`propietario_direccion_id`,`pais`,`departamento`,`direccion`,`tipo_uso`) values 
('1','Peru','Puno - Chucuito - Desaguadero','Avenida Panamericana 219','Comercial'),
('2','Peru','Puno - Chucuito - Desaguadero','Avenida Panamericana 219','Comercial'),
('3','Peru','Puno - Chucuito - Desaguadero','Jiron Natividad 178','Comercial'),
('4','Peru','Puno - Chucuito - Desaguadero','Avenida Panamericana 219','Comercial');


insert  into `empresas`(`id`,`codigo`,`nombre`) values 
(01,'EMA10','Miriya'),
(02,'EMC10','Evytony'),
(03,'EMC20','Tempore'),
(04,'EMC30','Wawitas'),
(05,'EMC31','Angelikels'),
(06,'EMG10','Thiaguito'),
(07,'EMG11','Helencita'),
(08,'EMG12','Karlitos'),
(09,'EMG13','Baby Go'),
(10,'EMG14','Jasline'),
(11,'EMG15','Alkahami'),
(12,'EMG16','Nelukids'),
(13,'EMG17','Aloncito'),
(14,'EMG18','Alhumed'),
(15,'EMG19','Yamile'),
(16,'EMG20','Yamileph'),
(17,'EMG21','Emaly'),
(18,'EMG22','Baby Sport'),
(19,'EMG23','Chely'),
(20,'EMG24','Bravo'),
(21,'EMK10','Etiquetas'),
(22,'EMK11','Grafo'),
(23,'EMM10','Tamys'),
(24,'EMM11','Agu Bello'),
(25,'EMM12','Chasan'),
(26,'EMP10','Nicolle'),
(27,'EMP11','Cielito'),
(28,'EMP12','Ñañitas'),
(29,'EMP13','Roquitas'),
(30,'EMP14','D Favi'),
(31,'EMP15','Dulces Sueños'),
(32,'EMP16','Elvis'),
(33,'EMR10','Angeles'),
(34,'EMR11','Yoshy'),
(35,'EMS10','Famely'),
(36,'EMS11','Fayrus'),
(37,'EMS12','Jean Paul'),
(38,'EMT10','Keshia'),
(39,'EMT11','Duberli'),
(40,'EMT12','Axi'),
(41,'EMV10','Arapitos'),
(42,'EMV11','Jeferson'),
(43,'EMV12','Yaneth Bit'),
(44,'EMV13','Yaneth Ray'),
(45,'EMV14','Tito'),
(46,'EMV15','Alex'),
(47,'EMV16','Ana'),
(48,'EMV17','Rita Pant'),
(49,'EMV18','Jaime Bit'),
(50,'EMX10','Amelia'),
(51,'EMX20','Rossy'),
(52,'EMX30','Luis & Nicole'),
(53,'EMXXX','Desconocido');




insert  into `marcas`(`id`,`marca_empresa_id`,`marca`) values 
(01,01,'Miriya'),
(02,02,'Evytony'),
(03,03,'Tempore'),
(04,04,'Wawitas'),
(05,05,'Angelikels'),
(06,06,'Thiaguito'),
(07,07,'Helencita'),
(08,08,'Karlitos'),
(09,09,'Baby Go'),
(10,10,'Jasline'),
(11,11,'Alkahami'),
(12,12,'Nelukids'),
(13,13,'Aloncito'),
(14,14,'Alhumed'),
(15,15,'Yamile'),
(16,16,'Yamileph'),
(17,17,'Emaly'),
(18,18,'Baby Sport'),
(19,19,'Chely'),
(20,20,'Bravo'),
(21,21,'Etiquetas'),
(22,22,'Grafo'),
(23,23,'Tamys'),
(24,24,'Agu Bello'),
(25,25,'Chasan'),
(26,26,'Nicolle'),
(27,27,'Cielito'),
(28,28,'Ñañitas'),
(29,29,'Roquitas'),
(30,30,'D Favi'),
(31,31,'Dulces Sueños'),
(32,32,'Elvis'),
(33,33,'Angeles'),
(34,34,'Yoshy'),
(35,35,'Famely'),
(36,36,'Fayrus'),
(37,37,'Jean Paul'),
(38,38,'Keshia'),
(39,39,'Duberli'),
(40,40,'Axi'),
(41,41,'Arapitos'),
(42,42,'Jeferson'),
(43,43,'Yaneth Bit'),
(44,44,'Yaneth Ray'),
(45,45,'Tito'),
(46,46,'Alex'),
(47,47,'Ana'),
(48,48,'Rita Pant'),
(49,49,'Jaime Bit'),
(50,50,'Amelia'),
(51,51,'Rossy'),
(52,52,'Luis & Nicole'),
(53,53,'Desconocido');


