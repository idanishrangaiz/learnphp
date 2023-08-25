<?php 
// print and echo // print and echo // print and echo // print and echo // print and echo 
echo "ikonic dev";
echo 'bbbb';
echo 'cccc', ' dev';
echo "ffff", " dev";
echo "hhhh". " nic";
echo "iii"." dev";
echo 239;
echo "393";
echo '222';
echo "333 + 333 ";

print "bbb";
print 'ccc';
print "bbb". " ccc";

// variable  // variable // variable // variable // variable // variable // variable // variable 

$dev=  "ikonic <br>";

echo "<h2>" .$dev. "</h2>";
 

// datatypes // datatypes // datatypes// datatypes// datatypes// datatypes// datatypes // datatypes

$datatype = "didiid";

var_dump ($datatype) ;


// conttant variable // conttant variable // conttant variable // conttant variable // conttant variable

define("test", 40);

/* echo test; */

$sum = test + 20;

echo $sum;


// Arithemetic Operations // Arithemetic Operations // Arithemetic Operations // Arithemetic Operations

$a = 2;
$b = 10;

echo $c = $a + $b ;


// Assignment Operators // Assignment Operators // Assignment Operators // Assignment Operators 

$a = 4;
$b = 5;

$a += $b;

echo $a;


// Comparison Operator // Comparison Operator // Comparison Operator // Comparison Operator 

 
 $a = 5;
 $b = 3 ;

                    /*  <=> spaceship. mean it is less,equal, or greater.  */

 echo $a <=> $b; 

// IF statement // IF statement // IF statement // IF statement // IF statement // IF statement 

$a = 5;
$b = 4;

if( $a > $b){
    echo "<br>A is greater than B<br>";
}


$a = 10;
$b = 10;

if( $a === $b):
    echo "<br>A is equal value and datatype with B<br>";
 endif;

// Logical Operator // Logical Operator // Logical Operator // Logical Operator 


$age = 55;


if( $age >=45 && $age <=60 ){
    echo "<br>Age is ok<br>";
}

// IF ELSE STATEMENT // IF ELSE STATEMENT// IF ELSE STATEMENT // IF ELSE STATEMENT

$salma = 1100;

if($salma > 100){
    echo "<br>salma is greater than arif<br>";

}

else {
    echo "<br>salma is smaller than arif<br>";
}
// 2nd 

$name = "saif";
$gender = "male";

if($gender == "male"){
    echo "<br>he is " . $name;
}

else {
    echo "<br>she is <br>" . $name;
}


//  ELSE IF STATEMENT // ELSE IF STATEMENT // ELSE IF STATEMENT // ELSE IF STATEMENT //

$marks = 50;

if( $marks >= 80 && $marks <= 100){
    echo "<br>A Grades";
}elseif ($marks >= 60 && $marks < 80){
    echo "<br>B Grades";
}elseif ($marks >= 40 && $marks < 60){
    echo "<br>C Grades";
}elseif ($marks >= 33 && $marks < 40){
    echo "<br>D Grades";
}elseif ($marks < 33 ){
    echo "<br>Fail";
}else{
    echo "<br>Invalid Records";
}


//  SWITCH STATEMENT // //  SWITCH STATEMENT ////  SWITCH STATEMENT ////  SWITCH STATEMENT //

$Weekday = 5;

switch($Weekday){
    case 1:
        echo "<br>monday";
        break;
    case 2:
        echo "<br>tuesday";
        break;
    case 3:
        echo "<br>wednesday";
        break;
    case 4:
        echo "<br>thursday";
        break;
    case 5:
        echo "<br>friday";
        break;
    case 6:
        echo "<br>saturday";
        break;
    case 7:
     echo "<br>sunday";
        break; 
         
    default:
    echo "<br>enter valid day";
}



$age = 16;

switch(true){
    case ($age >= 14 && $age <=26):
        echo "<br>younger<br>";
        break;
    case ($age >= 30 && $age <=35):
        echo "<br>elder<br>";
        break;
         
    default:
    echo "<br>enter valid age<br>";
}



