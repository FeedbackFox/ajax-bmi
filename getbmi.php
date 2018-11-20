<?php
$height = (float) test_input($_REQUEST["height"]);
$weight = (float) test_input($_REQUEST["weight"]);
$metric = $_REQUEST["metric"];

if($metric)
{
if($height == null || $weight == null)
{

}
else{
$bmi = $weight / ( $height * $height);
$bmi = round($bmi * 10000, 1);
if($bmi <= 18.5)
{
  echo "Your bmi is " . $bmi . ", which is way too low!";
}
else if($bmi <=25)
{
  echo "Your bmi is " . $bmi . ", which is perfectly normal.";
}
else if($bmi <= 27)
{
    echo "Your bmi is " . $bmi . ", which is slightly too high.";
}
else if($bmi <= 30)
{
    echo "Your bmi is " . $bmi . ", which is too high.";
}
else if($bmi <= 40)
{
    echo "Your bmi is " . $bmi . ", which is  WAY too high. Talk to a doctor!";
}

else if ($bmi > 40)
{
    echo "Your bmi is " . $bmi . ", which is absolutely insane. Get some help!";
}
}

function test_input($data) {
  $data = trim($data);
  if(strpos($data, '.') || preg_match("/[a-z]/i", $data))
  {
    echo "Do not add decimals or letters to the inputs.";
    return null;
  }
  else
  {
    return $data;
  }
}
}
else
{
  
}

 ?>
