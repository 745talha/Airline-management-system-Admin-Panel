

function next(){
    document.getElementById("formContainer").style.display = "none";
    document.getElementById("formContainer2").style.display = "block";   
}
function previous(){
    document.getElementById("formContainer2").style.display = "none";
    document.getElementById("formContainer").style.display = "block";
}

$( document ).ready(function() {
    $("#username").focus(function(){
        $("#username").css("background-color","white");
        $("#username").css("border","2px solid #719ece");
    })
});

$( document ).ready(function() {
    $("#username").focusout(function(){
        var val1=$("#username").val();
        console.log("uname"+val1);
        if(/^[a-zA-Z0-9- ]*$/.test(val1) == false) {
            alert('You have entered Invalid Username.');
            document.querySelector('#username').value = '';
          }
          val1=$("#username").val();
        if(val1!="")
         {
             $("#username").css("background-color","white");
             $("#username").css("border","2px solid #719ece");
         }
         else{
            $("#username").css("background-color","transparent");
            $("#username").css("border","2px solid white");
         }
        
    })
});

$( document ).ready(function() {
    $("#password").focus(function(){
        $("#password").css("background-color","white");
        $("#password").css("border","2px solid #719ece");
    })
});


$( document ).ready(function() {
    $("#password").focusout(function(){
        var val1=$("#password" ).val();
        // console.log(val1);


        if(val1!="")
         {
             $("#password").css("background-color","white");
             $("#password").css("border","2px solid #719ece");
         }
         else{
            $("#password").css("background-color","transparent");
            $("#password").css("border","2px solid white");
         }
        
    })
});

$( document ).ready(function() {
    $("#firstname").focus(function(){
        $("#firstname").css("background-color","white");
        $("#firstname").css("border","2px solid #719ece");
    })
});

$( document ).ready(function() {
    $("#firstname").focusout(function(){
        var val1=$("#firstname" ).val();
        // console.log(val1);
        if(/^[a-zA-Z0-9- ]*$/.test(val1) == false) {
            alert('You have entered Invalid First Name.');
            document.querySelector('#firstname').value = '';
          }
          val1=$("#firstname" ).val();

        if(val1!="")
         {
             $("#firstname").css("background-color","white");
             $("#firstname").css("border","2px solid #719ece");
         }
         else{
            $("#firstname").css("background-color","transparent");
            $("#firstname").css("border","2px solid white");
         }
        
    })
});

$( document ).ready(function() {
    $("#lastname").focus(function(){
        $("#lastname").css("background-color","white");
        $("#lastname").css("border","2px solid #719ece");   
    })
});

$( document ).ready(function() {
    $("#lastname").focusout(function(){
        var val1=$("#lastname" ).val();
        // console.log(val1);
        if(/^[a-zA-Z0-9- ]*$/.test(val1) == false) {
            alert('You have entered Invalid Last Name.');
            document.querySelector('#lastname').value = '';
          }
          val1=$("#lastname" ).val();

        if(val1!="")
         {
             $("#lastname").css("background-color","white");
             $("#lastname").css("border","2px solid #719ece");
         }
         else{
            $("#lastname").css("background-color","transparent");
            $("#lastname").css("border","2px solid white");
         }
        
    })
});

$( document ).ready(function() {
    $("#cnic").focus(function(){
        $("#cnic").css("background-color","white");
        $("#cnic").css("border","2px solid #719ece");
    })
});


$( document ).ready(function() {
    $("#cnic").focusout(function(){
        var val1=$("#cnic" ).val();
        // console.log(val1);

        if(/^[0-9- ]*$/.test(val1) == false) {
            alert('You have entered Invalid CNIC.');
            document.querySelector('#cnic').value = '';
          }

          val1=$("#cnic" ).val();
        if(val1!="")
         {
             $("#cnic").css("background-color","white");
             $("#cnic").css("border","2px solid #719ece");
         }
         else{
            $("#cnic").css("background-color","transparent");
            $("#cnic").css("border","2px solid white");
         }
        
    })
});

