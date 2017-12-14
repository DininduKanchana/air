<?php
require_once("config.php");

function addNews($title, $text, $link = null){
    $title = mysqli_real_escape_string($db, $title);
    $text = mysqli_real_escape_string($db,$text); 
    $link = mysqli_real_escape_string($db,$link);
    mysqli_query($GLOBALS['db'], 'CALL add_news($title, $text, $link)') or die("Query fail: " . mysqli_error()); 
    return true;
}

function getAllNews() {
    $result = mysqli_query($GLOBALS['db'] , 'CALL get_all_news()') or die("Query fail: " . mysqli_error()); 
    return $result;
}

?>