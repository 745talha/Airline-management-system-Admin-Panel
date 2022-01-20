<?php

include "./connect.php";

if(isset($_GET['submit'])){
    $airportname = $_GET['airport_Name'];
    $airportcode = $_GET['airport_Code'];
    $city = $_GET['city'];
    $state = $_GET['state'];

    $sql = "INSERT INTO `airporttable`(`airport_Name`, `airport_Code`, `city`, `state`) VALUES ('$airportname','$airportcode','$city','$state');";

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
        <link rel="stylesheet" href="Resource/style/airport.css">
        <title>Airport</title>

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
                <li><a href="http://localhost/AirEcho/aircraft.php">AIRCRAFT</a></li>
               
                <li><a href="http://localhost/AirEcho/EmployeeDetail.php">EMPLOYEE DETAIL</a></li>
                <li><a href="http://localhost/AirEcho/managementHome.php">LOGOUT</a></li>
                    </ul>
                </nav>
            </div><span id="title"><h1>AIRPORT</h1></span>
            <div class="right">
                <!---->
                <div id="formdiv">
                    <form method="GET" id="form" onsubmit="return validation()">
                        <div class="column1">
                            <div>
                                <div class="labels">Airport Name </div>
                                <div class="inputfield">
                                    <input type="text" onclick="color()" class="airportname" id="airportname" name="airport_Name" />

                                    <div class="error" id="airportname_error"></div>
                                </div>
                            </div>
                            <div>
                                <div class="labels">Airport Code </div>
                                <div class="inputfield">
                                    <input type="text" onclick="color()" class="airportcode" id="airportcode" name="airport_Code" />
                                    <div class="error2" id="airportcode_error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="column2">
                            <div style="margin-bottom: 11px;" class="labelcity" id="labelcity">City </div>
                            <div>
                                <div class="inputfield">
                                    <input type="text" onclick="color()" class="city" id="city" name="city" />

                                    <span  class="error" id="city_error"></span>
                                </div>
                            </div>
                            <div class="column2_down">
                                <div class="labelstate">State </div>
                                <div class="inputfield">
                                    <input type="text" onclick="color()" name="state" id="state" class="state" />

                                    <span class="error2" id="state_error"></span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="submit" id="submit" name="submit" onclick="validation()">Add Detail</button>
                    </form>
                </div>
            </div>
        </div>


        <script src="/Resource/javascript/airport.js"></script>
    </body>

    </html>