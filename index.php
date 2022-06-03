

<?php 
    // echo "hello123";
    // echo [1,2,3]; will output "array"

    // print can only take in 1 argument 
    // print "hello";
    // print "hello" lastName;

    // print_r() - prints single arrays and values 
    // print_r([1,2,3]);

    // var_dump() - Returns more info about data type and length 
    // var_dump("Hello");

    //var_export() - Outputs string representation of a variable 
    // var_export("hello");


    // ----------- DATA TYPES ---------------
    // String, Integer, Float, Boolean, Array, Object, Null, resource 
    // S.I.F.B.A.O.N.R

    $name = 'Chris';

    // echo "Hello ${name}! ";
    
    // ---- CONSTANTS ----
    define('LASTNAME', 'Jimenez');
    // echo LASTNAME;


    $list = [2,534,12,68];

    // Associative Array
    $person =[
        'name' => "Chris",
        'age' => '25'
    ];

    // var_dump($squad);
    // echo $person['age'];


    // --------- Functions ---------------
    $user = 'Legazy';
    function register(){
        global $user;
        echo "${user} is a new user";
    }
    
    // needing to pass in a variable is a arguement
    function create($bot){
        echo "just created ${bot}";
    }

    // register();

    //if you pass in a value into function that is a parameter 
    // create('test');

    $multiply = fn($x, $y) => $x * $y;

    // echo $multiply(3,3);


    // ----------- ARRAY METHODS -----------
    // count($array), in_array($value, $array )
    
    $list = [1,2,3];
    $list2 = [7,8,9];

    // echo count($list);   //outputs length

    // echo(in_array(1, $list));  //search if value is in array

    // add value to array 
    $list[] = 4;
    array_push($list, 5);

    //adds to begining of array 
    array_unshift($list, 0);

    //remove from end of array 
    array_pop($list);
    // remove from begin of array 
    array_shift($list);

    //remove specific element 
    unset($list[0]);

    //split array into 2 
    array_chunk($list, 2);

    // merge arrays 
    $list3 = [...$list, ...$list2];

    // print_r($list3);


    //get range of new list
    $range = range(1,20);
    // print_r($range);

    $newNum = array_map(function($num) {
        return "Number ${num}";
    }, $range);

    // print_r($newNum);
    $lessThan10 = array_filter($range, fn($num) => 
        $num <= 10);

    print_r($lessThan10);


    // --------- string functions ---------

    $string = 'Hello World';

// Get the length of a string
// echo strlen($string);

// Find the position of the first occurrence of a substring in a string
// echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
// echo strrpos($string, 'o');

// Reverse a string
// echo strrev($string);

// Convert all characters to lowercase
// echo strtolower($string);

// Convert all characters to uppercase
// echo strtoupper($string);

// Uppercase the first character of each word
// echo ucwords($string);

// String replace
// echo str_replace('World', 'Everyone', $string);

// Return portion of a string specified by the offset and length
// echo substr($string, 0, 5);
// echo substr($string, 5);

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}

// HTML Entities
$string2 = '<h1>Hello World</h1>';
// echo htmlentities($string2);



?>