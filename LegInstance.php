<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="Resource/style/LegInstance.css">
    <link rel="stylesheet" href="Resource/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Resource/Bootstrap/css/bootstrap-select.min.css">
<title>Leg Instance</title>
<script src="Resource/jquery.js"></script>
<script src="Resource/Bootstrap/js/popper.min.js"></script>
<script src="Resource/Bootstrap/js/bootstrap.min.js"></script>
<script src="Resource/javascript/LegInstance.js"></script>

<script src="Resource/Bootstrap/js/bootstrap-select.min.js"></script>

<script src=""></script>
</head>
<body>



    <div>
        <img src="Resource/images/image3.jpg" alt="airplane Image" class="homeimage">
    </div>
    <span  id="title"><h1>Leg Instance</h1></span>
    <nav id="homenav">    
        <ul>    
        <li><a href="http://localhost/AirEcho/AddFlight.php">ADD FLIGHT</a></li>
            <li><a href="http://localhost/AirEcho/CreateEmployeeaccount.php">ADD EMPLOYEE</a></li>
               <li><a href="http://localhost/AirEcho/Flight_Leg.php" >FLIGHT LEG</a></li>
         
                <li><a href="http://localhost/AirEcho/aircraft.php">AIRCRAFT</a></li>
                <li><a href="http://localhost/AirEcho/Airport.php">AIRPORT</a></li>
                <li><a href="http://localhost/AirEcho/EmployeeDetail.php">EMPLOYEE DETAIL</a></li>
                <li><a href="http://localhost/AirEcho/managementHome.php">LOGOUT</a></li>
        </ul>
    </nav>
    <div id ="formContainer">
      <form action="http://localhost/AirEcho/LegInstance.php" method="post">
        <div class="form-row">
          <div class="col">
            <div class="inputbox">
              <input type="text" required="required" class="form-control" id="airplaneId" name="aid">
              <span>Airplane Id</span>
            </div>
          </div>
          <div class="col">
          <div class="inputbox">
            <input type="text" required="required" class="form-control" id="flightNumber" name="fnum">
            <span>Flight Number</span>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col">
          <div class="inputbox">
            <input type="text" required="required" class="form-control" id="legNumber" name="legnum">
            <span>Leg Number</span>
          </div>
        </div>
        <div class="col">
        <div class="inputbox">
          <input type="number" required="required" class="form-control" id="availableSeats" name="availseats">
          <span>Available Seats</span>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <div>
          <div  id="departureSpan"><span>Departure AirPort Code</span></div>
          <select class="selectpicker form-control" data-live-search="true" id ="departureCode" name="depcode">
            <option value="departure" disabled selected hidden>Select Departure Aiport Code</option>
            <option value="DXB">DXB</option>
            <option value="PEK">PEK</option>
            <option value="CAN">CAN</option>
            <option value="CSX">CSX</option>
            <option value="FOC">FOC</option>
            <option value="ISB">ISB</option>
            <option value="KIX">KIX</option>
            <option value="AOJ">AOJ</option>
            <option value="TYO">TYO</option>
            <option value="DUS">DUS</option>
            <option value="FOC">FOC</option>
            <option value="BOS">BOS</option>
            <option value="ORD">ORD</option>
            <option value="IAH">IAH</option>
            <option value="BHX">BHX</option>
            <option value="LHR">LHR</option>
            <option value="ZVJ">ZVJ</option>
            <option value="ADL">ADL</option>
            <option value="DMM">DMM</option>
            <option value="JED">JED</option>   
          </select>
        </div>
    </div>
      <div class="col">
        <div class="inputbox">
          <input type="text"  required="required" class="datepicker form-control" id="departureDate"  name="depdate">
          <span>Departure Date</span>
        </div>
      </div>
    </div>
        <div class="form-row" id="last" >
          <div class="col">
            <div>
              <div  id="arrivalSpan"><span>Arrival AirPort Code</span></div>
              <select  class="selectpicker form-control" data-live-search="true" id="arivalCode" name="arvcode">
                <option value="arrival" disabled selected hidden>Select Arrival Airport Code</option>
                <option value="DXB">DXB</option>
                <option value="PEK">PEK</option>
                <option value="CAN">CAN</option>
                <option value="CSX">CSX</option>
                <option value="FOC">FOC</option>
                <option value="ISB">ISB</option>
                <option value="KIX">KIX</option>
                <option value="AOJ">AOJ</option>
                <option value="TYO">TYO</option>
                <option value="DUS">DUS</option>
                <option value="FOC">FOC</option>
                <option value="BOS">BOS</option>
                <option value="ORD">ORD</option>
                <option value="IAH">IAH</option>
                <option value="BHX">BHX</option>
                <option value="LHR">LHR</option>
                <option value="ZVJ">ZVJ</option>
                <option value="ADL">ADL</option>
                <option value="DMM">DMM</option>
                <option value="JED">JED</option>   
              </select>
            </div>
          </div>
          <div class="col">
            <div class="inputbox">
              <input type="text"  required="required" class="datepicker form-control" id="arrivalDate"  name="arvdate">
            <span>Arrival Date</span>
            </div>
          </div>
      </div>
   
      <button type="submit" class="btn btn-light" id="submitBtn">ADD</button>
      </form>

    </div>
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
 if (isset($_POST['aid']))
{

  $id = $_POST['aid'];
  $numb = $_POST['fnum'];
  $legn = $_POST['legnum'];
  $availseats = $_POST['availseats'];
  $dcode = $_POST['depcode'];
  $ddate = $_POST['depdate'];
  $arvcode = $_POST['arvcode'];
  $arvdate = $_POST['arvdate'];
  	$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$dbname = "airline";
    
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
  		echo "Connection failed: " . $conn->connect_error;
		}
   $sql_query="insert into leginstance(airplane_ID,flight_Number,leg_Number,available_Seats,departure_AirportCode,departure_Date,arrival_Date,arrival_AirportCode) values('".$id."','".$numb."','".$legn."',".$availseats.",'".$dcode."','".$ddate."','".$arvdate."','".$arvcode."');";
  // $sql_query="select * from leginstance";
    //$result = $conn->query($sql_query);
    //echo  $sql_query;
    $result = $conn->query($sql_query);
    if($result){
      echo "<script>alert('Data Store Sucessfully!!!')</script>";
  }
    $conn->close();


