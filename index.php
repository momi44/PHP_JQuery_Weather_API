<!DOCTYPE html>
<html lang="en">
  
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check the Weather</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
      
    </head>    
    <body>  
      <div class="container center">
          <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="padding"> Check The Weather</h1>
                    <p class="lead padding2"> check the weather forcast by entering the name of city here
                        <span class="glyphicon glyphicon-hand-down"></span>
                    </p>
                    <form>
                        <div class="form-group">
                            <input  id="cityName" type="text" class="form-control" placeholder="E.g. Ottawa, On">
<!--
                            <div id="">
                            
                            </div>
-->
                        </div>
                        <button class="btn btn-success btn-large margin" id="weatherForcast"> Weather Forcast</button>
                    </form>
                </div>
          </div>
      </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
       
        <script>
            
            document.getElementById("weatherForcast").addEventListener("click", displayWeather);
            
            function displayWeather(event){
                event.preventDefault();
                var city = document.getElementById("cityName").value;
                if (city != ""){
                    $.get("forecast.php?city="+city, function(data){
//                    $.ajax({
//                        type:"GET",
//                        url: "forecast.php?city="+city, 
//                        data: city,
//                        success: function(weather) {
                        alert (data);
   //                     }
                    });
                } else {
                    alert ("Please Enter a City Name");
                }
            }
        </script>
        
   </body>
</html>
