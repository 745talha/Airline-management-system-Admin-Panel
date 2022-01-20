
$( document ).ready(function() {
    $("#id").focus(function(){
        $("#id").css("background-color","white");
        $("#id").css("border","2px solid #719ece");
    })
});




$( document ).ready(function() {
    $("#id").focusout(function(){
        var val1=$("#id" ).val();
        console.log(val1);
        if(/^[a-zA-Z0-9- ]*$/.test(val1) == false) {
            alert('Id you have entered is Invalid.');
            document.querySelector('#id').value = '';
          }
           val1=$("#id" ).val();
        if(val1!="")
         {  
             $("#id").css("background-color","white");
             $("#id").css("border","2px solid #719ece");
         }
         else{
            $("#id").css("background-color","transparent");
           $("#id").css("border","2px solid white");
         }
        
    })
});

$( document ).ready(function() {
    $("#name").focus(function(){
         $("#name").css("background-color","white");
        $("#name").css("border","2px solid #719ece");
        
    })
});




$( document ).ready(function() {
    $("#name").focusout(function(){
        var val1=$("#name" ).val();
        console.log(val1);

        if(/^[a-zA-Z0-9- ]*$/.test(val1) == false) {
            alert('Name you have entered is Invalid.');
            document.querySelector('#name').value = '';
          }

          val1=$("#name" ).val();
        if(val1!="")
         {
             $("#name").css("background-color","white");
             $("#name").css("border","2px solid #719ece");
         }
         else{
            $("#name").css("background-color","transparent");
            $("#name").css("border","2px solid white");
         }
        
    })
});


$( document ).ready(function() {
    $("#number").focus(function(){
        $("#number").css("background-color","white");
        $("#number").css("border","2px solid #719ece");
    })
});

$( document ).ready(function() {
    $("#number").focusout(function(){
        var val1=$("#number" ).val();
        console.log(val1);
        if(/^[a-zA-Z0-9- ]*$/.test(val1) == false) {
            alert('Number you have entered is Invalid.');
            document.querySelector('#number').value = '';
          }
        if(val1!="")
         {
             $("#number").css("background-color","white");
             $("#number").css("border","2px solid #719ece");
         }
         else{
            $("#number").css("background-color","transparent");
            $("#number").css("border","2px solid white");
         }
        
    })
});




$( document ).ready(function() {
    $("#fareCode").focus(function(){
        $("#fareCode").css("background-color","white");
             $("#fareCode").css("border","2px solid #719ece");
    })
});


$( document ).ready(function() {
    $("#fareCode").focusout(function(){
        var val1=$("#fareCode" ).val();
        console.log(val1);
        if(/^[a-zA-Z]*$/.test(val1) == false) {
            alert('Fare Code you have entered is Invalid.');
            document.querySelector('#fareCode').value = '';
          }
          val1=$("#fareCode" ).val();
        if(val1!="")
         {
             $("#fareCode").css("background-color","white");
             $("#fareCode").css("border","2px solid #719ece");
         }
         else{
            $("#fareCode").css("background-color","transparent");
            $("#fareCode").css("border","2px solid white");
         }
        
    })
});



$('.document').ready(function(){

    $("#date").mouseenter(function(){
        $(this).prop('type', 'date');
   });
   $("#date").focus(function(){
    $("#date").css("color","rgb(19, 18, 18)");      
});


$("#date").focus(function(){
    $("#date").css("background-color","white");
    $("#date").css("border","2px solid #719ece");
    $("#date").css("color","rgb(19, 18, 18)");
});

$("#date").focusout(function(){
    var val1 = $("#date").val();
   // console.log("In dep focus out");
   //console.log("date : "+val1);
   var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();
    today = yyyy + '-' + mm + '-' + dd;
    //console.log("today : "+today);
    if(val1<today)
    {
        alert("Invalid Date Selecetd !!!");
        document.querySelector('#date').value = '';
    }

    val1 = $("#date").val();
    if(val1=="")
    {
        $("#date").css("background-color","transparent");
        $("#date").css("border","solid 2px white");
        $("#date").css("color","transparent");
    }
    else{
        $("#date").css("background-color","white");
        $("#date").css("border","2px solid #719ece");
        $("#date").css("color","rgb(19, 18, 18)");
    }
         
});
});








$('#departureTime').ready(function(){
    $('#departureTime').change(function(){
        var val1 = $("#departureTime").val();
        console.log(val1);
    if(val1=="")
    {
        $("#departureTime").css("background-color","transparent");
        $("#departureTime").css("border","solid 2px white");
    }
    else{
        $("#departureTime").css("background-color","white");
        $("#departureTime").css("border","2px solid #719ece");
    }
    })
});




$('#arrivalTime').ready(function(){
    $('#arrivalTime').change(function(){
        var val1 = $("#arrivalTime").val();
        var val1 = $("#departureTime").val();
        console.log(val1);
    if(val1=="")
    {
        $("#arrivalTime").css("background-color","transparent");
        $("#arrivalTime").css("border","solid 2px white");
    }
    else{
        $("#arrivalTime").css("background-color","white");
        $("#arrivalTime").css("border","2px solid #719ece");
    }
    })
});



// option selected or not 
$('.document').ready(function(){
    // $('#departureSpan').hide();
    $('#departurePlace').change(function(){
        var depPlace = $('#departurePlace').val();
        if(depPlace!="")
        {
            $('#departureSpan').show();
           // console.log(depPlace);
            // $("#departureSpan").css("top","14px");
            //$("#departureSpan").css("padding-top","-200px");
        }
        else{
            $('#departureSpan').hide();
        } 
    })
});


$('.document').ready(function(){
   // $('#arrivalSpan').hide();
   $('#arivalPlace').change(function(){
       var arivalPlace = $('#arivalPlace').val();
       var depPlace = $('#departurePlace').val();
       if(arivalPlace==depPlace){
           alert("Departure and Arrival Place must not be Same");
         //  document.querySelector('#arivalPlace').value = '';
         // document.querySelector('#departurePlace').value = '';
       }
       if(arivalPlace!="")
       {
           $('#arrivalSpan').show();
           // $("#departureSpan").css("top","14px");
           //$("#departureSpan").css("padding-top","-200px");
       }
       else{
        $('#arrivalSpan').hide();
       }
   })
});









