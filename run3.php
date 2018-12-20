<?php

function getout($a){
    if($a > 0)
        echo $a."为正数";
    else
        echo $a."为负数";
}

getout(0);