//  Ternary  OPERATOR //  Ternary  STATEMENT  //  Ternary  STATEMENT  //  Ternary  STATEMENT\
// USES FOR ONLY ONE STATEMENT OR CONDTION, if you have more than one condtion , you should use IF-ELSE STATEMENT

$x = 15;

($x > 20) ? $z = "Greater" : $z = "smaller";

echo $z ;



$x = 25;

$z = ($x > 20) ? "<br>Greater<br>" : "<br>smaller<br>";

echo $z ;


//  String Operators  //  String Operators  //  String Operators  //  String Operators

$x= "Hello";

$s = $x . "world<br>";

echo $s;

// 2nd statement in other way

$x = "<br>hello ";

$x .= "world ";

$x .= "this is your ";

$y = 500 . " email";

$z = $x . $y;

echo $z;


//  While Loop  //  While Loop  //  While Loop  //  While Loop  //  While Loop  

$a = 1;

while( $a <= 10){
    echo "<br>this is number<br>";

$a ++ ;
}

$a = 20;

while( $a >=15){
    echo "print number in decrement<br>";

    $a = $a - 1;
}


// DO While Loop  // DO While Loop // DO While Loop // DO While Loop // DO While Loop // DO While Loop 

$a = 2;

do{
    echo $a . ") hello word<br>";
    $a = $a + 1;

} while($a <= 15);

// 2nd option

$b = 20;
do {
    echo "value will decrease<br>";
    $b --;
}while( $b >=10);


// FOR Loop  // FOR Loop  // FOR Loop  // FOR Loop  // FOR Loop  // FOR Loop  // FOR Loop  // FOR Loop   

for($a =1; $a <=10; $a++)
{
    echo "incemrent in for loop <br>";
}



for($a =15; $a >=5; $a--)
{
    echo $a . ") decrement in for loop<br>  <br>";
}

// Nested  Loop  // Nested  Loop  // Nested  Loop  // Nested  Loop  // Nested  Loop  // Nested  Loop  

    for($a = 1; $a <= 100; $a = $a + 10){
        for( $b = $a; $b < $a + 10; $b++ ){
            echo $b . " ";
        } 
        echo " <br>";
    }


// Continue & Break Statement // Continue & Break Statement // Continue & Break Statement 


    for( $a=1; $a <= 10; $a++){
        if($a==4){
            echo " It is: " .$a . "<br>";
            continue;
        }
        echo "No is: " . $a . "<br>";
    }

    // break 
    
    for( $a=1; $a <= 10; $a++){
        if($a==4){
            echo " It is: " .$a . "<br>";
            break;
        }
        echo "No is: " . $a . "<br>";
    }

// GOTO Statement // GOTO Statement // GOTO Statement // GOTO Statement 


echo "hello world<br>";
echo "hello world<br>";
echo "hello world<br>";
echo "hello world<br>";
goto abc;
echo "hello world<br>";
echo "hello world<br>";
echo "hello world<br>";
echo "hello world<br>";

abc:
echo "hey this is abc lable";

// FUNCTION Statement // FUNCTION Statement // FUNCTION Statement // FUNCTION Statement


function username(){
    echo "<br>saif<br>";
}
username();

// FUNCTION with PARAMETERS Statement // FUNCTION with PARAMETERS Statement // FUNCTION with PARAMETERS Statement 

function sum($a, $b){
    echo "value is : " . $a - $b;
}
$ab= 22;
$ba= 11;
sum($ab, $ba);
sum(2,4);



// Functions with Returning Value // Functions with Returning Value // Functions with Returning Value 

function data($fname, $lname){
    $v = "$fname $lname";
    return $v;

}
$sum = data("saif", "ahmad");
echo  "<br>" . $sum;


function addition($a, $b, $c){
    $sum = $a + $b + $c;
    return $sum;
}

$add = addition(22, 33, 44);
echo "<br>" .$add;



function additions($a, $b, $c){
    $sum = $a + $b + $c;
    return $sum;
}

function percentage($std) {
    $per = $std/3;

    echo "<br>" . $per . "%";
    
}

$add = additions(5, 10, 15);

percentage($add);


// Function Argument By Reference // Function Argument By Reference // Function Argument By Reference 


function testing(&$code){
    $code .= "hello world";
}
$test = " <br>this is the code for function aurgument by refernece ";
testing($test);
echo $test;

