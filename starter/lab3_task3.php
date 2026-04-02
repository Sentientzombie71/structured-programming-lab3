<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 3: switch-case and match Expression [6 marks]
 *
 * @author     [Collins Njoroge Muchiri]
 * @student    [ENE212-0059/2023]
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       [Date complete 02/04/2026]
 */

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Day of Week Classifier
// ══════════════════════════════════════════════════════════════
// Given $day (integer 1–7, where 1=Monday):
// Use switch-case to print the day name.
// Group Saturday and Sunday under "Weekend".
// All weekdays print their name and "— Lecture day".
// Remember: break is NOT optional. Missing break = fall-through.

$day = 3; // change this to test all cases

// TODO: switch-case for day classifier


// ══════════════════════════════════════════════════════════════
// EXERCISE B — HTTP Status Code Explainer
// ══════════════════════════════════════════════════════════════
// Given $status_code, use switch-case to explain it:
//   200 → "OK — request succeeded"
//   301 → "Moved Permanently — resource relocated"
//   400 → "Bad Request — client error"
//   401 → "Unauthorized — authentication required"
//   403 → "Forbidden — access denied"
//   404 → "Not Found — resource missing"
//   500 → "Internal Server Error — server fault"
// default → "Unknown status code"

$status_code = 404;

// TODO: switch-case for HTTP status


// ══════════════════════════════════════════════════════════════
// EXERCISE C — PHP 8 match Expression
// ══════════════════════════════════════════════════════════════
// Rewrite Exercise B using PHP 8 match instead of switch-case.
// Note: match uses STRICT comparison (===). No break needed.
// Observe the difference in syntax and behaviour.

// TODO: match expression for HTTP status — same logic as Exercise B


// ══════════════════════════════════════════════════════════════
// EXERCISE D — Rewrite comparison
// ══════════════════════════════════════════════════════════════
// In your PDF report, answer:
// 1. What is the key difference between switch (==) and match (===)?
// 2. Give one example where this difference changes the output.
// 3. When would you prefer switch over match, and why?


// Exercise A

echo "<h3>Exercise A— Day of Week Classifier</h3>";

$day = 3; // change this value to test

switch ($day) {
    case 1:
        echo "Monday — Lecture day";
        break;
    case 2:
        echo "Tuesday — Lecture day";
        break;
    case 3:
        echo "Wednesday — Lecture day";
        break;
    case 4:
        echo "Thursday — Lecture day";
        break;
    case 5:
        echo "Friday — Lecture day";
        break;
    case 6:
    case 7:
        echo "Weekend";
        break;
    default:
        echo "Invalid day";
}

// Exercise B

echo "<h3>Exercise B— HTTP Status Code Explainer (switch)</h3>";

$status_code = 404; // change to test

switch ($status_code) {
    case 200:
        echo "OK";
        break;
    case 301:
        echo "Moved Permanently";
        break;
    case 400:
        echo "Bad Request";
        break;
    case 401:
        echo "Unauthorized";
        break;
    case 403:
        echo "Forbidden";
        break;
    case 404:
        echo "Not Found";
        break;
    case 500:
        echo "Internal Server Error";
        break;
    default:
        echo "Unknown Status Code";
}

//Exercise C

echo "<h3>Exercise C— Rewrite using match (PHP 8)</h3>";


$status_code = 404;

$result = match ($status_code) {
    200 => "OK",
    301 => "Moved Permanently",
    400 => "Bad Request",
    401 => "Unauthorized",
    403 => "Forbidden",
    404 => "Not Found",
    500 => "Internal Server Error",
    default => "Unknown Status Code"
};

echo $result;


?>