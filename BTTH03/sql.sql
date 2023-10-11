create database QuanLySinhVien;
use QuanLySinhVien;

create table Lop(
	id int unsigned auto_increment primary key not null,
	tenLop varchar(255) not null
);

create table SinhVien(
	id int unsigned auto_increment primary key not null,
    tenSinhVien varchar(255) not null,
    email varchar(255) not null,
    ngaySinh date,
    idLop int unsigned not null,
    FOREIGN KEY (idLop) REFERENCES Lop(id)
);
drop table Sinhvien;
insert into Lop (id, tenLop) values (1, 'Allergy Relief');
insert into Lop (id, tenLop) values (2, 'Oyster');
insert into Lop (id, tenLop) values (3, 'CELESTONE SOLUSPAN');
insert into Lop (id, tenLop) values (4, 'All Day Relief');
insert into Lop (id, tenLop) values (5, 'Lamotrigine');
insert into Lop (id, tenLop) values (6, 'Acne Lab Foam Cleanser');
insert into Lop (id, tenLop) values (7, 'Visible Difference Gentle Hydrating Broad Spectrum Sunscreen SPF 15');
insert into Lop (id, tenLop) values (8, 'Temozolomide');
insert into Lop (id, tenLop) values (9, 'Lemon');
insert into Lop (id, tenLop) values (10, 'DIORSKIN NUDE BB CREME NUDE GLOW SKIN-PERFECTING BEAUTY BALM SUNSCREEN BROAD SPECTRUM SPF10 Tint 1');
insert into Lop (id, tenLop) values (11, 'MEDROX');
insert into Lop (id, tenLop) values (12, 'Clotrimazole');
insert into Lop (id, tenLop) values (13, 'Pollens - Trees, Cedar, Mountain Juniperus ashei');
insert into Lop (id, tenLop) values (14, 'flormar BB Sheer Tinted Beauty Sunscreen Broad Spectrum SPF 15 05 Neutral Beige');
insert into Lop (id, tenLop) values (15, 'AIR COMPRESSED');
insert into Lop (id, tenLop) values (16, 'Risperidone');
insert into Lop (id, tenLop) values (17, 'MISSHA M SWIRL BB SUN BALM');
insert into Lop (id, tenLop) values (18, 'Sunmark Allergy Relief');
insert into Lop (id, tenLop) values (19, 'Hydrogen Peroxide');
insert into Lop (id, tenLop) values (20, 'Nifediac CC');
insert into Lop (id, tenLop) values (21, 'Allergy Relief');
insert into Lop (id, tenLop) values (22, 'Cefotetan and Dextrose');
insert into Lop (id, tenLop) values (23, 'UNDECYLENIC ACID');
insert into Lop (id, tenLop) values (24, 'Sunmark');
insert into Lop (id, tenLop) values (25, 'GUNA-IL 11');
insert into Lop (id, tenLop) values (26, 'smart sense ibuprofen');
insert into Lop (id, tenLop) values (27, 'Proctofoam');
insert into Lop (id, tenLop) values (28, 'Ciprofloxacin');
insert into Lop (id, tenLop) values (29, 'Sugar Beet Pollen');
insert into Lop (id, tenLop) values (30, 'Quality Choice');

insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (1, 'Joela', 'jmunnery0@printfriendly.com', '2022-11-21', 1);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (2, 'Stephani', 'sluetchford1@merriam-webster.com', '2022-12-15', 2);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (3, 'Hillary', 'hvasyunichev2@cafepress.com', '2022-10-31', 3);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (4, 'Jervis', 'jolyfat3@lycos.com', '2023-08-14', 4);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (5, 'Corie', 'ccraigs4@washington.edu', '2023-02-07', 5);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (6, 'Zsazsa', 'zkoenraad5@jugem.jp', '2023-05-22', 6);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (7, 'Brandy', 'bpisculli6@microsoft.com', '2023-06-07', 7);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (8, 'Vanya', 'vpeckett7@admin.ch', '2023-03-29', 8);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (9, 'Cleve', 'cvassar8@webeden.co.uk', '2023-03-03', 9);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (10, 'Boote', 'bhulmes9@ted.com', '2023-06-28', 10);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (11, 'Elsworth', 'elettericka@globo.com', '2023-06-14', 11);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (12, 'Daniele', 'dbealesb@berkeley.edu', '2022-12-19', 12);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (13, 'Weider', 'wyakovc@1und1.de', '2022-11-25', 13);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (14, 'Tina', 'tkinraded@umn.edu', '2023-02-28', 14);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (15, 'Persis', 'phuncotee@unesco.org', '2023-09-06', 15);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (16, 'Domingo', 'drosebothamf@barnesandnoble.com', '2023-07-25', 16);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (17, 'Carleen', 'cfearnillg@1688.com', '2023-02-03', 17);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (18, 'Jeri', 'jjordineh@histats.com', '2023-09-17', 18);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (19, 'Grissel', 'garmesi@theatlantic.com', '2023-02-15', 19);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (20, 'Westleigh', 'whoovartj@joomla.org', '2023-02-05', 20);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (21, 'Riley', 'rgriersonk@dot.gov', '2023-08-31', 21);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (22, 'Keith', 'kmirrleesl@quantcast.com', '2023-08-15', 22);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (23, 'Yoko', 'ychillistonem@thetimes.co.uk', '2022-11-30', 23);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (24, 'Zaria', 'zburlen@wordpress.org', '2023-01-05', 24);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (25, 'Marcelo', 'msaggso@goodreads.com', '2023-05-20', 25);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (26, 'Ansell', 'ahuckp@artisteer.com', '2022-10-20', 26);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (27, 'Meade', 'mklasq@bing.com', '2023-03-22', 27);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (28, 'Codee', 'cbaressr@state.tx.us', '2023-04-12', 28);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (29, 'Clywd', 'crourkes@mapquest.com', '2023-02-10', 29);
insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values (30, 'Taddeusz', 'tmatthesiust@creativecommons.org', '2023-04-22', 30);