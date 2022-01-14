<?php

/**
 * Project rooting file
 */

// If we have an ajax request we run the ajax page
if (isset($_GET['ajax'])){

    include ("ajax.php");

// if not we show the home page
}else{

    include("home.php");
}

?>