<?php

function getLocalUrl(){
    global $con;
    $query = "SELECT url FROM localhost WHERE id = 1";
    $stm = $con->prepare($query);
    $stm->execute();
    $data = $stm->fetchColumn();
    return $data;
}

function setLocalUrl($url){
    global $con;
    $con->exec("DELETE FROM localhost");
    $query = "INSERT INTO localhost (url) VALUES (:url)";
    $stm = $con->prepare($query);
    $stm->bindParam(':url', $url, PDO::PARAM_STR);
    $stm->execute();
}

function getSessionNames(){
    global $con;
    $query = "SELECT name FROM remoteSessions";
    $stm = $con->prepare($query);
    $stm->execute();
    $data = $stm->fetchAll(PDO::FETCH_COLUMN);
    return $data;
}

function getSessionUrl($name){
    global $con;
    $query = "SELECT url FROM remoteSessions WHERE name = :name";
    $stm = $con->prepare($query);
    $stm->bindParam(':name', $name, PDO::PARAM_STR);
    $stm->execute();
    $data = $stm->fetchColumn();
    return $data;
}
function setSession($name, $url){
    global $con;
    $query = "INSERT INTO remoteSessions (name, url) VALUES (:name, :url)";
    $stm = $con->prepare($query);
    $stm->bindParam(':name', $name, PDO::PARAM_STR);
    $stm->bindParam(':url', $url, PDO::PARAM_STR);
    $stm->execute();
}

?>