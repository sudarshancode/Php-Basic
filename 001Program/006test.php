<?php 

    $name="Sudarshan Chakraborty";

    $length=strlen($name);

    $wordNumber=str_word_count($name);

    $reverseName=strrev($name);

    $strpos=strpos($name,"World");
    $newName=str_replace("Chakraborty","King",$name);
    echo "String :$name <br/>Length: $length </br>Word number: $wordNumber";
    echo "</br> Reverse Name: $reverseName <br/> $newName ";

?>