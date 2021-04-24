CREATE TABLE teacher(
    t_id int(11) not null primary key auto_increment,
	name varchar(10) not null,
    password varchar(30) not null,
    birth datetime not null,
    secure_id text not null,
    address text not null,
    phone_number varchar(15) not null,
    regist_time year not null,
    email varchar(30) not null
);
----

insert into teacher(name, password, birth, secure_id, address, phone_number, regist_time,email) value('陳鮭魚','123456','2003/09/14','L123123','全家', '0912345678', '2013','benbeb14@gmail.com'
);
----

update teacher
set address='全聯'
where t_id='1'
----

delete from teacher where t_id='1'