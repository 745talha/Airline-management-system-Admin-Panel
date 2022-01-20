<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="Resource/style/CreateEmployeeaccount.css">
    <link rel="stylesheet" href="Resource/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Resource/Bootstrap/css/bootstrap-select.min.css">
<title>Create Employee Detail</title>
<script src="Resource/jquery.js"></script>
<script src="Resource/Bootstrap/js/popper.min.js"></script>
<script src="Resource/Bootstrap/js/bootstrap.min.js"></script>
<script src="Resource/javascript/CreateEmployeeaccount.js"></script>

<script src="Resource/Bootstrap/js/bootstrap-select.min.js"></script>

<script src=""></script>

</head>
<body >

 <?php  session_start();

 if(isset($_SESSION["Login"])){
  if($_SESSION["Login"]!=="admin")
  {
    echo "<script>alert('Your request is denied, Only admin can access this Page!')</script>";
    echo "<script>window.open('http://localhost/AirEcho/optionPage.php');</script>";
    echo "<script>window.close();</script>";
  }
 }


 ?>




    <div >
        <img src="Resource/images/image3.jpg" alt="airplane Image" class="homeimage">
    </div>
    <span  id="title"><h1>Employee Detail</h1></span>
    <nav id="homenav">    
        <ul>    
          <li><a href="http://localhost/AirEcho/AddFlight.php">ADD FLIGHT</a></li>
               <li><a href="http://localhost/AirEcho/Flight_Leg.php" >FLIGHT LEG</a></li>
               <li><a href="http://localhost/AirEcho/LegInstance.php">LEG INSTANCE</a></li>
                <li><a href="http://localhost/AirEcho/aircraft.php">AIRCRAFT</a></li>
                <li><a href="http://localhost/AirEcho/Airport.php">AIRPORT</a></li>
                <li><a href="http://localhost/AirEcho/EmployeeDetail.php">EMPLOYEE DETAIL</a></li>
                <li><a href="http://localhost/AirEcho/managementHome.php">LOGOUT</a></li>
        </ul>
    </nav>
   
      <form action="http://localhost/AirEcho/createemployeeaccount.php" method="post">
        <div id ="formContainer">
        <div class="form-row">
          <div class="col">
            <div class="inputbox">
              <input type="text" required="required" class="form-control" id="username" name="username">
              <span>Username</span>
            </div>
          </div>
          <div class="col">
          <div class="inputbox">
            <input type="text" required="required" class="form-control" id="password" name="password">
            <span>Password </span>
          </div>
        </div>
      </div>

      <div class="form-row">
          <div class="col">
            <div class="inputbox">
              <input type="text" required="required" class="form-control" id="firstname" name="firstname">
              <span>First Name</span>
            </div>
          </div>
          <div class="col">
          <div class="inputbox">
            <input type="text" required="required" class="form-control" id="lastname" name="lastname">
            <span>Last Name </span>
          </div>
        </div>
      </div>

      <div class="form-row">
          <div class="col">
            <div class="inputbox">
              <input type="text" required="required" class="form-control" id="cnic" name="cnic">
              <span>CNIC</span>
            </div>
          </div>
          <div class="col">
            <div class="inputbox">
              <input type="tel" required="required"  class="form-control" id="phonenumber" name="phonenumber">
              <span>Phone Number</span>
            </div>
          </div>
      </div>

      <div class="form-row">
          <div class="col">
            <div  id="genderspan"><span>Gender</span></div>
          <select name="gender" id="gender">
	        <option value="" selected hidden disabled>Select Gender</option>
	        <option value="Male">Male</option>
	        <option value="Female">Female</option>
        	<option value="other">Other</option>
          </select>
        </div>
          <div class="col">
          <div class="inputbox">
          <input type="text"  required="required" class="datepicker form-control" id="dob"  name="dob">
            <span>DOB</span>
          </div>
        </div>
      </div>

      <!-- <div class="form-row">
          <div class="col">
            <div class="inputbox">
              <input type="text" required="required" class="form-control" id="jobstatus" name="jobstatus">
              <span>Job Status</span>
            </div>
          </div>
          <div class="col">
          <select name="gender" id="gender">
	        <option value="" selected hidden disabled>Select Gender</option>
	        <option value="Male">Male</option>
	        <option value="Female">Female</option>
        	<option value="other">Other</option>
          </select>
        </div>
      </div> -->
      <div class="buttons1">
      <button  type="button" class="npbtn" onclick="previous()" >&#60</button>
      <button type="button" class="npbtn nbtn" onclick="next()">&#62</button>
    </div>
          </div>


          <div id ="formContainer2">

          <div class="form-row">
          <div class="col">
            <div class="inputbox">
              <input type="text" required="required" class="form-control" id="salary" name="salary">
              <span>Salary</span>
            </div>
          </div>
        
          <div class="col">
            <div class="inputbox">
              <input type="text" required="required" class="form-control" id="passportid" name="passportid">
              <span>Passport Number</span>
            </div>
          </div>

      </div>

          <div class="form-row">
          <div class="col">
            <div class="inputbox">
              <input type="text" required="required" class="form-control" id="accountnumber" name="accountnumber">
              <span>Account Number</span>
            </div>
          </div>
          <div class="col">
          <div class="inputbox">
          <input type="text"  required="required" class="datepicker form-control" id="position"  name="position">
            <span>Position</span>
          </div>
          </div>
      </div>

      <!-- <div class="form-row"> -->
      <!-- <div class="col"> -->
            <div id="qbox">
            <span>Qualification</span>
              <textarea   required="required" class="form-control" placeholder="Qualification"id="qualification" name="qualification"></textarea>
              
            <!-- </div> -->
          </div>
      <!-- </div> -->
          <!-- <div class="form-row"> -->
          <!-- <div class="col"> -->
          <div id="abox">
          <span>Address</span>
          <textarea required="required" placeholder="Address" class="form-control" id="address"  name="address"></textarea>
          <!-- </div> -->
          </div>
      <!-- </div> -->
      <div class="buttons2">
          <button  type="button" class="npbtn" onclick="previous()" >&#60</button>
          <button type="button" class="npbtn nbtn" onclick="next()">&#62</button>
        </div>
        <button type="submit" value="submit"class="btn btn-light" id="submitBtn">ADD</button>
        
    </div>
      </form>

    
        <!-- <div class="inputbox">
          <input type="text" required="required">
          <span class="labelColor">Departure Place</span>
        </div>
        <div class="inputbox">
          <input type="text" required="required">
          <span class="labelColor">Departure Place</span>
        </div> -->
        
        <!-- <div class="inputbox">
          <input type="button" value="submit">
        </div> -->
        <!-- <button onclick="f1()">Enter</button> -->
        
