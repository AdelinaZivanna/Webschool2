<?php
    function get_feature_by_id($id, $column) {
        global $db;
        $db->where ("id", $id);
        $get = $db->getOne ("`fitur`");
        return $get[$column];
    }
?>
