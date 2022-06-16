<?php
include "bootstrap/init.php";
if (isset($_GET["link"])) {
    header("location:getlink.php?l=".$_POST["link"]);
}
include "view/v-index.php";

?>