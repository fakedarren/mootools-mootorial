$$('textarea').each(function(textarea){
	var mode = "";
	switch (true){
		case textarea.get('class').contains('js'):
			mode = "javascript";
			break;
		case textarea.get('class').contains('html'):
			mode = "htmlmixed";
			break;
		case textarea.get('class').contains('css'):
			mode = "css";
			break;
	}
	CodeMirror.fromTextArea(textarea, {
		mode: mode,
		lineNumbers: true
	});
});