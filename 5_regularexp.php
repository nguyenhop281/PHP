<?php
    $name = "FPT Aptech";
    //dang dang dung la POSIX
   $result = mb_ereg("^F\w+\s\w+$" , $name);
    echo "<br>result is $result";
    
   $result2 = mb_eregi("^f\w+\s\w+$" , $name);
   echo "<br>result2 is $result2";

   $email = "fptatech1999@gmail.com";

   $result3 = mb_ereg_replace("\d+" , "2025", $email);
    echo "<br>result3 is $result3";

    //split : cat chuoi thanh mang
    $newArr = mb_split("\s", $name);
    echo "<br> newArr is :";
    print_r($newArr);
    
    //PERL
    $result = preg_match("/^F\w+\s\w+$/" , $name);// tuong tu nhu mb_ereg
    echo "<br>result is $result";

    $result2 = preg_match("/^f\w+\s\w+$/i" , $name);//== voi mb_eregi
    echo "<br>result2 is $result2";

    $result3 = preg_replace("/\d+/" , "2025", $email);//== voi mb_ereg_replace
    echo "<br>result3 is $result3";

    $newArr = preg_split("/\s/", $name);//== voi mb_split 
    echo "<br> newArr is :";
    print_r($newArr);

?>