$( document ).ready(function() {
    $("#phonenumber").focus(function(){
        $("#phonenumber").css("background-color","white");
        $("#phonenumber").css("border","2px solid #719ece");
    })
});


$( document ).ready(function() {
    $("#phonenumber").focusout(function(){
        var val1=$("#phonenumber" ).val();
        // console.log(val1);

        if(/^\d{11}$/.test(val1) == false) {
            alert('You have entered Invalid Phone number.');
            document.querySelector('#phonenumber').value = '';
          }
          val1=$("#phonenumber" ).val();
        if(val1!="")
         {
             $("#phonenumber").css("background-color","white");
             $("#phonenumber").css("border","2px solid #719ece");
         }
         else{
            $("#phonenumber").css("background-color","transparent");
            $("#phonenumber").css("border","2px solid white");
         }
        
    })
});

$( document ).ready(function() {

    $("#gender").focus(function(){
        // var val1=$("#gender" ).val();
        // console.log(val1);
        // if(val1!="")
        //  {
             $("#gender").css("background-color","white");
             $("#gender").css("border","2.2px solid #719ece");
        //  }
        
    });
});
    $( document ).ready(function() {
    $("#gender").focusout(function(){
        var val1=$("#gender").val();
       // console.log(val1);
        if(val1==null)
         {
            $("#gender").css("background-color","transparent");
            $("#gender").css("border","1.6px solid white");
             
         }
         else{
            $("#gender").css("background-color","white");
             $("#gender").css("border","2px solid #719ece");
         }
        
    });
});


$('.document').ready(function(){
    $("#dob").mouseenter(function(){
        //console.log("mouse enter");
        $(this).prop('type', 'date');
   });
});


$( document ).ready(function() {
    $("#dob").focus(function(){
        $("#dob").css("background-color","white");
        $("#dob").css("border","2px solid #719ece");
        
    })
});

$( document ).ready(function() {
    $("#dob").focusout(function(){
        var val1=$("#dob" ).val();
        // console.log(val1);


        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        today = yyyy-18 + '-' + mm + '-' + dd;
        console.log(today);
        console.log(val1);
        console.log(today>val1);
        if(today<val1) {
            alert('DOB is Invalid !!!');
            document.querySelector('#dob').value = '';
          }
          val1=$("#dob" ).val();
        if(val1!="")
         {
             $("#dob").css("background-color","white");
             $("#dob").css("border","2px solid #719ece");
         }
         else{
            $("#dob").css("background-color","transparent");
            $("#dob").css("border","2px solid white");
         }
        
    })
});



$('.document').ready(function(){
    //  $('#genderspan').hide();
   $('#gender').change(function(){
       var data = $('#gender').val();
    //    console.log("in change "+data);
       if(data!="")
       {
           $('#genderspan').show();
           // $("#departureSpan").css("top","14px");
           //$("#departureSpan").css("padding-top","-200px");
       }
   })
});

$( document ).ready(function() {
    $("#salary").focus(function(){
        $("#salary").css("background-color","white");
        $("#salary").css("border","2px solid #719ece");
    })
});


$( document ).ready(function() {
    $("#salary").focusout(function(){
        var val1=$("#salary").val();
        console.log("salary is : "+val1);


        if(/^[0-9- ]*$/.test(val1) == false) {
            alert('You have entered Invalid Salary.');
            document.querySelector('#salary').value = '';
          }
        if(val1!="")
         {
             $("#salary").css("background-color","white");
             $("#salary").css("border","2px solid #719ece");
         }
        else{
            $("#salary").css("background-color","transparent");
             $("#salary").css("border","2px solid white");
        }
    })
});



$( document ).ready(function() {
    $("#passportid").focus(function(){
        $("#passportid").css("background-color","white");
        $("#passportid").css("border","2px solid #719ece");
    })
});

