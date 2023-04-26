Create table feedback(
    id integer primary key auto_increment,
    name varchar(100) not null,
    email varchar(100) not null,
    body text default '',
    date datetime
);
INSERT INTO feedback(name, email, body, date) VALUES
('John', 'john@gmail.com', 'I like it', current_timestamp()),
('Long nguyen', 'lavalshy2002@gmai.com', 'Best Yasuo 20gg', current_timestamp()),
('Tony', 'tony@gmail.com','Hmmm taste like...', current_timestamp());