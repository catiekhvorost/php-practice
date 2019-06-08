<?php 
// 1. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.

for ( $num = 200; $num <= 250; $num++ ) {
    if ( $num % 4 == 0 ) {
        echo $num . "<br>";
    }
}

// I created a for loop and used the num variable as the initial counter. I am using the 250 value as the test condition. I am then testing each incrementation to see if it is divisible by 4. If it is, it will get printed onto the screen. I am using the modulus operator to test divisibility. If the current num value equals to 0 when divided by 4. 

// 2. Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country.

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

var_dump($ceu);