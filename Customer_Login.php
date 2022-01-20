<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Echo Customer Login</title>
    <link rel="stylesheet" href="Resource/style/Customer_Login.css"></link>
    <script src="Resource/javascript/Employee_Login.js"></script>
</head>

<body>

    <body background="Resource/images/Customer.jpg" style="width: 100%; margin-right:-5px; margin-top: -5px; position:absolute; margin-left: -5px;">
        <background repeate="no-repeate">
    </body>

    <div class="CLH">
        <h1> Customer Login</h1>
    </div>
    <!-- Customer ID,Password & Button START -->
    <form action="http://localhost/AirEcho/Customr_Login.php" method="post">
    <div class="CID">

        <input type="string" required="required" class="IDT" placeholder="  Enter Customer ID" name="uname">
    </div>
    <div class="CID">
        
            <input type="password" class="IDT" id="JV" placeholder="  Enter Your Password" id="psw" name="psw"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                required><br><br>
            <input type="checkbox" onclick="myFunction()"><span id="show">Show Password</span>
        </div> 
     <div class="BT">
        <button type="submit"> Log In </button>
    </div> 

        </form>
   

  
    <!-- Customer ID,Password & Button END -->




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

		$sql_query = "SELECT * FROM customerLogin where username='".$uname."' and password='".$pwd."'";
		#echo $sql_query;
		$result = $conn->query($sql_query);
		if ($result->num_rows==0)
		{
			echo "<span style='color:red'>"."Wrong username/password!</span>"."<br>";
		}	
		else
		{
			header("Location:http://localhost/AirEcho/home.html");
		}		
		$conn->close();
	}
?>



</html>

