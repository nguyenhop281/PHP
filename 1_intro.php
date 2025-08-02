<?php

    //khai bao bien 
    $name = "FPT Aptech";
    $age = 26;

    //goi gia tri cac bien ra man hinh
    echo "Ten toi la Van HOP: " .$name ;
    print "<br>Tuoi cua toi la: " .$age;

    echo "<br> Ten tuoi la $name";//neu bo vao trong thi '' la chuoi ,"" la bien
    echo '<br> Tuoi toi la $age';

    //khai bao hang so
    define("MY_NAME", "FPT");
    const myname = "FPT";

    echo "<br>Ten ban la: " .MY_NAME;

    echo "<br>Ban dang o line so" .__LINE__;

    echo "<br>Ban dang o file so" .__FILE__;


?>