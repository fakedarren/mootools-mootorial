<?php
$dir = dirname(__FILE__);
require("$dir/url.class.php");
require("$dir/menuitem.class.php");
require("$dir/markdown.class.php");
require("$dir/content.class.php");

class Mootorial
{
	// Public properties
    public $menuitems;
    public $html;
    
    // Private properties
    private $sourcefolder = './Source';
    private $sourcefiles;
	
	// Constructor
	public function __construct(){
		$this->getSourceFiles();
		$this->getMenu();
		$this->getHTML();
	}
	
	// Public functions


	// Private functions
	function getSourceFiles(){
		$dir = opendir($this->sourcefolder);
		while($file = readdir($dir)){
			if (substr($file, 0, 1) != "."){
				$this->sourcefiles[] = $file;
			}
		}
		closedir($dir);
		sort($this->sourcefiles);
	}
	
	function getMenu(){
		foreach($this->sourcefiles as $filename){
			$this->menuitems[] = new MenuItem($filename);
		}
	}
	
	function getHTML(){
		$url = new URL();
		$content = new Content('./Source/' . $url->match);
		$this->html = $content->html;
	}
}
?>