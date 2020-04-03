<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
<style>
    *{
        color: white;
    }

    .x-1{
        padding-left: 10%;
        padding-right:10%;
        padding-top:6%;
        
        }

    .x{
        
        padding-left: 10%;
        padding-right:10%;
        padding-top:6%;
        }
    body{
        background-color: black;
    }
    .call-outs-container{            
    background-color: #363232;        
    padding-top:3.5%;
    padding-bottom:3.5%;
    padding-left:8%;
    padding-right:5%;
    margin-top: 2%;
    margin-bottom: 2%;
    border-radius: 10px;
    
    }
    .global-report{
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
    .page{
        padding-right:5%;
        padding-left:5%;
    }
    .search-bar{
    width:77%;
height: 50px;

}
.comp{
    padding:10%;
    color:white;
}
.nav-br{
    background-color: ;
    padding-top:3em;
    padding-bottom:3em;
}



.name-title{
    text-align: center;
}
    
.my-head{
            padding-top:3%;
            padding-bottom:3%;
            background-color:#363232;
           
            color:#fff;
            

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
                  
                  <a class="nav-link" href="New Folder/" >
                    <i class="fa fa-search" style="color: white;"></i>
                    Search Country<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  
                  <a class="nav-link" href="#">
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














    <div class="page">
    
    <div class="x-1">
    <div class="search-bar">
    <div style="width: 130%; height: 60px; border-radius: 15px; background-color: #363232; font-size:medium; padding-left: 8%; padding-top: 1%; padding-bottom: 4%;">
            <i class="fa fa-search icon"></i>
            <input type="text" id="search" style="font-size:150%; background-color: #363232; height:45px; border: none; padding-left: 5%; width: 80%;" placeholder="Search Country">
    </div>   
    </div>
    </div>
    <div class="x">
    
    </div>
</div>
</body>

<script>

$.getJSON('https://corona.lmao.ninja/countries', function(data) {      
        data.forEach(function(i){ 
            console.log(i)
         $(".x").append(`
       
        <a href="country.php?id=${i.country}">
         <div class="call-outs-container">
         <div class="container">
         <div class="row">
            
                <div class="col-sm" style="font-size:200%; font-weight: bolder;">
             ${i.country}
            </div>
            <div class="col-sm-3">
             <div style="font-size: 150%; font-weight:bolder;color:#e66b6b ">
             ${i.cases}
                </div>
                <div>
                Total Cases
                </div>
            </div>
            </div>
        </div>
             </div>
        
            </a>`
     
         

);
    });
    });

    $(document).ready(function(){
        $('#search').keyup(function(){
            $('.x').html('');
            var searchField = $('#search').val();
            var expression = new RegExp(searchField,"i");
            $.getJSON("https://corona.lmao.ninja/countries",function(data){
                $.each(data,function(key,i){
                    if(i.country.search(expression) !=-1){
                        $(".x").append(`
                        
                        
       
        <a href="country.php?id=${i.country}">
         <div class="call-outs-container">
         <div class="container">
         <div class="row">
            
                <div class="col-sm" style="font-size:200%; font-weight: bolder;">
             ${i.country}
            </div>
            <div class="col-sm-3">
             <div style="font-size: 150%; font-weight:bolder;color:#e66b6b ">
             ${i.cases}
                </div>
                <div>
                Total Cases
                </div>
            </div>
            </div>
        </div>
             </div>
        
            </a>
                        `);
                        
                    }
                });
            });
        });
    });






 
</script>
</html>