$( document ).ready(function() {
    $("#passportid").focusout(function(){
        var val1=$("#passportid" ).val();
        // console.log(val1);
        if(/^[a-zA-Z0-9- ]*$/.test(val1) == false) {
            alert('You have entered Invalid Passport ID.');
            document.querySelector('#passportid').value = '';
          }
          val1=$("#passportid" ).val();
        if(val1!="")
         {
             $("#passportid").css("background-color","white");
             $("#passportid").css("border","2px solid #719ece");
         }
        else{
            $("#passportid").css("background-color","transparent");
             $("#passportid").css("border","2px solid white");
        }
    })
});

$( document ).ready(function() {
    $("#passportid").focus(function(){
        $("#passportid").css("background-color","white");
        $("#passportid").css("border","2px solid #719ece");
});
});




$( document ).ready(function() {
    $("#accountnumber").focus(function(){
        $("#accountnumber").css("background-color","white");
        $("#accountnumber").css("border","2px solid #719ece");
        
    })
});


$( document ).ready(function() {
    $("#accountnumber").focusout(function(){
        var val1=$("#accountnumber" ).val();
        if(/^[a-zA-Z0-9- ]*$/.test(val1) == false) {
            alert('You have entered Invalid Account Number.');
            document.querySelector('#accountnumber').value = '';
          }

          val1=$("#accountnumber" ).val();
        // console.log(val1);
        if(val1!="")
         {
             $("#accountnumber").css("background-color","white");
             $("#accountnumber").css("border","2px solid #719ece");
         }
         else{
            $("#accountnumber").css("background-color","transparent");
            $("#accountnumber").css("border","2px solid white");
         }
        
    })
});



$( document ).ready(function() {
    $("#position").focus(function(){
        $("#position").css("background-color","white");
        $("#position").css("border","2px solid #719ece");
        
    })
});


$( document ).ready(function() {
    $("#position").focusout(function(){
        var val1=$("#position" ).val();

        if(/^[a-zA-Z ]*$/.test(val1) == false) {
            alert('You have entered Invalid Position.');
            document.querySelector('#position').value = '';
          }
          val1=$("#position" ).val();
        // console.log(val1);
        if(val1!="")
         {
             $("#position").css("background-color","white");
             $("#position").css("border","2px solid #719ece");
         }
         else{
            $("#position").css("background-color","transparent");
            $("#position").css("border","2px solid white");
         }
        
    })
});


$( document ).ready(function() {
    // $("#qbox span").css("color","transparent");

    $("#qualification").focus(function(){
        // var val1=$("#qualification" ).val();
        // console.log(val1);
        // if(val1!="")
        //  {
             $("#qualification").css("background-color","white");
             $("#qualification").css("border","2px solid #719ece");
             $("#qbox span").css("transition","fade-in");
             $("#qbox span").css("color","white");
             $("#qualification").attr("placeholder","");
         //}
    });
    $("#qualification").focusout(function(){
         var val1=$("#qualification" ).val();
        //console.log(val1);



        if(val1!="")
         {
             $("#qualification").css("background-color","white");
             $("#qualification").css("border","2px solid #719ece");
         }
         else{
            // $("#qualification").css("color","transparent");
            $("#qualification").css("background-color","transparent");
            $("#qualification").css("border","1.6px solid white");
            $("#qbox span").css("color","transparent");
            $("#qualification").attr("placeholder","Qualification");
         }
    })
});

$( document ).ready(function() {

    // $("#abox span").css("color","rgb(19,18,18)");
    $("#address").focus(function(){
        // var val1=$("#qualification" ).val();
        // console.log(val1);
        // if(val1!="")
        //  {
             $("#address").css("background-color","white");
             $("#address").css("border","2px solid #719ece");
             $("#abox span").css("color","white");
             $("#address").attr("placeholder","");
         //}
    });
    $("#address").focusout(function(){
         var val1=$("#address" ).val();
        //console.log(val1);



        if(val1!="")
         {
             $("#address").css("background-color","white");
             $("#address").css("border","2px solid #719ece");
         }
         else{
            $("#address").css("background-color","transparent");
            $("#address").css("border","1.6px solid white");
            $("#abox span").css("color","transparent");
            $("#address").attr("placeholder","Address");
         }
    })
});

