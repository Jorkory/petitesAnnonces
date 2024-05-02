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

function editAd() {
    require_once('templates/ad/edit.php');
}

function createAd($post) {
    $ad = new Ad($post['title'], $post['description'], $post['price']);

    require_once('src/libs/ads.php');
    $ads[] = ['title' => $ad->title, 'descripion' => $ad->description, 'image' => $ad->image, 'price' => $ad->price];
    require('templates/homepage.php');
}