<?php  

if (isset($_POST['username']))
{
		$uname = $_POST['username'];
    $pass = $_POST['password'];
		$firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
		$cnic = $_POST['cnic'];
    $phonenumber = $_POST['phonenumber'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $salary = ((int)$_POST['salary']);
		$passportid = $_POST['passportid'];
    $position=$_POST['position'];
    $accountnumber = $_POST['accountnumber'];
    $qualification = $_POST['qualification'];
    $address = $_POST['address'];
    
		$servername = "127.0.0.1";
		$dbuser = "root";
		$dbpassword = "";
		$dbname = "airline";

		// Create connection
		$conn = new mysqli($servername, $dbuser, $dbpassword, $dbname);
    // $conn2 = new mysqli($servername, $username, $password, $dbname);
    // $conn3 = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
  		echo "Connection failed: " . $conn->connect_error;
		}
    // if ($conn2->connect_error) {
  	// 	echo "Connection failed: " . $conn2->connect_error;
		// }
    // if ($conn3->connect_error) {
  	// 	echo "Connection failed: " . $conn3->connect_error;
		// }

		$sql_query="insert into employeelogin(username,password) values('".$uname."','".$pass."');";
    $sql_query2="insert into employeedetail(Username,firstName,lastName,cnic,qualification,Address,phone_number,gender,dob,passportId) values('{$uname}','{$firstname}','{$lastname}','{$cnic}','{$qualification}','{$address}',
    '{$phonenumber}','{$gender}','{$dob}','{$passportid}');";
    $sql_query3="insert into employeeaccount(username,salary,account_number,position) values('{$uname}',{$salary},'{$accountnumber}','{$position}');";
    

    // echo "sql1 ".$sql_query1;
    // echo "sql2 ".$sql_query2;
    // echo "sql3 ".$sql_query3;

		$result1 = $conn->query($sql_query);
    $result2 = $conn->query($sql_query2);
    $result3 = $conn->query($sql_query3);
		if($result1){
      echo "<script>alert('Data Store Sucessfully!!!')</script>";
  }
    // echo "result1 : ".$result1;
    // echo "result2 : ".$result2;
    // echo "result1 : ".$result3;


    //$result = $conn->query($sql_query);
    $conn->close();

		// $conn->close();
	 }
?>


        
</body>
</html>