<?php
require("smarty/Smarty.class.php");

class SmartyProject extends  Smarty{		
	function SmartyProject(){			
		$this->template_dir = "./";		
		$this->compile_dir = "./system/templates_c/";	
		$this->config_dir = "./system/configs/";		
		$this->cache_dir = "./system/cache/"; 			
    }

} 

?>