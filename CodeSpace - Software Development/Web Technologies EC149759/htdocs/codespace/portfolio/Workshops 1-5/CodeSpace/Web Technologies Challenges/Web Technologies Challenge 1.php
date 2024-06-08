<?php

// 1.

$height = 10;
$width = 5;

$area = $width * $height;

echo "The rectangle has a width of $width meters, a height of $height meters, and an area of $area square meters.\n";

// 2.

$number1 = 10;
$number2 = 5;

$add = $number1 + $number2;
$subtract = $number1 - $number2;
$multiply = $number1 * $number2;
$divide = $number1 / $number2;
$concatenate = $number1.$number2;

$message = "Addition of 5 and 10 is: $add\n".
           "Subtraction of 5 and 10 is: $subtract\n".
           "Multiplication of 5 and 10 is: $multiply\n".
           "Division of 5 and 10 is: $divide\n".
           "Concatenation of 5 and 10 is: $concatenate\n";

echo $message;

// 3.

$year = 25;

$year = intval($year);

$days = 365 * $year;
$hours = 24 * $days;
$minutes = 60 * $hours;

$age = "Your age is: $year, Days: $days, Hours: $hours, Minutes: $minutes";

echo "$age\n";

// 4.

$week = array("Monday\n", "Tuesday\n", "Wednesday\n", "Thursday\n", "Friday\n", "Saturday\n", "Sunday\n");

foreach( $week as $value ) {
    echo "$value";
}

// 5. 

$edinburghClimate = array(
    array("July-Aug", "19 ℃", "11 ℃"),
    array("Jan-Feb", "7 ℃", "1 ℃")     
);


echo "Average Temperature in Edinburgh:\n";
echo "Month\t\t\tHigh\t\tLow\n";

// Iterate through the climate data array and display the data
foreach ($edinburghClimate as $climateData) {
    echo $climateData[0] . "\t\t" . $climateData[1] . "\t\t" . $climateData[2] . "\n";
}

// 6.

$results = array(
    "Aaron" => array( 
        "Physics" => "74%",
        "English" => "69%",
        "Maths" => "70%"
    ),
    "Jamie" => array( 
        "Physics" => "64%",
        "English" => "79%",
        "Maths" => "69%"
    ),
    "Harry" => array( 
        "Physics" => "55%",
        "English" => "52%",
        "Maths" => "57%"
    )
);

foreach ($results as $name => $subject) {
    echo "Result for $name :\n " ;

 foreach ($subject as $class => $score) {
    echo "$class score: $score \n ";
}
echo "\n";
}

?>

