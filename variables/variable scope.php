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
echo $y, "<br>"; // outputs 36


// static keyword
// when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable not to be deleted. We need it for a further job.
// To do this, use the static keyword when you first declare the variable:
function myTest5() {
    static $x = 0;
    echo $x;
    $x++;
}
myTest5();echo "<br>";
myTest5();echo "<br>";
myTest5();echo "<br>";
myTest5();echo "<br>";
myTest5();
// Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.   
// The variable is still local to the function.
// The static keyword can be used to update a local variable.

?>