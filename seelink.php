<?php

include "bootstrap/init.php";
if (isset($_GET["c"])) {
    $code = $_GET["c"];
    $link = Get_Link($code);
  
}
include "view/v-olink.php";

?>