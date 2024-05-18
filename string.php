<?php 

$vowel = "aeiou";
$arr = str_split($vowel);
$arraystr = ['hello','world',"PHP","Programming"];
function CountVowel($w,$org){
    // $matchvowel= preg_match_all('/[aeiou]/',$w,$v)."vowel \n";
    // $reversword = (strrev($w));

   // return [$matchvowel,$reversword,$org];
   print_r("Original String : ".$org.","." Vowel Count:". preg_match_all('/[aeiou]/',$w,$v)." Reversed String: 
   ".strrev($w)." \n") ;

}

//$narr = array_filter($arraystr,'CountVowel');
$val = array_map('CountVowel',$arraystr,$arraystr);


?>