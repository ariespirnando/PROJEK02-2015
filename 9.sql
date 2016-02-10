/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.24 : Database - rpl_sipyuda
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rpl_sipyuda` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rpl_sipyuda`;

/*Table structure for table `administrasi` */

DROP TABLE IF EXISTS `administrasi`;

CREATE TABLE `administrasi` (
  `id_administrasi` varchar(30) NOT NULL,
  `id_rekening` int(11) DEFAULT NULL,
  `jumlahBayar` int(11) DEFAULT NULL,
  `tanggalBayar` date DEFAULT NULL,
  `Npm` varchar(9) DEFAULT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `Semester` int(11) DEFAULT NULL,
  `id_pend` int(11) DEFAULT NULL,
  `TahunAkademik` year(4) DEFAULT NULL,
  PRIMARY KEY (`id_administrasi`),
  KEY `id_rekening` (`id_rekening`),
  KEY `id_pend` (`id_pend`),
  CONSTRAINT `administrasi_ibfk_1` FOREIGN KEY (`id_rekening`) REFERENCES `rekening` (`id_rekening`),
  CONSTRAINT `administrasi_ibfk_2` FOREIGN KEY (`id_pend`) REFERENCES `periode` (`id_pend`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `administrasi` */

insert  into `administrasi`(`id_administrasi`,`id_rekening`,`jumlahBayar`,`tanggalBayar`,`Npm`,`Nama`,`Semester`,`id_pend`,`TahunAkademik`) values ('ADM/2016/00001',1,1000000,'2015-10-06','13312364','Achmad Aries Pirnando',5,3,2015),('ADM/2016/00002',2,1000000,'2015-11-30','13312115','Aini Rahmayati',5,3,2015),('ADM/2016/00003',1,1000,'2016-01-04','13312207','achmad sultoni',5,3,2015),('ADM/2016/00004',2,1000,'2016-01-08','13312235','putri sukma dewi',5,2,2015),('ADM/2016/00005',1,1000,'2016-01-12','13312233','wahyu agustin',5,3,2015),('ADM/2016/00006',2,1000,'2016-01-12','13312365','nida ulhusna',5,1,2015),('ADM/2016/00007',2,0,'2016-01-20','ccd','rfr',5,4,2015);

/*Table structure for table `cawisuda` */

DROP TABLE IF EXISTS `cawisuda`;

CREATE TABLE `cawisuda` (
  `NPM` varchar(9) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `idJK` int(11) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `tempatLahir` varchar(30) DEFAULT NULL,
  `idJurusan` int(11) DEFAULT NULL,
  `JudulTa` text,
  `tanggalLulus` date DEFAULT NULL,
  `alamatsekarang` text,
  `alamatasal` text,
  `HP` varchar(20) DEFAULT NULL,
  `id_administrasi` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`NPM`),
  KEY `id_administrasi` (`id_administrasi`),
  KEY `idJK` (`idJK`),
  KEY `idJurusan` (`idJurusan`),
  CONSTRAINT `cawisuda_ibfk_1` FOREIGN KEY (`id_administrasi`) REFERENCES `administrasi` (`id_administrasi`),
  CONSTRAINT `cawisuda_ibfk_2` FOREIGN KEY (`idJK`) REFERENCES `jkkelamin` (`idJK`),
  CONSTRAINT `cawisuda_ibfk_3` FOREIGN KEY (`idJurusan`) REFERENCES `jurusan` (`idJurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cawisuda` */

insert  into `cawisuda`(`NPM`,`nama`,`idJK`,`tanggalLahir`,`tempatLahir`,`idJurusan`,`JudulTa`,`tanggalLulus`,`alamatsekarang`,`alamatasal`,`HP`,`id_administrasi`) values ('13312207','Achmad sultoni',1,'2016-01-08','tanjung karang',1,'aplikasi rancangan aplikasi e-foting pada pemilihan gubernur lampung tahun 2015','2015-08-28','Jalan Achmad Yani Gang Cemara No.06 Kedaton Bandar Lampung','Bandar Lampung','085768888441','ADM/2016/00003'),('13312215','aini',2,'2016-01-07','mjmjhed',1,'efve','2016-01-12','rvr','efef','343','ADM/2016/00002'),('13312235','putri sukma dewi',2,'2013-12-05','bandar jaya',2,'aplikasi untuk membuat rancangan rumus matematika murni ','2016-01-20','Bandar Lampung','Bandar Jaya','','ADM/2016/00004'),('13312364','Achmad Aries Pirnando',1,'1996-01-08','Kotabumi',1,'Implementasi algoritma DFS pada pencarian lokasi di game dota ','2016-01-30','Jalan pelita 2 no 33A, Labuhan Ratu, Bandarlampung','Jalan Dewi Shinta no 4, Rejosari, Kotabumi','087898677708','ADM/2016/00001');

/*Table structure for table `fakultas` */

DROP TABLE IF EXISTS `fakultas`;

CREATE TABLE `fakultas` (
  `idFakultas` int(11) NOT NULL AUTO_INCREMENT,
  `namaFakultas` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idFakultas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `fakultas` */

insert  into `fakultas`(`idFakultas`,`namaFakultas`) values (1,'STMIK TEKNOKRAT');

/*Table structure for table `foto` */

DROP TABLE IF EXISTS `foto`;

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `NPM` varchar(9) DEFAULT NULL,
  `foto_wisuda` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `NPM` (`NPM`),
  CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`NPM`) REFERENCES `cawisuda` (`NPM`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `foto` */

insert  into `foto`(`id_foto`,`NPM`,`foto_wisuda`) values (3,'13312364','file_1451749487.JPG'),(7,'13312207','file_1451807513.jpg'),(8,'13312235','file_1451808473.jpg'),(9,'13312215','file_1452147794.JPG');

/*Table structure for table `jkkelamin` */

DROP TABLE IF EXISTS `jkkelamin`;

CREATE TABLE `jkkelamin` (
  `idJK` int(11) NOT NULL AUTO_INCREMENT,
  `namaJK` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idJK`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jkkelamin` */

insert  into `jkkelamin`(`idJK`,`namaJK`) values (1,'Laki - laki'),(2,'Perempuan');

/*Table structure for table `jurusan` */

DROP TABLE IF EXISTS `jurusan`;

CREATE TABLE `jurusan` (
  `idJurusan` int(11) NOT NULL AUTO_INCREMENT,
  `namaJurusan` varchar(30) DEFAULT NULL,
  `idFakultas` int(11) DEFAULT NULL,
  PRIMARY KEY (`idJurusan`),
  KEY `idFakultas` (`idFakultas`),
  CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`idFakultas`) REFERENCES `fakultas` (`idFakultas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jurusan` */

insert  into `jurusan`(`idJurusan`,`namaJurusan`,`idFakultas`) values (1,'Teknik Informatika',1),(2,'Sistem Informasi',1);

/*Table structure for table `keterangan` */

DROP TABLE IF EXISTS `keterangan`;

CREATE TABLE `keterangan` (
  `id_ket` int(11) NOT NULL AUTO_INCREMENT,
  `Keterangan` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_ket`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `keterangan` */

insert  into `keterangan`(`id_ket`,`Keterangan`) values (1,'Belum Dipinjam'),(2,'Sedang Dipinjam'),(3,'Sudah Dikembalikan');

/*Table structure for table `nomorkursi` */

DROP TABLE IF EXISTS `nomorkursi`;

CREATE TABLE `nomorkursi` (
  `id_kursi` int(11) NOT NULL AUTO_INCREMENT,
  `NPM` varchar(9) DEFAULT NULL,
  `No_Kursi` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_kursi`),
  KEY `NPM` (`NPM`),
  CONSTRAINT `nomorkursi_ibfk_1` FOREIGN KEY (`NPM`) REFERENCES `cawisuda` (`NPM`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `nomorkursi` */

insert  into `nomorkursi`(`id_kursi`,`NPM`,`No_Kursi`) values (7,'13312207','YD/WS/00001'),(8,'13312235','YD/WS/00002'),(9,'13312364','YD/WS/00003'),(10,'13312215','YD/WS/00004');

/*Table structure for table `peminjaman` */

DROP TABLE IF EXISTS `peminjaman`;

CREATE TABLE `peminjaman` (
  `id_Toga` int(11) NOT NULL AUTO_INCREMENT,
  `NPM` varchar(9) DEFAULT NULL,
  `Ukuran_toga` varchar(4) DEFAULT NULL,
  `tgl_peminjaman` date DEFAULT NULL,
  `tgl_pemulangan` date DEFAULT NULL,
  `id_ket` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Toga`),
  KEY `NPM` (`NPM`),
  KEY `id_ket` (`id_ket`),
  CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`NPM`) REFERENCES `cawisuda` (`NPM`),
  CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_ket`) REFERENCES `keterangan` (`id_ket`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `peminjaman` */

insert  into `peminjaman`(`id_Toga`,`NPM`,`Ukuran_toga`,`tgl_peminjaman`,`tgl_pemulangan`,`id_ket`) values (3,'13312364','XL','2016-01-02','2016-01-29',2),(7,'13312207','XL','2016-01-06','2016-01-14',1),(8,'13312235','XL','2016-01-16','2016-01-18',1),(9,'13312215','XL','2016-01-05','2016-01-21',2);

/*Table structure for table `periode` */

DROP TABLE IF EXISTS `periode`;

CREATE TABLE `periode` (
  `id_pend` int(11) NOT NULL AUTO_INCREMENT,
  `Periode` varchar(30) DEFAULT NULL,
  `mulai_pendaftaran` date DEFAULT NULL,
  `Akhir_pendaftaran` date DEFAULT NULL,
  `tgl_pelaksanaan` date DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pend`),
  KEY `id_status` (`id_status`),
  CONSTRAINT `periode_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `statuss` (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `periode` */

insert  into `periode`(`id_pend`,`Periode`,`mulai_pendaftaran`,`Akhir_pendaftaran`,`tgl_pelaksanaan`,`id_status`) values (1,'Yudisium 1','2015-07-01','2015-08-31','2015-09-01',1),(2,'Yudisium 2','2015-09-02','2015-09-30','2015-10-01',2),(3,'Yudisium 3','2015-10-02','2015-10-31','2015-11-01',1),(4,'Wisuda','2015-11-02','2015-12-15','2015-12-19',1);

/*Table structure for table `rekening` */

DROP TABLE IF EXISTS `rekening`;

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL AUTO_INCREMENT,
  `idJurusan` int(11) DEFAULT NULL,
  `No_rekening` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_rekening`),
  KEY `idJurusan` (`idJurusan`),
  CONSTRAINT `rekening_ibfk_1` FOREIGN KEY (`idJurusan`) REFERENCES `jurusan` (`idJurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `rekening` */

insert  into `rekening`(`id_rekening`,`idJurusan`,`No_rekening`) values (1,1,'112233400001'),(2,2,'112233400002');

/*Table structure for table `statuss` */

DROP TABLE IF EXISTS `statuss`;

CREATE TABLE `statuss` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `statuss` */

insert  into `statuss`(`id_status`,`status`) values (1,'Aktif'),(2,'Non Aktif');

/*Table structure for table `typeuser` */

DROP TABLE IF EXISTS `typeuser`;

CREATE TABLE `typeuser` (
  `Idtype` int(11) NOT NULL AUTO_INCREMENT,
  `typeUser` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Idtype`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `typeuser` */

insert  into `typeuser`(`Idtype`,`typeUser`) values (1,'Keuangan'),(2,'Baaku'),(3,'Administrator'),(4,'Mahasiswa');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `IdUser` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `UseAsal` varchar(30) DEFAULT NULL,
  `PasAsal` varchar(30) DEFAULT NULL,
  `Idtype` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdUser`),
  KEY `Idtype` (`Idtype`),
  KEY `id_status` (`id_status`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Idtype`) REFERENCES `typeuser` (`Idtype`),
  CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `statuss` (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`IdUser`,`Username`,`Password`,`UseAsal`,`PasAsal`,`Idtype`,`id_status`) values (1,'Keuangan','Keuangan','Keuangan','keuangan',1,1),(2,'Baaku','Baaku','Aries','Aries',2,1),(12,'13312364','ADM/2016/00001',NULL,NULL,4,1),(13,'13312115','ADM/2016/00002',NULL,NULL,4,1),(14,'13312207','ADM/2016/00003',NULL,NULL,4,1),(15,'13312235','ADM/2016/00004',NULL,NULL,4,1),(16,'13312233','ADM/2016/00005',NULL,NULL,4,1),(17,'13312365','ADM/2016/00006',NULL,NULL,4,1),(18,'ccd','ADM/2016/00007',NULL,NULL,4,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
