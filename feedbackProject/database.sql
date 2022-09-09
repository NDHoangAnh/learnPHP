CREATE TABLE feedback(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name varchar(100) not null,
    email varchar(100) not null,
    body text default '',
    date datetime
);

insert into feedback(name, email, body, date)
values ('John', 'john@gmail.com','i miss u', current_timestamp()),
       ('tony', 'tony@gmail.com','i missed u', current_timestamp()),
       ('anh', 'anh@gmail.com','i miss u', current_timestamp());

select *from feedback;