<?php
        function textValidation($text){
                $text = trim($text);
                $text = stripslashes($text);
                $text = htmlspecialchars($text);
                $text = str_replace(' ','_',$text);
                return $text;
        }
?>
