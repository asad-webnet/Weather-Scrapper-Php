<?php


$weatherContent= @file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$_GET['NameOfPlace']."&appid=424d2ead87a75f52f0060f6839e8ea0d");
$existance=0;
if ($weatherContent===false)
{
    echo "Wrong url";
}
else {
    $weatherContent= file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$_GET['NameOfPlace']."&appid=424d2ead87a75f52f0060f6839e8ea0d");
    $existance++;
    $weatherArray=json_decode($weatherContent,true);

}



?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>

<body>

    <div class="WeatherContainer">
        <form method="get">
            <div class="maxform form-group">
                <h1 class="welcomeHeading"> Welcome</h1>
                <input type="text" class="emailInput form-control" id="exampleInputEmail1" name="NameOfPlace" aria-describedby="emailHelp"
                    placeholder="London San Francisco city only etc.." value="<?php

                    if (!empty($_GET["NameOfPlace"]))                   
                    echo $_GET["NameOfPlace"]?>" name="NameOfPlace">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    <div class="weather" style="color:white;">
      
    <?php
    if($existance<=0)  
    { echo "Specified City Doesn't exist. Please check if you have entered city. Only city can be entered.";}
    

    else {
        echo "The Temperature is ".($weatherArray['main']['temp']-273)."&degC.";
    }

    
    ?>
        
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src=""></script>
</body>

</html>
