<?php

// Remove height and width from Drupal images

function responsive_preprocess_image(&$variables){
    foreach(array('width','height') as $key){
        unset ($variables [$key]);
    }
}

?>