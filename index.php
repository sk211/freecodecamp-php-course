<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<title>php proctice</title>
</head>
<body>



<h2 class="text-center">Hello world</h2>

<!-- php document browser output -->

<?php
    echo('Hello world')."<br>";
    print_r("hello world from printer");


    // we will show html code in php code 

    echo "<h2 class='text-center' >This is my website</h2>";

    echo "<hr>";
    echo "<br>";
    echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam sit temporibus rerum itaque laboriosam illo placeat eum molestiae mollitia hic!</p>";

    // php variable

    $name ="sujan chandra majumder";
    $old =24;
    $collage ="Feni goverment collage";
    $village  ="Debipur feni";
    $place= "feni";


    echo "Hello i am $name i am $old I am from $place i am a studen. i complate my greusation on $collage in 2015";
    echo "<br>";


    // php Data type  

    // string

    $name ="sujanchandra majumder";

    // number

    $age="20";
    $year =2019;

    // number float

    $gpa = 3.65;
    $inconme = 4.6565;


    // Bullion 

    $ismail= true;
    $isfemeil = false;


    echo "<br>";

// working with string

echo "Web Accademy";

// store string in veriale

    echo "<br>";

$story="this is a new story we have a cow it give malk every day she is a good cow";

echo $story;
    echo "<br>";

    // php replace the text

    echo str_replace("new ", "old", $story);




    echo"<h4>working with number</h4> ";

    echo "40";
    echo "<br>";
    echo "40.20";
    echo "<br>";

    echo 5+5;
    echo "<br>";

    echo 5-5;
    echo "<br>";

    echo 5*5;
    echo "<br>";

    echo 5/5;
    echo "<br>";

    echo 10/3;

    $num =10;
     $num++;
    echo "<br>";

     $num--;
     echo "<br>";

     echo "<h4>max and min function</h4>";

     echo max(2, 10);
     echo "<br>";
     echo min(2, 10);

     echo "<br>";
     echo "<h4>php round function</h4>";

     echo round(3.2);
     echo "<br>";

     echo round(3.5);


     echo "<h4>php ceil and floor function</h4>";

     echo ceil(3.3);
     echo "<br>";
     echo floor(3.4);



     echo "<h4>Getting User input</h4>";





     




?>

<form method="get" action="./index.php">

Name: <input type="text" name="name" >
<br>
Age: <input type="text" name="age" >
        <input type="submit" value="submit">
</form>
<br>

you name is :<?php echo $_GET['name'];?>
<br>
you Age is :<?php echo $_GET['age'];?>
<br>


<h4>Building a Basic calculater</h4>

<form action="./index.php">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <br>
    <input type="submit" value="Result">
</form>

<h2>Answer  : </h2> <?php  echo $_GET["num1"] + $_GET["num2"]  ; ?>


<h4>Building a Mad libs game</h4>

<form method="get">
    <input type="text" name="color">
    <input type="text" name="puralname">
    <input type="text" name="persion">
    <input type="submit" value="submit">
</form>


<?php
$color = $_GET["color"];
$puralname = $_GET["puralname"];
$persion = $_GET["persion"];


echo "Roses are $color";
echo "$puralname is blue";
echo "I love $persion";




?>

<h3 class="text-center">Post and get Gobal peramater</h3>

<form method="get">

<input type="password" name="password">
<input type="submit" value="submit">
</form>
<h3>post</h3>
<br>
<form method="post">

<input type="password" name="password">
<input type="submit" value="submit">
</form>


<h3 class="text-center">
php Array</h3>

<?php
    $friends =array("sujan", "bijoy", "sujit", "emon");

    echo $friends[0];
    echo "<br>";
    echo $friends[1];
    echo "<br>";

    echo $friends[2];
    echo "<br>";

    echo $friends[3];

    echo "<br>";

    echo "<h2>Chage array </h2>";

    $friends[2]= "Shubo";
    echo "<br>";

    echo $friends[2];

?>
<h3>Using checkboxes</h3>

<form method="post">

   Apple <input type="checkbox" name="fruits[]" value="apple"> <br>
    Orrange<input type="checkbox" name="fruits[]" value="orrange"> <br>
   Goyaba: <input type="checkbox" name="fruits[]" value="goyaba"><br>


   <input type="submit" value="submit">
    
</form>

<?php

$frd = $_POST["fruits"];
echo $frd[0];



?>

<!-- asscutibe array -->
<h3>assecutibe array</h3>

<form method="post">
    <input type="text" name="student">
    <input type="submit">
</form>
<?php
$grades =array("sujan"=> "A+", "bijoy"=> "B+", "sujit"=>"A", "emon"=> "A", "rassel"=>"c", "sanjoy"=> "A+", "lition"=> "B+", "sojib"=>"A", "santo"=> "A", "shubo"=>"c");

echo $grades[$_POST["student"]];



?>


