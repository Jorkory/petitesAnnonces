<?php
require_once(__DIR__ . '/../model/ad.php');

function getAd($id) {
    try {
        $ad = new Ad();
        $ad->getAd($id);

        require_once('templates/ad/ad.php');
    } catch(Exception $e) {
        require_once('templates/error404/error404.php');
    }
}
