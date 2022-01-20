<?php

include "./connect.php";

if(isset($_POST['submit'])){
    $airplaneid = $_POST['airplane_ID'];
    $airplane_Type = $_POST['airplane_Type'];
    $company = $_POST['company'];
    $plane_Leg = $_POST['plane_Leg'];
    $max_Seats = $_POST['max_Seats'];

    $sql = "INSERT INTO `aircraft`(`airplane_ID`, `airplane_Type`, `company`, `plane_Leg`, `max_Seats`) VALUES ('$airplaneid','$airplane_Type','$company','$plane_Leg','$max_Seats');";

    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Data Inserted";
    }else{
        echo "Insertion Faild";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Resource/style/aircraft.css">
    <title>Aircraft</title>
</head>

<body>
    <div class="mainbody">
        <div class="left">
            <nav id="navbar">
                <ul>
                <li><a href="http://localhost/AirEcho/AddFlight.php">ADD FLIGHT</a></li>
            <li><a href="http://localhost/AirEcho/CreateEmployeeaccount.php">ADD EMPLOYEE</a></li>
               <li><a href="http://localhost/AirEcho/Flight_Leg.php" >FLIGHT LEG</a></li>
               <li><a href="http://localhost/AirEcho/LegInstance.php">LEG INSTANCE</a></li>
                
                <li><a href="http://localhost/AirEcho/Airport.php">AIRPORT</a></li>
                <li><a href="http://localhost/AirEcho/EmployeeDetail.php">EMPLOYEE DETAIL</a></li>
                <li><a href="http://localhost/AirEcho/managementHome.php">LOGOUT</a></li>
                </ul>
            </nav>
        </div><span id="title" ><h1>AIRCRAFT</h1></span>
        <div class="right">
            <div id="formdiv">
              <form method="POST"  id="form" onsubmit="return validation()"> 
                    <div class="column1">
                        <div>
                            <div class="labels">Airplane Id </div>
                            <div class="inputfield">
                                <input type="text" onclick="color()" onclick="color()"  id="airplaneid" name="airplane_ID" />
                                <div id="airplaneid_error" class="error"></div>
                            </div>
                        </div>
                        <div>
                            <div class="labels">Airplane Type </div>
                            <div class="inputfield">
                                <input type="text" onclick="color()"   class="airplanetype" id="airplanetype" name="airplane_Type" />
                                <div id="airplanetype_error" class="error2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="column2">
                        <div style="margin-bottom: 11px;" class="labels">Company </div>
                        <div>
                            <div class="inputfield">
                                <input type="text" onclick="color()"  id="Company" name="company" />
                                <div id="Company_error" class="error"></div>
                            </div>
                        </div>
                        <div class="column2_down">
                            <div class="labels">Plane Leg </div>
                            <div class="inputfield ">
                                <input type="text" onclick="color()" name="plane_Leg" id="planeleg" class="planeleg" />
                                <div id="planeleg_error" class="error2"></div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="row_label">Maximum Seats </div>
                        <div class="inputfield">
                            <input type="text" onclick="color()" name="max_Seats" class="maximumseats"  id="maximumseats"/>
                            <div  class="error3" id="maximumseats_error"></div>
                        </div>
                    </div>
                    <button type="submit" class="submit" id="submit" name="submit" onclick="validation()">Add Detail</button>
                  
           <!--    </form>  -->
            </div>
        </div>
    </div>
    <script src="Resource/javascript/aircraft.js"></script>
</body>

</html>