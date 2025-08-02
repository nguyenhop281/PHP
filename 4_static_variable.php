<?php
    function myFunction()
    {
        //khai bao static -> bien static no giu nguyen gia tri den cuoi 
        //chuong trinh va cong het
        static $staticVar = 10;
        //khai bao bien thuong-> bien thuong nos ko cong gia tri nhu static
        $normaVar = 10;

        $staticVar++;
        $normaVar++;

        echo "<br> staticVar is " . $staticVar;
        echo "<br> normaVar is " . $normaVar;
    }

    //goi ham
    myFunction();
    myFunction();
    myFunction();
?>