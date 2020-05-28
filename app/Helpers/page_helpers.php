<?php 
 
 if(!function_exists('page_title'))
 {
        function page_title($title){
            $txt = "Laracarte-List of Artisans";
            if($title == ""){
                return $txt;
            }else{
                return $title." | ".$txt;
            }
        }
 }