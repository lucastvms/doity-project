# doity-project
doity trainee project using cakephp

# to let the project ready execute each step bellow

download the zip file of the project and unzip the into a project-folder

in the terminal go to the project-folder and run the command: composer install

digit Y and press ENTER

in the terminal go to project-folder\config and change app.php with your database configurations


# mysql database commands

create database doity;

create table eventos(
id int (11) not null AUTO_INCREMENT PRIMARY KEY,
nome varchar(255) not null,
preco decimal(12,2) not null,
descricao text not null);

insert into eventos(nome, preco, descricao) values ('Evento da Google', 1099.99, 'Evento para devs');
insert into eventos(nome, preco, descricao) values ('Evento da Doity', 19.99, 'Evento para trainees');


create table users(
id int (11) not null AUTO_INCREMENT PRIMARY KEY,
username varchar(255) not null,
password varchar(255) not null);

# start the server

in the terminal go to project-folder\bin and run the command: .\cake.bat server

# create an user to access the app

access in your browser: localhost:8765/users/adicionar

create your user

Note that only adding an user to the mysql database won't work, you need the password encrypted, which is being done by the CakePHP framework in the moment you create a new user
