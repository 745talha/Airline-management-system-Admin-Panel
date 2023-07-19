Work and you’ll get what you need; work harder and you’ll get what you want.


Login:
  * Admin Login 
      ~ username
      ~ password
  * Employee Login
      ~ username
      ~ password
  * Customer Login 
      ~ username
      ~ password


Flight Leg:
flight_number : string ,
leg_number : int,
arrival_airportCode : string ,
depature_AirportCode : string  ,
schedule_time : time;

Add Flight:
arrival_Place : string ,
airplane_ID : string ,
departure_Place : string ,
flight_Number : string ,
airline_Name : string,
flight_date : date ,
arrival_Time : string ,
departure_Time : string ,
fare_Code : string 

Leg Instance:
flight_Number : string ,
leg_Number : string ,
available_Seats : integer,
airplane_ID : string,
arrival_Date : date,
departure_Date : date,
arrival_AirportCode : string ,
departure_AirportCode : string 

Aircraft:
airplane_ID : string ,
airplane_Type : string,
company : string,
plane_Leg : integer,
max_Seats : integer

Airport: 
airport_Name : string,
city : string,
state : string,
airport_Code : string

Customer Deatil:
username : string,
firstName : string,
lastName :string,
cnic : string,
passportID :string,
criminalRecord : string

Employee Detail:
username : string,
firstName : string,
lastName : string,
cnic : string ,
qualification : string,
Address : string,
phone_number : integer,
previous_experience : string,
job_status : string ,
gender : string,
dob : date ,
passportId : string,

