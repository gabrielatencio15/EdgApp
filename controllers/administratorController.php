<?php

class administratorController{


	function index(){
		if(isset($GLOBALS["Business_Name"]))
		{
			require_once('views/all/header.php');
			require_once('views/all/home.php');
			require_once('views/all/footer.php');
		}
		else
		{
			require_once('views/all/not-available.php');
		}

	}
    
}

