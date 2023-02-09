create database sharing_links;
use sharing_links;

drop table Links;
create table Links(
	
    link varchar(1000),
    fecha varchar(20)
);

delete from Links L where L.link = '%org%';
delete from Links where link like '%google%';
delete from Links where link = '%google%';
delete from Links L where L.link like '%org%';
select *  from Links L where L.link like '%org%';
select * from Links;