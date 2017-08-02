<?php

/**
 * A more advance version of the fuzzbuz solution
 */
function fizzbuzz($iterations, $rules) {
    for($i = 1; $i <= $iterations; $i++) {
        $array = [$i];

        foreach($rules as $diviser => $word) {
            if ($i % $diviser == 0) $array[] = $word;
        }
        if (count($array) > 1) array_shift($array);

        echo sprintf("%s <br>", implode(" ", $array));
    }
}


fizzbuzz(100, [
    3 => "fizz",
    5 => "buzz",
]);