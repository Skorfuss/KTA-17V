<?php

$mat = "mathematics";
$che = "chemestry";
$phy = "physics";

$grades = array("Peeter"=>array($mat => 5, $che => 3, $phy => 3),
                "Ants"=>array($mat => 4, $che => 4, $phy => 3),
                "Mari"=>array($mat => 5, $che => 5, $phy => 4));

echo "Peeter's grade in ".$mat." is ".$grades['Peeter'][$mat];
echo "<br>";

$grades_id = array_keys($grades);
//print_r($grades_id);

for ($i = 0; $i < count($grades_id); $i++)
{
    echo $grades_id[$i]."<br>";
    foreach($grades[$grades_id[$i]] as $predmet => $grade)
    {
        echo $predmet.": ".$grade."<br>";
    }
}

?>