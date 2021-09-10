-- Author : Ade

create database if not exists `pwpb` character set utf8mb4 collate utf8mb4_general_ci;
use	`pwpb`;

create table `users` (
	`id` int(8) not null primary key auto_increment,
	`user` char(10) character set utf8 collate utf8_general_ci not null,
	`name` char(17) character set utf8 collate utf8_general_ci not null default `user`,
	`password` char(255) not null,
	`level` enum('admin','siswa') default 'siswa'
);

insert into `users` (
	`user`,
	`password`,
	`level`
) values (
	'adeilham',
	'adeilham',
	'admin'
);

insert into `users` (
	`user`,
	`name`,
	`password`
) values (
	'12350',
	'Ade Ilham Febryan',
	'adeilham'
);

create table `fasilitas` (
	`id` int(8) not null primary key auto_increment,
	`name` varchar(255) character set	utf8 collate utf8_general_ci not null,
	`desk` text character set utf8 collate utf8_general_ci not null,
	`total` int(3) not null
);

insert into `fasilitas` (
	`name`,`desk`,`total`
) values (
	'Lab Komputer',
	'Lab paling berguna untuk ngadem dan main pebe',
	999
), (
	'Mushola',
	'Udah mah kecil kotor lagih kiamat mah kena duluan',
	-1
);

create table `jurusan`(
	`id` int(8) not null primary key auto_increment,
	`singkat` char(5) character set utf8 collate utf8_general_ci not null,
	`panjang` char(255) character set utf8 collate utf8_general_ci not null,
	`desk` text	character set utf8 collate utf8_general_ci not null
);

insert into	`jurusan`(
	`singkat`, `panjang`, `desk`
)
values
(
	'RPL','Remaja Peternak Lele','apaan anjir anak rpl gajelas gada deskripsi'	
),(
	'AK', 'Akuntansi','ini juga gaweannya cuma ngitung duit gaib doang'
),(
	'AP', 'Administrasi Perkantoran', 'nah kalo ini sarangnya cewe bor'
),(
	'PHT', 'Perhotelan', 'nah ini sarang jamew sekaligus babu hotel'
),(
	'MM', 'Marksman', 'kang tembak'
),(
	'PM', 'Pemasaran', 'kang jualan tuak'
),(
	'TKJ', 'Teknik Kuli Jawa', 'ini si sok keras'
),(
	'TaBog', 'Pen kena tabog?', 'ini kang tabog tapi pake piso bor'
);

create table `kelas` (
	`id` int(8) not null primary key auto_increment,
	`kelas` char(3) character set utf8 collate utf8_general_ci not null,
	`jurusan_id` int(3) not null,
	`total_kelas` int(3) not null,
	`total_siswa` int(3) not null,
	constraint `jurusan_id` foreign key (`jurusan_id`) references `jurusan`(`id`)
);

insert into `kelas` (
	`kelas`,`jurusan_id`,`total_kelas`,`total_siswa`
) 
values 
('X',1,1,1),
('X',2,1,1),
('X',3,1,1),
('X',4,1,1),
('X',5,1,1),
('X',6,1,1),
('X',7,1,1),
('X',8,1,1),
('XI',1,1,1),
('XI',2,1,1),
('XI',3,1,1),
('XI',4,1,1),
('XI',5,1,1),
('XI',6,1,1),
('XI',7,1,1),
('XI',8,1,1),
('XII',1,1,1),
('XII',2,1,1),
('XII',3,1,1),
('XII',4,1,1),
('XII',5,1,1),
('XII',6,1,1),
('XII',7,1,1),
('XII',8,1,1);