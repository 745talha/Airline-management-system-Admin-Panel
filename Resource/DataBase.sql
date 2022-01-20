Create Database Airline;
Use Airline;

create table adminLogin(
username varchar(50) primary key,
password varchar(50) not null);
insert into adminLogin values('Talha123','talha12345678');

Create Table Login(
username varchar(50)  primary key ,
 password varchar(30) not null );

create table employeeAccount(
username varchar(50) not null unique,
salary int not null,
account_number int not null unique,
position varchar(50) not null,
Foreign Key(username) references Login(username) ON DELETE CASCADE ON UPDATE CASCADE );

create table employeeDetail( 
username varchar(50) not null unique,
firstName varchar(50) not null,
lastName varchar(50) not null,
cnic varchar(50)  primary key ,
qualification varchar(200) not null,
Address varchar(200) not null,
phone_number int not null unique,
previous_experience varchar(200),
job_status varchar(10) not null,
gender varchar(10) not null ,
dob date not null,
passportId varchar(50) not null unique,
Foreign Key(username) references Login(username) ON DELETE CASCADE ON UPDATE CASCADE);


create table Aircraft (
airplane_ID varchar (15) not null primary key ,
airplane_Type varchar (30) not null,
company varchar (30) not null,
plane_Leg int not null,
max_Seats int not null);

create table FlightLeg(
flight_number varchar (25) not null,
leg_number int  not null,
arrival_airportCode char (10) not null unique ,
depature_AirportCode char (10) not null unique ,
schedule_time time(0) not null);

create table LegInstance (
flight_Number varchar (25) not null,
leg_Number varchar (25) not null,
available_Seats int,
airplane_ID varchar (15) not null primary key,
arrival_Date date  not null,
departure_Date date not null,
arrival_AirportCode varchar (10) not null unique,
departure_AirportCode varchar (10) not null unique 
);

create table  AddFlight(
arrival_Place varchar(40) not null,
airplane_ID varchar (15) not null ,
departure_Place varchar (40) not null,
flight_Number varchar (25) not null primary key,
airline_Name varchar (80) not null,
flight_date date not null,
arrival_Time varchar (20) not null,
departure_Time varchar (20) not null,
fare_Code char not null 
);

create table AirportTable(
airport_Name char (80) not null,
city char (50) not null,
state char (50) not null,
airport_Code varchar (10) not null primary key
);

Create table customerLogin(
username varchar(50) primary key,
password varchar(50) not null);

create table customerDetail(
username varchar(50) not null,
firstName varchar(50) not null,
lastName varchar(50) not null,
cnic varchar(20)  primary key,
passportID varchar(20) not null unique,
criminalRecord varchar(500),
Foreign Key(username) references customerLogin(username) ON DELETE CASCADE ON UPDATE CASCADE
);
select * from AddFlight;