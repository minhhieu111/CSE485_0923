create database BTTH01_CSE485;

use BTTH01_CSE485;

create table tagia(
	ma_tgia int unsigned not null primary key,
    ten_tgia varchar(50) not null,
    hinh_tgia varchar(50)
);

create table baiviet(
	ma_bviet int unsigned not null primary key,
    tieude varchar(60) not null,
    ten_bhat varchar(30) not null,
    ma_tloai int unsigned not null,
    tomtat text  not null,
    noidung text,
    ma_tgia int unsigned not null,
    ngayviet datetime not null DEFAULT CURRENT_TIMESTAMP,
    hinhanh varchar(50),
    FOREIGN KEY (ma_tgia) REFERENCES tagia(ma_tgia),
    FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai)
);

create table theloai(
	ma_tloai int unsigned not null primary key,
    ten_tloai varchar(30) not null
);
create table users(
	usersname varchar(30) not null primary key,
    pass varchar(15) not null
);

INSERT INTO tagia (ma_tgia, ten_tgia, hinh_tgia) VALUES
(123, 'Micheal jackson', 'hinh_tgia_1.jpg'),
(412, 'Justin Bieber', 'hinh_tgia_2.jpg'),
(534, 'MoNo', 'hinh_tgia_3.jpg'),
(634, 'MCK', 'hinh_tgia_3.jpg');


INSERT INTO theloai (ma_tloai, ten_tloai) VALUES
(1, 'Nhạc Hip Hop'),
(2, 'Nhạc nước ngoài'),
(3, 'Nhạc trẻ'),
(4, 'Nhạc rap');


INSERT INTO baiviet (ma_bviet, tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, hinhanh) VALUES
(1, 'Nhạc Micheal jackson', 'Earth Song', 1, 'Bài hát thể loại hiphop.', 'Nội dung bài hát Earth Song', 123, 'hinh_baiviet_1.jpg'),
(2, 'Nhạc Justin Bieber', 'Intentions', 2, 'Bài hát thể loại nước ngoài.', 'Nội dung bài hát Intentions', 412, 'hinh_baiviet_2.jpg'),
(3, 'Nhạc MCK', 'SODA', 4, 'Bài hát thể loại rap.', 'Nội dung bài hát SODA', 534, 'hinh_baiviet_3.jpg'),
(4, 'Nhạc MCK', '2h', 4, 'Bài hát thể loại rap.', 'Nội dung bài hát 2h', 534, 'hinh_baiviet_4.jpg');
