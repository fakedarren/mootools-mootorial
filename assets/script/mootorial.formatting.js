/*
$$('h2').each(function(heading){
	var content = new Element('div.content');
	var trapping = true;
	heading.getAllNext().each(function(sibling){
		if (sibling.get('tag').test(/h2|script/)){
			trapping = false;
		} else {
			sibling.inject(content);
		}
	});
	content.inject(heading, 'after');
});
*/
$$('h4').each(function(heading){
	var next = heading.getNext();
	if (heading.get('text') == 'Example'){
		var example = new Element('div.example');
		example.set('html', next.get('text'));
		example.replaces(next);
		heading.addClass('example');
	} else if (next.get('tag') == 'pre'){
		var classname = heading.get('text').toLowerCase();
		var textarea = new Element('textarea.' + classname);
		textarea.set('value', next.get('text'));
		textarea.replaces(next);
		heading.addClass(classname);
		if (classname == 'js'){
			heading.addClass('current');
			textarea.addClass('current');
			Browser.exec(textarea.get('value'));
		}
	}
});