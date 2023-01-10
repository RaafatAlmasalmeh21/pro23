<?php
include "database.php";
    $db = new database();

if (isset($_GET['menu_item_id'])) {

    $id = $_GET['menu_item_id'];
        $sql = "DELETE FROM menu_items WHERE ID=:ID";
            $placeholder = [
                'ID'=> $id
            ];
                $db->delete($sql, $placeholder, "nieuw-drank.php");
}
?>