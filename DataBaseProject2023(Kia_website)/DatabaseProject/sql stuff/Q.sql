DROP DATABASE kia_website;
create database kia_website;
use kia_website;

#-------------------website table ----------------
CREATE TABLE website (
    url VARCHAR(50) PRIMARY KEY,
    website_name VARCHAR(50) NOT NULL
);
insert into website (url ,website_name) values ('www.kia.com' , 'kia');


#---------------employees table--------------------
CREATE TABLE employees (
    emp_id varchar(50) PRIMARY KEY,
    emp_name VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL,
    salary varchar(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    url VARCHAR(50) NOT NULL,
    FOREIGN KEY(url) REFERENCES website(url)
   
);
insert into employees ( emp_id, emp_name, pass ,salary ,phone ,email ,url) 
values ('1190436' , 'Eddy' , '1234', '2000$' , '0569109469' , 'edyzayed123@gmail.com', 'www.kia.com');
insert into employees ( emp_id, emp_name, pass ,salary ,phone ,email ,url) 
values ('1201576' , 'yaqeen' , '1235', '2000$' , '0569109422' , 'yaqeen@gmail.com', 'www.kia.com');
insert into employees ( emp_id, emp_name, pass ,salary ,phone ,email ,url) 
values ('1200558' , 'sara' , '1236', '2000$' , '056931231' , 'sara@gmail.com' ,'www.kia.com');

#----------advisor table---------------
CREATE TABLE advisor_employee (
advisor_id varchar(50) PRIMARY KEY,
FOREIGN KEY(advisor_id) REFERENCES employees(emp_id)
);
insert into advisor_employee (advisor_id) values ('1200558');


#----------accountant table---------------
CREATE TABLE accountant_employee (
accountant_id varchar(50) PRIMARY KEY,
FOREIGN KEY(accountant_id) REFERENCES employees(emp_id)
);
insert into accountant_employee (accountant_id) values ('1201576');


#-------------manager table---------------
CREATE TABLE manager_employee (
manager_id varchar(50) PRIMARY KEY,
url VARCHAR(50) NOT NULL,
FOREIGN KEY(manager_id) REFERENCES employees(emp_id),
FOREIGN KEY(url) REFERENCES website(url)
);
insert into manager_employee (manager_id , url) values ('1190436' , 'www.kia.com');

#------------users tables-------------------
CREATE TABLE users (
    user_id VARCHAR(50) PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    url VARCHAR(50) NOT NULL,
    advisor_id VARCHAR(50),
    FOREIGN KEY (url) REFERENCES website(url),
    FOREIGN KEY (advisor_id) REFERENCES advisor_employee(advisor_id)
);
INSERT INTO users(user_id , user_name , pass ,email ,phone ,url ,advisor_id)
 VALUES('U4566', 'bassel','m41%R', 'bassel@gmail.com', '0694222214','www.kia.com','1200558');
INSERT INTO users(user_id , user_name , pass ,email ,phone ,url ,advisor_id)
 VALUES('U4599', 'mohammad','dqw3q', 'mohammad@gmail.com', '06941233541','www.kia.com','1200558');
 INSERT INTO users(user_id , user_name , pass ,email ,phone ,url ,advisor_id)
 VALUES('U8721', 'mansour','m41Ad', 'mansour@gmail.com', '0569124412','www.kia.com','1200558');
 INSERT INTO users(user_id , user_name , pass ,email ,phone ,url ,advisor_id)
 VALUES('U5412', 'ali','m31*A', 'ali@gmail.com', '0321044123','www.kia.com','1200558');
 INSERT INTO users(user_id , user_name , pass ,email ,phone ,url ,advisor_id)
 VALUES('U1212', 'osama','zdw@ss', 'osama@gmail.com', '0345098123','www.kia.com','1200558');
 INSERT INTO users(user_id , user_name , pass ,email ,phone ,url ,advisor_id)
 VALUES('U9812', 'ahmad','321dsa!', 'ahmad@gmail.com', '05312412240','www.kia.com','1200558');



#------------------cars table---------------------
CREATE TABLE cars (
    car_id varchar(50) PRIMARY KEY,
    car_name VARCHAR(50) NOT NULL,
    car_type VARCHAR(50) NOT NULL,
    car_price varchar(50) NOT NULL,
    car_model VARCHAR(50) NOT NULL,
	url VARCHAR(50) NOT NULL,
    accountant_id VARCHAR(50),
    FOREIGN KEY (url) REFERENCES website(url),
    FOREIGN KEY(accountant_id) REFERENCES accountant_employee (accountant_id)
);

INSERT INTO cars(car_id , car_name , car_type , car_price , car_model ,url ,accountant_id)
VALUES ('#7654324', 'Kia-Niro' , 'hybrid' , '20000$' , '2020' , 'www.kia.com' , '1201576');
INSERT INTO cars(car_id , car_name , car_type , car_price , car_model ,url ,accountant_id)
VALUES ('#647124', 'Kia-Picanto' , 'petrol' , '10000$' , '2018' , 'www.kia.com' , '1201576');
INSERT INTO cars(car_id , car_name , car_type , car_price , car_model ,url ,accountant_id)
VALUES ('#4526741', 'Kia-sportage' , 'Full-Electronic' , '35000$' , '2022' , 'www.kia.com' , '1201576');
INSERT INTO cars(car_id , car_name , car_type , car_price , car_model ,url ,accountant_id)
VALUES ('#2321441', 'Kia-Sorento' , 'hybrid' , '25000$' , '2021' , 'www.kia.com' , '1201576');
INSERT INTO cars(car_id , car_name , car_type , car_price , car_model ,url ,accountant_id)
VALUES ('#98765', 'Kia-Stonic' , 'petrol' , '40000$' , '2023' , 'www.kia.com' , '1201576');
INSERT INTO cars(car_id , car_name , car_type , car_price , car_model ,url ,accountant_id)
VALUES ('#41223324', 'Kia-seltos' , 'Full-Electronic' , '15000$' , '2020' , 'www.kia.com' , '1201576');



CREATE TABLE users_buy_car (
user_id VARCHAR(50),
car_id VARCHAR(50),
PRIMARY KEY(user_id,car_id),
FOREIGN KEY(user_id) REFERENCES users(user_id),
FOREIGN KEY(car_id) REFERENCES cars(car_id)
);


select * from employees
users










