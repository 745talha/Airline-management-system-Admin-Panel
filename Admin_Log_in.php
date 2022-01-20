<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Echo Admin Login</title>
    <link rel="stylesheet" href="Resource/style/Admin_Login.css"></link>
    <script src="Resource/javascript/Employee_Login.js"></script>
</head>

<body>

    <body background="Resource/images/Admin.jpg" style="width: 100%; margin-right:-5px; margin-top: -5px; position:absolute; margin-left: -5px;">
        <background repeate="no-repeate">
            <div class="ALH">
                <h1> Admin Login</h1>
            </div>
            <!-- ADMIN ID,Password & Button START -->
            <form action="http://localhost/AirEcho/Admin_Log_in.php" method="post">
            <div class="AID">

                <input type="string" required="required" class="IDT"name ="uname" placeholder="  Enter Admin ID">
            </div>
            <div class="AID">
               
                    <input type="password" class="IDT" id="JV" placeholder="  Enter Your Password" id="psw" name="psw"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                        required><br><br>
                    <input type="checkbox" onclick="myFunction()"><span id="show">Show Password</span>
               
            </div>

            <div class="BT">
                <button type="submit" > Log In </button>
            </div>
            </form>

            <!-- ADMIN ID,Password & Button END -->

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

		$sql_query = "SELECT * FROM adminLogin where username='".$uname."' and password='".$pwd."'";
		#echo $sql_query;
		$result = $conn->query($sql_query);
		if ($result->num_rows==0)
		{
			echo "<span style='color:red'>"."Wrong username/password!</span>"."<br>";
		}	
		else
		{
            //echo "login";
            session_start();
            $_SESSION["Login"]="admin";
			header("Location:http://localhost/AirEcho/optionPage.php");
		}		
		$conn->close();
	}
?>










    </body>

</html>