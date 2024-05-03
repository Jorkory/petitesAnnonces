<?php

class Ad {
    public function __construct(
        private string $title = "",
        private string $description = "",
        private string $price = "",
        private string $image = "",
    ) {}

    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        throw new Exception("Propriété $name non définie.");
    }

    public function validateInputs() {
        $this->validateTitle();
        $this->validateDescription();
        $this->validatePrice();
    }

    private function validateTitle() {
        if (empty(trim($this->title))) {
            throw new Exception("Le titre ne peut pas être vide.");
        }
        $this->title = filter_var($this->title, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    private function validateDescription() {
        if (empty(trim($this->description))) {
            throw new Exception("La description ne peut pas être vide.");
        }
        $this->description = filter_var($this->description, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    private function validatePrice() {
        if ($this->price === null) {
            throw new Exception("Le prix ne peut pas être vide.");
        }
        if (!preg_match('/^\d+(\,\d{1,2})?$/', $this->price)) {
            $this->price = '';
            throw new Exception("Le prix doit être un nombre positif.");
        }
    }

    public function findAd($id) {
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