<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Echo Flight Leg</title>
    <link rel="stylesheet" href="Resource/style/Flight_leg.css"></link>
</head>

<body>

    <body background="Resource/images/Legint.jpg" style="width: 100%; margin-right:-5px; margin-top: -5px; position:absolute; margin-left: -5px;">
        <background repeate="no-repeate">
    </body>
    <div class="FL">
        <h1>Flight Leg</h1>
    </div>
    <form action="http://localhost/saadFinal/Flight_Leg.php" method="post">
    <div class="FID">
        <input type="text" required="required" class="FDT"  name="fnumber"placeholder="  Enter Flight Number">
    </div>


    <div class="FID">
        <input type="number" required="required" class="FDT" name="lnumber" placeholder="  Enter Leg Number">
    </div>


    </div>

    <div class="FID">
        <input type="text" required="required" class="FDT" name="arcode" placeholder="  Enter Arrival Airport Code">
    </div>

    <div class="FID">
        <input type="text" required="required" class="FDT" name="depcode"placeholder="  Enter Departure Airport Code">
    </div>

    <div class="FID">
        <input type="time" name="Arrival_Date">
        <span id="show">Select Schedule Time</span>
    </div>



    <div class="BT">
        <button type="submit" onclick="alert('Please Wait While Your Data Is Being Saved,                                    Air Echo, Great Winds To Fly With')"> Save </button>
    </div>
</form>

    <?php  
	if (isset($_POST['fnumber']))
	{
		$fnumber = $_POST['fnumber'];
		$lnumber = $_POST['lnumber'];
        $arcode=$_POST['arcode'];
        $depcode=$_POST['depcode'];
       $Arrival_Date=$_POST['Arrival_Date'];

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

		$sql_query ="insert into  FlightLeg(flight_number,leg_number,arrival_airportCode,depature_AirportCode,schedule_time) values('".$fnumber."',".$lnumber.",'".$arcode."','".$depcode."','".$Arrival_Date."');";
		#echo $sql_query;
		$result = $conn->query($sql_query);
		
		$conn->close();
	}
?>








</html>