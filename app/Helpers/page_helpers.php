<?php 
 
 if(!function_exists('page_title'))
 {
        function page_title($title){
            $txt = Config('app.name')."-List of Artisans";
            if($title == ""){
                return $txt;
            }else{
                return $title." | ".$txt;
            }
        }
 }

 if(!function_exists('active_home'))
 {
     // permet de savoir si le lien est actif ou pas
     function active_home()
     {
         return Route::is('root_path')? "active": " ";
     }
 }

 if(!function_exists('active_about'))
 {
     // permet de savoir si le lien est actif ou pas
     function active_about()
     {
         return Route::is('about')? "active": " ";
     }
 }