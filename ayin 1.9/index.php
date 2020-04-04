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
.my-head{
            padding-top:3%;
            padding-bottom:3%;
            background-color:#363232;
           
            color:#fff;
            

        }
.perCase{
    margin-top:30px;
    margin-bottom: 30px;
}
.number-datax{
    font-weight: 500;
}
        
        
    </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #3a3939;">
        <a class="navbar-brand" href="#" style="font-weight: bolder;">    COVID-19 REPORT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav ml-auto" >
                <li class="nav-item active" >
                  
                  <a class="nav-link" href="#">
                    <i class="fa fa-globe" style="color: white; "></i>
                    World statistics <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  
                  <a class="nav-link" href="list.php" >
                    <i class="fa fa-search" style="color: white;"></i>
                    Search Country<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  
                  <a class="nav-link" href="PH.php">
                    <i class="fa fa-map-marker" style="color: white;"></i>
                    PH<span class="sr-only">(current)</span></a>
                </li>
              
              </ul>
             
            </div>           
    </nav>
 
    <div style="margin-bottom: 40px;
	 margin-top:40px;"
	
	> &nbsp;
	</div>

    <div class="container">
        
        <div class="title-world" style="margin-top: 5%; font-size:52pt; font-weight: bolder; text-align: center;">
            WORLD STATISTICS
        </div> 
        <div class="date-time" style="font-weight:bolder; margin-top:3%; text-align: center;"> 
            As of <span id = "demo"></span>
        </div>
       

        <!-- total case-->
             
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    
    <script>window.jQuery || document.write('<script src="jquery-slim.min.js"><\/script>')</script>
            <script src="popper.min.js"></script>
            <script src="bootstrap.min.js"></script>
            

    <script>

        
        
        var d = new Date();
        document.getElementById("demo").innerHTML = d;
      
        //{"cases":1098434,"deaths":59160,"recovered":228923,"updated":1585967492240,"active":810351,"affectedCountries":207}

        var url= "https://corona.lmao.ninja/all";
        

    $.getJSON(url, function(i) {      
        
        console.log(i);
         $(".container").append(`     

        <div class="all-data" style="text-align: center; font-size: large;">
             <!-- total case-->
            <div class="row perCase">               
                <div class="col" >
                    <div style="font-size:48pt" class="number-datax">${(i.cases).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}</div>
                    Total Case
                </div>
            </div>

             <!-- death-->
             <div class="row perCase">               
                <div class="col" >
                    <div style="font-size:48pt" class="number-datax">${i.deaths.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}</div>
                    Total Death
                </div>
            </div>
            
             <!-- total recovered-->
             <div class="row perCase">               
                <div class="col" >
                    <div style="font-size:48pt" class="number-datax">${i.recovered.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}</div>
                    Recovered
                </div>
            </div>

             <!-- total case-->
             <div class="row perCase">               
                <div class="col" >
                    <div style="font-size:48pt" class="number-datax">${i.active.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}</div>
                    Active Case
                </div>
            </div>

             <!-- total case-->
             <a href="list.php">
                 <div class="row perCase">               
                <div class="col" >
                    <div style="font-size:48pt" class="number-datax" id="value">${i.affectedCountries.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}</div>
                    Affected Countries
                </div>
            </div>
        </a>
  
        </div>
         
         
         
         
         
         
         
         
         
         
         
         `);
    
    });

    
            $('.number-datax').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });


    </script>
    <script>


    </script>

</body>
</html>