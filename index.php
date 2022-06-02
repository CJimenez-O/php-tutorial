

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
        'age' => '24'
    ];

    // var_dump($squad);
    echo $person['age'];


    // --------- Functions ---------------
?>