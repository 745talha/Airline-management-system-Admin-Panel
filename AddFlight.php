<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="Resource/style/AddFlight.css">
    <link rel="stylesheet" href="Resource/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Resource/Bootstrap/css/bootstrap-select.min.css">
<title>Add Flight</title>
<script src="Resource/jquery.js"></script>
<script src="Resource/Bootstrap/js/popper.min.js"></script>
<script src="Resource/Bootstrap/js/bootstrap.min.js"></script>
<script src="Resource/javascript/AddFlight.js"></script>

<script src="Resource/Bootstrap/js/bootstrap-select.min.js"></script>

<script src=""></script>

</head>
<body >
    <div >
        <img src="Resource/images/image3.jpg" alt="airplane Image" class="homeimage">
    </div>
    <span  id="title"><h1>ADD FLIGHT</h1></span>
    <nav id="homenav">    
        <ul>    
            <li><a href="http://localhost/AirEcho/CreateEmployeeaccount.php">ADD EMPLOYEE</a></li>
               <li><a href="http://localhost/AirEcho/Flight_Leg.php" >FLIGHT LEG</a></li>
               <li><a href="http://localhost/AirEcho/LegInstance.php">LEG INSTANCE</a></li>
                <li><a href="http://localhost/AirEcho/aircraft.php">AIRCRAFT</a></li>
                <li><a href="http://localhost/AirEcho/Airport.php">AIRPORT</a></li>
                <li><a href="http://localhost/AirEcho/EmployeeDetail.php">EMPLOYEE DETAIL</a></li>
                <li><a href="http://localhost/AirEcho/managementHome.php">LOGOUT</a></li>
        </ul>
    </nav>
    <div id ="formContainer">
      <form action="http://localhost/AirEcho/AddFlight.php" method="post">
        <div class="form-row">
          <div class="col">
            <div class="inputbox">
              <input type="text" required="required" class="form-control" id="id" name="aid">
              <span>Airplane Id</span>
            </div>
          </div>
          <div class="col">
          <div class="inputbox">
            <input type="text" required="required" class="form-control" id="number" name="fnumber">
            <span>Flight Number</span>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col">
          <div class="inputbox">
            <input type="text" required="required" class="form-control" id="name" name="aname">
            <span>Airline Name</span>
          </div>
        </div>
        <div class="col">
        <div class="inputbox">
          <input type="text" required="required" class="form-control" id="fareCode" name="fcode">
          <span>Fare Code</span>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <div class="inputbox">
        <input type="text"  required="required" class="datepicker form-control" id="date"  name="fdate">
        <span>Flight Date</span>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <div>
          <div  id="departureSpan"><span>Departure Place</span></div>
        <?php  // Create connection
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "airline";
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            echo "Connection failed: " . $conn->connect_error;
          }
         $sql_query="select airport_Name from airporttable;";
        // $sql_query="select * from leginstance";
          //$result = $conn->query($sql_query);
          // echo  $sql_query;
          $result = $conn->query($sql_query);
         
         
      ?>
          <select class="selectpicker form-control" data-live-search="true" id ="departurePlace" name="dplace">
             <option value="departure" disabled selected hidden>Select Departure Place</option>
            <!-- <option value="Dubai (DXB)">Dubai (DXB)</option>  -->
        <?php    if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

               // echo $row['']
               echo " <option value='{$row['airport_Name']}'>{$row['airport_Name']}</option>";
              }
            }?>
            <!-- <option value="China Beijing (PEK)">China Beijing (PEK)</option>
            <option value="China Guangzhou (CAN)">China Guangzhou (CAN)</option>
            <option value="China Changsha (CSX)">China Changsha (CSX)</option>
            <option value="China Fuzhou (FOC)">China Fuzhou (FOC)</option>
            <option value="Pakistan Islamabad (ISB)">Pakistan Islamabad (ISB)</option>
            <option value="Japan Osaka (KIX)">Japan Osaka (KIX)</option>
            <option value="Japan Aomori (AOJ)">Japan Aomori (AOJ)</option>
            <option value="Japan Tokyo (TYO)">Japan Tokyo (TYO)</option>
            <option value="Germany Düsseldorf (DUS)">Germany Düsseldorf (DUS)</option>
            <option value="China Fuzhou (FOC)">China Fuzhou (FOC)</option>
            <option value="US Boston (BOS)">US Boston (BOS)</option>
            <option value="US Chicago (ORD)">US Chicago (ORD)</option>
            <option value="US Houston (IAH)">US Houston (IAH)</option>
            <option value="UK Birmingham (BHX)">UK Birmingham (BHX)</option>
            <option value="UK London (LHR)">UK London (LHR)</option>
            <option value="Abu Dhabi (ZVJ)">Abu Dhabi (ZVJ)</option>
            <option value="Australia Adelaide (ADL)">Australia Adelaide (ADL)</option>
            <option value="Saudi Arabia Dammam (DMM)">Saudi Arabia Dammam (DMM)</option>
            <option value="Saudi Arabia Jeddah (JED)">Saudi Arabia Jeddah (JED)</option>    -->
          </select>
        </div>
    </div>
      <div class="col">
        <div class="inputbox">
        <input type="time"  required="required" class="timePicker form-control" id="departureTime" name="dtime">
          <span>Departure Time</span>
        </div>
      </div>
    </div>
        <div class="form-row" id="last" >
          <div class="col">
            <div>
              <div  id="arrivalSpan"><span>Arrival Place</span></div>
              <select  class="selectpicker form-control" data-live-search="true" id="arivalPlace" name="aplace">
              <option value="arrival" selected hidden disabled>Select Arrival Place</option>
              <?php  
               $result = $conn->query($sql_query);
                if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

               // echo $row['']
               echo " <option value='{$row['airport_Name']}'>{$row['airport_Name']}</option>";
              }
            }
            $conn->close();
            ?>
                 
              <!-- <option value="Dubai (DXB)">Dubai (DXB)</option>
                <option value="China Beijing (PEK)">China Beijing (PEK)</option>
                <option value="China Guangzhou (CAN)">China Guangzhou (CAN)</option>
                <option value="China Changsha (CSX)">China Changsha (CSX)</option>
                <option value="China Fuzhou (FOC)">China Fuzhou (FOC)</option>
                <option value="Pakistan Islamabad (ISB)">Pakistan Islamabad (ISB)</option>
                <option value="Japan Osaka (KIX)">Japan Osaka (KIX)</option>
                <option value="Japan Aomori (AOJ)">Japan Aomori (AOJ)</option>
                <option value="Japan Tokyo (TYO)">Japan Tokyo (TYO)</option>
                <option value="Germany Düsseldorf (DUS)">Germany Düsseldorf (DUS)</option>
                <option value="China Fuzhou (FOC)">China Fuzhou (FOC)</option>
                <option value="US Boston (BOS)">US Boston (BOS)</option>
                <option value="US Chicago (ORD)">US Chicago (ORD)</option>
                <option value="US Houston (IAH)">US Houston (IAH)</option>
                <option value="UK Birmingham (BHX)">UK Birmingham (BHX)</option>
                <option value="UK London (LHR)">UK London (LHR)</option>
                <option value="Abu Dhabi (ZVJ)">Abu Dhabi (ZVJ)</option>
                <option value="Australia Adelaide (ADL)">Australia Adelaide (ADL)</option>
                <option value="Saudi Arabia Dammam (DMM)">Saudi Arabia Dammam (DMM)</option>
                <option value="Saudi Arabia Jeddah (JED)">Saudi Arabia Jeddah (JED)</option> -->
              </select>
            </div>
          </div>
          <div class="col">
            <div class="inputbox">
            <input type="time"  required="required" class="timePicker form-control" id="arrivalTime" name="adate">
            <span>Arrival Time</span>
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
  $numb = $_POST['fnumber'];
  $name = $_POST['aname'];
  $flightcode = $_POST['fcode'];
  $fdate = $_POST['fdate'];
  $dplace = $_POST['dplace'];
  $dtime = $_POST['dtime'];
  $aplace = $_POST['aplace'];
  $adate = $_POST['adate'];
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
   $sql_query="insert into addflight(airplane_ID,flight_Number,airline_Name,fare_Code,flight_date,departure_Place,departure_Time,arrival_Place,arrival_Time	) values('".$id."','".$numb."','".$name."','".$flightcode ."','".$fdate."','".$dplace."','".$dtime."','".$aplace."','".$adate."');";
  // $sql_query="select * from leginstance";
    //$result = $conn->query($sql_query);
    // echo  $sql_query;
    $result = $conn->query($sql_query);
    if($result){
      echo "<script>alert('Data Store Sucessfully!!!')</script>";
  }
    $conn->close();

}
	
 
?>
        
</body>
</html>