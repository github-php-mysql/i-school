create table Pembeli(
kode_Pembeli varchar2(18) PRIMARY KEY,	
nama_Pembeli varchar2(20),
alamat char(16),
no_tlp varchar2 (15)
);

insert into pembeli values
('CUS001','Amirul Hidayat', 'Jakarta',080988999988);
insert into pembeli values
('CUS002','Besty Septiani', 'Tangerang',080988999981);
insert into pembeli values
('CUS003','Cakra Vania', 'Makassar',080988999982);
insert into pembeli values
('CUS004','Dwi Krisna', 'Bandung',080988999983);
insert into pembeli values
('CUS005','Edwin Josua', 'Solo',080988999984);

create table pegawai (
kode_Pegawai varchar2(18) PRIMARY KEY,	
nama_Pegawai varchar2(20),
alamat char(16),
no_tlp varchar2 (20)
);

insert into pegawai values
('PGW001','Hafizh', 'Buah Batu',081234567890);
insert into pegawai values
('PGW002','Intan', 'Dayeuh kolot',0812348890);
insert into pegawai values
('PGW003','Joko', 'Cikoneng',081234427890);
insert into pegawai values
('PGW004','Kusmoro', 'Buah Batu',0812347557890);
insert into pegawai values
('PGW005','Lusiana', 'Ciganitri',081234475790);


create table barang (
kode_barang varchar2(18) PRIMARY KEY,	
nama_barang varchar2(20),
stok NUMBER,
harga varchar2 (20)
);

insert into barang values
('BRG001','Flahsdisk','199','Rp. 100.000');
insert into barang values
('BRG002','USB OTG','50','Rp. 50.000');
insert into barang values
('BRG003','CD-RW','500','Rp. 6.000');
insert into barang values
('BRG004','Card Reader','30','Rp. 25.000');
insert into barang values
('BRG005','Mouse Pad','100','Rp. 8.000');


create table transaksi (
kode_transaksi varchar2(18) PRIMARY KEY,
tgl_transaksi date,
jumlah varchar2(20),
kode_Pembeli varchar2(18),
kode_barang varchar2(18),
kode_Pegawai varchar2(18),
total_harga varchar2(35),
CONSTRAINT fk_kode_pembeli FOREIGN KEY(kode_pembeli)references pembeli on delete cascade,
CONSTRAINT fk_kode_barang FOREIGN KEY(kode_barang)references barang on delete cascade, 
CONSTRAINT fk1_kode_pegawai FOREIGN KEY(kode_pegawai)references pegawai on delete cascade  
);

insert into transaksi values
('TRX001','20-NOV-16','10','CUS001','BRG001','PGW001','Rp.1000.000');
insert into transaksi values
('TRX002','11-DEC-16','25','CUS002','BRG004','PGW001','Rp.625.000');
insert into transaksi values
('TRX003','04-JAN-17','5','CUS005','BRG003','PGW004','Rp.30.000');
insert into transaksi values
('TRX004','29-JAN-17','50','CUS003','BRG001',	'PGW003','Rp. 5.000.000');


SELECT nama_Pembeli,alamat
FROM pembeli;

SELECT nama_pegawai,alamat
FROM pegawai
WHERE alamat= 'Buah Batu';


SELECT nama_barang, harga,stok
FROM barang
ORDER BY stok ASC ;


