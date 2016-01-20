<?php

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes(){

    require_once 'meta-box/farve.php';
    require_once 'meta-box/kalender.php';
    require_once 'meta-box/forside.php';
    require_once 'meta-box/undertitel.php';
    require_once 'meta-box/personer.php';
    
if($mb){
    return $mb;
    }
}

// Helpers for subtitle
function has_post_subtitle($post = false){
    
    if(!$post){$post = get_the_ID();}
    
    if($post){
        return (bool) esc_attr(get_post_meta($post,'post_subtitle',true));
    }
}

function get_post_subtitle($post = false){
    
    if(!$post){$post = get_the_ID();}
    
    if($post){
        return esc_attr(get_post_meta($post,'post_subtitle',true));
    }
}

function the_post_subtitle($post = false){
    
    if(!$post){$post = get_the_ID();}
    
    if(has_post_subtitle($post)){
        echo get_post_subtitle($post);
    }
}