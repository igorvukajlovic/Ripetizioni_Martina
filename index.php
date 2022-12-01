<?php 
    $files = array_filter(scandir("."), function ($file) {
        return str_ends_with($file, ".php") && ($file != "index.php");
    });

    foreach ($files as $filename) 
    {
        echo "<a href=$filename>$filename</a><br />";
    }

?>