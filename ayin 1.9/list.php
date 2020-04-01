<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    *{
        color: white;
    }

    .x{
        padding-left: 10%;
        padding-right:10%;
        }
    body{
        background-color: black;
    }
    .call-outs-container{            
    background-color: #3a3939;        
    padding-top:3.5%;
    padding-bottom:3.5%;
    padding-left:8%;
    padding-right:5%;
    margin-top: 2%;
    margin-bottom: 2%;
    border-radius: 10px;
    
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
    
</style>
</head>
<body>
    
    <div class="x">
    


     

    </div>
</body>

<script>

$.getJSON('https://corona.lmao.ninja/countries', function(data) {      
        data.forEach(function(i){ 
            console.log(i.name)
         $(".x").append(`
       
        <a href="country.html">
         <div class="call-outs-container">
         <div class="row">
         
             <div class="col-sm" style="font-size:200%; font-weight: bolder;">
             ${i.country}
            </div>
            <div class="col-sm-2">
             <div style="font-size: 150%; font-weight:bolder; padding-right:5%;">
             ${i.cases}
                </div>
                <div>
                Total Cases
                </div>
            </div>
        </div>
             </div>
        
            </a>`
     
         

);
    });
    });






 
</script>
</html>
<!-- 
// <div class="call-outs-container">
//         <div class="container">                          
//           
//                 <div class="country-name col-8" style="">
                
//                   ${i.country}

//                   </div>
                
//               </div>

              
        
//         </div>
    
        

    
//      </div>
         
         
//           -->