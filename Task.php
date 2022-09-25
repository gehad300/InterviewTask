<?php


function get_Appearance($input, $input2)
{
    $counter = 0;
    for ($i = 0; $i < strlen($input); $i++) {
        for ($j = 0; $j < strlen($input2); $j++) {
            //   to compare substrings
            if (substr($input, 0, $i + 1) == substr($input2, $j, strlen(substr($input, 0, $i + 1)))) {
                //to compare the character after current substring
                if ((substr(substr($input, 0, $i + 2), -1))  !=  substr(substr($input2, $j, strlen(substr($input, 0, $i + 2))), -1)) {
                    $counter++;
                }
                if (substr($input, 0, $i + 1) == $input) {
                    $counter++;
                }
            }
        }
        //print at the last apperance of string and how many it appears without duplication
        echo substr($input, 0, $i + 1) . "  counter will be $counter" . "\n";
        $counter = 0;
    }
}
 get_Appearance("menna", "m9mememenna");
