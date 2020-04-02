<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>COVID-19 REPORT</title>
    <style>
        *{
            color: white;
        }
        body{
            background-color: black;
        }
        .call-outs-container{            
        background-color: #3a3939;        
        padding-top:2%;
        padding-bottom:2.5%;
        padding-left:5%;
        padding-right:5%;
        margin-top: 5%;
        margin-bottom: 5%;
        }
        .call-out{
            background-color: rgb(0, 0, 0);
        }
        .data-card{
            background-color: black;
            padding-top: 3%;
            padding-bottom: 3%;
            border-radius: 7px;
        }
        .data-digit{
            text-align: center;
            font-size: x-large;
            font-weight: bolder;
            color: #e66b6b;

        }
        .data-desc{
            text-align: center;
        }
        .country-name{
            font-size:200%;
            font-weight: bolder;
        }
        .nav-br{
    background-color: #363232;
    padding-top:3em;
    padding-bottom:3em;
}
        
    </style>
  </head>
  <body>
  <div class="nav-br">

   </div>
    
    <div class="container">
        <div class="date-time" style="font-weight:bolder; margin-top:10%;"> 
            As of <span id = "demo"></span>
        </div>
       
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    
    <script>
        
        var d = new Date();
document.getElementById("demo").innerHTML = d;
        var url_pass ="<?php echo $_GET['id']; ?>";
        
        var url= "https://corona.lmao.ninja/countries/" + url_pass;;
    $.getJSON(url, function(i) {      
        
        console.log(i);
         $(".container").append(`


         <div class="call-outs-container">
    <div class="container">
                        <div class="row">
           <div class="country-name col-8" style="padding-top:1%;">
             <i class="fa fa-map-marker" style="font-size:48px; color:#e66b6b"></i>
             ${i.country}
             </div>
           <div class="col-4" style="padding-top:1%;">
             <div class="data-digit" style="text-align: right; color: #fabd4c;">
                 ${i.todayCases}
             </div>
             <div class="data-desc" style="text-align: right;">                       
                 Today Case
             </div>  
             </div>
           
         </div>
         <div class="row" style="margin-top: 1%;">
           <div class="data-card col" style=  "margin-right:1%; margin-top: 1%;" >
             <div class="data-digit" style="color: #fabd4c;">
                 ${i.cases}
             </div>
             <div class="data-desc" >
                 Total Case
             </div>    
         </div>
           <div class="data-card col" style="margin-right:1%;margin-top: 1%; " >
             
             <div class="data-digit" style="color:#8786e6" >
                 ${i.deaths}
             </div>
             <div class="data-desc">
                 Total of Death
             </div> 
             
             </div>
           <div class="data-card col" style="margin-top: 1%;">
            <div class="data-digit" style="color:#8786e6">
             ${i.todayDeaths    }
         </div>
         <div class="data-desc">
             Today Death
         </div> 
         
         
         </div>
           
         </div>

         <div class="row" style="margin-top: 1%;">
             <div class="data-card col" style=  "margin-right:1%" >
                 <div class="data-digit">
                     ${i.active}
                 </div>
                 <div class="data-desc">
                     Active Case
                 </div> 
             </div>
             <div class="data-card col" >
                 <div class="data-digit" >
                     ${i.critical}
                 </div>
                 <div class="data-desc">
                     Critical Case
                 </div> 
             </div>
             
           </div>
           
           <div class="row" style="margin-top: 1%;">
             <div class="data-card col" >
                 <div class="data-digit" style="color:#6be771">
                     ${i.recovered}
                 </div>
                 <div class="data-desc">
                     Number of Recovered
                 </div> 

             </div>
             
           </div>
     </div>

 </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         `);
    
    });



    </script>

</body>
</html>