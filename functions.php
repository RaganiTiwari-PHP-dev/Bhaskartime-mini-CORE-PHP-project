<?php 

/**
 * @title :functions.php
 * @description : this is main file where all the ready made functions will be declared.
 * 
 */
#getBaseURL : it will REturn the base_url and will given the new URL.
if(!function_exists('getBaseURL')){
    function getBaseURL($url=''){
        if(empty($url)){
            return BASE_URL;
        }
        else{
            return BASE_URL.$url;
        }

    }
}



?>