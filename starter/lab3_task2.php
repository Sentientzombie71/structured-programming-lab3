<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 2: JKUAT Grade Classification System [8 marks]
 *
 * IMPORTANT: You must complete pseudocode AND flowchart in your PDF
 * report BEFORE writing any code below. Marks are awarded for all
 * three components: pseudocode, flowchart, and working code.
 *
 * @author     [Collins Njoroge Muchiri]
 * @student    [ENE212-0059/2023]
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       [Date complete 02/04/2026]
 */

// ── Test Data Set A (change values to run other test sets) ─────────────────

// ── Grade Rules (implement using if-elseif-else, ordered highest first) ────
// A  (Distinction):    Total >= 70
// B+ (Credit Upper):   Total >= 65
// B  (Credit Lower):   Total >= 60
// C+ (Pass Upper):     Total >= 55
// C  (Pass Lower):     Total >= 50
// D  (Marginal Pass):  Total >= 40
// E  (Fail):           Total <  40

// ── Eligibility Rule (implement using nested if) ───────────────────────────
// Must have attended at least 3 of 4 CATs (CAT score > 0 counts as attended)
// AND exam score >= 20
// Otherwise: "DISQUALIFIED — Exam conditions not met"

// ── Supplementary Rule (implement using ternary) ──────────────────────────
// If grade is D: "Eligible for Supplementary Exam"
// Otherwise:     "Not eligible for supplementary"

// ── STEP 1: Compute total ─────────────────────────────────────────────────
// TODO: compute $total


// ── STEP 2: Count CATs attended ───────────────────────────────────────────
// TODO: compute $cats_attended (each CAT > 0 counts as attended)


// ── STEP 3: Eligibility check (nested if) ─────────────────────────────────
// TODO: nested if — eligibility → grade classification → supplementary ternary


// ── STEP 4: Display formatted HTML report card ────────────────────────────
// TODO: output a clear, formatted report card showing:
//       student name, each CAT score, exam score, total,
//       cats attended, eligibility status, grade, remark, supplementary status


// ── Required Test Data Sets — screenshot each ─────────────────────────────
// Set A: cat1=8, cat2=7, cat3=9, cat4=6,  exam=52  → expect grade B
// Set B: cat1=9, cat2=8, cat3=0, cat4=9,  exam=55  → expect grade A (check cats_attended)
// Set C: cat1=0, cat2=0, cat3=7, cat4=0,  exam=48  → expect DISQUALIFIED
// Set D: cat1=5, cat2=4, cat3=6, cat4=3,  exam=22  → expect grade D + supp eligible
// Set E: cat1=0, cat2=0, cat3=0, cat4=0,  exam=15  → expect DISQUALIFIED

// Grade Classification System

echo "<h2>Grade Classification System</h2>";

// DATASET A
echo "<h3>Student A</h3>";
$cat1 = 8; $cat2 = 7; $cat3 = 9; $cat4 = 6;
$exam = 52;
processStudent($cat1, $cat2, $cat3, $cat4, $exam);

// DATASET B
echo "<h3>Student B</h3>";
$cat1 = 9; $cat2 = 8; $cat3 = 0; $cat4 = 9;
$exam = 55;
processStudent($cat1, $cat2, $cat3, $cat4, $exam);

// DATASET C
echo "<h3>Student C</h3>";
$cat1 = 0; $cat2 = 0; $cat3 = 7; $cat4 = 0;
$exam = 48;
processStudent($cat1, $cat2, $cat3, $cat4, $exam);

// DATASET D
echo "<h3>Student D</h3>";
$cat1 = 5; $cat2 = 4; $cat3 = 6; $cat4 = 3;
$exam = 22;
processStudent($cat1, $cat2, $cat3, $cat4, $exam);

// DATASET E
echo "<h3>Student E</h3>";
$cat1 = 0; $cat2 = 0; $cat3 = 0; $cat4 = 0;
$exam = 15;
processStudent($cat1, $cat2, $cat3, $cat4, $exam);

function processStudent($cat1, $cat2, $cat3, $cat4, $exam) {
    
    // Display input values
   echo "CAT Scores: CAT 1; $cat1, CAT 2; $cat2, CAT 3; $cat3, CAT 4; $cat4<br>";
    echo "Exam Score: $exam<br>";
    
    
    // STEP 1: CALCULATE TOTAL MARKS
    $totalCATs = $cat1 + $cat2 + $cat3 + $cat4;
    $total = $totalCATs + $exam;
    echo "Total CATs: $totalCATs<br>";
    echo "Total Score: $total<br>";
    
    // STEP 2: VALIDATE CAT SCORES (Count attended CATs where score > 0)
    $attendedCount = 0;
    if ($cat1 > 0) $attendedCount++;
    if ($cat2 > 0) $attendedCount++;
    if ($cat3 > 0) $attendedCount++;
    if ($cat4 > 0) $attendedCount++;
    echo "Attended CATs: $attendedCount<br>";
    
    // STEP 3: CHECK ELIGIBILITY (ARE ATTENDED CATS ≥ 3 AND EXAM SCORE ≥ 20?)
    if ($attendedCount >= 3 && $exam >= 20) {
        
        // STEP 4: GRADING LADDER (if-elseif-else, highest first)
        if ($total >= 70) {
            $grade = "A";
            $description = "DISTINCTION";
        } elseif ($total >= 65) {
            $grade = "B+";
            $description = "CREDIT UPPER";
        } elseif ($total >= 60) {
            $grade = "B";
            $description = "CREDIT LOWER";
        } elseif ($total >= 55) {
            $grade = "C+";
            $description = "PASS UPPER";
        } elseif ($total >= 50) {
            $grade = "C";
            $description = "PASS LOWER";
        } elseif ($total >= 40) {
            $grade = "D";
            $description = "MARGINAL PASS";
        } else {
            $grade = "E";
            $description = "FAIL";
        }
        
        // STEP 5: SUPPLEMENTARY CHECK (Ternary operator)
        $supplementary = ($grade == "D") ? "ELIGIBLE FOR SUPPLEMENTARY EXAM" : "NOT ELIGIBLE FOR SUPPLEMENTARY";
        
        // STEP 6: OUTPUT TOTAL, GRADE, AND DESCRIPTION
        echo "<strong>Status: ELIGIBLE</strong><br>";
        echo "<strong>Grade: $grade - $description</strong><br>";
        echo "<strong>Supplementary: $supplementary</strong><br>";
        
    } else {
        // DISPLAY DISQUALIFIED
        echo "<strong>DISQUALIFIED — EXAM CONDITIONS NOT MET</strong><br>";
        
        // Show reason for disqualification
        echo "Reason: ";
        if ($attendedCount < 3 && $exam < 20) {
            echo "Attended only $attendedCount CAT(s) AND Exam score $exam is below 20";
        } elseif ($attendedCount < 3) {
            echo "Attended only $attendedCount CAT(s) (need at least 3)";
        } elseif ($exam < 20) {
            echo "Exam score $exam is below 20";
        }
        echo "<br>";
    }
    
    echo "<hr>";
}
?>