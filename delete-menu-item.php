<?php
include "database.php";
    $db = new database();

if (isset($_GET['ID'])) {

    $id = $_GET['ID'];
        $sql = "DELETE FROM menu_items WHERE ID=:ID";
            $placeholder = [
                'ID'=> $id
            ];
                $db->delete($sql, $placeholder, "nieuw-menu-item.php");
}
?>