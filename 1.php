<?php

setcookie("Message","Welcome",time()+3600,"/");

if(isset($_COOKIE['Message'])){
    echo $_COOKIE["Message"];
}
else {
    echo "Cookie Not found!";
}
?>