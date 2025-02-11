# PHP Foreach Pass-by-Reference Issue

This repository demonstrates a subtle bug in PHP related to how foreach loops handle pass-by-reference.  Modifying a string element within a foreach loop that uses pass-by-reference alters the original array element unexpectedly.  The solution showcases how to avoid this issue.

## Bug Description

The `processData` function aims to convert all string elements in an array to lowercase.  However, due to pass-by-reference in the foreach loop, modifying `$value` directly changes the original array elements. 

## Solution

The solution utilizes the `strval()` to avoid pass-by-reference and create a local copy that gets modified.