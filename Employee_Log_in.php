<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Echo Employee Login</title>
    <link rel="stylesheet" href="Resource/style/Employee_Login.css"></link>
    <script src="Resource/javascript/Employee_Login.js"></script>
</head>

<body>
<form action="http://localhost/AirEcho/Employee_Log_in.php" method="post">


    <body background="Resource/images/EMP LOG.jpg" style="width: 100%; margin-right:-5px; margin-top: -5px; position:absolute; margin-left: -5px;">
        <background repeate="no-repeate">

    </body>
    <div class="ELH">
        <h1> Employee Login</h1>
    </div>
    <!-- EMPLOYEE ID,Password & Button START -->
    <div id="cont">
        <div class="EID">

            <input type="string" required="required" class="IDT" name="uname" placeholder="  Enter Employee ID">
        </div>
        <div class="EID">
            <form action="/action_page.php">
                <input type="password" class="IDT" id="JV" placeholder="  Enter Your Password" id="psw" name="psw"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    required><br><br>
                <input type="checkbox" onclick="myFunction()">Show Password
            </form>
        </div>

        <div class="BT">
            <button type="submit"> Log In </button>
        </div>
    </div>
    <!-- EMPLOYEE ID,Password & Button END -->







    <?php  
if (isset($_POST['uname']))
	{
		$uname = $_POST['uname'];
		$pwd = $_POST['psw'];

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

		$sql_query = "SELECT * FROM employeelogin where username='".$uname."' and password='".$pwd."'";
		#echo $sql_query;
		$result = $conn->query($sql_query);
		if ($result->num_rows==0)
		{
			echo "<script>alert('Incorrect Password!!!');</script>";
		}	
		else
		{
            session_start();
            header("Location:http://localhost/AirEcho/optionPage.php");
            $_SESSION["Login"]="employee";
		}		
		$conn->close();
	}
?>





</body>

</html>