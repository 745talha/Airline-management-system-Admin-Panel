<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="Resource/style/EmployeeDetail.css">
    <link rel="stylesheet" href="Resource/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Resource/Bootstrap/css/bootstrap-select.min.css">
<title>Employee Detail</title>
<script src="Resource/jquery.js"></script>
<script src="Resource/Bootstrap/js/popper.min.js"></script>
<script src="Resource/Bootstrap/js/bootstrap.min.js"></script>
<script src="Resource/javascript/EmployeeDetail.js"></script>

<script src="Resource/Bootstrap/js/bootstrap-select.min.js"></script>

<script src=""></script>

</head>
<body >
    <div >
        <img src="Resource/images/image3.jpg" alt="airplane Image" class="homeimage">
    </div>
    <span  id="title"><h1>Employee Detail</h1></span>
    <nav id="homenav">    
        <ul>   
            <li><a href="http://localhost/AirEcho/AddFlight.php">ADD FLIGHT</a></li>
            <li><a href="http://localhost/AirEcho/CreateEmployeeaccount.php">ADD EMPLOYEE</a></li>
               <li><a href="http://localhost/AirEcho/Flight_Leg.php" >FLIGHT LEG</a></li>
               <li><a href="http://localhost/AirEcho/LegInstance.php">LEG INSTANCE</a></li>
                <li><a href="http://localhost/AirEcho/aircraft.php">AIRCRAFT</a></li>
                <li><a href="http://localhost/AirEcho/Airport.php">AIRPORT</a></li>
            
                <li><a href="http://localhost/AirEcho/managementHome.php">LOGOUT</a></li>
        </ul>
    </nav>
     <div id ="formContainer">
       <!-- <div class="form-row" >
            <div class="col">
                <span id="label">Username : </span>                
              </div>
              <div class="col">
                <input type="text" required="required" class="form-control" id="uname" name="uname">           
              </div>
              <div class="col">
                <button type="button" class="btn btn-light"id="btnStyle"  onclick="clickMe()"><b>Search</b></button>         
              </div>
            </div> -->
<br><br>
            <?php
            //function php_func(){
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "airline";
          //  / $name = $_POST['uname'];
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              echo "Connection failed: " . $conn->connect_error;
            }
            
            
           // $sql_query = "SELECT * FROM employeedetail where username='".$name."';";
           $sql_query = "SELECT * FROM employeedetail;";
            $result = $conn->query($sql_query);
            
            if ($result->num_rows > 0) {
              echo "<table border='2' style='color:white;border:white solid 2px;margin-left:-55px;'><tr><th>Username</th><th>First Name</th><th>Last Name</th><th>CNIC</th><th>Phone Number </th><th>Gender</th><th>DOB</th><th>Passport Id </th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>";
                echo $row["Username"];
                echo "</td>";
                 echo "<td>";
                echo $row["firstName"];
                echo "</td>";
                echo "<td>";
               echo $row["lastName"];
               echo "</td>";
                echo "<td>";
               echo $row["cnic"];
               echo "</td>";
                   echo "<td>";
                 echo $row["phone_number"];
                   echo "</td>";
               echo "<td>";
                       echo $row["gender"];
                    echo "</td>";
                    echo "<td>";
                        echo $row["dob"];
                        echo "</td>";
                        echo "<td>";
                            echo $row["passportId"];
                           echo "</td>";
                echo "</tr>";
              }
              echo "</table>";
            } else {
              echo "0 results";
            }
             $conn->close();
            //}
            ?>
     </div>

</body>
<!-- <script>
function clickMe(){
document.write(result);
console.log("Cickme function");
}

    </script> -->

</html>