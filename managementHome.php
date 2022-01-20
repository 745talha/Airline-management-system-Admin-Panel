<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    
    <link rel="stylesheet" href="Resource/Bootstrap/css/bootstrap.min.css">
    <script src="Resource/jquery.js"></script>
    <script src="Resource/Bootstrap/js/bootstrap.min.js"></script>
    <title>Management Home</title>
    <!-- <script src="Resource/javascript/managementHome.js"></script> -->
    <link rel="stylesheet" href="Resource/style/managementHome.css"></link>
    <script src="Resource/javascript/mangementHome.js"> </script>
    <script src="Resource/jquery.js"> </script>
</head>
<body>
    <?php  session_start();

    if(isset($_SESSION["Login"]))
    session_unset();
    session_destroy();
    ?>
    <div >
        <img src="Resource/images/image3.jpg" alt="airplane Image" class="homeimage">
    </div>
    <div>
        <img src="Resource/Logo.png" alt="Web Logo" id="logo" width="400px;">
        
    </div>
    <div id="options">
        <button onclick="adminpage()" type="button" class="btn btn-light"id= "btnStyle"><b>&nbsp; ADMIN LOGIN &nbsp;</b></button><br><br>
        <button onclick="employeepage()" type="button" class="btn btn-light"id="btnStyle"><b>EMPLOYEE LOGIN</b></button>
    </div>
</body>
</html>