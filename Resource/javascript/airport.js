
function validation() {
    var airportname = document.getElementById("airportname").value;
    var airportcode = document.getElementById("airportcode").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
  var error_counter=0;
   
    if (airportname.length >=80  ) {
        let text = "Please enter  Airport Name lesser than 80 characters";
        document.getElementById("airportname_error").innerHTML = text;
        error_counter++;
    }
     if(airportname == "" || airportname == null)
    {
       let text = "Please enter  Airport Name";
        document.getElementById("airportname_error").innerHTML = text;
        error_counter++;
    }
      if (airportcode =="" || airportcode == null) {   
        document.getElementById("airportcode_error").innerHTML =  "Please Enter  Airport Code";;
        error_counter++;
    }
      if (airportcode.length >= 10) {
        document.getElementById("airportcode_error").innerHTML = "Please Enter  Airport Code lesser tha 10";
        error_counter++;
    }
    if (city == "" || city == null) {
        document.getElementById("city_error").innerHTML = "Kindy Enter City Name";
        error_counter++;
    
    }
     if (city.length >= 50) {

        document.getElementById("city_error").innerHTML = "Please Enter  City Name lesser than 50";
        error_counter++;
    
    }
    if (state == ""  || state==null) {
        document.getElementById("state_error").innerHTML = "Please Enter State";
        error_counter++;
    }
    if (state.length >= 50) {

        document.getElementById("state_error").innerHTML = "Please enter State lesser than 50 characters";
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
    document.getElementById("airportname").classList.add("input_selected_colors");
    document.getElementById("airportcode").classList.add("input_selected_colors");
    document.getElementById("city").classList.add("input_selected_colors");
    document.getElementById("state").classList.add("input_selected_colors");
}