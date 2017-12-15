<?php
require_once("config.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($GLOBALS['db'], $data);
    return $data;
  }
function addNews($title, $text, $link = null ){
    $title = test_input($title);
    $text = test_input($text); 
    $link = test_input($link);
    $sql = "CALL add_news('$title', '$text', '$link')";
    $result = mysqli_query($GLOBALS['db'], $sql); 
    if (!$result) {
        echo "Query fail: " . mysqli_error($GLOBALS['db']);
        return false;
    }
    return true;
}

function getAllNews() {
    $result = mysqli_query($GLOBALS['db'] , 'CALL get_all_news()') or die("Query fail: " . mysqli_error($GLOBALS['db'])); 
    return $result;
}

function getANews($id) {
    $result = mysqli_query($GLOBALS['db'] , "CALL get_a_news({$id})") or die("Query fail: " . mysqli_error($GLOBALS['db'])); 
    return $result;
}

function deleteNews($id) {
    mysqli_query($GLOBALS['db'], 'CALL delete_news($id') or die("Query fail: " . mysqli_error()); 
    return true;
}

?>