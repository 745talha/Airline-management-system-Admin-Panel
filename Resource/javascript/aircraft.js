
function validation() {
    var airplaneid = document.getElementById("airplaneid").value;
    var airplanetype = document.getElementById("airplanetype").value;
    var Company = document.getElementById("Company").value;
    var planeleg = document.getElementById("planeleg").value;
    var maximumseats = document.getElementById("maximumseats").value; 
    var error_counter = 0;
    if (airplaneid.length >=15  ) {
        let text = "Please Enter  Airplane id  lesser than 15 characters";
        document.getElementById("airplaneid_error").innerHTML = text;
        error_counter++;
    }
     if(airplaneid == "" || airplaneid == null)
    {
       let text = "Please enter  Plane Id";
        document.getElementById("airplaneid_error").innerHTML = text;
        error_counter++;
    }
      if (airplanetype =="" || airplanetype == null) {   
        document.getElementById("airplanetype_error").innerHTML =  "Please Enter  Airplane Type";;
        error_counter++;
    }
    if (airplanetype.length >= 30) {
        document.getElementById("airplanetype_error").innerHTML = "Please Enter  Airplane Type lesser than 30";
        error_counter++;
        
    }
    if (Company == "" || Company == null) {
        document.getElementById("Company_error").innerHTML = "Kindy Enter Company Name";
        error_counter++;
    
    }
     if (Company.length >= 30) {
        document.getElementById("Company_error").innerHTML = "Kindy Enter Company Name lesser than 30";
        error_counter++;
    
    }
    if (planeleg == ""  || planeleg==null) {
        document.getElementById("planeleg_error").innerHTML = "Please Enter Plan Leg";
        error_counter++;
    }
    if (planeleg>= 15) {
        document.getElementById("planeleg_error").innerHTML = "Please Enter Plan Leg lesser than 15";
        error_counter++;
    }

    if (maximumseats == ""  || maximumseats==null) {
        document.getElementById("maximumseats_error").innerHTML = "Please Enter Maximum Seats";
        error_counter++;
    }
    if (maximumseats >= 10) {
        document.getElementById("maximumseats_error").innerHTML = "Please Enter Maximum Seats lesser than 10";
        error_counter++;
    }

    if(error_counter>0)
    {
        return false 
    }
    else{
        alert("Details added Successfully")
         return true;
    } 

}



function color()
{
    document.getElementById("airplaneid").classList.add("input_selected_colors");
    document.getElementById("airplanetype").classList.add("input_selected_colors");
    document.getElementById("Company").classList.add("input_selected_colors");
    document.getElementById("planeleg").classList.add("input_selected_colors");
    document.getElementById("maximumseats").classList.add("input_selected_colors");
}