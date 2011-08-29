<?php
class URL
{
	
	public function __construct(){
		$url = explode("/", $_SERVER["REQUEST_URI"]);
		$path = $url[1];
		
		$dir = opendir('./Source/');
		while($folder = readdir($dir)){
			if (substr($folder, 0, 1) != '.'){
				$folders[] = $folder;
			}
		}
		closedir($dir);
		sort($folders);	
		
		$match = '';
		
		foreach ($folders as $folder){
			$name = substr($folder, 4);
			$item = strtolower(str_replace(" ", "-", $name));
			if ($item == $path) $match = $folder;
		}
			
		$this->match = $match;

	}
	
}