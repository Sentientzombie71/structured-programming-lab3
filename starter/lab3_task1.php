<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 1: Simple if and if-else — Warm-Up Exercises [5 marks]
 *
 * @author     [Collins Njoroge Muchiri]
 * @student    [ENE212-0059/2023]
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       [Date complete 02/04/2026]
 */

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Temperature Alert System
// ══════════════════════════════════════════════════════════════
// Declare $temperature = 39.2
// Use separate if statements (not if-else) to print:
//   "Normal"            if temp is between 36.1 and 37.5 inclusive
//   "Fever"             if temp > 37.5
//   "Hypothermia Warning" if temp < 36.1
// Test with: 36.8, 39.2, 34.5 — screenshot each

// TODO: Exercise A — your code here


// Exercise A: Temperature Check

echo "<h3>Exercise A - Temperature Alert System</h3>";

// Test case 1: 39.2
$temperature = 39.2;
$result = "";
if ($temperature >= 36.1 && $temperature <= 37.5) { $result = "Normal"; }
if ($temperature > 37.5) { $result = "Fever"; }
if ($temperature < 36.1) { $result = "Hypothermia Warning"; }
echo "Temperature: {$temperature}°C - {$result}<br>";

echo "<br>"; 

// Test case 2: 36.8
$temperature = 36.8;
$result = "";
if ($temperature >= 36.1 && $temperature <= 37.5) { $result = "Normal"; }
if ($temperature > 37.5) { $result = "Fever"; }
if ($temperature < 36.1) { $result = "Hypothermia Warning"; }
echo "Temperature: {$temperature}°C - {$result}<br>";

echo "<br>"; 

// Test case 3: 34.5
$temperature = 34.5;
$result = "";
if ($temperature >= 36.1 && $temperature <= 37.5) { $result = "Normal"; }
if ($temperature > 37.5) { $result = "Fever"; }
if ($temperature < 36.1) { $result = "Hypothermia Warning"; }
echo "Temperature: {$temperature}°C - {$result}<br>";

echo "<br><hr><br>"; 


// ══════════════════════════════════════════════════════════════
// EXERCISE B — Even or Odd
// ══════════════════════════════════════════════════════════════
// Declare $number = 47
// Use if-else to print "$number is EVEN" or "$number is ODD"
// Also check divisibility by 3, by 5, and by both 3 and 5 — one line each

// TODO: Exercise B — your code here

// Exercise B

echo "<h3>Exercise B - Even or Odd with Divisibility</h3>";

$number = 47;

// Check if number is even or odd
if ($number % 2 == 0) {
    echo "$number is EVEN<br>";
} else {
    echo "$number is ODD<br>";
}

// Check divisibility
if ($number % 3 == 0) {
    echo "$number is divisible by 3<br>";
} else {
    echo "$number is NOT divisible by 3<br>";
}

if ($number % 5 == 0) {
    echo "$number is divisible by 5<br>";
} else {
    echo "$number is NOT divisible by 5<br>";
}

if ($number % 3 == 0 && $number % 5 == 0) {
    echo "$number is divisible by both 3 and 5<br>";
} else {
    echo "$number is NOT divisible by both 3 and 5<br>";
}

echo "<br><hr><br>"; 

// ══════════════════════════════════════════════════════════════
// EXERCISE C — Comparison Chain
// ══════════════════════════════════════════════════════════════
// Run this code EXACTLY as written.
// Record all six outputs in your report and explain each result.

$x = 10; $y = "10"; $z = 10.0;

var_dump($x == $y);   // A: ?
var_dump($x === $y);  // B: ?
var_dump($x == $z);   // C: ?
var_dump($x === $z);  // D: ?
var_dump($y === $z);  // E: ?
var_dump($x <=> $y);  // F: spaceship — what type? what value?

// Your explanation of each result goes in your PDF report (not here).

// Exercise C

echo "<h3>Exercise C - Comparison Operators</h3>";

$x = 10;  $y = "10";  $z = 10.0;

var_dump($x == $y);    // A: True 
echo "<br>";
var_dump($x === $y);   // B: False
echo "<br>";
var_dump($x == $z);    // C: True 
echo "<br>";
var_dump($x === $z);   // D: False
echo "<br>";
var_dump($y === $z);   // E: False
echo "<br>";
var_dump($x <=> $y);   // F: spaceship — returns 0
echo "<br>";

echo "<br><hr><br>"; 

// ══════════════════════════════════════════════════════════════
// EXERCISE D — Null & Default Values
// ══════════════════════════════════════════════════════════════
// Run this code as written, then extend it as instructed below.

// Exercise D

echo "<h3>Exercise D - Null Coalescing Operator (??)</h3>";

$username = null;
$display  = $username ?? "Guest";
echo "Welcome, $display<br>";

// Chained null coalescing

$config_val = null;
$env_val    = null;
$default    = "system_default";
$result     = $config_val ?? $env_val ?? $default;
echo "Config: $result<br>";

echo "<br>"; 

// TODO: Add one more chained ?? example of your own and explain it in your report.


// Example 1
$username = "Collins";
$display = $username ?? "Guest";
echo "Welcome, $display<br>";

$config_val = "config_value";
$env_val = "env_value";
$default = "system_default";
$result = $config_val ?? $env_val ?? $default;
echo "Config: $result<br>";
?>







