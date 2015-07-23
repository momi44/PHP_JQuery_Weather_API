
<?php 
        $city = $_GET["city"];
        // If the city is not set, set default to "Ottawa"
        if (!isset($city)){
            $city = "ottawa";
        }
        $response = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&APPID=3cc337219cc3babbe5470206b28f4407");
            
            $data = json_decode($response);
            $city = $data-> {"name"};
            $main = $data->{"main"};
            $temp      = $main->{"temp"};
            $pressure  = $main->{"pressure"};
            $humidity  = $main->{"humidity"};
            $wind = $data->{"wind"};
            $speed = $wind->{"speed"};
            $weather = $data->{"weather"}[0];
            $main_weather = $weather->{"main"};

            $weather_status = "Temprature of ".$city." is ".intval($temp)."C.\n It is ".$main_weather.", humidity is ".$humidity;
                
            echo $weather_status;
       ?>