<?php

class Ad {
    public string $title;
    public string $description;
    public string $image;
    public float $price;

    public function getAd($id) {
        require_once('src/libs/ads.php');
    
        foreach($ads as $ad) {
            if($id == $ad['id']) {
                foreach ($ad as $key => $value) {
                    if (property_exists($this, $key)) {
                        $this->{$key} = $value;
                    }
                }
                return;
            }
        }
        throw new Exception("L'annonce avec l'identifiant $id n'existe pas !");
    }
}