<?php
// include about.php; -> may load the file with or without this file
// include_once ~~~~ -> include the outerfile only once in this page
// require about.php; -> is important for page
// require_once ~~~~ -> required the outerfile once

@require_once("about.php");
// @include_once("abosut.php");

############# How to make Comment in PHP #############
    // First
    /*
        Second
    */
    # Third

############# How to Create Vaiable in PHP #############
    $var1 = "Hello World"; #String
    $var2 = 250; #number (2353.221)
    $arr1 = ["one","two"]; #array
    $arr2 = array("one","two",5,"years old"); #array
    $bol1 = true; #boolean
    $bol2 = false; #boolean
    $null = NULL;

    define('pi',3.14); #constant
    const pi2 = 3.144; #constant
    // $this;❎
    // $_COOKIE;❎
    // $_first;✔

    // print($var1);
    // echo $var1; # faster than print | echo($var1)

    // echo "<h3> Hello from PHP </h3>";

    // echo "my age is " . $var2;

    // echo "<br>";
    
    // echo "my name \" is amr";
    $val9=99;

    // echo @$val9;
    
    // echo pi2;



############# Errors Type #############
#1- fatil error | stop on the error only
#2- parse error | stop script


############# get Datatype #############
#1- gettype()
#1- var_dump()

// echo gettype($bol1);
// echo var_dump($arr1);



############# if and else #############
// if($var2 === "250" && gettype($var2) == "STRING" || gettype($var2) == "STRING"){
//     echo "yes";
// }elseif($var2 == 350){
//     ECHO "yes2";
// }else{
//     echo "no";
// }


############# loop #############
// for($i = 0;$i < 10;$i++){
//     echo $i;
// }

// $i=0;
// while($i < 10){
//     echo $i;
//     $i++;
// }

// do{
//     echo $i;
//     $i++;
// }while($i < 10)

// foreach($arr1 as $key => $arr_val){
//     echo $key . " - " . $arr_val . "<br>";
// }

############# funciton #############

// function count_arr($arr,$arrrr = null7
// ){
//     $count = count($arr);
//     return $count;
// }

// echo count_arr($arr1);

// print_r($arr1);

############# array methods #############

$assoc_arr = [
    "name" => "Amr Mohamed",
    "age" => 24,
    "phone" => 01115343143,
    "address" => ["sharqia","cairo"]
];

// $arr10 = ["key" => "three"];
// array_push($arr1,$arr10);
// array_unshift($arr1,$arr10);
// array_pop($arr1);
// array_shift($arr1);

// $arr_s = [1,9,45,67,"2","47","amr","mohamed","belal",800,4,7,9,2];
// sort($arr_s);
// rsort($arr_s);

// asort($assoc_arr);
// arsort($assoc_arr);
// ksort($assoc_arr);
// ksort($assoc_arr);
// print_r(array_reverse($arr2,true));
// shuffle($assoc_arr);
// array_fill(1,2,"three","four");
// $new_arr = array_sum($arr2);
// $new_arr = array_rand($arr2,2);

// $neww_arr = [2,5,2,1,5,8,9,8];
// print_r(array_unique($neww_arr));

// echo array_key_exists("email",$assoc_arr)

$colleges = ["Amr","Mohamed","antone","ghada","engy","ahmed"];
$my_name = "amr mohamed";
$my_name1 = "Amr Mohamed Mahmoud";


// echo implode(" - ",$colleges) . "<br>";

// print_r(explode("-",$my_name));

// print_r(str_split($my_name,1)); # return as an array

// echo chunk_split($my_name,5); # return as a string

// $my_name = str_replace(["mohamed","elsayed"],["Ibrahim","asdasdsad"],$my_name)."<br>";

// echo str_repeat($my_name,5);

// echo str_shuffle($my_name);

// echo strlen($my_name);

// echo addslashes($my_name1);

// echo strtolower($my_name);

// echo strtoupper($my_name);

// echo lcfirst($my_name);

// echo ucfirst($my_name);

// echo ucwords($my_name);

// echo trim($my_name); #delete left and right spaces around the text

// echo ltrim($my_name); #delete left spaces

// echo rtrim($my_name); #delete right spaces

// echo str_word_count($my_name);

// echo stripos($my_name,"Mohamed")

// echo strrpos($my_name,"mohamed")

// echo strripos($my_name,"mohamed")

// echo strcmp($my_name1,$my_name);

// echo substr($my_name,4,7); start from index 4 and cut 7 chars



############# Super Global #############

// echo $_SERVER['SERVER_NAME'];
echo $_SERVER['REQUEST_METHOD'];



