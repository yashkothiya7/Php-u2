<?php

    $ckname="Visited";
    $cvalue="Parth";

    setcookie($ckname,$cvalue,time()+3600);

    if(isset($_COOKIE[$ckname]))
        {
            echo "welcome $_COOKIE[$ckname]";
        }
        else {
            echo "Welcome Fisrt time vist!";
        }
?>