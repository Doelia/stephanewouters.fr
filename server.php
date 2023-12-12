<?php

if ($_SERVER["REQUEST_URI"] === '/') {
    require('pages/index.php');
    return true;
}
if ($_SERVER["REQUEST_URI"] === '/projects.html') {
    require('pages/projects.php');
    return true;
}

return false;
