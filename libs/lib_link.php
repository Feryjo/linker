<?php
function Short_Link($link)
{
    $code = create_link_code();
    $short = BASE_URL."seelink.php?c=".$code;
    global $pdo;
    $sql = "INSERT INTO `link` (`id`, `link`, `url_link`, `code`) VALUES (NULL, '$link', '$short', '$code');";
    $stmt = $pdo->prepare($sql);
    if($stmt->execute())
    {
        return $short;
    }
    
}

function Get_Link($code)
{
    global $pdo;
    $sql = "SELECT * FROM `link` WHERE `code` = '$code'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($record as $records) {
        return $records->link;
    }
    
}


?>