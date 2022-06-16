<?php
include "bootstrap/init.php";

if (isset($_GET["l"])) {
    $link1 = $_GET["l"];
    $link = Short_Link($link1);
 
}
include "view/v-glink.php";

?>