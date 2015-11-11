<?php

function connectDb() {
    try {
        return new PDO(DSN, DB_USER, DB_PASSWORD);
    } catch (PDOException $s){
        echo $e->getMessage();
        exit;
    }
}
function h($s){
    return htmlspecialchars($s, ENT_QUOTES, "utf-8");
}


?>