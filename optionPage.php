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
    <link rel="stylesheet" href="Resource/style/optionPage.css"></link>
    <script src="Resource/javascript/optionPage.js"> </script>
    <script src="Resource/jquery.js"> </script>
</head>
<body>
    <div >
        <img src="Resource/images/image3.jpg" alt="airplane Image" class="homeimage">
    </div>
    <div>
        <img src="Resource/Logo.png" alt="Web Logo" id="logo" width="400px;">
        
    </div>

    <div id ="formContainer">
        <div class="form-row" id ="row1">
            <div class="col">
                <button onclick="AddFlight()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; Add Flight &nbsp;</b></button><br><br>            
              </div>
              <div class="col">
                <button onclick="ADDEMPLOYEE()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; ADD EMPLOYEE &nbsp;</b></button><br><br>  
              </div>
              </div>

              <div class="form-row" >
                <div class="col">
                    <button onclick="FLIGHTLEG()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; FLIGHT LEG &nbsp;</b></button><br><br>

                  </div>
                  <div class="col">
                    <button onclick="LEGINSTANCE()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; LEG INSTANCE &nbsp;</b></button><br><br>
                  </div>
                  </div>


                  <div class="form-row" >
                    <div class="col">
                       <button onclick="AIRCRAFT()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; AIRCRAFT &nbsp;</b></button><br><br>

                      </div>
                      <div class="col">
                        <button onclick="AIRPORT()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; AIRPORT &nbsp;</b></button><br><br>
                      </div>
                      </div>
                      <div class="form-row" >
                        <div class="col">
                            <button onclick="EMPLOYEEDETAIL()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; EMPLOYEE DETAIL &nbsp;</b></button><br><br>
                          </div>
                          <div class="col">
                            <button onclick="Logout()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; LOGOUT &nbsp;</b></button><br><br>  
                          </div>
                          </div>
            </div>




<!-- 
    <div id="options">
       
        <button onclick="AddFlight()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; Add Flight &nbsp;</b></button><br><br>  
        <button onclick="ADDEMPLOYEE()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; ADD EMPLOYEE &nbsp;</b></button><br><br>
                <button onclick="FLIGHTLEG()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; FLIGHT LEG &nbsp;</b></button><br><br>
                <button onclick="LEGINSTANCE()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; LEG INSTANCE &nbsp;</b></button><br><br>
                <button onclick="AIRCRAFT()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; AIRCRAFT &nbsp;</b></button><br><br>
                <button onclick="AIRPORT()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; AIRPORT &nbsp;</b></button><br><br>
                <button onclick="EMPLOYEEDETAIL()" type="button" class="btn btn-light" id="btnStyle"><b>&nbsp; EMPLOYEE DETAIL &nbsp;</b></button><br><br>
  


    </div> -->
</body>
</html>