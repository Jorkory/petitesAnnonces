<?php

require_once('src/controllers/homepage.php');
require_once('src/controllers/ad.php');

if(isset($_GET['action'])) {
    if($_GET['action'] === "edit") editAd($_POST);
    if($_GET['action'] === "create") createAd($_POST);
}
elseif (isset($_GET['id'])) {
    getAd($_GET['id']);
} else {
    homepage();
}