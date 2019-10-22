<?php
function countChar($string, $x)  
{  
    $count = 0;  
    $n = 15; 
    for ($i = 0; $i < strlen($string); $i++)  
        if ($string[$i] == $x)  
            $count++;  
   
    $repeat = (int)($n / strlen($string));  
    $count = $count * $repeat;  
 
    for ($i = 0; $i < $n % strlen($string); $i++)  
    {  
        if ($string[$i] == $x)  
            $count++;  
    }  
  
    return $count;  
}  
$string = "abca";  
echo countChar($string, 'a');  
?> 