//}
	
    // echo "alert(in php : ".$id.");";
    // echo "alert(in php : ".$numb.");";
    // echo "alert(in php : ".$legn.");";
    // echo "alert(in php : ".$availseats.");";
    // echo "alert(in php : ".$dcode.");";
    // echo "alert(in php : ".$ddate.");";
    // echo "alert(in php : ".$arvcode.");";
    // echo "alert(in php : ".$arvdate.");";
    
		// $flightnumber = $_POST['flightNumber'];
    // $legnumber = $_POST['legNumber'];
		// $availableseats = $_POST['availableSeats'];
    // $departurecode = $_POST['availableSeats'];
		// $departuredate = $_POST['Password'];
    // $arrivalcode = $_POST['UName'];
    // $arrivaldate = $_POST['UName'];
		
    
		// $servername = "127.0.0.1";
		// $username = "root";
		// $password = "";
		// $dbname = "test";

		// // Create connection
		// $conn = new mysqli($servername, $username, $password, $dbname);
		// // Check connection
		// if ($conn->connect_error) {
  	// 	echo "Connection failed: " . $conn->connect_error;
		// }

		// $sql_query = "SELECT * FROM users where name='".$uname."' and password='".$pwd."'";
		// #echo $sql_query;
		// $result = $conn->query($sql_query);
		
		// $conn->close();
	}
?>



        
</body>
</html>