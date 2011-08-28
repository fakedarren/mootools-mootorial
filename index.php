<?php
require('./Runner/mootorial.class.php');
$mootorial = new Mootorial('./Source');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>The Mootorial</title>
	
	<link href="assets/css/main.css" rel="stylesheet"/>
	<link href="assets/codemirror/lib/codemirror.css" rel="stylesheet"/>
	<link href="assets/codemirror/theme/default.css" rel="stylesheet"/>
	
	<script src="assets/script/mootools.core.js" defer></script>
	
	<script src="assets/script/mootorial.element.js" defer></script>
	<script src="assets/script/mootorial.formatting.js" defer></script>
	
	<script src="assets/codemirror/lib/codemirror.js" defer></script>
	<script src="assets/codemirror/mode/javascript/javascript.js" defer></script>
	<script src="assets/codemirror/mode/css/css.js" defer></script>
	<script src="assets/codemirror/mode/xml/xml.js" defer></script>
	<script src="assets/codemirror/mode/htmlmixed/htmlmixed.js" defer></script>
	
	<script src="assets/script/mootorial.codemirror.js" defer></script>
	<script src="assets/script/mootorial.tabs.js" defer></script>

</head>
<body>
	<div class="container">
		<nav role="menu">
			<ul>
			<?php foreach($mootorial->menuitems as $menuitem){?>
				<li>
					<a href="/<?=$menuitem->url?>"><?=$menuitem->name?></a>
					<ul>
					<?php
					foreach($menuitem->children as $childitem){
						if (strpos($childitem, '00.') === false){
							$name = trim(str_replace(".md", "", substr($childitem, 3)));
							$anchor = strtolower(str_replace(" ", "-", $name));		
							?>
							<li><a href="/<?=$menuitem->url?>#<?=$anchor?>"><?=$name?></a></li>
							<?php
						}
					}
					?>
					</ul>
				</li>
			<?php }?>
			</ul>
		</nav>
		<div class="main">
			<?=$mootorial->html?>
		</div>
	</div>
</body>
</html>