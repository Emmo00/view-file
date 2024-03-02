<?php

include 'inc/header.php';

include 'inc/get.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'inc/post.php';
}

include 'inc/footer.php';