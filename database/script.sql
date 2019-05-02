create database proiect_pw;
use proiect_pw;

create table users(
	id int auto_increment primary key,
    username varchar(50) not null,
    email varchar(100) not null,
    hashed_password varchar(255) not null,
    creation_date datetime default current_timestamp
);

# drop table forum;
create table forum(
	id int auto_increment primary key,
    username varchar(50) not null,
    content text not null,
    category enum('alaptare', 'timp_liber', 'sanatate') not null,
    creation_date datetime default current_timestamp
);

create table images(
	id int auto_increment primary key,
    image_url varchar(255) not null,
    image_name varchar(250) not null,
    username varchar(50) not null,
	creation_date datetime default current_timestamp
);

create table product(
	id int auto_increment primary key,
    product_name varchar(255) not null,
    image_url varchar(255) not null,
    price float(8,2) not null,
    vendor varchar(50) not null,
    link varchar(255) not null,
    category enum('muzicale', 'plusuri', 'baie') not null
);

insert into product
values(null, 'Girafa cu lumini', 
	'https://noriel.ro/media/catalog/product/cache/ed9f5ebe2a117625f6cd6336daddd764/b/f/bfh65_fisher_price_-_girafa_cu_lumini_3_.jpg',
	119.99, 'Noriel', 
	'https://noriel.ro/jucarie-bebelusi-fisher-price-girafa-cu-lumini',
	'muzicale'),
	(null, 'Carusel muzical',
	'https://noriel.ro/media/catalog/product/cache/ed9f5ebe2a117625f6cd6336daddd764/c/a/carusel-muzical-fisher-price-noaptea-instelata.jpg',
    349.99, 'Noriel',
    'https://noriel.ro/carusel-muzical-fisher-price-noaptea-instelata',
    'muzicale'
	),
	(null, 'Floricica vesela',
	'https://noriel.ro/media/catalog/product/cache/ed9f5ebe2a117625f6cd6336daddd764/p/a/papusa_vesela_1.jpg',
    59.99, 'Noriel',
    'https://noriel.ro/jucarie-bebelusi-noriel-bebe-floricica-vesela',
    'muzicale'),
    (null, 'Ursulet Maron cu fular',
	'https://noriel.ro/media/catalog/product/cache/ed9f5ebe2a117625f6cd6336daddd764/j/u/jucarie-de-plus-ursulet-maron-cu-fular-43-cm.jpg',
    61.99, 'Noriel',
    'https://noriel.ro/jucarie-de-plus-ursulet-maron-cu-fular-43-cm',
    'plusuri'),
    (null, 'Pantera roz',
	'https://s12emagst.akamaized.net/products/9753/9752591/images/res_19568ec73fc19b571df20a8a42350f01_450x450_kd5s.jpg',
    79.99, 'eMAG',
    'https://www.emag.ro/jucarie-din-plus-pantera-roz-50-cm-tm-5738/pd/DZHHS0BBM/',
    'plusuri'),
    (null, 'Panda dansator',
	'https://cdn.dc5.ro/img-prod/155896670-0.jpeg',
    82.00, 'Carturesti',
    'https://carturesti.ro/jucarii/jucarie-de-plus-dancing-darcey-panda-small-155896670?p=28',
    'plusuri'),
    (null, 'Ratusca vesela',
	'https://noriel.ro/media/catalog/product/cache/ed9f5ebe2a117625f6cd6336daddd764/j/u/jucarie-bebelusi-noriel-bebe-ratusca-vesela.jpg',
    44.99, 'Noriel',
    'https://noriel.ro/jucarie-bebelusi-noriel-bebe-ratusca-vesela',
    'baie'),
    (null, 'Masina de facut baloane de spuma',
	'https://s12emagst.akamaized.net/products/19313/19312638/images/res_193b86b5e0e90d99103e7222107e0402_450x450_peov.jpg',
    178.99, 'eMAG',
    'https://www.emag.ro/masina-de-facut-baloane-de-spuma-crab-aky540444/pd/D0PK8CBBM/',
    'baie'),
    (null, 'Caracatita Hank',
	'https://s12emagst.akamaized.net/products/14942/14941577/images/res_2a4df011c05ea64e19a08754a863d032_450x450_q273.jpg',
    69.99, 'eMAG',
    'https://www.emag.ro/jucarie-de-baie-finding-dory-disney-caracatica-hank-care-stropeste-si-isi-schimba-culoarea-3296580366002/pd/DHGJ7JBBM/',
    'baie');
    
select * from product;