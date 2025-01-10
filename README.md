# PHP `empty()` Function Pitfall:  Unexpected NULL Handling

This repository demonstrates a common pitfall when using PHP's `empty()` function to check for NULL values.  The `empty()` function returns true for several values, not just NULL, leading to potential logic errors. The included examples show how this can cause problems and provide a solution.

## The Problem

The `empty()` function is convenient but has a broader definition of "emptiness" than simply NULL. This can lead to unexpected results if you rely on it to exclusively identify NULL values.  The `bug.php` file illustrates this behavior.

## The Solution

The best practice is to explicitly check for NULL using the strict equality operator (`===`). The `bugSolution.php` file demonstrates this corrected approach.

## How to Use

1. Clone this repository.
2. Run the `bug.php` file to see the unexpected output.
3. Run the `bugSolution.php` file to observe the correct and consistent output.
