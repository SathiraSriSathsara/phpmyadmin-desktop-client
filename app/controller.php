<?php
$con = new PDO('sqlite:../db/database.db');

require_once  './logics.php';

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }
    exit();
}

if(isset($_POST["l-connect"])){
    $url = getLocalUrl();
    Redirect($url,false);
}

if(isset($_POST["local-url"])){
    $url = $_POST["local-url"];
    setLocalUrl($url);
    Redirect($url,false);
}

if(isset($_POST["session_name"])){
    $name = $_POST["session_name"];
    $url = getSessionUrl($name);
    Redirect($url,false);
}

if(isset($_POST["s-name"]) && isset($_POST["s-url"])){
    $name = $_POST["s-name"];
    $url = $_POST["s-url"];
    if(isset($_POST["q-connect"])){
        Redirect($url,false);
    }elseif(isset($_POST["q-connect-and-save"])){
        setSession($name,$url);
        Redirect($url,false);
    }
}
?>
