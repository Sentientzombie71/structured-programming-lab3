<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 4: Nested Conditions — Loan Eligibility Checker [6 marks]
 *
 * IMPORTANT: You must complete pseudocode AND flowchart in your PDF
 * report BEFORE writing any code below.
 *
 * @author     [Collins Njoroge Muchiri]
 * @student    [ENE212-0059/2023]
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       [Date complete 02/04/2026]
 */

// ── Problem: Student Loan Eligibility System ───────────────────────────────
//
// A student applies for a HELB loan. Eligibility rules (nested):
//
// OUTER CHECK — Is the student enrolled?
//   $enrolled = true/false
//   If NOT enrolled → "Not eligible — must be an active student"
//
// INNER CHECK 1 — GPA requirement (if enrolled)
//   $gpa (float, 0.0–4.0)
//   GPA >= 2.0 → proceed to inner check 2
//   GPA < 2.0  → "Not eligible — GPA below minimum (2.0)"
//
// INNER CHECK 2 — Household income bracket (if enrolled AND GPA >= 2.0)
//   $annual_income (KES)
//   < 100000   → "Eligible — Full loan award"
//   < 250000   → "Eligible — Partial loan (75%)"
//   < 500000   → "Eligible — Partial loan (50%)"
//   >= 500000  → "Not eligible — household income exceeds threshold"
//
// ADDITIONAL RULE — Ternary for renewal vs new application:
//   $previous_loan = true/false
//   If eligible: use ternary to append "| Renewal application" or "| New application"

// ── Test data (change to test all branches) ───────────────────────────────
$enrolled       = true;
$gpa            = 3.1;
$annual_income  = 180000;
$previous_loan  = false;

// ── STEP 1: Outer enrollment check ────────────────────────────────────────
// TODO: nested if structure implementing all rules above


// ── STEP 2: Display result ────────────────────────────────────────────────
// TODO: output formatted result showing all input values and the decision


// ── Required Test Data Sets — screenshot each ─────────────────────────────
// Set A: enrolled=true,  gpa=3.1, income=180000,  previous=false → Partial 75%
// Set B: enrolled=true,  gpa=1.8, income=80000,   previous=false → GPA fail
// Set C: enrolled=false, gpa=3.5, income=60000,   previous=true  → Not enrolled
// Set D: enrolled=true,  gpa=2.5, income=600000,  previous=true  → Income fail
// Set E: enrolled=true,  gpa=2.0, income=50000,   previous=true  → Full | Renewal


function checkEligibility($enrolled, $gpa, $annual_income, $previous_loan) {

    if ($enrolled == false) {
        return "Not enrolled";
    }

    if ($gpa < 2.0) {
        return "GPA fail";
    }

    if ($annual_income >= 500000) {
        return "Income fail";
    }

    // Loan category
    if ($annual_income < 100000) {
        $loan = "Full";
    } elseif ($annual_income < 250000) {
        $loan = "Partial 75%";
    } else {
        $loan = "Partial 50%";
    }

    // Ternary for application type
    $type = $previous_loan ? "Renewal" : "New";

    return "$loan | $type";
}

//  TEST DATA SETS

echo "Set A: " . checkEligibility(true, 3.1, 180000, false) . "<br>";
echo "Set B: " . checkEligibility(true, 1.8, 80000, false) . "<br>";
echo "Set C: " . checkEligibility(false, 3.5, 60000, true) . "<br>";
echo "Set D: " . checkEligibility(true, 2.5, 600000, true) . "<br>";
echo "Set E: " . checkEligibility(true, 2.0, 50000, true) . "<br>";

?>