<?php
    $buah = array("Salak","Duku","Rambutan","Apel");

    foreach($buah as $nval){
        echo "buah",$nval,"<br>";
    }
    echo "<hr>";
    echo "<ol>";
    foreach($buah as $nval){
        echo "<li>",$nval,"<?li>";
    }
    echo "</ol>";