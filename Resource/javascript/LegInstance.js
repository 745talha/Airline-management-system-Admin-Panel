

$( document ).ready(function() {
    $("#airplaneId").focus(function(){
      
        $("#airplaneId").css("background-color","white");
        $("#airplaneId").css("border","2px solid #719ece");
    })
});

$( document ).ready(function() {
    $("#airplaneId").focusout(function(){
        var val1=$("#airplaneId" ).val();
        console.log(val1);
        if(/^[a-zA-Z0-9- ]*$/.test(val1) == false) {
            alert('Id you have entered is Invalid.');
            document.querySelector('#airplaneid').value = '';
          }
           val1=$("#id" ).val();
        if(val1!="")
         {
             $("#airplaneId").css("background-color","white");
             $("#airplaneId").css("border","2px solid #719ece");
         }
        else{
            $("#airplaneId").css("background-color","transparent");
            $("#airplaneId").css("border","2px solid white");
        }
    })
});

$( document ).ready(function() {
    $("#flightNumber").focus(function(){
        $("#flightNumber").css("background-color","white");
        $("#flightNumber").css("border","2px solid #719ece");
    })
});

$( document ).ready(function() {
    $("#flightNumber").focusout(function(){
        var val1=$("#flightNumber" ).val();
        if(/^[a-zA-Z0-9- ]*$/.test(val1) == false) {
            alert('Flight number  you have entered is Invalid.');
            document.querySelector('#flightNumber').value = '';
          }
           val1=$("#flightNumber" ).val();
        console.log(val1);
        if(val1!="")
         {
             $("#flightNumber").css("background-color","white");
             $("#flightNumber").css("border","2px solid #719ece");
         }
         else{
            $("#flightNumber").css("background-color","transparent");
            $("#flightNumber").css("border","2px solid white");
         }
        
    })
});

$( document ).ready(function() {
    $("#availableSeats").focus(function(){
        $("#availableSeats").css("background-color","white");
             $("#availableSeats").css("border","2px solid #719ece");
        
    })
});





$( document ).ready(function() {
    $("#availableSeats").focusout(function(){
        var val1=$("#availableSeats" ).val();
        if(/^[0-9]*$/.test(val1) == false) {
            alert('you have entered Invalid input.');
            document.querySelector('#availableSeats').value = '';
          }
           val1=$("#id" ).val();

        console.log(val1);
        if(val1!="")
         {
             $("#availableSeats").css("background-color","white");
             $("#availableSeats").css("border","2px solid #719ece");
         }
         else{
            $("#availableSeats").css("background-color","transparent");
            $("#availableSeats").css("border","2px solid white");
         }
        
    })
});


$( document ).ready(function() {
    $("#legNumber").focus(function(){
        $("#legNumber").css("background-color","white");
        $("#legNumber").css("outline","2px solid #719ece");
    })
});




$( document ).ready(function() {
    $("#legNumber").focusout(function(){
        var val1=$("#legNumber" ).val();
        if(/^[a-zA-Z0-9- ]*$/.test(val1) == false) {
            alert('You have entered is Invalid Leg Number.');
            document.querySelector('#legNumber').value = '';
          }
           val1=$("#legNumber" ).val();
        console.log(val1);
        if(val1!="")
         {
             $("#legNumber").css("background-color","white");
             $("#legNumber").css("outline","2px solid #719ece");
         }
        else{
            $("#legNumber").css("background-color","transparent");
            $("#legNumber").css("outline","2px solid white");
        }
    })
});


$('.document').ready(function(){
    $("#departureDate").mouseenter(function(){
        //console.log("mouse enter");
        $(this).prop('type', 'date');
   });
  
$("#departureDate").focusout(function(){
    //console.log("focus out");
    var val1 = $("#departureDate").val();
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();
    today = yyyy + '-' + mm + '-' + dd;
    if(val1<today)
    {
        alert("Invalid Date Selecetd !!!");
        document.querySelector('#departureDate').value = '';
    }

    val1 = $("#departureDate").val();
   
   // console.log("In dep focus out");
    if(val1=="")
    {
        $("#departureDate").css("color","transparent");
        $("#departureDate").css("background-color","transparent");
        $("#departureDate").css("border","2px solid white");
    }  
    else{
        $("#departureDate").css("background-color","white");
        $("#departureDate").css("border","2px solid #719ece");
    }
});
});


$('.document').ready(function()
{
    $("#departureDate").focus(function(){
        //console.log("focus in");
     $("#departureDate").css("color","rgb(19, 18, 18)");
 });
});

$('.document').ready(function(){
    $("#arrivalDate").mouseenter(function(){
        console.log("mouse enter");
        $(this).prop('type', 'date');
   });
   
$("#arrivalDate").focusout(function(){
    //console.log("foucus out");
    var val1 = $("#arrivalDate").val();
   // console.log("In dep focus out");
   var val2 = $("#departureDate").val();
   if(val1<val2)
   {
       alert("Invalid Date Selecetd !!!");
       document.querySelector('#arrivalDate').value = '';
   }


   val1 = $("#arrivalDate").val();


   if(val1=="")
    {
        $("#arrivalDate").css("color","transparent");
        $("#arrivalDate").css("background-color","transparent");
        $("#arrivalDate").css("border","2px solid white");
    }  
    else{
        $("#arrivalDate").css("background-color","white");
        $("#arrivalDate").css("border","2px solid #719ece");
    }
         
});
});
$('.document').ready(function(){
    $("#arrivalDate").focus(function(){
        //console.log("focus");
        $("#arrivalDate").css("color","rgb(19, 18, 18)");   
    });
});












$('.document').ready(function(){
    $('#departureSpan').hide();
   $('#departureCode').change(function(){
       var Place = $('#departureCode').val();
       if(Place!="")
       {
           $('#departureSpan').show();
           // $("#departureSpan").css("top","14px");
           //$("#departureSpan").css("padding-top","-200px");
       }
   })
});
$('.document').ready(function(){
    $('#arrivalSpan').hide();
   $('#arivalCode').change(function(){
       var place = $('#arivalCode').val();
       if(place!="")
       {
           $('#arrivalSpan').show();
           // $("#departureSpan").css("top","14px");
           //$("#departureSpan").css("padding-top","-200px");
       }
   })
});