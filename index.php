<?php

require_once('src/controllers/homepage.php');
require_once('src/controllers/ad.php');

if (isset($_GET['id'])) {
    getAd($_GET['id']);
} else {
    homepage();
}