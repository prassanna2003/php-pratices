<?php
// Variable scope
// global scope
// A varaiable declared outside a function has a global scope and can only be accessed outside a function
$x = 5;
function myTest() {
    // using x inside this function will generate an error
    global $x;
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();
echo "<p>Variable x outside function is: $x</p>";


// local scope
// A varaiable declared within a function has a local scope and can only be accessed within that function
function myTest2() {
    $y = 10;
    echo "<p>Variable y inside function is: $y</p>";
}
myTest2();  // this will print 10   
// using y outside the function will generate an error
echo "<p>Variable y outside function is: $y</p>";
// this will generate an error because y is not defined outside the function
// echo "<p>Variable y outside function is: $y</p>";



/*global keyword
The global keyword is used to access a global variable from within a function.
The global keyword is often used to change the value of a global variable from within a function.*/
$x = 30;
$y = 20;
function myTest3() {
    global $x, $y;
    $y = $x + $y;
}
myTest3();
echo $y, "<br>"; // outputs 50
// The global keyword is used to access a global variable from within a function.


/*globals keyword
The global keyword is often used to change the value of a global variable from within a function in the array format.*/
$x = 24;
$y = 12;
function myTest4() {
   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest4();
echo $y; // outputs 36



?>