// Variable Functions // Variable Functions // Variable Functions // Variable Functions 

function storm(){
    echo "<br>hello world.";
}
$sum = "storm";
$sum();

// part 2

function estorm($name){
    echo "<br>hello world. this is $name. ";
}
$sum = "estorm";
$sum(" rehan");



// Recursive Function // Recursive Function // Recursive Function // Recursive Function 

function display($num){
    if($num <= 5){
        echo "<br> $num <br>";
        display($num +1 );
    }
    
}
display(1);

// part 2

function factorial($n){
    if($n==0){
        return 1;
    }else{
        return($n * factorial($n - 1));
    }
}

echo factorial(5);


// Global & Local Variable // Global & Local Variable // Global & Local Variable // Global & Local Variable
$g =10;
function test(){
    global $g;
    echo "<br>print the number of $g <br>";
}
// global can print value outside function, while local varial can print value inside function.
test();
echo " check the number of global variable which is $g;<br>";


// Array   // Array   // Array   // Array   // Array   // Array   // Array   // Array   


$colors =  array("red","green","blue","gray");


echo $colors[0] . "<br>";
echo $colors[1] . "<br>";
echo $colors[2] . "<br>";
echo $colors[3] . "<br>";

// part 2

$colors =  ["red","green","blue","gray"];


// print_r($colors);
for($i=0; $i < 4; $i++){

echo $colors[$i] . "<br>";
}


// Associative Array // Associative Array // Associative Array  // Associative Array  // Associative Array 


$age = [
    "sony" => 25,
    "mony" => 20,
    "gony" => 15
];


echo $age["sony"] . "<br>";
echo $age["mony"] . "<br>";
echo $age["gony"] . "<br>";



//  Foreach Loop //  Foreach Loop //  Foreach Loop //  Foreach Loop //  Foreach Loop //  Foreach Loop

$colors = [
            "red",
            "green",
            "gray"
];

foreach($colors as $values){
    echo $values . "<br>";

}

// part 2

$colors = [
    "sony" => 25,
    "mony" => 15,
    "jony" => 35
];
foreach($colors as $key => $col_values){
    echo $key . " = " . $col_values . "<br>";
}

// Multidimensional Array  // Multidimensional Array  // Multidimensional Array  // Multidimensional Array  

    $emp = [
        ["1","Ahad", "web", "50k"],
        ["2","saif", "php", "60k"],
        ["3","hilal", "video", "30k"],
        ["4","mian", "seo", "150k"],
        ["5","kami", "laravel", "90k"]
    ];

    echo $emp[0][0] ." ";
    echo $emp[0][1] ." ";
    echo $emp[0][2] ." ";
    echo $emp[0][3] ." ";
  
    echo "<br>";

    echo $emp[1][0] ." ";
    echo $emp[1][1] ." ";
    echo $emp[1][2] ." ";
    echo $emp[1][3] ." ";
   

// echo "<pre>";
// print_r($emp);
// echo "</pre>";


// part 2 for


$per = [
    ["1","Ahad", "web", "50k"],
    ["2","saif", "php", "60k"],
    ["3","hilal", "video", "30k"],
    ["4","mian", "seo", "150k"],
    ["5","kami", "laravel", "90k"]
];

for($row = 0; $row < 4; $row++){
    for($col=0; $col < 4; $col++){

        echo $per[$row][$col] . " ";
    }
    echo "<br>";
}


// echo "<pre>";
// print_r($emp);
// echo "</pre>";

// part 3 foreach


echo "<br>";
$comp = [

    ["1","SUN", "web", "50k"],
    ["2","MOON", "php", "60k"],
    ["3","STAR", "video", "30k"],
    ["4","EARTH", "seo", "150k"],
    ["5","NONE", "laravel", "90k"]
];

echo "<table border='2px' cellpadding='5px' rowpadding='0px'>";

foreach($comp as $employ){
    echo "<tr>";
    foreach($employ as $newone){
        echo "<td>";
        echo $newone . " ";
        echo "</td>";
    }
    echo "<br>";
    echo "</tr>";
}
echo "<table>";

// 




























?>

