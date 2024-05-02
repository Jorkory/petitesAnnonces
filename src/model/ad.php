<?php

class Ad {

    public function __construct(
        public string $title = "",
        public string $description = "",
        public float $price = 0,
        public string $image = "",
    ) {}

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