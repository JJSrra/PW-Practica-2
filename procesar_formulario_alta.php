<?php

foreach($_POST as $key => $value) {
    echo $key." ";
    if (!empty($value)){
        echo $value." ";
    }
    else{
       echo "Campo no asignado ";
    }
}

?>