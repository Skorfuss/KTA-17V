<?php

include 'functions.php';

back_home();

//array (workdays)


$myarr = array ('Monday','Tuesday','Wednesday','Thursday','Friday');
$day = "Saturday";


//echo strtoupper($day)."<br>";

// показ информации массива
//var_dump($myarr);

/*
for ($i = 0; $i < 5; $i++)
{
    echo $myarr[$i]."<br>";
}
*/

/*
for ($i = 0; $i < count($myarr); $i++)
{
    if ($myarr[$i] == $day)
    {
    echo $myarr[$i]." is a workday<br>";
    } elseif ($day == 'Saturday' || $day == 'Sunday')
    {
        echo "$day is a weekend";
        die;
    }
}
*/


for ($i = 0; $i < count($myarr); $i++)
{
    if (strtoupper($myarr[$i]) == strtoupper($day))
    {
    echo "<strong>".$myarr[$i]." is a workday</strong><br>";
    } elseif ($day == 'Saturday' || $day == 'Sunday')
    {
        echo "$day is a weekend";// echo $day 'is a "weekend"';
        die;
    } else 
    {
        echo "Not a weekend";
        die;
    }
}


?>