<h3 class="text-center">PHP Function</h3>
<?php

    function helloFunction($name, $age){
            echo "hello $name you are $age "."<br>";

    }
    helloFunction("mike", 20);
    helloFunction("sujan", 21);
    helloFunction("lition", 12);
    helloFunction("sanjoy", 13);
    helloFunction("anik",32);
?>

<h3>php Return statement</h3>
<?php
function cube($num){
    return $num *$num *$num;

}

$cubeResult =cube(3);
echo $cubeResult;

?>

<h3 class="text-center">
if statement</h3>


<?php
    $ismale =false;
    $isTall = true;

    if($ismale && $isTall){
        echo "You are male";
    }
    elseif($isMale && !$isTall){
        echo "You are a short man";

    }
    else{
        echo "you are not male";
    }
?>



<!-- if else statment -->

<h3 class="text-center">if else statment</h3>


<?php

    $isSujan =false;
    $Bcom = false;

    if($isSujan && $Bcom){
        echo "yes I am sujan and I am a complat the Bcom pass";
    }
    elseif ($isSujan && !$Bcom) {
        echo "yes I am sujan and I am not a complat the Bcom pass";
        
    }
    elseif(!$isSujan && $Bcom){
        echo "i am not sujan but i complate 
        my Bcom Desgree";
    }

    elseif(!$isSujan && !$Bcom)
    {
         echo "I am not sujan i am not compate my B.com pass Dgree";
    }
    else {
        echo "I am not sujan ";

    }
  
?>

<div class="text-center"><h4>php if stamtement (con't)</h4></div>

<?php

function getMax($num1, $num2, $num3){
    if($num1 >= $num2 && $num1 >= $num3){
        return $num1;
    }

    elseif($num2 >= $num1 && $num2 >=$num3){
        return $num2;
    }
    else{
        return $num3;
    }
}
echo getMax(3000 , 900, 100);

?>
<div class="text-center">
    <h4>Building a better Culculater</h4>
</div>
<form method="post" class="col-md-4 offset-4">

First Num : <input class="form-control" type="text" name="num1">
OP: <input class="form-control" type="textbox" name="op"> <br>
Second Num : <input class="form-control" type="text" name="num2">

<input type="submit" value="submit" class="btn btn-primary">
    
</form>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];

if ($op== "+") {
    echo $num1 +$num2;
}
elseif ($op == "-") {
    echo $num1 -$num2;

}
elseif ($op == "*") {
    echo $num1 *$num2;

}
elseif ($op == "/") {
    echo $num1 /$num2;

}
else{
    echo "Invaled Oparator";
}


?>



<div class="text-center">
 <h4>swithc statement</h4>
</div>

<form method="post" class="col-md-4 offset-4">
What was your grade?
<input class="form-control" type="text" name="grade">
<input class="form-control btn btn-primary" type="submit" >
    
</form>

<?php
$grade = $_POST['grade'];



switch ($grade) {

     case 'A+':
       echo "You get Ammizing result";
        break;

    case 'A':
       echo "You get Good result";
        break;

        case 'B':
        echo "you get B result";
        break;
        
        case 'c':
        echo "you get c result";
        break;

        case 'D':
        echo "you get D result";
        break;

        case "F";
        echo "you get F result";
        break;
    
    default:
        echo "<p class='alert alert-danger' >Indivisual Result</p>";
        break;
}


?>


<div class="text-center">
    <h4>php while loop</h4>
</div>
<?php

    $index ="1";
    while($index <= 10){
        echo "$index <br>";

        $index++;
    }


    echo "<h4>php Do while loop</h4>";

    $index = 6;

    do{
        echo "$index <br>";
        $index++;
    }
    while($index <=10);



    echo "<h4 class='text-center'>php for loop</h4>";

    for($i = 1; $i <= 10; $i++){
        echo "$i <br>";
    }


    ;

    echo "<h2>php comment</h2>";

    echo "this is single line php comment // id php comment";
    echo "this is mulity line comment /* comment here*/ id php comment";



    echo "<h3>include in HTML</h3>";

    // include "file name here"


    echo "<h3>php oop </h3>";

    class Book{
        var $title;
        var $author;
        var $pages;

    }

    function __construct(){
        echo "New books Created <br>";
}
    $book1 = new Book;
    $book1->title = "Harry potter";
    $book1->author ="sujan majumder";
    $book1->pages =400;


    echo $book1->title;


     $book2 = new Book;
    $book2->title = "Rich dad and poor dad ";
    $book2->author ="Robat quicky";
    $book2->pages =400;


    echo $book2->author;

     $book3 = new Book;
    $book3->title = "Twinkle stare";
    $book3->author ="Make dark";
    $book3->pages =400;


    echo $book3->pages;

?>


<div class="text-center">ph consta</div>


<?php

// function __construct(){
    
// }


// class MObi{
//     private
//     public
//     etc
// }
?>











<section class="bg-dark">
    <div id="footer">
        <div class="p-5 text-center text-white">
        <p>copyright@2019 All Reverse DEVELOPE Sujan</p>
        </div>
    </div>
</section>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>