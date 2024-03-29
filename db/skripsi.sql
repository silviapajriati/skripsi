/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.3.16-MariaDB : Database - skripsi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`skripsi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `skripsi`;

/*Table structure for table `data_siswa` */

DROP TABLE IF EXISTS `data_siswa`;

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) DEFAULT NULL,
  `nama_siswa` varchar(255) DEFAULT NULL,
  `kode_kelas` varchar(255) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `kd_wali` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `data_siswa` */

insert  into `data_siswa`(`id`,`nis`,`nama_siswa`,`kode_kelas`,`no_telp`,`tempat_lahir`,`tanggal_lahir`,`alamat`,`nama_ibu`,`nama_ayah`,`kd_wali`,`created_at`,`updated_at`) values 
(1,'2019011001','Silvia Pajriati',NULL,'089651955916','Tangerang','1995-03-17','Tangerang-Batuceper','S','K','1','2019-08-15 13:15:51',NULL),
(8,'20198574532','Ai',NULL,'0218973455','Tangerang','2019-08-14',NULL,'S','A',NULL,'2019-08-24 06:52:14','2019-08-24 14:25:07');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_21_030550_create_products_table',2),
(4,'2019_08_21_043412_create_posts_table',3);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `tbl_detail_jadwal` */

DROP TABLE IF EXISTS `tbl_detail_jadwal`;

CREATE TABLE `tbl_detail_jadwal` (
  `id_jadwal` int(225) NOT NULL AUTO_INCREMENT,
  `kode_kelas` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `kode_mapel` varchar(100) NOT NULL,
  `jam_selesai` varchar(100) NOT NULL,
  `jam_mulai` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `img_jadwal` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_detail_jadwal` */

insert  into `tbl_detail_jadwal`(`id_jadwal`,`kode_kelas`,`nip`,`kode_mapel`,`jam_selesai`,`jam_mulai`,`hari`,`img_jadwal`,`created_at`,`updated_at`) values 
(59,'K01A','07008','M0119TI','11:30','13:00','Senin','ic_jadwal.png',NULL,NULL),
(58,'K01A','07007','M0112IS','09:30','10:00','Senin','ic_jadwal.png',NULL,NULL),
(57,'K01A','07001','M0111BI','07:30','09:30','Senin','ic_jadwal.png',NULL,NULL),
(56,'K01A','070017','M0118UP','07:00','07:30','Senin','ic_jadwal.png',NULL,NULL),
(60,'K01A','07009','M01110PJ','07:00','08:30','Selasa','ic_jadwal.png',NULL,NULL),
(61,'K01A','070010','M01111PC','08:30','09:30','Selasa','ic_jadwal.png',NULL,NULL),
(62,'K01A','07007','M0112IS','09:30','10:00','Selasa','ic_jadwal.png',NULL,NULL),
(63,'K01A','070011','M01112AG','10:00','11:30','Selasa','ic_jadwal.png',NULL,NULL),
(64,'K01A','070012','M01113KS','11:30','13:00','Selasa','ic_jadwal.png',NULL,NULL),
(65,'K01A','07005','M0116IPS','07:00','09:30','Rabu','ic_jadwal.png',NULL,NULL),
(66,'K01A','07007','M0112IS','09:30','10:00','Rabu','ic_jadwal.png',NULL,NULL),
(67,'K01A','070013','M01114BN','10:00','13:00','Rabu','ic_jadwal.png',NULL,NULL),
(68,'K01A','07006','M0117BIO','07:00','08:30','Kamis','ic_jadwal.png',NULL,NULL),
(69,'K01A','07007','M0112IS','09:30','10:30','Kamis','ic_jadwal.png',NULL,NULL),
(70,'K01A','070015','M01116KM','10:00','11:30','Kamis','ic_jadwal.png',NULL,NULL),
(71,'K01A','070016','M01117BK','11:30','13:00','Kamis','ic_jadwal.png',NULL,NULL),
(72,'K01A','07001','M0111BI','07:00','09:30','Senin','ic_jadwal.png',NULL,NULL),
(73,'K01A','07007','M0112IS','09:30','10:00','Jumat','ic_jadwal.png',NULL,NULL),
(74,'K01A','070013','M01114BN','10:00','11:30','Jumat','ic_jadwal.png',NULL,NULL),
(75,'K01A','07002','M0113MTK','07:00','09:30','Sabtu','ic_jadwal.png',NULL,NULL),
(76,'K01A','07007','M0112IS','09:30','10:00','Sabtu','ic_jadwal.png',NULL,NULL),
(77,'K01A','07004','M0115IPA','10:00','12:00','Sabtu','ic_jadwal.png',NULL,NULL),
(86,'K01A','070020','M0114PK','09:39','11:30','Selasa','ic_jadwal.png',NULL,NULL),
(85,'K01A','102011','M0114PK','05:29','14:29','Senin','ic_jadwal.png',NULL,NULL),
(87,'S2ak','10092','4009','09:00','07:00','Senin','',NULL,NULL),
(88,'S2ak','07005','M0113MTK','09:00','07:00','Senin','',NULL,NULL),
(89,'S2ak','07003','M01116KM','14:00','12:00','Selasa','',NULL,NULL),
(90,'S2ak','07002','M01113KS','11:00','10:00','Rabu','',NULL,NULL),
(91,'S2ak','070012','M01114BN','10:00','09:00','Kamis','',NULL,NULL),
(92,'S2ak','070014','M01112AG','10:00','07:00','Jumat','',NULL,NULL),
(93,'S2ak','07004','M0112IS','09:00','07:00','Saptu','',NULL,NULL),
(94,'S2ak','07005','M01116KM','11:00','08:00','Saptu','',NULL,NULL),
(95,'S2ak','10092','4009','10:00','07:00','Selasa','',NULL,NULL),
(96,'S2ak','10092','M01115WR','10:00','09:00','Rabu','',NULL,NULL),
(97,'S2ak','10092','M0119TI','12:00','11:00','Kamis','',NULL,NULL),
(98,'S2ak','10092','M01111PC','10:00','08:00','Jumat','',NULL,NULL),
(99,'S2ak','10092','M01115WR','12:00','10:00','Saptu','',NULL,NULL),
(100,'K03B','10092','M01115WR','10:00','08:00','Senin','',NULL,NULL);

