<?php

$flash = getFlashMessage();

if ($flash) {
    echo "<div class=\"alert alert-{$flash['type']}\" role=\"alert\">";
    echo $flash['message'];
    echo "</div>";
}
