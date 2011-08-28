$$('h4').addEvent('click', function(){
	this.getAllAdjacentSiblings('h4, textarea, DIV').removeClass('current');
	this.addClass('current');
	this.getNext('DIV').addClass('current');
});
$$('h4.current').fireEvent('click');