/*Table structure for table `tbl_guru` */

DROP TABLE IF EXISTS `tbl_guru`;

CREATE TABLE `tbl_guru` (
  `id_guru` int(225) NOT NULL AUTO_INCREMENT,
  `nip` varchar(100) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_guru` */

insert  into `tbl_guru`(`id_guru`,`nip`,`nama_guru`,`alamat`,`no_telp`,`status`,`pendidikan`,`tempat_lahir`,`tanggal_lahir`,`created_at`,`updated_at`) values 
(35,'070015','MEGA','Blitar','085755467237',NULL,NULL,NULL,NULL,NULL,NULL),
(34,'070014','MUNIRA','Blitar','081676554420',NULL,NULL,NULL,NULL,NULL,NULL),
(33,'070013','AIDA','Kediri','085654555431',NULL,NULL,NULL,NULL,NULL,NULL),
(32,'070012','ARBAIN','Blitar','0856541199',NULL,NULL,NULL,NULL,NULL,NULL),
(31,'070011','MOH. HABI','Kediri','08656777711',NULL,NULL,NULL,NULL,NULL,NULL),
(30,'070010','ANANG','Blitar','0856761112',NULL,NULL,NULL,NULL,NULL,NULL),
(29,'07009','KIWIL ','Kediri','081676554420',NULL,NULL,NULL,NULL,NULL,NULL),
(39,'070020','Hadi Santoso','Kediri','081676554420',NULL,NULL,NULL,NULL,NULL,NULL),
(26,'07006','WARSITO','Kediri','08656777711',NULL,NULL,NULL,NULL,NULL,NULL),
(28,'07008','GATOT SUYOTO','Tulungagung','085755467237',NULL,NULL,NULL,NULL,NULL,NULL),
(25,'07005','WARTI AMANDA','Blitar','0856761112',NULL,NULL,NULL,NULL,NULL,NULL),
(24,'07004','HARTANTO','Blitar','0856541199',NULL,NULL,NULL,NULL,NULL,NULL),
(23,'07003','PRIYONO','Kediri','081676554420',NULL,NULL,NULL,NULL,NULL,NULL),
(21,'07001','ABDUL AHMADI','Kediri','085755467237',NULL,NULL,NULL,NULL,NULL,NULL),
(22,'07002','SRI WIJAYANTI','Kediri','085654555431',NULL,NULL,NULL,NULL,NULL,NULL),
(36,'070016','HENI SUSILO','Kediri','081676554420','Aktif','S1','Tegal','2019-08-16',NULL,'2019-08-24 16:08:35'),
(40,'10092','Rajif Mahendra','cipondoh','089668951090','Aktif','S1','Tangerang','2019-11-20',NULL,'2019-08-24 16:00:14'),
(41,'0983535','Rani','Tangerang','094642124','Aktif','S1','Tangerang','2019-08-08','2019-08-24 15:45:34','2019-08-24 15:56:37');

/*Table structure for table `tbl_kelas` */

DROP TABLE IF EXISTS `tbl_kelas`;

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(225) NOT NULL AUTO_INCREMENT,
  `kode_kelas` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `sub_kelas` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kelas` */

insert  into `tbl_kelas`(`id_kelas`,`kode_kelas`,`kelas`,`sub_kelas`,`created_at`,`updated_at`) values 
(1,'K01A','1','A',NULL,NULL),
(2,'K01B','1','B',NULL,NULL),
(3,'K02A','2','A',NULL,NULL),
(4,'K02B','2','B',NULL,NULL),
(5,'K03A','3','A',NULL,NULL),
(6,'K03B','3','B',NULL,NULL),
(7,'S2ak','Tambahan','A',NULL,NULL);

/*Table structure for table `tbl_mapel` */

DROP TABLE IF EXISTS `tbl_mapel`;

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(225) NOT NULL AUTO_INCREMENT,
  `kode_mapel` varchar(100) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_mapel` */

insert  into `tbl_mapel`(`id_mapel`,`kode_mapel`,`mapel`,`kelas`,`created_at`,`updated_at`) values 
(26,'M0115IPA','ILMU PENGETAHUAN ALAM','1',NULL,NULL),
(25,'M0114PK','PPKN','1',NULL,NULL),
(24,'M0113MTK','MATEMATIKA','1',NULL,NULL),
(23,'M0112IS','ISTIRAHAT','1',NULL,NULL),
(22,'M0111BI','BAHASA INDONESIA','1',NULL,NULL),
(27,'M0116IPS','ILMU PENGETAHUAN SOSIAL','1',NULL,NULL),
(28,'M0117BIO','BIOLOGI','1',NULL,NULL),
(29,'M0118UP','UPACARA','1',NULL,NULL),
(30,'M0119TI','TIK','1',NULL,NULL),
(31,'M01110PJ','PENJAS','2',NULL,NULL),
(32,'M01111PC','PANCASILA','2',NULL,NULL),
(33,'M01112AG','AGAMA','2',NULL,NULL),
(34,'M01113KS','KESENIAN','2',NULL,NULL),
(35,'M01114BN','BAHASA INGGRIS','3',NULL,NULL),
(36,'M01115WR','WIRAUSAHA','3',NULL,NULL),
(37,'M01116KM','KIMIA','3',NULL,NULL),
(38,'M01117BK','BIMBINGAN KONSELING','3',NULL,NULL),
(40,'4009','Web','3',NULL,NULL);

/*Table structure for table `tbl_orangtua` */

DROP TABLE IF EXISTS `tbl_orangtua`;

CREATE TABLE `tbl_orangtua` (
  `nio` int(225) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`nio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `tbl_orangtua` */

insert  into `tbl_orangtua`(`nio`,`nama_ortu`,`alamat`,`no_telp`,`nis`,`created_at`,`updated_at`) values 
(2003,'Org Tua Deni','Blitar','0865651155','01002',NULL,NULL),
(2002,'Org Tua Sinta','Kediri','0867552266','01003',NULL,NULL),
(2001,'Org Tua Tito','Kediri','086565119','01001',NULL,NULL),
(29093,'Rafik','cipondoh','089668951090','15050',NULL,NULL);

/*Table structure for table `tbl_pengumuman` */

DROP TABLE IF EXISTS `tbl_pengumuman`;

CREATE TABLE `tbl_pengumuman` (
  `id_p` int(225) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `tgl` varchar(100) NOT NULL,
  `img_p` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pengumuman` */

insert  into `tbl_pengumuman`(`id_p`,`judul`,`detail`,`tgl`,`img_p`,`created_at`,`updated_at`) values 
(80,'Rapat Orang tua','Membahas jadwal terapi.','03-06-2019','ic_pengumuman.png',NULL,NULL),
(81,'Hari Libur','Memperingati Hari Libur Nasional Pancasila.','03-06-2019','ic_pengumuman.png',NULL,NULL),
(93,'Rapat Guru','UAs','20-06-2019','',NULL,NULL),
(84,'Idul fitri','1448 hijriah','19-06-2019','',NULL,NULL),
(85,'Lebaran idul fitri','lebaran','19-06-2019','',NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `privilege` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`username`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`,`privilege`) values 
(2,'Silvia Pajriati','silviapaj','silviapajriati@gmail.com',NULL,'$2y$10$8YVWOp1NDE9FwZ1WcggTbeO0nmOXVfD8kfF/XUreYuXJAA2X2M5EW',NULL,'2019-08-12 08:28:57','2019-08-12 08:28:57',1),
(3,'admin','admin','admin@admin.com',NULL,'$2y$10$AVDcjBNFAL1E1UJdkl.yOu.JwQ1sJIAhwDQu1bsgVDYxtQVhXqFSy',NULL,'2019-08-15 05:50:43','2019-08-15 05:50:43',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
