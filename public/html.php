<?php

    $html = '<a href="">Acesse</a>';

    var_dump(htmlentities($html)); // redefine a url omo texto string
    echo "<br/><br/>";  
    echo htmlentities($html, ENT_NOQUOTES); // redefine a url string
    echo "<br/>"; 
    // echo $html;

    $db = "&lt;a href=&quot;&quot;&gt;Acesse&lt;/a&gt;";

    echo "<br/>";
    echo html_entity_decode($db); // recupera url