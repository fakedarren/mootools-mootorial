<?php
class MenuItem
{
	public $name;
	public $url;
	public $children = array();
	public $isSelected = false;
	
	public function __construct($folder){
		$this->name = trim(str_replace(".md", "", substr($folder, 3)));
		$this->url = strtolower(str_replace(" ", "-", $this->name));
		$this->children = $this->getChildren($folder);
		$this->checkIfCurrentURL();
	}
	
	function getChildren($folder){
		$dir = opendir('./Source/' . $folder);
		while($file = readdir($dir)){
			if (substr($file, 0, 1) != '.'){
				$children[] = $file;
			}
		}
		closedir($dir);
		sort($children);		
		return $children;
	}
	
	function checkIfCurrentURL(){
	}
}
?>