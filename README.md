# PHP Unset() in Foreach Loop Bug

This repository demonstrates a subtle but important bug in PHP related to the use of the `unset()` function within a `foreach` loop that iterates over an array.  Modifying the array during iteration using `unset()` can lead to unexpected behavior, skipping elements that should be processed.

The `bug.php` file contains the problematic code, and `bugSolution.php` demonstrates a corrected approach.

## Bug Explanation

When `unset()` is used to remove an element from an array within a `foreach` loop, the loop's internal pointer may not adjust correctly. This means that subsequent iterations may skip elements or process elements out of order.

## Solution

The best solution is to avoid modifying the array directly within the loop.  Instead, consider creating a new array containing only the desired elements or using a `for` loop that iterates over the array indices.