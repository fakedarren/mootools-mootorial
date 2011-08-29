<?
class Content
{
	public $html;
	public $children;
	
	private $folder;
	
	public function __construct($folder){
		
		$this->folder = $folder;
		$this->html = $this->getHTML();
		$this->getChildren();
	}
	
	function getFiles(){
		$dir = opendir($this->folder);
		while($file = readdir($dir)){
			if (substr($file, 0, 1) != '.'){
				$files[] = $file;
			}
		}
		closedir($dir);
		sort($files);
		return $files;
	}
	
	function getChildren(){
		foreach($this->getFiles() as $file){
			$this->children[] = $file;
		}
	}
	
	function getHTML(){
		$html = '';
		foreach($this->getFiles() as $file){
			$html .= Markdown(file_get_contents($this->folder . '/' . $file));
		}
		
		function replacer($matches){
			$id = strtolower(str_replace(" ", "-", $matches[1]));
			return '<h2 id="' . $id . '">' . $matches[1] . '</h2>';
		}
		$html = preg_replace_callback('{<h2>([\s\S]*?)<\/h2>}', "replacer", $html);
		
		return $html; 
	}

}
?>