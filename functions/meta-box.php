<?php

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes(){

    require_once 'meta-box/farve.php';
    require_once 'meta-box/kalender.php';
    require_once 'meta-box/show_on_front.php';
    require_once 'meta-box/forside.php';
    
if($mb){
    return $mb;
    }
}
?>
