/*create database*/
create database destcommerce;

/*Create products table */
use destcommerce;
create table products (
id int(11) auto_increment primary key not null,
pname varchar(255) not null,
pprice varchar(255) not null,
pimg varchar(255) not null,
qty varchar(255) not null
);

/*Select all products */
use destcommerce;
select * from products;

/*Insert all products */
use destcommerce;
insert into products (pname, pprice, pimg, qty) values ("ankara1", "4500", "images/ankara1.jpg", "6"), 
("icemaker", "8000", "images/icemaker.jpeg", "1"),
("ankara2", "12000", "images/ankara2.jpg", "6"), 
("fan", "10300", "images/fan.jpeg", "1"),
("ankara3", "24000", "images/ankara3.jpg", "9"),
("blackswatch", "12800", "images/blackswatch.jpg", "6"), 
("oxblood", "16300", "images/oxblood.jpg", "8"),
("gel", "500", "images/gel.jpeg", "1"),
("detergents", "1000", "images/detergents.jpeg", "1"),
("pot", "4500", "images/pot.jpeg", "3"),
("Home Pussy", "4500", "images/pussy.jpeg", "1"),
("oldenglishtan", "14000", "images/oldenglishtan.jpg", "6");

