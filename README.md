# PHP Reference Assignment Bug

This repository demonstrates a subtle bug in PHP related to object references and function parameters.  The code illustrates a scenario where reassigning an object within a function that receives it by reference doesn't modify the original object as one might expect.

## Bug Description

The issue stems from the misuse of pass-by-reference in PHP.  When a new object is assigned to a reference parameter within a function, the reference is broken.  This means that any modifications made to the object within the function do not propagate to the original object outside the function's scope.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`.  You will observe unexpected output.
3. Examine `bugSolution.php` for a corrected approach.

## Solution

The provided `bugSolution.php` shows a corrected implementation. Instead of re-assigning the reference variable, the solution modifies the object's properties directly, preserving the reference and achieving the intended modification of the original object.

This demonstrates a crucial aspect of PHP's reference handling that often leads to confusion and unexpected behavior.  Understanding this nuance is important for writing robust and correct PHP code.