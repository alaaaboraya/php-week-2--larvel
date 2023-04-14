<!-- vid 26 -->
<?php
define("WE","1");
$a="we";
$b="love";
$c="cis";
echo " {$a}.{$b}.{c} ". WE ;
?>

<!-- vid 27 -->
+ union 
== equal
!= or <> not equal
=== indentical
!== not indentical

<!-- vid 28 -->
<?php
$a=@$b or die("var not found");
echo $a;
?>

<!-- vid 29 -->
|| has a greater precedence than or
&& has a greater precedence than and

<!-- vid 30 ,31 ,32 and 33-->
<?php
if (10>9){
    echo "first";
}elseif(10>7){
    echo "second";
}else {
    echo "not found ans";
}
?>

<!-- vid 34 -->
<?php
$name="alaa";
$is_student=true;
$is_orphan=true;
$country="egypt";
$country_discount=40;
$student_discount=20;
$orphan_discount=10;
$price=200;
if ($country=="egypt"){

if($is_student==true){ 

if($is_orphan==true){
echo '';
}else{

    echo $name;
    echo $country_discount;
    echo $student_discount;
}
}
}


?>
<!-- vid 35  -->
<?php
echo " we love cis " .(1>0 ? "good" : "bad")."language";
?>

<!-- vid 36 -->
<?php
switch($text){
case "one":
    echo "hello";
    break;
    case "two":
        echo "bye";
        break;
        default:
        echo "no massage";
    }
?>

<!-- vid 37 -->
<?php
$num=1;
while($num<5){
    echo "$num";
    $num++;
}
?>

<!-- vid 38 -->
<?php
$num=0;
while($num<50){

    echo "$num<br>";
    $num+=2;
}
?>

<!-- vid 39 -->
<?php
for($num=1;$num<5;$num++){
    echo "$num<br>";
}
?>

<!-- vid 41-->
break -> بيوقف لحد المطلوب و يقفل
continue -> بيعدي المرحله اللي انا فيها

<!-- vid 42 -->
include (file name);
include_once(file name); do it once 

<!-- vid 43 and 44 -->
function job_name() like function say_hello ("someone");

<!-- vid 45 and 46-->
function get_number($num_one, $num_two){
    echo $num_one + $num_two;
}

function get_number($num_one, $num_two){
    return $num_one + $num_two;
}
- any line after return doesn't work

<!-- vid 47 -->
function num_args();
function get_arg(index);
function get_arg();

<!-- vid 48 -->
...$name : unpacking arguments

<!-- vid 49 -->
function_exists("name") -> check fun is avaliable or not

<!-- vid 50 and 51  -->
<?php
$msg="hi";
 $say_hi = function($someone) use($msg) {  // to inhert
return"$msg $someone";
};
?>
- array_map() -> applies the callback to the elements of the given arrays

<!-- vid 52 -->
<?php
$say_hi=fn() => "hello";
echo $say_hi();
?>
- arrow fun automatic inhert variables in parent scope