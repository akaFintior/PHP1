<?php
function getGalleryImages($path) {
    return array_slice(scandir($path), 2);
}