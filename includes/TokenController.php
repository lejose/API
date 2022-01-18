<?php

class TokenController{
	
	
	public function init():boolean {

        if (!empty($_GET)) {

            if (isset($_GET['token']) && $_GET['token'] == '5678') {

				return true;
               
            } else {
				return false;
             
            }
        }

    }
	
    
}