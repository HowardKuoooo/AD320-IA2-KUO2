<?php

if(isset($_GET["name"])){
    echo"Hello" .$_GET["name"];
} else{
    echo"Missing name!!";
}
if(isset($_GET["phone"])){
    echo"Number:" .$_GET["phone"];
} else {
    echo"Missing phone number!!";
}


if (!empty($_GET["email"])){
    echo"E-mail: " .$_GET["email"];
}

if (!empty($_GET["state"])){
    echo"State: " $_GET["state"];
}  

?>