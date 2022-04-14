<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello World
    <?php
    //"missing part of the code below output"//
    echo "Hello World.<br>";
    //"write the correct opening tag and closing tag//
    echo "this is php.<br>";
    // this is a single line comment//
    /*this is multiline */
//"create variable name txt and assign value hello"//
     $txt = "Hello.<br>";
     
$x= 5;
$y= 7;
echo $x+ $y;

//find length//
echo strlen("Hello World!");
echo strrev("Hello World!");
$oldtxt = "Hello World!";
$newtxt = 
str_replace("World", "Dolly", $oldtxt);
echo 10*5;
echo 10/2;
var_dump($a==$b);
var_dump($a!=$b);
$a = 50;
$b = 10;
if($a> $b)
 {
  echo "Hello World";
} 
$a = 50;
$b = 10;
if($a!=$b)
 {
  echo "Hello.<br> World";
}
$a = 50;
$b = 10;
if
 ($a == $b) {
  echo "Yes";
} 
else
 {
  echo "No";
}
$a = 50;
$b = 10;
if
 ($a == $b) {
  echo "1";
} 
elseif
 ($a > $b) {
  echo "2";
} 
else
 {
  echo "3";
}

switch
 ($color) {
  
case
 "red":
    echo "Hello";
    break;
  
case
 "green":
    echo "Welcome";
    break;
}

switch ($color) {
    case "red":
      echo "Hello";
      break;
    case "green":
      echo "Welcome";
      break;
    
  default:
  
      echo "Neither";
  }
  $i = 1; 

while
 ($i < 6) 
{

  echo $i;
  $i++;
}
$i = 1; 

do
 {
    echo $i;
    $i++;
} 
while
 ($i < 6);
    
for($i = 0; $i < 10; $i++) {
 echo $i;
}
$colors = array("red", "green", "blue", "yellow"); 

foreach($colors as $x) {
  echo $x;
}

function myFunction()
 {
  echo "Hello World!";
}

/*function myFunction() {
    echo "Hello World!";
  }
  
  myFunction();*/
 /* function myFunction($fname, $lname) {
  
    return
     
    $lname
    ;
    }*/
    ?>
    
</body>
</html>