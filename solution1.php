<?php
/** 
 * Simple FizzBuzz challenge
 */
function fizzbuzz($iterations) {
    for($i = 1; $i <= $iterations; $i++) {
        $result = [$i];
        if ($i % 3 == 0) {
            $result[] = "fizz";
        }
        if ($i % 5 == 0) {
            $result[] = "buzz";
        }
        if (count($result) > 1) {
            array_shift($result);
        }
        echo sprintf("%s <br>", implode(" ", $result));
    }
}

fizzbuzz(100);